<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Capital;
use DB;

/**
* 红包批次控制器
*/
class CapitalController extends Controller
{
	public static $capital = '';

	public function __construct()
	{
		self::$capital = new Capital();
	}
	// 新增申请
	public function add(Request $request)
	{
		if($request->isMethod('post')){
			$data = $request->all();
			//实例化
			$res = self::$capital->add($data);
			if($res){
				return redirect('/admin/capital/showall');
			}else{
				echo '意外';die;
			}
		}else{
			return view('admin.capital.add');
		}
	}

	//展示全部申请

	public function showAll()
	{
		//实例化
		$data = self::$capital->getAll();
		return view('admin.capital.showall',['data'=>$data]);
	}

	//修改申请状态
	public function updateStatus(Request $request)
	{
		//接收参数
		$data = $request->all();
		//实例化model
		$arr = self::$capital->updatestatus($data);
		echo json_encode($arr);
	}

	//展示申请详情
	public function details(Request $request)
	{
		$id = $request->input('id');
		$data = self::$capital->getOne($id);
		return view("admin.capital.detials",['data'=>$data]);
	}

	//展示我的申请
	public function showMe()
	{
		$data = self::$capital->getMe();
		return view("admin.capital.showme",['data'=>$data]);
	}
}