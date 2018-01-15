@extends('common/home/public')

@section('title', '我的订单')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">我的订单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>我的订单</h2><span><a href="#" class="active">全部订单</a>|<a href="#">支付订单</a>|<a href="#">已关闭订单</a></span></div>
                <div class="order">
                	<dl>
                    	<dt><p><span>等待付款</span> 订单号：1121012019105285 <i>|</i> 黄超 <i>|</i> 2012年10月12日 09:48</p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li>
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>1499.00元</p><span>网银支付</span></div>
                            <div class="order-btn">
                            	<a href="orderView">订单详细 ></a>
                                <a href="checkout" class="lifk-btn">立即付款</a>
                            </div>
                        </dd>
                        <dt><p><span>已收货</span> 订单号：1121012019105285 <i>|</i> 黄超 <i>|</i> 2012年10月12日 09:48</p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>1499.00元</p><span>网银支付</span></div>
                            <div class="order-btn">
                            	<a href="orderView">订单详细></a>
                                <a href="repairorder">申请售后></a>
                            </div>
                        </dd>
                        <dt><p><span>已关闭</span> 订单号：1121012019105285 <i>|</i> 黄超 <i>|</i> 2012年10月12日 09:48</p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>1499.00元</p><span>网银支付</span></div>
                            <div class="order-btn">
                            	<a href="orderView">订单详细></a>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

    
	</div>
    
@endsection