<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\Redpacket;
use DB;

/**
* 公共控制器
*/
class CommonController extends Controller
{
	//获取用户未使用的红包
	public function getPacket()
	{
		$model = new Redpacket();
		$data = $model->getUserpacket();
		return $data;
	}
	//获取用户全部红包
	public function getPacketall()
	{
		$model = new Redpacket();
		$data = $model->getUserallpacket();
		return $data;
	}
	//修改用户红包状态
	public function updatePacket($id)
	{
		$model = new Redpacket();
		$res = $model->updatePacketstatus($id);
		echo $res;
	}
}