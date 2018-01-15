<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
* 前台登录注册控制器
*/
class LoginController extends Controller
{
	// 登录页面
	public function login()
	{
		return view('home.login');
	}

	// 注册页面
}