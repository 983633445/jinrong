@extends('common/home/public')

@section('title', '购物车')

@section('content')

    <!--cart-->
    <div class="catbox">
    	<div class="title"><p>我的购物车<span>在线支付全场满¥150免运费</span></p></div>
         <?php if(!isset($goodsInfo)){?>
                    <tr>
                        <td>购物车为空！</td>
                    </tr>
         <?php }else{ ?>
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
            <tbody id="box">
                <?php foreach($goodsInfo as $v){?>

                <tr class="" id="goodsNum" zkc="{{$v['sku']}}">
                    <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
                    <td class="goods"><a href="javascript:;"><img id="click" src="{{$v['goodsImg']}}" width="100" height="100"/><span>{{$v['goodsName']}}<i>适配机型： 红米1S/红米</i></span></a></td>
                    <td class="price">{{$v['goodsPrice']}}元</td>
                    <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="{{$v['payNum']}}"/><span class="add">+</span></td>
                    <td class="subtotal">{{$v['goodsPrice']*$v['payNum']}}</td>
                    <input type="hidden" class="productId" value="{{$v['productId']}}">
                    <input type="hidden" class="goodsId" value="{{$v['goodsId']}}">
                    <td class=""><span class="deleteShopCart">X</span></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
  {{--货品id 商品id 购买数量--}}

        <div class="foot" id="foot">
            <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
            <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
            <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
            <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件</div>
            <p>还需 100 元在线支付免运费</p>
        </div>
        
        <div class="box-ft" style="margin-top:1px;">
            <a href="javascript:;" class="next">结账</a>
            <a href="index.html" class="modify">继续购物</a>
        </div>
        <?php }?>
    </div>
    <script>
        $(function()
        {
            //加
            $(document).on('click','.add',function(){
                var val = $(this).prev().val();
                var zkc =  $(this).parents("#goodsNum").attr('zkc');
                if(val > zkc){
                    $(this).prev().val(zkc);
                }
            })
            //结账
            $(document).on("click",".next",function(){
                var productId = ''; //货品id
                var goodsId = ''; //货品id
                var num ='';

               for(var i=0;i<$("#box #goodsNum").length;i++){
                   var obj =$("#box tr").eq(i);
                   var sl = obj.children('td').eq(3).children('input').val();

                   if(obj.attr('class')=='on' && sl!=0){
                       goodsId+=','+obj.children('.goodsId').val()
                       productId+=','+obj.children('.productId').val()
                       num+=','+sl;
                   }
               }
                productId= productId.substr(1);
                goodsId= goodsId.substr(1);
                num= num.substr(1);

                //购买数量
                location.href='{{URL('home/checkout?productId=')}}'+productId+'&goodsId='+goodsId+'&num='+num;

            })

            $(document).on('click','.deleteShopCart',function()
            {
                if(confirm("确定要删除吗？"))
                {
                    goodsPrice = $(this).parent().prev().prev().prev().html();
                    productId = $(this).parent().prev().prev().val();
                    goodsId = $(this).parent().prev().val();

                    singleGoodsNum = $(this).parent().prev().prev().prev().prev().children().next().val();// 获取选中的商品件数

                    priceTotal = $('#priceTotal').text(); // 获取需要购买的商品总价

                    selectedTotal = $('#selectedTotal').text();// 获取需要购买的商品件数

                    obj = $(this);

                    $.ajax({
                        url:"{{url('home/deleteShopCart')}}",
                        data:{productId:productId,goodsId:goodsId},
                        type:"get",
                        dataType:"json",
                        success:function(res)
                        {
                            if (res.error == 0) 
                            {
                                priceTotal = priceTotal-goodsPrice;

                                selectedTotal = selectedTotal-singleGoodsNum;

                                $('#priceTotal').html(priceTotal);

                                $('#selectedTotal').html(selectedTotal);

                                obj.parent().parent().remove();
                            }
                        }
                    })
                }
            })
        })
    </script>
    
    
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