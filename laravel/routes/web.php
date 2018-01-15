<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

/*
*		后台
*/
Route::group(['prefix'=>'admin/index','namespace'=>'\Admin'],function(){
		//首页展示
		Route::any('index','IndexController@index');
});


Route::group(['prefix'=>'admin/login','namespace'=>'\Admin'],function(){
		//首页展示
		Route::any('index','LoginController@index');
});
//资金批次
Route::group(['prefix'=>'admin/capital','namespace'=>'\Admin'],function(){
		//申请资金批次
		Route::any('add','CapitalController@add');
		//所有资金申请
		Route::any('showall','CapitalController@showall');
		//我的申请
		Route::any('showme','CapitalController@showme');
		//修改申请状态
		Route::any('updateStatus','CapitalController@updateStatus');
		//申请详情
		Route::any('details','CapitalController@details');
});
//红包
Route::group(['prefix'=>'admin/redpacket','namespace'=>'\Admin'],function(){
		//添加红包
		Route::any('add','RedpacketController@add');
		Route::any('showme','RedpacketController@showme');
		Route::any('showall','RedpacketController@showall');
		Route::any('details','RedpacketController@details');
});
//管理员管理
Route::group(['prefix'=>'admin/user','namespace'=>'\Admin'],function(){
		//添加管理员
		Route::any('add','UserController@add');
});
//权限管理
Route::group(['prefix'=>'admin/auth','namespace'=>'\Admin'],function(){
		//添加权限
		Route::any('add','AuthController@add');
		//展示所有权限
		Route::any('show','AuthController@show');
		//删除权限
		Route::any('upd','AuthController@upd');
		//修改权限状态
		Route::any('upds','AuthController@upds');
});

/********************************前台***********************************/

/**
 * 购物车模块
*/
Route::group(['prefix'=>'home','namespace'=>'\Home'],function()
{
	route::any('shopCart','ShopCartController@shopCartList');//购物车页面
	route::any('addShopCart','ShopCartController@addShopCart');//添加购物车
	route::any('deleteShopCart','ShopCartController@deleteShopCart');//删除购物车
});


Route::group(['prefix'=>'home','namespace'=>'\Home'], function()
{
	Route::get('checkout','OrderController@checkout');//下订单页面
    Route::get('sjld','OrderController@region');//地址的三级联动
    Route::get('dzrk','OrderController@address');//收货地址信息入库
    Route::get('edit','OrderController@edit');//收货地址信息入库
    Route::get('nextOrder','OrderController@nextOrder');//立即下单

    //选择付款方式
    Route::get('payment','OrderController@payment');//下订单页面
    Route::get('pay','OrderController@pay');//支付
    Route::get('paySuccess','OrderController@paySuccess');//支付成功

    Route::get('personal','MyCenterController@personal');//我的个人中心页面
    Route::get('order','MyCenterController@order');//我的订单

	route::any('login','LoginController@login');//登陆页面

	route::any('register',function(){
		return view('home.register');
	});//注册页面


	route::any('index','IndexController@index');//首页

	route::any('shopCart','ShopCartController@shopCartList');//购物车页面
	route::any('yzkc','ShopCartController@yzkc');//购物车页面

	route::any('details',function(){
		return view('home.details');
	});//商品详情页面

	route::any('usa',function(){
		return view('home.usa');
	});//美国站

	route::any('search',function(){
		return view('home.search');
	});//搜索关键字后页面

	route::any('address',function(){
		return view('home.address');
	});//收货地址页面

	route::any('changePassword',function(){
		return view('home.changePassword');
	});//收货地址页面


	route::any('orderView',function(){
		return view('home.orderView');
	});//订单详情页面

	route::any('comment',function(){
		return view('home.comment');
	});//商品评价页面

	route::any('favorite',function(){
		return view('home.favorite');
	});//我的收藏夹页面

	route::any('order',function(){
		return view('home.order');
	});//我的收藏夹页面

	route::any('orderth',function(){
		return view('home.orderth');
	});//我的退货页面

	route::any('ordertk',function(){
		return view('home.ordertk');
	});//我的退款页面

	route::any('personal',function(){
		return view('home.personal');
	});//我的个人中心页面

	route::any('repairorder',function(){
		return view('home.repairorder');
	});//申请售后服务页面

	route::any('repairorderShow',function(){
		return view('home.repairorderShow');
	});//申请售后服务页面

	route::any('repairorderSuccess',function(){
		return view('home.repairorderSuccess');
	});//申请售后服务成功页面

	route::any('review',function(){
		return view('home.review');
	});//商品评价页面

	route::any('reviewShow',function(){
		return view('home.reviewShow');
	});//商品评价内容页面

});