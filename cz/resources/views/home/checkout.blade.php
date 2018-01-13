@extends('common/home/public')

@section('title', '填写订单信息')

@section('content')
    <!--checkout-box-->
<div class="checkout-box">
        <form  id="checkoutForm" action="#" method="post">
        <div class="checkout-box-bd">
            <!-- 收货地址 -->
            <div class="box-hd">
                <h2 class="title">收货地址</h2>
            </div>
            <input type="hidden" id="dzid"/>
            <div class="xm-address-list" id="checkoutAddrList">
                @foreach($address as $v)
                <dl class="item " id="dz" shippingId="{{$v['orderShippingId']}}">
                    <dt><strong class="itemConsignee">{{$v['receiverName']}}</strong></dt>
                    <dd>
                        <p class="tel">电话：{{$v['receiverMobile']}}</p>
                        <p class="itemRegion">{{$v['state']}} {{$v['city']}} {{$v['district']}}</p>
                        <p class="itemStreet">{{$v['receiverAddress']}}({{$v['receiverZip']}})</p>
                        <input type="hidden" id="gai" value="{{$v['orderShippingId']}}"/>
                        <span class="edit-btn theme-login">编辑</span>
                    </dd>
                </dl>
                @endforeach
        
                <div class="item use-new-addr"  id="J_useNewAddr">
                     <span class="icon-add theme-login"></span> 
                    使用新地址
                </div>
            </div>

            <!-- ------------隐藏框-----------------> -->
            <div class="theme-popover-mask"></div>
            <div class="theme-popover">
              <div class="xm-edit-addr-box" id="J_editAddrBox">
                    <div class="bd-box">
                                <div class="box-li">
                                    <input type="text" id="Consignee" maxlength="15" value="收货人姓名" onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                    <p class="tip-msg tipMsg"></p>
                                </div>
                                <div class="box-li">
                                    <input type="text" id="Telephone" value="11位手机号" onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                    <p class="tip-msg tipMsg"></p>
                                    <p style="font-size:12px; color:#666;">如果不修改手机号，请重新输入原收货手机号 <font color="#FF3300">139****2057</font> 以便确认</p>
                                </div>
                                <div class="box-li">

                                    <select id="Provinces" class="select-1">
                                        <option value="1">省份/自治区</option>
                                        @foreach($sheng as $v)
                                           <option value="{{$v['region_id']}}">{{$v['region_name']}}</option>
                                        @endforeach
                                    </select>


                                    <select id="Citys" class="select-2">
                                        <option value="1">城市/地区/自治州</option>
                                    </select>

                                    <div class="clr10"></div>
                                   <select id="Countys" class="select-3">
                                        <option value="1">区/县</option>
                                    </select>
                                    <div class="clr10"></div>
                                <textarea  class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                                    <p class="tip-msg tipMsg"></p>
                                </div>
                                <div class="box-li">
                                    <input type="text" id="Zipcode" class="input" value="邮政编码"  onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                    <p class="zipcode-tip" id="zipcodeTip"></p>
                                    <p class="tip-msg tipMsg"></p>
                                </div>
                    </div>
                    <div class="ft">
                      <button  type="button"  class="close" id="J_editAddrCancel">重新选择地址</button>
                       <button type="button" class="J_editAddrOk" id="J_editAddrOk">确认收货地址</button>
                    </div>
                </div>
            </div>

            <!-- 收货地址 END

            <!-- 支付方式 -->
            <div class="box-hd ">
                <h2 class="title">支付方式</h2>
            </div>
            
            <div class="box-bd">
                <ul id="checkoutPaymentList" class="checkout-option-list">
                    <li class="item selected">
                        <p>在线支付<span></span></p>
                    </li>
                </ul>
            </div>
            <!-- 支付方式 END-->
            
            <!-- 配送方式 -->  
            <div class="box-hd ">
                <h2 class="title">配送方式</h2>
            </div>
            
            <div class="box-bd">
                <ul id="checkoutShipmentList" class="checkout-option-list">
                    <li class="item selected">
                        <p>加配送费 10 元<span></span></p>
                    </li>
                </ul>
            </div>
            <!-- 配送方式 END-->

            <!-- 送货时间 -->
            <div class="box-hd">
                <h2 class="title">送货时间</h2>
            </div>
            
            <div class="box-bd">
                <ul class="checkout-option-list">
                    <li class="item selected">
                        <p>不限送货时间<span>周一至周日</span></p>
                    </li>
                    <li class="item "><p>工作日送货<span>周一至周五</span></p></li>
                    <li class="item "><p>双休日、假日送货<span>周六至周日</span></p></li>
                </ul>
            </div>
            <!-- 送货时间 END-->
                
            <!-- 发票信息 -->
            <div class="box-hd">
                <h2 class="title">发票信息</h2>
            </div>
                
            <div class="box-bd">
                <ul class="checkout-option-list" id="Invoice">
                    <li class="item selected"><p>电子发票</p></li>
                    <li class="item"><p>普通发票</p></li>
                </ul>
                
                <p id="eInvoiceTip" class="e-invoice-tip ">电子发票是税务局认可的有效凭证，可作为售后维权凭据。开票后不可更换纸质发票，如需报销请选择普通发票。<a href="#" target="_blank">什么是电子发票？</a></p>
                
                <div class="invoice-info-0" style="display:none">
                    <p style="color:#1d7ad9">电子发票目前仅对个人用户开具，不可用于单位报销 </p>
                    <p>发票内容：购买商品明细</p>
                    <p>发票抬头：个人</p>
                    <p>
                        <dl>
                            <dt>什么是电子发票?</dt>
                            <dd>&#903; 电子发票是纸质发票的映像，是税务局认可的有效凭证，与传统纸质发票具有同等法律效力，可作为售后维权凭据。</dd>
                            <dd>&#903; 开具电子服务于个人，开票后不可更换纸质发票，不可用于单位报销。</dd>
                            <dd>&#903; 您在订单详情的"发票信息"栏可查看、下载您的电子发票。<a href="#" target="_blank">什么是电子发票？</a></dd>
                        </dl>
                    </p>
                </div>
                
                <div class="invoice-info-1" id="checkoutInvoiceDetail"  style="display:none;" >
                    <p>发票内容：购买商品明细</p>
                    <p>发票抬头：请确认单位名称正确,以免因名称错误耽搁您的报销。注：合约机话费仅能开个人发票</p>
                    <ul class="J_invoiceType">
                        <li class="item"><p>个人</p></li>
                        <li class="item"><p>单位</p></li>
                    </ul>
                    <div  id="CheckoutInvoiceTitle">
                        <label>单位名称：</label>
                        <input type="text" maxlength="49">
                    </div>
                </div>
    
            </div>
            <!-- 发票信息 END-->
            
            <!-- 商品清单 -->
            <div class="clr20"></div>
            <div class="box-hd">
                <h2 class="title" style="border-bottom: #fff solid 1px;">确认商品及优惠券</h2>
            </div>
            <div class="box-bd">
                <dl class="checkout-goods-list">
                    <dt>
                        <span class="col-1">商品名称</span>
                        <span class="col-2">单品价格</span>
                        <span class="col-3">购买数量</span>
                        <span class="col-4">小计</span>
                    </dt>


                    <dd>
                        <div class="item-row" goodsid="1" productid="1">
                            <div class="col-1">
                                <div class="g-pic"><img src="../images/502.jpg" width="40" height="40" /></div>
                                <div class="g-info"><a href="#"  target="_blank">清水软胶保护套 黄色1</a></div>
                            </div>
                            <div class="col-2">400元</div>
                            <div class="col-3">1</div>
                            <div class="col-4"><font color="#FF0000">400元</font></div>
                        </div>
                    </dd>

                    <dd>
                        <div class="item-row" goodsid="2" productid="2">
                            <div class="col-1">
                                <div class="g-pic"><img src="../images/502.jpg" width="40" height="40" /></div>
                                <div class="g-info"><a href="#"  target="_blank">清水软胶保护套 黄色2</a></div>
                            </div>
                            <div class="col-2">500元</div>
                            <div class="col-3">1</div>
                            <div class="col-4"><font color="#FF0000">400元</font></div>
                        </div>
                    </dd>
                </dl>       
            </div>
            <!-- 商品清单 end -->

            <!-- 结账 -->
            <div class="checkout-count">

                <div class="checkout-count-extend">
                     <h1><font color="red">可用红包</font></h1>
                    @foreach($redpacket as $k => $v)

                        <ul class="item " id="hb" rid="{{$v['id']}}" style="height: 100px;width: 80px">
                            <li><span>{{$v['rname']}}</span></li>
                            <li>面额：<span>{{$v['denomination']}}</span></li>
                            <li>满<span>{{$v['condition']}}</span>可用</li>
                        </ul>

                    @endforeach

                </div>

                <div class="checkout-price">
                    <p><span>商品件数：</span><strong>2件</strong></p>
                    <p><span>金额合计：</span><strong>40元</strong></p>
                    <p><span>活动优惠：</span><strong>-0元</strong></p>
                    <p><span>优惠券抵扣：</span><strong>-0元</strong></p>
                    <p><span>运费：</span><strong>10元</strong></p>
                    <p class="ze"><span>应付总额：</span><strong>0<i>元</i></strong></p>
                </div>
            </div>
            <!-- 结账 end -->
            <div class="box-ft">
                <input type="hidden" id="hid"/>
                {{--<a href="{{URL('order/payment')}}" class="next">立即下单</a>--}}
                <a href="javascript:;" class="next">立即下单</a>
                <a href="shopping-cart.html" class="modify">返回购物车</a>
            </div>


        </div>
        </form>
    </div>
	
    <div class="clear50"></div>   
    
@endsection
<script type="text/javascript" src="../home/js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){

    //清空地址id
    $("#dzid").val('');
    //选中地址信息
    $(document).on('click','#dz',function(){
        var shippingId = $(this).attr('shippingId');
        $("#dzid").val(shippingId);

    })

    //获取商品信息
    var goodsid ='';
    for(var i=0;i<$(".item-row").length;i++){
         goodsid +=','+ $(".item-row").eq(i).attr('goodsid');
    }
    goodsid = goodsid.substr(1);

    //获取货品id
    var productid ='';
    for(var i=0;i<$(".item-row").length;i++){
        productid +=','+ $(".item-row").eq(i).attr('productid');
    }
    productid = productid.substr(1);

    //获取每个商品的件数
    var perNum = '';
    for(var i=1;i<$(".col-3").length;i++){
        perNum += ','+$(".col-3").get(i).innerHTML;
    }
    perNum = perNum.substr(1);

    //获取商品总的价格
    var sum = 0;
    for(var i=1;i<$(".col-2").length;i++){
        sum += parseFloat($(".col-2").get(i).innerHTML);
    }

    $(".checkout-price p:eq(1)").children('strong').html(sum+'元');
    //活动优惠+优惠卷抵扣
    var youhui = $(".checkout-price p:eq(2)").children('strong').text();
    youhui=youhui.substring(0,youhui.length-1);
    var zhekou = $(".checkout-price p:eq(3)").children('strong').text();
    zhekou=zhekou.substring(0,zhekou.length-1);
    //运费金额计算
    var yunfei = $(".checkout-price p:eq(4)").children('strong').text();
    yunfei=yunfei.substring(0,yunfei.length-1);
    //商品应付总额 金额总计+活动优惠+优惠券抵扣+运费
    var totalMoney = parseInt(sum)+parseInt(youhui)+parseInt(zhekou)+parseInt(yunfei);

    $(".ze").children('strong').html(totalMoney+"<i>元</i>");

    //红包折扣
    $(document).on("click","#hb",function(){
        var hbid = $(this).attr('rid');
        $("#hid").val(hbid);
        $(".checkout-price p:eq(3)").children('strong').text('-0元');
        $(".ze").children('strong').html(totalMoney+"<i>元</i>");
        var denomination= $(this).children('li').eq(1).children('span').text();//红包面额
        var condition= $(this).children('li').eq(2).children('span').text();//红包条件
        if(totalMoney<condition){
            alert('你购买的商品不符合该红包的使用条件');
            $(this).attr('class','item ');
        }else{

            $(".checkout-price p:eq(3)").children('strong').text('-'+denomination+'元');
            $(".ze").children('strong').html(totalMoney-denomination+"<i>元</i>");
        }
    })

    //获取商品总的件数
    var js = 0;
    for(var i=1;i<$(".col-3").length;i++){
        js += parseFloat($(".col-3").get(i).innerHTML);
    }

    $(".checkout-price p:eq(0)").children('strong').html(js+'件');

    //立即下单
    $(document).on('click','.next',function(){
        var zongqian = $(".ze").children('strong').text();
        zongqian=zongqian.substring(0,zongqian.length-1);
        var hid = $("#hid").val();

        var dzid = $("#dzid").val();
        if(dzid ==''){
            alert('请选中地址信息');
            return false;
        }
        //送货时间
        var shsj = $(".selected p").children("span").text();
        var data = {
            'deliveryTime':shsj,
            'postFee':yunfei,
            'payment':zongqian,
            'num':perNum,
            'productId':productid,
            'goodsId':goodsid,
            'shippingId':dzid,
            'rid':hid
        };

         $.ajax({
             url:"{{URL('home/nextOrder')}}",
             data:data,
             dataType:'json',
            success:function(e){

               if(e.status==1){

                   location.href="{{URL('home/payment?orderId=')}}"+ e.msg;

               }else{
                   alert(e.msg);
               }
           }
         })
    })
    //地址信息编辑
    $(document).on('click','.edit-btn',function(){
        var id =   $(this).prev('input').val();

        $.ajax({
            url:"{{URL('home/edit')}}",
            data:{'order_shipping_id':id},
            dataType:'json',
            success:function(e){
//                alert(e.city); return false;
                $("#Consignee").val(e.receiverName);
                $("#Telephone").val(e.receiverMobile);
                $("#Provinces").val(e.receiverState);
                $("#Citys").html("<option value='1'>"+e.city+"</option>");
                $("#Countys").html("<option value='1'>"+e.district+"</option>");
                $("#Street").val(e.receiverAddress);
                $("#Zipcode").val(e.receiverZip);
            }
        })
    })

     //收货地址信息入库
    $(document).on('click','#J_editAddrOk',function(){
        var receiver_name  =$("#Consignee").val();
        var receiver_mobile=$("#Telephone").val();
        var receiver_state =$("#Provinces").val();
        var receiver_city  =$("#Citys").val();
        var receiver_district =$("#Countys").val();
        var receiver_zip = $("#Zipcode").val();
        var receiver_address = $("#Street").val();
        var data = {
            'receiverName': receiver_name,
            'receiverMobile': receiver_mobile,
            'receiverDistrict':receiver_district,
            'receiverZip':receiver_zip,
            'receiverState':receiver_state,
            'receiverCity':receiver_city,
            'receiverAddress':receiver_address,
            'uid':1
        };
        $.ajax({
            url:"{{URL('home/dzrk')}}",
            data:data,
            success:function(e){
                if(e==1){
                    window.location.reload();
                }
            }
        })
    })

    //邮政编码验证
    $(document).on('blur','#Zipcode',function(){

        var val = $(this).val();
        var reg = /^[1-9]\d{5}(?!\d)$/;
        if(!reg.test(val)){

            $("#zipcodeTip").html("<font color='red'>中国邮政编码为6位数字</font>");
            return false;
        }

    })

     //联动查询
    $(document).on("change","#Provinces",function(){
       var region_id =  $(this).val();

       $("#dc").nextAll().remove();

        $.ajax({
            url:"{{URL('home/sjld')}}",
            data:{"region_id":region_id},
            dataType:'json',
            success:function(e){

                var str = '';
                $.each(e,function(k,v){

            str+= "<option id='dc' value='"+v.region_id+"'>"+ v.region_name+"</option>";

                })
                $("#Citys").append(str);
            }
        })
    })

    //详细地址处查询
    $(document).on('change','#Citys',function(){
        var region_id = $(this).val();
        $("#qu").nextAll().remove();
        $.ajax({
            url:"{{URL('home/sjld')}}",
            data:{"region_id":region_id},
            dataType:'json',
            success:function(e){

                var str = '';
                $.each(e,function(k,v){

                    str+= "<option id='qu' value='"+v.region_id+"'>"+ v.region_name+"</option>";

                })
                $("#Countys").append(str);
            }
        })
    })



    $(".item").click(function(){
        //当点击不是添加地址按钮时 
        if($(this).attr("id") != "J_useNewAddr"){
            $(this).parent().find(".item").removeClass("selected");
            $(this).addClass("selected");
        }
        
        //点击发票按钮
        if($(this).parent().attr("id")=="Invoice"){
            var bnt_i=$(this).index();
            $(".invoice-info-"+0).css("display","none");
            $(".invoice-info-"+1).css("display","none");
            $("#eInvoiceTip").css("display","none");
            $(".invoice-info-"+bnt_i).css("display","block");
        }
    })
    
    //普通发票
    $(".J_invoiceType").find("li").click(function(){
        var i=$(this).index()
        if(i==1)
        {
            $("#CheckoutInvoiceTitle").css("display","block")
        }
        else
        {
            $("#CheckoutInvoiceTitle").css("display","none")
        }
    })

    //选择优惠券
    $(".checkout-count-extend li").click(function(){
        if($(this).find("i").attr("class")=="icon-check"){
            $(this).find("i").attr("class","icon-check-active");
        }
        else{
            $(this).find("i").attr("class","icon-check");
        }
    })
    
    
    //弹出框效果
    $('.theme-login').click(function(){
        $('.theme-popover-mask').show();
        $('.theme-popover-mask').height($(document).height());
        $('.theme-popover').slideDown(200);
    })
    $('.theme-popover .close').click(function(){
        $('.theme-popover-mask').hide();
        $('.theme-popover').slideUp(200);
    })  
})
</script>