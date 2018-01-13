<?php   
namespace App\Models;  
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Cookie;
class Redpacket extends Model{  
	public function getData($id)
	{
		$data = DB::table('capital')->select('id','orderNumber','numberPrice','residuePrice')->where('id','=',$id)->first();
		return $data;
	}
	public function add($data)
	{
		$money = $data['denomination']*$data['num'];
		$smoney = $data['smoney'];
		if($money<$smoney){
			unset($data['smoney']);
			unset($data['_token']);
			$data['addTime'] = time();
			//添加红包
			$id = DB::table('redpacket')->insertGetId($data);
			//循环添加具体红包
			for($i=0;$i<$data['num'];$i++){
				$arr[]=array("code"=>getRandomString(20),"rid"=>$id);
			}
			DB::table('redbag')->insert($arr);
			//更改批次剩余金额
			$status = DB::update('update capital set residuePrice=residuePrice-'.$money.' where id = '.$data['pid']);
			return $status;
		}else{
			return 2;
		}
	}
	//展示我的红包(后台)
	public function showMe()
	{
		$uid = Cookie::get('adminuid');
		$data = DB::table('capital')         //将两张表拼接起来  
                ->join('redpacket', function($join)  
                {  
                    $join->on('capital.id', '=', 'redpacket.pid');  
                })->select('capital.orderNumber','redpacket.id','redpacket.denomination','redpacket.condition','redpacket.num','redpacket.status','redpacket.addTime','redpacket.time','redpacket.rname')    
                    ->where(['capital.uid'=>$uid])
                    ->get();
        return $data;
	}
	//红包详情
	public function getDetails($id)
	{
		$data = DB::table('redpacket')         //将两张表拼接起来  
                ->join('redbag', function($join)  
                {  
                    $join->on('redpacket.id', '=', 'redbag.rid');  
                })->select('redpacket.id as rid','redbag.id','redbag.code','redbag.status','redpacket.time')    
                    ->where(['redpacket.id'=>$id])
                    ->get();
        return $data;
	}
	//全部红包
	public function getAll()
	{
		$data = DB::table('capital')         //将两张表拼接起来  
                ->join('redpacket', function($join)  
                {  
                    $join->on('capital.id', '=', 'redpacket.pid');  
                })->select('capital.orderNumber','redpacket.id','redpacket.denomination','redpacket.condition','redpacket.num','redpacket.status','redpacket.addTime','redpacket.time','redpacket.rname')
                    ->get();
        return $data;
	}
	//获取用户未使用的红包接口
	public function getUserpacket()
	{
		$uid = Cookie::get('uid');
		$uid = 1;
		$data = DB::table('userpacket')
            ->leftJoin('redbag', 'userpacket.rid', '=', 'redbag.id')
            ->leftJoin('redpacket', 'redpacket.id', '=', 'redbag.rid')
            ->where(["userpacket.uid"=>$uid,"userpacket.status"=>'2'])
            ->select('redpacket.rname','userpacket.id','redpacket.denomination','redpacket.condition')
            ->get();
        return $data;
	}
	//获取用户全部红包接口
	public function getUserallpacket()
	{
		$uid = Cookie::get('uid');
		$data = DB::table('userpacket')
            ->leftJoin('redbag', 'userpacket.rid', '=', 'redbag.id')
            ->leftJoin('redpacket', 'redpacket.id', '=', 'redbag.rid')
            ->where(["userpacket.uid"=>$uid])
            ->select('redpacket.rname','userpacket.id','redpacket.denomination','denomination.condition')
            ->get();
        return $data;
	}
	//修改用户红包状态
	public function updatePacketstatus($id)
	{
		$res = DB::table('userpacket')->where('id','=',$id)->update(['status'=>'3']);
		return $res;
	}
}  