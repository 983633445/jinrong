@extends('common/home/public')

@section('title', '我的收藏夹')

@section('content')


    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">我的收藏夹</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>我的收藏夹</h2></div>
                <div class="favorite">
                	<ul>
                    	<li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star2"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                            <div class="bottom">
                                <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                                <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                            </div>
                        	<div class="hidden-btn">
                                <div class="btn">
                                	<a href="#" class="btn2">加入购物车</a>
                                    <a href="#" class="btn1">删除</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="fy" style="border:none; display:none">
                        <div class="fy-c">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">94</a>
                            <a href="#">></a>
                            <span>共94页</span>
                            <span>到第</span>
                            <input type="text" value="1" />
                            <span>页</span>
                            <a href="#">确定</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



	</div>
@endsection