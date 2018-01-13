<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Libs\Alipay\AlipayPay;
use Illuminate\Support\Facades\Cookie;


class OrderController extends CommonController
{

    //下订单操作
    public function nextOrder(){
        $param = $input = Input::all();
        $obj = new \App\Models\order();
        $obj->add($param);

    }
    //购物车信息展示
    public function cartShow(){
      return view('Home/shopping-cart');
    }
    //地址信息改变
    public function edit(){
        $id = Input::get('order_shipping_id');
        $obj = new \App\Models\address();
        $arr = $obj->find($id);
        echo json_encode($arr);
    }
    //收货地址展示
    public function checkout(){

        $redpacket = $this->getPacket();
        //红包
        $redpacket =json_decode($redpacket,true);

        //地址联动信息展示
        $db = new \App\Models\Region();
        $sheng = $db->sheng();

        //收货地址信息展示
        $obj = new \App\Models\address();
        $address= $obj->select();
        return view('Home/checkout',['sheng'=>$sheng,'address'=>$address,'redpacket'=>$redpacket]);

    }

    //地址三级联动
    public function region(){
        $region_id = Input::get('region_id');
        $db = new \App\Models\Region();
        $arrShi = $db->liandong($region_id);
        echo json_encode($arrShi);
    }

    //地址信息入库
    public function address(){
        $param = $input = Input::all();
        $obj = new \App\Models\address();
        $bool= $obj->add($param);
        echo $bool;
    }

    //立即下单
    public function payment(){
        $orderId = Input::get('orderId');
        $obj = new \App\Models\order();
        $orderInfo = $obj->show($orderId);
        return view('Home/payment',['orderInfo'=>$orderInfo]);
    }

    //支付
    public function pay(){
        $orderCode = Input::get('orderCode');
        $objAlipay = new AlipayPay();
        $objAlipay->requestPay($orderCode,'订单',0.01);
//        $alipay->requestPay($out_trade_no,'订单',0.01,$a['uid'].','.$a['price']);
    }

    //支付成功
    public function paySuccess(){
        $param = Input::all();
        $obj = new \App\Models\order();
        $orderInfo = $obj->saves($param);
    }


}
