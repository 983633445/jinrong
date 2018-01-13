<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

/**
* 购物车控制器
*/
class ShopCartController extends Controller
{
	// 展示购物车列表
	public function shopCartList()
	{
		return view('home.shoppingCart');
	}
}