@extends('common/home/public')

@section('title', '订单详情')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">我的订单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>订单号：{{$orderitem[0]['orderCode']}}  </h2></div>
                <div class="order">
                	<dl>
                        <dt><p><span>发货单号</span> {{$orderitem[0]['shippingCode']}} <i>|</i> {{date('Y-m-d H:i:s',$orderitem[0]['createTime'])}}</p></dt>
                        @foreach($orderitem as $k=>$v)
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="{{$v['picPath']}}" width="70" height="70" /></a>
                                        <div class="w"><a href="#">{{$v['title']}}</a><p>{{$v['price']}}元</p></div>
                                        <i>X {{$v['num']}}</i>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>
                                    <?php
                                    switch ($v['status'])
                                    {
                                        case 1:
                                            echo '未付款';
                                            break;
                                        case 2:
                                            echo '已付款';
                                            break;
                                        case 3:
                                            echo '已发货';
                                            break;
                                        case 4:
                                            echo '已签收';
                                            break;
                                        case 5:
                                            echo '退货申请';
                                            break;
                                        case 6:
                                            echo '退货中';
                                            break;
                                        case 7:
                                            echo '已退货';
                                            break;
                                        case 8:
                                            echo '取消交易';
                                            break;
                                    }
                                    ?>
                                </p></div>
                            <div class="order-btn">
                                @if($v['status']==1)

                                    <a href="{{URL('home/payment?orderId=').$v['orderId']}}">立即付款></a>
                                @else
                                    <a href="{{URL('home/pay?orderCode=').$v['orderCode']}}">申请售后></a>
                                @endif
                            </div>
                        </dd>
                        @endforeach
                    </dl>
                    <div class="order-delivery-status">
                    	<div class="delivery-status-info"><p>物流信息：<span>{{$orderitem[0]['shippingCode']}}</span></p></div>
                        <div class="delivery-status-c">
                        	<p>
                            	<strong>未付款 >></strong>
                                <i>@if(isset($orderitem[0]['createTime'])){{date('Y-m-d H:i:s',$orderitem[0]['createTime'])}} @endif</i>
                            </p>
                        	<p>
                            	<strong>已付款 >></strong>
                                <i>@if(isset($orderitem[0]['paymentTime'])){{date('Y-m-d H:i:s',$orderitem[0]['paymentTime'])}} @endif</i>

                            </p>
                            <p>
                            	<strong>已发货 >></strong>
                                <i>@if(isset($orderitem[0]['consignTime'])){{date('Y-m-d H:i:s',$orderitem[0]['consignTime'])}} @endif</i>

                            </p>
                            <p>
                            	<strong>已签收 >></strong>
                                <i>@if(isset($orderitem[0]['endTime'])){{date('Y-m-d H:i:s',$orderitem[0]['endTime'])}} @endif</i>

                            </p>

                        </div>
                    </div>
                    <div class="order-delivery-status">
						<div class="zj-r">
                            <p><strong>运费：</strong><span>{{$orderitem[0]['postFee']}}元</span></p>
                            <p><strong>实付金额：</strong><span><i>{{$orderitem[0]['payment']}}</i>元</span></p>
                        </div>
                    </div>

                    <div class="order-buttom">
                        <h2>收货信息</h2>
                        
                        <p>姓       名：	{{$address->receiverName}}
                        <p>收货地址：	{{$address->state.$address->city.$address->district}}</p>
                        <p>联系电话：	{{$address->state}}</p>
                        <p>支付方式： 支付宝支付</p>
                        <h2>发票信息</h2>
                        
                        <p>发票类型：	普通发票</p>
                        <p>发票抬头：	个人</p>
                        <p>发票内容：	购买商品明细</p>
                        <h2>送货时间</h2>
                        
                        <p>{{$orderitem[0]['deliveryTime']}}(适用于办公地址)</p>
                    </div>
                </div>
            </div>
        </div>

    
	</div>
    
    <div class="clear50"></div>
@endsection
<script type="text/javascript" src="../home/js/jquery.min.js"></script>
<script>
    $(function(){
//商品总价

        switch(<?php echo $orderitem[0]['status'] ?>){
            case 1:
                $(".delivery-status-c").children('p').eq(0).children('strong').attr('class','active');
                break;
            case 2:
                for(var i=0;i<2;i++){
                    $(".delivery-status-c").children('p').eq(i).children('strong').attr('class','active');
                }
                break;
            case 3:
                for(var i=0;i<3;i++){
                    $(".delivery-status-c").children('p').eq(i).children('strong').attr('class','active');
                }
                break;
            case 4:
                for(var i=0;i<4;i++){
                    $(".delivery-status-c").children('p').eq(i).children('strong').attr('class','active');
                }
                break;
        }

        {{--{{$orderitem[0]['status']}}--}}
    })
</script>