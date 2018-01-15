@extends('Common.Home.public')
@section('title', '首页')
@section('content')
<!-- 轮播图 -->
<style type="text/css">
        /*焦点*/
        .flexslider {height:450px;}
        .slides li { height:450px;}
        .slides li a{height:450px;}
        </style>

        <div class="flexslider">
            <ul class="slides ">
                <li style="background: url(http://img8.haitao.com/flash/ad/2015/08/05/09/20150805090819_214193.jpg) 50% 0 no-repeat;"><a href="#" target="_blank">韩国人气面膜</a></li>
                <li style="background: url(http://img8.haitao.com/flash/ad/2015/05/07/19/20150507193107_163238.jpg) 50% 0 no-repeat;"><a href="#" target="_blank">加州宝宝美国直邮</a></li>
                <li style="background: url(http://img8.haitao.com/flash/ad/2015/08/07/18/20150807180345_177833.jpg) 50% 0 no-repeat;"><a href="#" target="_blank">玩具</a></li>
                <li style="background: url(http://img8.haitao.com/flash/ad/2015/08/06/16/20150806162334_508427.jpg) 50% 0 no-repeat;"><a href="#" target="_blank">兰蔻家族</a></li>
                <li style="background: url(http://img8.haitao.com/flash/ad/2015/08/06/11/20150806115026_325616.jpg) 50% 0 no-repeat;"><a href="#" target="_blank">夏季减肥澳洲专场</a></li>
            </ul>
        </div>

        <script src="js/jquery.flexslider-min.js"></script>
        <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                directionNav: true,
                pauseOnAction: true
            });
        });
        </script>
<!-- 轮播图 -->

        <div class="main clear w90">
            <!--品牌活动-->
            <div class="box-brand top20">
                <div class="clearfix box-hd">
                    <h3>品牌活动<i>BRAND PROMOTION</i></h3>
                    <div class="clearfix box-hd-other">
                        <a href="#" target="_blank" class="box-hd-more">更多品牌</a>
                    </div>
                </div>
                
                <div class="box-bd box-brand-bd" id="J_brand_act">
                    <div class="clearfix box-bd-inner brand-bd">
                        <ul class="ks-switchable-content brand-act" style="position: absolute; width: 999999px;">
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro1.jpg" alt="纳益其尔" title="纳益其尔">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro2.jpg" alt="珀莱雅" title="珀莱雅">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro3.jpg" alt="优理氏" title="优理氏">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro4.jpg" alt="韩束" title="韩束">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro5.jpg" alt="舒儿丝" title="舒儿丝">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                            <li class="ks-switchable-panel-internal74" style="display: block; float: left;">
                            <a href="#">
                            <img src="images/pro6.jpg" alt="我的心机" title="我的心机">
                            <div class="mask"><i></i></div>
                            </a>
                            </li>
                        </ul>
                    </div>
            </div>
            
                <ul class="brands top10">
                    <li>
                        <a href="#">
                        <img src="images/brands.jpg" alt="雅诗兰黛">
                        <i>雅诗兰黛</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands2.jpg" alt="兰蔻">
                        <i>兰蔻</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands3.jpg" alt="迪奥">
                        <i>迪奥</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands.jpg" alt="雅诗兰黛">
                        <i>雅诗兰黛</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands2.jpg" alt="兰蔻">
                        <i>兰蔻</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands3.jpg" alt="迪奥">
                        <i>迪奥</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands4.jpg" alt="谜尚">
                        <i>谜尚</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/brands.jpg" alt="雅诗兰黛">
                        <i>迪奥</i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--品牌活动-->
            
            <!--母婴用品-->
            <div class="floor floor-baby">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">1F 母婴用品</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"  target="_blank">
                                <img src="images/8-1.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">
                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--美妆个护-->
            <div class="floor floor-beauty">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">2F 美妆个护</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"  target="_blank">
                                <img src="images/8-2.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--食品保健-->
            <div class="floor floor-food">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">3F 食品保健</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"target="_blank">
                                <img src="images/8-3.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <!--服饰鞋靴-->
            <div class="floor floor-clothes">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">4F 服饰鞋靴</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"  target="_blank">
                                <img src="images/8-5.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <!--箱包手袋-->
            <div class="floor floor-bag">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">5F 箱包手袋</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"  target="_blank">
                                <img src="images/8-5.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--家居生活-->
            <div class="floor floor-life">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">6F 家居生活</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#"  target="_blank">
                                <img src="images/8-6.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--数码电子-->
            <div class="floor floor-3c">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">7F 数码电子</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#" target="_blank">
                                <img src="images/8-7.png" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--户外运动-->
            <div class="floor floor-outdoor">
                <div class="container">
                    <div class="floor-header">
                        <h3 class="floor-title">8F 户外运动</h3>
                        <span class="mod-tag">
                                <a class="tag-item" href="#" target="_blank">奶粉</a>
                                <a class="tag-item" href="#" target="_blank">纸尿裤</a>
                                <a class="tag-item" href="#" target="_blank">奶瓶</a>
                                <a class="tag-item" href="#" target="_blank">孕妈必备</a>
                                <a class="tag-item" href="#" target="_blank">妊娠纹</a>
                        </span>
                        <a href="#" class="mod-more">更多 &gt;</a>
                    </div>
                    
                    <div class="floor-container">
                        <div class="mod-brand">
                            <ul class="brand-list">
                                <li class="brand-item first">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/nuk.jpg" width="100" height="66" alt="nuk">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/fisherprice.jpg" width="100" height="66" alt="FisherPrice">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/burtsbees.jpg" width="100" height="66" alt="burt'sbees">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/munchkin.jpg" width="100" height="66" alt="munchkin">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#"  target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/lego.jpg" width="100" height="66" alt="lego">
                                    </a>
                                </li>
                                <li class="brand-item">
                                    <a href="#" target="_blank">
                                        <img src="http://img.thcdn.cn/upload/201406/brand/childlife.jpg" width="100" height="66" alt="childlife">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <div class="mod-promote">
                            <a href="#" target="_blank">
                                <img src="images/8-8.jpg" width="300" height="460" alt="童趣水杯">
                            </a>
                        </div>
                        <ul class="mod-list">
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/210250/205053.jpg@!140" alt="美国Culturelle for kids 婴幼儿益生菌" style="height: 140px; width: 108px; margin: -70px 0px 0px -54px; display: inline;">

                                    </a>
                                    <a href="#" class="meta"  target="_blank">全面增强免疫力</a>
                                    <a href="#" class="name"  target="_blank">美国Culturelle for kids 婴幼儿益生菌</a>
                                    <span class="price">¥131</span>
                                    <span class="price-other">$20.99</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150731/212437/772954.jpg@!140" alt="盒" style="height: 140px; width: 82px; margin: -70px 0px 0px -41px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">宝宝补钙热销品</a>
                                    <a href="#" class="name" target="_blank">Ddrops纯天然婴儿维生素D3滴剂 宝宝补钙 促进钙吸收 400 IU 90滴x2盒</a>
                                    <span class="price">¥176</span>
                                    <span class="price-other">$28.15</span>
                                </li>
                                
                                <li class="list-item list-item-md">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150717/133807/007984.jpg@!140" alt="挪威Nordic 滴剂" style="height: 140px; width: 57px; margin: -70px 0px 0px -28.5px; display: inline;"></a>
                                    <a href="#" class="meta" target="_blank">销售第一婴幼儿鱼油</a>
                                    <a href="#" class="name" target="_blank">挪威Nordic Naturals挪帝克婴幼儿鳕鱼鱼油DHA滴剂</a>
                                    <span class="price">¥85</span>
                                    <span class="price-other">$13.56</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150520/225233/382144.jpg@!80x80" alt="浆果味" style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">ChildLife童年时光儿童精纯DHA咀嚼胶囊 浆果味</a>
                                    <span class="price">¥47</span>
                                    <span class="price-other">$7.39</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="/item-90008450793.html" class="pic" target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20150222/125400/224380.jpg@!80x80" alt="" style="height: 74px; width: 80px; margin: -37px 0px 0px -40px; display: inline;"></a>
                                    <a href="/item-90008450793.html" class="name" target="_blank">Enfamil 美赞臣 孕妇 DHA+复合维生素组合</a>
                                    <span class="price">¥81</span>
                                    <span class="price-other">$12.99</span>
                                </li>
                                
                                <li class="list-item list-item-sm">
                                    <a href="#" class="pic"  target="_blank" style="background-image: none;">
                                    <img src="http://aimg.hai360.com/item/20141005/011218/520699.jpg@!80x80" alt="【明星宝贝同款】 " style="height: 80px; width: 80px; margin: -40px 0px 0px -40px; display: inline;"></a>
                                    <a href="#" class="name" target="_blank">【明星宝贝同款】SWIMTRAINER 婴幼儿学习训练游泳圈</a>
                                    <span class="price">¥145</span>
                                    <span class="price-other">$23.22</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
@endsection
    <!--悬浮框-->
    <div class="customer_service mobile_none">
        <div class="customer_servicetop">
            <div class="attention">淘商城微信客服</div>
            <div class="two_dimension_codebox"><img class="two_dimension_code" src="images/two_dimension_code.jpg" /></div>
        </div>
        <div class="customer_servicecenter"><span>客服热线</span><br /><span class="hootline">400-000-0000</span></div>
        <div class="customer_servicefoot"><a href="#">手机海淘</a></div>
    </div>
    <!--悬浮框结束-->