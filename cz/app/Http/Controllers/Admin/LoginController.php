<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
* 登录控制器
*/
class LoginController extends Controller
{
	// 登录页面
	public function login()
	{
		return view('admin.login.login');
	}
}