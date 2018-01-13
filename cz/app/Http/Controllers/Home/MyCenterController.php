<?php

namespace App\Http\Controllers\Home;
use App\Models\address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MyCenter;
use Illuminate\Support\Facades\Input;

class MyCenterController extends Controller
{
    //我的个人中心
    public function personal(){
        $obj = new MyCenter();
        $orderInfo = $obj->orderInfo(1);
        return view('Home/personal',['orderInfo'=>$orderInfo]);
    }
    //我的订单
    public function order(){
        $obj = new MyCenter();
        $wfk = $obj->orderInfo(1);//未付款
        $yqs = $obj->orderInfo(4);//已签收

        return view('Home/order',['wfk'=>$wfk,'yqs'=>$yqs]);
    }

    //订单详情
    public function orderDetails(){
        $param = Input::all();
        $obj = new MyCenter;
        $orderitem = $obj->orderDetails($param,'o');//获取商品详情
        $objdb = new address();
        $address = $objdb->find($param['shippingId']);//获取地址详情

        return view('Home/orderView',['orderitem'=>$orderitem,'address'=>$address]);
    }
}
