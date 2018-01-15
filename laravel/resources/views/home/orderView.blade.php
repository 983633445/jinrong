@extends('common/home/public')

@section('title', '订单详情')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">我的订单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>订单号：1121012019105285 </h2></div>
                <div class="order">
                	<dl>
                        <dt><p><span>发货单号</span> 1121012019105285 <i>|</i> 2012年10月12日 09:48</p></dt>
                        <dd>
                        	<div class="order-img-t">
                            	<ul>
                                    <li style="border:none">
                                        <a href="#"><img src="images/01.jpg" width="70" height="70" /></a>
                                        <div class="w"><a href="#">小米手机1S 电信版 其它</a><p>1499元</p></div>
                                        <i>X 1</i>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-price"><p>已收货</p></div>
                            <div class="order-btn">
                                <a href="repairorder">申请售后></a>
                            </div>
                        </dd>
                    </dl>
                    <div class="order-delivery-status">
                    	<div class="delivery-status-info"><p>物流信息：<span>1121012019105285</span></p></div>
                        <div class="delivery-status-c">
                        	<p>
                            	<strong class="active">下单 >></strong>
                                <i>2014年11月12号</i>
                                <span>09时48分</span>
                            </p>
                        	<p>
                            	<strong class="active">付款 >></strong>
                                <i>2014年11月12号</i>
                                <span>09时48分</span>
                            </p>
                            <p>
                            	<strong class="active">配货 >></strong>
                                <i>2014年11月12号</i>
                                <span>09时48分</span>
                            </p>
                            <p>
                            	<strong>出库 >></strong>
                                <i>2014年11月12号</i>
                                <span>09时48分</span>
                            </p>
                            <p>
                            	<strong>交易成功 >></strong>
                                <i>2014年11月12号</i>
                                <span>09时48分</span>
                            </p>
                        </div>
                    </div>
                    <div class="order-delivery-status">
						<div class="zj-r">
                        	<p><strong>商品总价：</strong><span>1499元</span></p>
                            <p><strong>优惠金额：</strong><span>0元</span></p>
                            <p><strong>运费：</strong><span>0元</span></p>
                            <p><strong>实付金额：</strong><span><i>1499</i>元</span></p>
                        </div>
                    </div>
                    
                    <div class="order-buttom">
                        <h2>收货信息</h2>
                        
                        <p>姓       名：	黄超
                        <p>收货地址：	河南 郑州市 管城回族区, 陇海东路126号新天地3D43</p>
                        <p>联系电话：	139****2057</p>
                        <p>支付方式：	网银支付</p>
                        <h2>发票信息</h2>
                        
                        <p>发票类型：	普通发票</p>
                        <p>发票抬头：	个人</p>
                        <p>发票内容：	购买商品明细</p>
                        <h2>送货时间</h2>
                        
                        <p>工作日送货(适用于办公地址)</p>
                    </div>
                </div>
            </div>
        </div>

    
	</div>
    
    <div class="clear50"></div>
@endsection