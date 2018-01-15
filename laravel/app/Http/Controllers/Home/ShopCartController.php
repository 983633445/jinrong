<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redis; //使用redis类
use Illuminate\Support\Facades\Cookie; // 使用cookie类
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

/**
* 购物车控制器
*/
class ShopCartController extends Controller
{

	// 展示购物车列表
	public function shopCartList(Request $request)
	{
		$userId = 5;
		$cookieGoodsInfo = $request->cookie('shopCart');

		if (empty($userId)) 
		{
			if (isset($cookieGoodsInfo)) 
			{
			// 如果有cookie，则展示cookie中的内容
				foreach ($cookieGoodsInfo as $k=>$v) 
				{
					$cookieGoodsInfos[$k] = json_decode($v,1);
		        }
		        $goodsInfo = $this->cartList($cookieGoodsInfos);
		        return view('home.shoppingCart',['goodsInfo'=>$goodsInfo]);
			}
			else
			{ //如果没有cookie，则提示用户购物车为空
				return view('home.shoppingCart');
			}
		}
		else
		{
			// 如果登录，先查询cookie中的购物车数据，将它保存到redis中
			if (isset($cookieGoodsInfo)) 
			{
				foreach ($cookieGoodsInfo as $k=>$v) 
				{
					$cookieGoodsInfos[$k] = json_decode($v,1);
		        }
		        foreach ($cookieGoodsInfos as $key => $value) 
		        {
		        	$productId = $value['productId'];
		        	$goodsId = $value['goodsId'];
		        	$goodsNum = $value['goodsNum'];
		        	$this->addRedis($userId,$productId,$goodsId,$goodsNum);
		        	Cookie::queue(\Cookie::forget("shopCart[$productId]"));
		        }
			}
			
			$key = 'cart:ids:set:';

			$GoodsIdArr =  Redis::sMembers($key);

			if (!empty($GoodsIdArr)) 
			{
				for ($i=0; $i<count($GoodsIdArr); $i++) 
				{

		            $k  = 'cart:'.$userId.':'.$GoodsIdArr[$i];//id 

		            $list[] = Redis::hGetAll($k);
		        }

		        $goodsInfo = $this->cartList($list);

		        return view('home.shoppingCart',['goodsInfo'=>$goodsInfo]);
			}
			else
			{
				return view('home.shoppingCart');
			}

			
		}
	}

	// 添加购物车数据
	public function addShopCart(Request $request)
	{
		$userId = "";

		$productId = $request->input('productId');

		$goodsId = $request->input('goodsId');

		$goodsNum = $request->input('goodsNum');


		if(empty($userId))
		{// 如果没有登录
			$shopInfo = [
				'goodsId' => $goodsId,
				'productId' => $productId,
				'goodsNum' => $goodsNum,
			];
			return response("加入购物车成功")->cookie("shopCart[$productId]",json_encode($shopInfo),30);
			echo json_encode(array('error'=>0));
		}
		else
		{//如果登录
			$this->addRedis($userId,$productId,$goodsId,$goodsNum);
			echo json_encode(array('error'=>0));
		}
	}

	/**
	 * 封装展示商品列表
	*/
	public function cartList($data,$productId=array(),$goodsId=array(),$payNum=array())
	{


        if(!empty($data)){

                // 从数组中单独取出货品的Id
                $productId = array_column($data,'productId');
                // 从数组中单独取出商品的Id
                $goodsId = array_column($data,'goodsId');


                // 从数组中单独取出需要购买的商品数量
                $payNum = array();
                foreach($data as $k=>$v){
                    $payNum[$v['goodsId']] = $v['goodsNum'];
                }
        }


        $productArr = json_decode(DB::table("product")->whereIn('productId',$productId)->get(),true);  //货品表记录

        $data = array();
        foreach($productArr as $key => $val){
            $ids = explode(',',$val['attrList']);
            $data[] = json_decode(DB::table('goodsattr')
                ->whereIn('goodsAttrId', $ids)
                ->join('attribute', 'goodsattr.attrId', '=', 'attribute.attr_id')
                ->get(),true);
        }

        $arrs = array();
        foreach($data as $key=>$value){
            foreach($value as $k =>$val){
                $arrs[$key][$val['attr_id']]['attr_index']=$val['attr_index'];
                $arrs[$key][$val['attr_id']]['attr_name']=$val['attr_name'];
                $arrs[$key][$val['attr_id']]['attr_value']=$val['attrValue'];
                $arrs[$key][$val['attr_id']]['goodsId']=$val['goodsId'];
            }
        }
        $newArrs=array();
        foreach($arrs as $key => $val){
            $ke = array_keys($arrs[$key]);
            $newArrs[$val[$ke[0]]['goodsId']]=$val;
        }

        $goodsInfo = json_decode(DB::table("goods")
            ->whereIn('goods.goodsId',$goodsId)
            ->join('product', 'goods.goodsId', '=', 'product.goodsId')
            ->get(),true);  //货品表记录

        $newArr = array();
        foreach($goodsInfo as $key => $val){
              $newArr[$val['goodsId']] = $val;
        }

        foreach ($newArr as $k => $v)
        {
            $keys = array_keys($newArrs[$k]);

            $len = count($keys);

            for($i=0;$i<$len;$i++){
                $newArr[$k]['attr_name'.$i] = $newArrs[$k][$keys[$i]]['attr_name'];
                $newArr[$k]['attr_value'.$i] = $newArrs[$k][$keys[$i]]['attr_value'];
                $newArr[$k]['payNum'] = $payNum[$k];
           }

        }
        //如果库存为0  干掉！
        foreach($newArr as $key =>&$val){
            if($val['sku']==0){
                unset($newArr[$key]);
            }
        }

        return $newArr;
//            $goodsInfo[$k] = $v;
//
//        	$goodsInfo[$k]->goodsNum = $goodsNum[$k];


	}

	// 封装加入redis
	public function addRedis($userId,$productId,$goodsId,$goodsNum)
	{
		$key = 'cart:'.$userId.':'.$productId;

    	$data = Redis::exists($key);

    	if (!$data) 
    	{// 如果redis中没有还数据则直接加入
    		$goodData = ['userId'=>$userId,'productId'=>$productId,'goodsId'=>$goodsId,'goodsNum'=>$goodsNum];

    		Redis::hmset($key, $goodData);

    		$key1 = 'cart:ids:set:';

        	//将商品ID存放集合中,是为了更好将用户的购物车的商品给遍历出来
        	Redis::sadd($key1, $productId);
    	}
    	else
    	{// 如果redis中有该数据，则改变其数量
    		$originNum = Redis::hget($key, 'goodsNum');

    		$newNum = $originNum+$goodsNum;

    		Redis::hset($key, 'goodsNum', $newNum);
    	}
	}

	/**
	 * 删除购物车
	*/
	public function deleteShopCart(Request $request)
	{
		$userId = 5;

		$productId = $request->input('productId');

		$goodsId = $request->input('goodsId');

		if (!empty($userId))
		{
			$key = 'cart:'.$userId.':'.$productId;
			
			Redis::hDel($key,'userId','productId','goodsId','goodsNum');

			$key1 = 'cart:ids:set:';

			Redis::sRem($key1, $productId);

			echo json_encode(array('error'=>0));
		}
		else
		{
			Cookie::queue(\Cookie::forget("shopCart[$productId]"));
			
			echo json_encode(array('error'=>0));
		}
	}
}