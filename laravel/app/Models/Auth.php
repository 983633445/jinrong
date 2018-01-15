<?php   
namespace App\Models;  
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Cookie;
class Auth extends Model{  
	//返回所有顶级权限
	public function getTopnode()
	{
		$data =DB::table('auth')->where(['p_id'=>'0'])->get();
		return $data;
	}
	//获取所有权限
	public function getAllnode()
	{
		$data =DB::table('auth')->get();
		$data = json_encode($data);
		$data = json_decode($data,1);
		$arr = digui($data);
		return $arr;
	}
}  