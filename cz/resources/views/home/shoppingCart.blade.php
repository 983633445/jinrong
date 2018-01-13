@extends('common/home/public')

@section('title', '购物车')

@section('content')


<link rel="stylesheet" href="css/cart.css"/>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/hot-products.js"></script>


    <!--cart-->
    <div class="catbox">
    	<div class="title"><p>我的购物车<span>在线支付全场满¥150免运费</span></p></div>
        <table id="cartTable"  border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr style="background-image:none;">
                    <th style="padding-left:10px;"><label><input class="check-all check" type="checkbox"/><p>全选</p></label></th>
                    <th>商品</th>
                    <th style="text-align:center">单价</th>
                    <th style="text-align:center">数量</th>
                    <th style="text-align:center">小计</th>
                    <th style="text-align:center">操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
                    <td class="goods"><a href="#"><img src="images/01.jpg" width="100" height="100"/><span>清水软胶保护套 黄色<i>适配机型： 红米1S/红米</i></span></a></td>
                    <td class="price">5999.88元</td>
                    <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
                    <td class="subtotal">640.60</td>
                    <td class="operation"><span class="delete">X</span></td>
                </tr>
                <tr>
                    <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
                    <td class="goods"><a href="#"><img src="images/02.jpg" width="100" height="100"/><span>清水软胶保护套 黄色<i>适配机型： 红米1S/红米</i></span></a></td>
                    <td class="price">3888.50元</td>
                    <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
                    <td class="subtotal">640.60</td>
                    <td class="operation"><span class="delete">X</span></td>
                </tr>
                <tr>
                    <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
                    <td class="goods"><a href="#"><img src="images/01.jpg" width="100" height="100"/><span>清水软胶保护套 黄色<i>适配机型： 红米1S/红米</i></span></a></td>
                    <td class="price">1428.50元</td>
                    <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
                    <td class="subtotal">640.60</td>
                    <td class="operation"><span class="delete">X</span></td>
                </tr>
                <tr>
                    <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
                    <td class="goods"><a href="#"><img src="images/01.jpg" width="100" height="100"/><span>清水软胶保护套 黄色<i>适配机型： 红米1S/红米</i></span></a></td>
                    <td class="price">640.60元</td>
                    <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
                    <td class="subtotal">640.60</td>
                    <td class="operation"><span class="delete">X</span></td>
                </tr>
            </tbody>
        </table>
        
        <div class="foot" id="foot">
            <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
            <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
            <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
            <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件</div>
            <p>还需 100 元在线支付免运费</p>
        </div>
        
        <div class="box-ft" style="margin-top:1px;">
            <a href="payment.html" class="next">结账</a>
            <a href="index.html" class="modify">继续购物</a>
        </div>
    
    </div>
    
    
    <!--hot-pro-->
    <div class="uldiv">
        <div class="btndiv">
        	<strong>热门产品</strong>
            <a class="abtn aleft" href="#left">左移</a>
            <a class="abtn aright" href="#right">右移</a>
        </div>
        
        
        <div class="scrollcontainer">
            <ul>
                <li>
                    <div class="hot-pro">
                        <div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4-2li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                    <div class="hot-pro">
                    	<div class="img"><a href="#"><img src="images/4li.jpg" width="220" height="220" /></a></div>
                        <div class="bottom">
                            <div class="left"><p><a href="products-detailed.html">小米手环 石墨黑石墨黑石墨黑石墨黑石墨黑</a></p><span>79元</span></div>
                            <div class="right"><i class="star4"></i><p>22264人评价</p></div>
                        </div>
                        <div class="hot-pro-hidden-btn">
                            <div class="btn">
                                <a href="#" class="btn2">加入购物车</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    -->
    
    @endsection