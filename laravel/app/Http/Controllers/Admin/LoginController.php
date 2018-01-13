<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Login;
use DB;

/**
* 登录控制器
*/
class LoginController extends Controller
{
	// 登录页面
	public function index(Request $request)
	{
		if($request->isMethod('post')){
			$data = $request->all();
			$models = new Login();
			$status = $models->verify($data);
			if($status==1){
				return view('jump')->with([
                    'message'=>'登录成功',
                    'url' =>"http://www.czshop.com/laravel/public/admin/index/index", 
                    'jumpTime'=>2,
                ]);
			}else{
				return view('jump')->with([
                    'message'=>'账号或密码错误',
                    'url' =>"http://www.czshop.com/laravel/public/admin/login/index", 
                    'jumpTime'=>2,
                ]);
			}
		}else{
			return view('admin.login.index');
		}
	}
}