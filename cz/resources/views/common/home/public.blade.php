<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title> 
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no" /> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<link rel="stylesheet" rev="stylesheet" href="css/base.css" type="text/css" media="screen">
<link rel="stylesheet" rev="stylesheet" href="css/www.css" type="text/css" media="screen">
<link rel="stylesheet" rev="stylesheet" href="css/mobile.css" type="text/css" media="screen">
<link href="css/user.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>


</head>
<body>
    <div class="content">
        <!--top-->
        <div class="top mobile_none">
            <div class="clear w90" id="top">
                <div class="top_l">
                    <a class="" href="https://favorite.taobao.com/popup/add_collection.htm?spm=a1z10.1-c.w5003-12555806454.1.l6Mu9Q&id=116998991&itemid=116998991&itemtype=0&sellerid=1079002304&scjjc=2&scene=taobao_shop" >收藏淘商城</a> <a class="" href="https://shop116998991.taobao.com/">在线客服</a><a href="https://shop116998991.taobao.com/">手机版</a></div>
                <div class="fr">
                    <div class="fl"><a href="register.html">注册</a>|<a href="login.html">登录</a></div>
                        <div class="fr" style="padding-top:6px">
                            <a href="#" class="qq_login" title="qq快速登录"><img src="images/qq.gif" height="22"></a> 
                            <a href="http://blog.sina.com.cn/webzmy" class="sina_login" title="新浪微博快速登录"><img src="images/sina.png" height="22"></a>
                        </div>
                </div>
            </div>
        </div>
        <!--top-->

        <!--header-->
        <div class="header ">
            <div class="clear w90" id="header">
                <div class="mobile_logo"><a href="index.html">淘商城</a></div>
                <div class="header_l mobile_none"><a href="index.html"><img src="images/logo.png"></a></div>
                <!--搜索-->
                <div class="header_search">
                    <div class="search clear">
                        <div class="searchContainer">
                            <div class="searchselect">
                                <span id="type" typename="tuan">团购</span><a class="searchselectbtn" href="javascript:void(0);">&nbsp;</a>
                                <ul id=selectTypeList>
                                    <li typename="tuan"><a href="javascript:void(0);">团购</a></li>
                                    <li typename="item"><a href="javascript:void(0);">值得买</a> </li>
                                    <li typename="promo"><a href="javascript:void(0);">促销</a> </li>
                                    <li typename="store"><a href="javascript:void(0);">商家</a> </li>
                                    <li typename="topic"><a href="javascript:void(0);">社区</a> </li>
                                    <li class=last></li>
                                </ul>
                            </div>
                            <input id="search_key" type="text" placeholder="输入关键词" value=""/>
                            <a id="searchbtn" href="javascript:void(0);"><span class="searchbtn">搜索</span></a>  
                        </div>
                    </div>                    
                </div>
                <!--搜索-->

                <div class="header_shopping_car mobile_none">
                    <div class="clear topcar">
                        <div class="tuan_car_num fl"><a href="user/shopping-cart.html" >购物车 <span id="tuan_num">1</span> 件</a>
                        </div>
                        <div class="car_love fl"><a href="https://shop116998991.taobao.com" >我喜欢的</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--header-->

        <!--nav-->
        <div class="nav mobile_none">
            <div class="w90">
                <div class="clear nav_text">
                    <div class="nav_l">
                        <a href="index.html" class="index_i ">首页</a> 
                        <a href="usa.html">美国站</a>
                        <a href="s.html" >全球精选</a>
                    </div>
                   <div class="nav_r">
                        <a href="#" class="nav_zdm">全球值得买</a>
                        <a href="#" class="nav_ship">全球转运</a>
                        <a href="#" class="nav_travel" target="_blank">海外游</a>
                    </div>
                </div>
            </div>
        </div>
        <!--nav-->

        <div class="p_nav_c" id="p_nav_c">
            <p class="p_nav_title" id="p_nav_title"><a href="#" class="on">热门海淘</a></p>
            <div class="index_product_class" id="index_product_class" style="display:none">
                <ul class="clear">
                <li>
                <h3><a href="#">母婴</a></h3>
                <a href="#" class="on">孕妇</a>
                <a href="#">爱他美</a>
                <a href="#">奶粉</a>
                <a href="#">米粉</a>
                <a href="#">麦肯齐</a>
                <a href="#">nuby</a>
                <a href="#" class="on">帕玛氏</a>
                <a href="#">小蜜蜂</a>
                <a href="#" >挪威小鱼</a>
                <a href="#"  class="on">加州宝宝</a>
                <a href="#">童年时光</a>
                </li>
                
                <li>
                <h3><a href="#">保健</a></h3>
                <a href="#" class="on">GNC</a>
                <a href="#">普丽普莱</a>
                <a href="#">鱼油</a>
                <a href="#">减肥</a>
                <a href="#">维骨力</a>
                <a href="#" class="on">葡萄籽</a>
                <a href="#">自然之宝</a>
                <a href="#" class="on">MACA</a>
                <a href="#">助睡眠</a>
                <a href="#">维生素</a>
                </li>
                
                <li>
                <h3><a href="#">生活</a></h3>
                <a href="#" class="on">膳魔师</a>
                <a href="#">柠檬杯</a>
                <a href="#">艾维诺</a>
                <a href="#">紫草膏</a>
                <a href="#">泡芙</a>
                <a href="#" class="on">泡泡浴</a>
                <a href="#">沐浴露</a>
                
                </li>
                
                <li style="border:none">
                <h3><a href="#">更多</a></h3>
                <a href="#">轻奢包</a>
                <a href="#">coach</a>
                <a href="#">MK</a>
                <a href="#">科颜氏</a>
                <a href="#">兰芝</a>
                <a href="#">花王</a>
                <a href="#">乐高</a>
                <a href="#">耳机</a>
                <a href="#"  class="on">婴儿碗</a>
                <a href="#">马油</a>
                <a href="#">九朵云</a>
                </li>
                </ul>
            </div>
        </div>

        <script type="text/javascript">
            p_nav_c.onmouseover = function(){
            index_product_class.style.display = 'block';
            }
            p_nav_c.onmouseout = function() {
            index_product_class.style.display = 'none';
            }
        </script>

        @yield('content')
    
    <!--foot-->
       <div class="footer">
            <div class="footer_img">
                <a href="#"><img src="images/footer_1.gif"></a>
                <a href="#"><img src="images/footer_2.gif"></a>
                <a href="#"><img src="images/footer_3.gif"></a>
                <a href="#"><img src="images/footer_4.gif"></a>
            </div>
        
            <div class="footer_link">
                    <dl>
                        <dt><h3>新手上路</h3></dt>
                            <dd><a href="#">供应商后台使用帮助</a></dd>
                            <dd><a href="#">注册帮助</a></dd>
                            <dd><a href="#">购买流程</a></dd>
                            <dd><a href="#">分销商使用帮助</a></dd>
                            <dd><a href="#">供应商一键铺货流程</a></dd>
                            <dd><a href="#">买家常见问题</a></dd>
                            <dd><a href="#">卖家常见问题</a></dd>
                    </dl>
                    <dl>
                        <dt><h3>关于我们</h3></dt>
                            <dd><a href="#">公司介绍</a></dd>
                            <dd><a href="#">联系我们</a></dd>
                            <dd><a href="#">人才招聘</a></dd>
                            <dd><a href="#">新闻中心</a></dd>
                            <dd><a href="#">用户服务协议</a></dd>
                    </dl>
                    <dl>
        
                        <dt><h3>支付方式</h3></dt>
                            <dd><a href="#">支付宝支付</a></dd>
                            <dd><a href="#">微信支付</a></dd>
                            <dd><a href="#">银联支付</a></dd>
                            <dd><a href="#">线下支付</a></dd>
                    </dl>
                    <dl>
                        <dt><h3>特色服务</h3></dt>
                            <dd><a href="#">物流仓储</a></dd>
                            <dd><a href="#">培训服务</a></dd>
                            <dd><a href="#">美工支持</a></dd>
                    </dl>
                    <dl>
                        <dt><h3>售后服务</h3></dt>
                            <dd><a href="#">联系客服</a></dd>
                            <dd><a href="#">退款说明</a></dd>
                            <dd><a href="#">服务保障</a></dd>
                            <dd><a href="#">退换货服务</a></dd>
                    </dl>
                <div class="footer_ewm">
                    <img src="images/two_dimension_code.jpg" width="150" />
                    
                    <p>扫一扫</p>
                </div>
            </div>
            <div class="footer_power">
                闽ICP备15013795号 Copyright® 2008-2015 cz.com, All Rights Reserved <a href="https://shop116998991.taobao.com">cz科技</a> 版权所有
            </div>
        </div>
        <!--foot-->
    </div>
    
    <div class="backToTop" title="" style="display: block;"></div>
    <script type="text/javascript">
        //回到顶部
        $(".backToTop").click(function(){
            $('body,html').animate({scrollTop:0},1000);  //回到顶部
            return false;
        });
    </script>

<SCRIPT type="text/javascript" src="js/baidu.js"></SCRIPT>
<script type="text/javascript" src="js/lazyload.js"></script>
<script type="text/javascript">
jQuery(document).ready(
    function($){
        $("#info img").lazyload({
        placeholder : "",
        effect: "fadeIn"
        });
        
        $(".floor img").lazyload({
        placeholder : "",
        effect: "fadeIn"
        });
});
</script>

</body></html>