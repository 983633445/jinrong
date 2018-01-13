<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
* 首页控制器
*/
class IndexController extends Controller
{
	// 登录页面
	public function index()
	{
		return view('admin.index');
	}
}