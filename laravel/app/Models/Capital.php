<?php   
namespace App\Models;  
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Cookie;
class Capital extends Model{  
    //设置表名  
	public static $tableName = 'capital';

	//申请批次
	public function add($data)
	{
		//组装数据
		unset($data['_token']);
		$data['time'] = time();
		$data['orderNumber'] = 'RG'.rand(1000000,9999999);
		$data['uid'] = Cookie::get('adminuid');
		$data['residuePrice'] = $data['numberPrice'];
		//数据入库
		$res = DB::table(self::$tableName)->insert($data);
		return $res;
	}
	//查询全部
	public function getAll()
	{
		$data = array();
		$data = DB::table('capital')         //将两张表拼接起来  
                ->join('adminuser', function($join)  
                {  
                    $join->on('capital.uid', '=', 'adminuser.id');  
                })->select('capital.id','capital.numberName','capital.numberPrice','capital.reason','capital.time','capital.orderNumber','capital.department','capital.status','adminuser.realName')    
                    ->orderBy('capital.id', 'desc')  
                    ->get();
                    //->paginate(5);
       //print_r($data);die;
		return $data;
	}
	//修改申请状态
	public function updatestatus($data)
	{
		
		$res = DB::table('capital')->where('id','=',$data['cid'])->update(['status'=>$data['status']]);
		unset($data['_token']);
		unset($data['status']);
		if($res){
			$data['stime'] = time();
			$array = DB::table('capital')         //将两张表拼接起来  
                ->join('adminuser', function($join)  
                {  
                    $join->on('capital.uid', '=', 'adminuser.id');  
                })->select('realName')   
                	->where('capital.id','=',$data['cid'])  
                    ->first();
            $data['sqname'] = $array->realName;
			DB::table('auditcapital')->insert($data);
			$arr['status'] = '200';
			$arr['msg'] = '审核成功';
		}else{
			$arr['status'] = '301';
			$arr['msg'] = '审核失败';
		}
		return $arr;
	}
	//查询单条申请详情
	public function getOne($id)
	{
		$data = DB::table('auditcapital')         //将两张表拼接起来  
                ->join('capital', function($join)  
                {  
                    $join->on('auditcapital.cid', '=', 'capital.id');  
                })->select()   
                	->where('capital.id','=',$id)  
                    ->first();
                    //->paginate(5);
       // print_r($data);die;
		return $data;
	}

	//获取我的申请
	public function getMe()
	{
		$uid = Cookie::get('adminuid');
		$data = DB::table('capital')         //将两张表拼接起来  
                ->join('adminuser', function($join)  
                {  
                    $join->on('capital.uid', '=', 'adminuser.id');  
                })->select('capital.id','capital.numberName','capital.numberPrice','capital.reason','capital.time','capital.orderNumber','capital.department','capital.status','adminuser.realName','capital.residuePrice')    
                    ->orderBy('capital.id', 'desc')  
                    ->where('capital.uid','=',$uid)
                    ->get();
                    //print_r($data);die;
        return $data;
	}
}  