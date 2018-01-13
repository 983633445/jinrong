<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class order extends Model
{
    protected $table = 'order';

    //订单信息入库
    public function add($param){
        $num = explode(',',$param['num']);

        $kdName = ['顺丰','圆通','申通','韵达','优速','中通'];
        $kdKey = array_rand($kdName);
        $orderCode = 'DD'.date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $shippingCode = 'WL'.date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        //订单数据组装
        $productId = explode(',',$param['productId']);//购物车内的货品id
        $goodsId =  explode(',',$param['goodsId']);//购物车内的商品id
        $productArr = json_decode(DB::table("product")->whereIn('productId',$productId)->get(),true);  //货品表记录

        //先查看库存是否足够
        foreach($productArr as $key =>$val){
            if($val['sku']<$num[$key]){
                $arr = [
                    'status'=>0,
                    'msg'=>'库存不足'
                ];
                echo json_encode($arr);die;
            }
        }

        $goodsArr   = json_decode(DB::table("goods")->whereIn('goodsId',$goodsId)->get(),true);    //商品表记录

        $orderArr = array(
            'orderCode'=>$orderCode,
            'payment'=>$param['payment'],
            'postFee'=>$param['postFee'],
            'status'=>1,
            'createTime'=>time(),
            'shippingName'=>$kdName[$kdKey],//物流名称
            'shippingCode'=>$shippingCode,
            'userId'=>1,
            'deliveryTime'=>$param['deliveryTime'],
            'shippingId'=>$param['shippingId']
        );


            DB::beginTransaction();//开启事物
            try{
                $orderId=DB::table($this->table)->insertGetId($orderArr);
                if($orderId){
                    //如果订单入库成功 减掉货品库存
                    foreach($productId as $k =>$v){
                        $jian = $productArr[$k]['sku']-$num[$k];
                        $bool=DB::table("product")->where('productId',$v)->update(['sku'=>$jian]);
                        if(!$bool){
                            throw new \Exception("减商品库存失败");
                        }
                    }

                    foreach($productArr as $key => $val){
                        // 订单详情表数据组装
                        $orderItemArr = array(
                            'itemId'=>$goodsArr[$key]['goodsId'],//商品ID
                            'orderId'=>$orderId,//订单id
                            'orderCode'=>$orderCode,
                            'num'=>$num[$key],
                            'title'=>$goodsArr[$key]['goodsName'],
                            'price'=>$val['goodsPrice'],
                            'totalFee'=>$num[$key]*$val['goodsPrice'],
                            'picPath'=>$goodsArr[$key]['goodsImg']
                        );
                        $bool =  DB::table("orderitem")->insertGetId($orderItemArr);
                        if(!$bool){
                            throw new \Exception("订单商品详情入库失败");
                        }
                    }

                    DB::table("userpacket")->where('rid',$param['rid'])->update(['status'=>3]);//改变红包状态
                        $arr = [
                            'status'=>1,
                            'msg'=>$orderId
                        ];

                    echo json_encode($arr);
                }else{
                    throw new \Exception("订单信息入库失败");
                }
                DB::commit();
            }catch (\Exception $e){
                DB::rollback();//事务回滚
                echo $e->getMessage();
                echo $e->getCode();
            }

    }

    //订单信息展示
    public function show($orderId){
        $orderArr = DB::table('order')
            ->join('address', 'order.shippingId', '=', 'address.orderShippingId')
            ->join('orderitem', 'order.orderId', '=', 'orderitem.orderId')
            ->where('order.orderId',$orderId)
            ->select('*','order.orderCode')
            ->first();
        return $orderArr;
    }

    //订单信息修改
    public function saves($param){
        if($param['is_success']=='T'){
            //如果支付成功，改变订单状态付款时间
            $bool=DB::table($this->table)->where('orderCode',$param['out_trade_no'])->update(['status'=>2,'paymentTime'=>time()]);
            if($bool){
                echo '支付成功';
            }else{
                echo '支付失败';
            }

        }else{
            echo "订单支付失败";
        }
    }
}
