<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redpacket;
use DB;

/**
* 红包控制器
*/
class RedpacketController extends Controller
{
	//展示我的红包
	public function showme()
	{
		$model = new Redpacket();
		$data = $model->showMe();
		return view('admin/redpacket/showme',['data'=>$data]);
	}
	// 添加红包
	public function add(Request $request)
	{
		$model = new Redpacket();
		//查询展示
		if($request->isMethod('get')){
			$res = $model->getData($request->input('id'));
			return view('admin/redpacket/add',['data'=>$res]);
		}
		//添加红包
		if($request->isMethod('post')){
			if($model->add($request->all())==1){
				echo "添加成功";
			}else{
				echo "添加失败";
			}
		}
	}
	//红包的详情
	public function details(Request $request)
	{
		$id = $request->input('id');
		$model = new Redpacket();
		$data = $model->getDetails($id);
		return view('admin/redpacket/details',['data'=>$data]);
	}
	//全部红包
	public function showall()
	{
		$model = new Redpacket();
		$data = $model->getAll();
		return view('admin/redpacket/showall',['data'=>$data]);
	}
}
