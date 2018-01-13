<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redpacket;
use DB;

/**
* 管理员列表
*/
class UserController extends Controller
{
	//首页
	public function add(Request $request)
	{
		if($request->isMethod('post')){
			$data = $request->all();
			print_r($data);die;
		}else{
			return view('admin.user.add');
		}
	}
}
