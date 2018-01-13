@extends('common/home/public')

@section('title', '个人中心')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="personal-tou">
                	<div class="user-header"><img src="images/photo.jpg" width="90" height="90" /><i></i></div>
                    <div class="personal-info">
                        <h2>59486467<span>下午好～</span></h2>
                        <!--class-middle普通class-high较高class-low较低-->
                        <p>
                            <span>账户安全级别：</span><i class="class-middle"></i><span>普通&nbsp;&nbsp;|</span>
                            <i class="binding"></i><span><a href="#">绑定手机</a>&nbsp;&nbsp;|</span>
                            <i class="binding-not"></i><span><a href="#">绑定邮箱</a></span>
                        </p>
                    </div>
                </div>
                
                <div class="info-list">
                	<dl>
                    	<dt><h2>未支付订单</h2><a href="#">更多></a></dt>
                        <dd>
                        	<ul class="user-order-list">
                            	<li>
                                	<a href="#"><img src="images/4-2li.jpg" width="60px" height="60px" /></a>
                                    <p class="user-order-num"><a href="#">订单号：1141124860003088</a></p>
                                    <p class="user-order-price"><strong>¥29.00</strong><i>在线支付</i></p>
                                    <p class="user-order-price"><a href="#">订单详情</a></p>
                                    <p class="user-order-btn"><a href="checkout.html">立即付款</a></p>
                                </li>
                                <li style="border-bottom:none">
                                	<a href="#"><img src="images/4-2li.jpg" width="60px" height="60px" /></a>
                                    <p class="user-order-num"><a href="#">订单号：1141124860003088</a></p>
                                    <p class="user-order-price"><strong>¥29.00</strong><i>在线支付</i></p>
                                    <p class="user-order-price"><a href="#">订单详情</a></p>
                                    <p class="user-order-btn"><a href="checkout.html">立即付款</a></p>
                                </li>
                            </ul>
                        </dd>
                        
                        <dt><h2>未收货订单</h2><a href="#">更多></a></dt>
                        <dd><p class="no-news">您暂时没有未收货订单。<a href="#">挑挑喜欢的商品去»</a></p></dd>
                        
                        <dt><div class="dt-L"><h2>购物车</h2><a href="#">更多></a></div><div class="dt-R"><h2>收藏夹</h2><a href="#">更多></a></div></dt>
                        <dd>
                        	<!--购物车-->
                        	<ul class="dt-L-div">
                            	<li><a href="#"><img src="images/4li.jpg"  width="60px" height="60px"/></a></li>
                                <li><a href="#"><img src="images/4-2li.jpg"  width="60px" height="60px"/></a></li>
                                <p class="no-news hidden">您的购物车是空的，<a href="#">马上去购物~</a></p>
                            </ul>
                            <!--收藏夹-->
                            <ul class="dt-R-div">
                            	<p class="no-news">您可将喜欢的商品放入收藏夹，方便随时再次查看~<br />当商品享优惠时，还会通知您哟~</p>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    
    

    
    
	</div>
    
@endsection