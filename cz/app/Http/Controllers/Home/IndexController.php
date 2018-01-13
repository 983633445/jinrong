<?php 

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
* 首页控制器
*/
class IndexController extends Controller
{
	public function index()
	{
		return view('home.index');
	}
}