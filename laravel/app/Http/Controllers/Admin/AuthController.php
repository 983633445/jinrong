<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth;
use DB;

/**
* 权限添加
*/
class AuthController extends Controller
{
	public static $models;
	public function __construct()
	{
		self::$models = new Auth();
	}
	//展示权限
	public function show(Request $request)
	{
		$data = self::$models->getAllnode();
		return view('admin.auth.show',['data'=>$data]);
	}
	//权限添加
	public function add(Request $request)
	{
		if($request->isMethod('post')){
			$data = $request->all();
			unset($data['_token']);
			$data['time'] = time();
			DB::table("auth")->insert($data);
		}else if($request->isMethod('get')){
			$data = self::$models->getTopnode();
			return view('admin.auth.add',['data'=>$data]);
		}
	}
	//权限删除
	public function upd(Request $request)
	{
		$id = $request->input('id');
		$res = DB::table('auth')->where("auth_id",$id)->delete();
		if($res){
			$arr['code'] = 200;
			$arr['msg'] = '删除成功';
		}else{
			$arr['code'] = 301;
			$arr['msg'] = '删除失败';
		}
		echo json_encode($arr);
	}
	//修改状态
	public function upds(Request $request)
	{
		$id = $request->input('id');
		$status = $request->input('status');
		if($status==1){
			$status=2;
		}else{
			$status=1;
		}
		$data = array(
			"is_show"=>$status
		);
		$res = DB::table('auth')->where("auth_id",$id)->update($data);
		if($res){
			$arr['code'] = 200;
			$arr['msg'] = '修改成功';
		}else{
			$arr['code'] = 301;
			$arr['msg'] = '修改失败';
		}
		echo json_encode($arr);
	}
}
