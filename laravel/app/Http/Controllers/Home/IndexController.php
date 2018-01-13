<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use DB;

/**
* 首页控制器
*/
class IndexController extends CommonController
{
	public function index()
	{
		Cookie::queue('uid','1');
		$this->getPacket();die;
		return view('home.index');
	}
}