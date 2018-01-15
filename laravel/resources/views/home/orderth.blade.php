@extends('common/home/public')

@section('title', '退货单')

@section('content')


    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">退货单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>退货单</h2></div>
                <div class="order">
                	<dl>
                    	<dt><p>订单号：1121012019105285</p></dt>
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
                            <div class="order-price"><p>已取消</p><span>2014-12-13</span></div>
                            <div class="order-btn">
                            	<a href="repairorderShow">查看详情></a>
                            </div>
                        </dd>
                        <dt><p>订单号：1121012019105285 </p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>已取消</p><span>2014-12-13</span></div>
                            <div class="order-btn">
                            	<a href="repairorderShow">查看详情></a>
                            </div>
                        </dd>
                        <dt><p>订单号：1121012019105285</p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>已取消</p><span>2014-12-13</span></div>
                            <div class="order-btn">
                            	<a href="repairorderShow">查看详情></a>
                            </div>
                        </dd>
                    </dl>
                	<p class="not-order" style="display:none">您目前还没有退款单。</p>
                </div>
            </div>
        </div>



	</div>
@endsection