<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MyCenter extends Model
{
    //获取订单
    public function orderInfo($status){
        $orderArr = DB::table('order')->where('status',$status)->get();
        return json_decode($orderArr,true);

    }

    //获取订单详情
    public function orderDetails($param,$field){

          if($field=='o'){
              return json_decode(DB::table('order')
                  ->leftJoin('orderitem', 'order.orderId', '=', 'orderitem.orderId')
                  ->where('order.orderId',$param['orderId'])->get(),true);
          }else{
              return DB::table('address')->where('orderShippingId',$param['shippingId'])->first();
          }

    }
//    public function orderDetails($orderId){
//        $orderArr = DB::table('order')
//            ->leftJoin('address', 'order.shippingId', '=', 'address.orderShippingId')
//            ->leftJoin('orderitem', 'order.orderId', '=', 'orderitem.orderId')
//            ->where('order.orderId',$orderId)
//            ->select('*','order.orderCode')
//            ->get();
//        return json_decode($orderArr,true);
//    }
}
