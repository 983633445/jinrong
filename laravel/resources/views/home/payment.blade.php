@extends('common/home/public')

@section('title', '选择付款方式')

@section('content')


    <!--payment-con-->
    <div class="payment-con">
        <form  target="_blank" action="#" id="pay-form" method="post">
            <!--用户信息-->
            <div class="order-info">
                <div class="icon-box">
                    <i class="iconfont"></i>
                </div>

                <div class="msg">
                    <h3>您的订单已提交成功！付款咯～</h3>
                    <p class="post-date">成功付款后，7天发货</p>
                </div>

                <div class="info">
                    <p>金额：<span class="pay-total">{{$orderInfo->payment}}元</span></p>
                    <p>订单：{{$orderInfo->orderCode}}</p>
                    <p>
                        配送：{{$orderInfo->receiverName}}<span class="line">/</span>{{$orderInfo->receiverMobile}}<span class="line">/</span>
                        {{$orderInfo->receiverAddress}}<span class="line">/</span>
                        {{$orderInfo->deliveryTime}}<span class="line">/</span>个人电子发票</p>
                </div>


            </div>

            <div class="xm-plain-box">
                <!-- 选择支付方式 -->
                <h2 class="title">选择支付方式</h2>
                <!-- 选择支付方式 -->
                <div class="box-bd" id="bankList">
                    <dl class="payment-box" >
                        <dt>
                            <strong>支付平台</strong>
                        <p>手机等大额支付推荐使用支付宝快捷支付</p>
                        </dt>
                        <dd>
                            <ul class="payment-list">
                                <li><label for="wxpay"><input type="radio"  name="payOnlineBank" id="wxpay" value="wxpay"  /> <img src="images/wxzf.gif" alt="" width="100" height="50"/></label></li>
                                <li><label for="alipay"><input type="radio" name="payOnlineBank" id="alipay" value="alipay" /> <img src="images/payOnline_zfb.gif" alt=""/></label></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="box-ft">

                    <a href="javascript:;" class="next">下一步</a>
                    <a href="checkout.html" class="modify">修改订单</a>
                </div>
            </div>
        </form>
    </div>
    <input type="hidden" id="paytype"/>
    <div class="clear50"></div>
@endsection
<script type="text/javascript" src="../home/js/jquery.min.js"></script>
<script>
    $(function(){
        //微信支付
        $(document).on('click','#wxpay',function(){
            $("#paytype").val('wxpay');
        })
        //支付宝支付
        $(document).on('click','#alipay',function(){
            $("#paytype").val('alipay');
        })
        //下一步
        $(document).on('click','.next',function(){
            var val = $.trim($("#paytype").val());
            if(val == ''){
                alert('请选择支付方式');
                return false;
            }
            if(val == 'alipay'){
                location.href='{{URL('home/pay?orderCode=')}}{{$orderInfo->orderCode}}';
            }
            if(val == 'wxpay'){
                location.href='http://paysdk.weixin.qq.com/example/native.php';
            }
        })
    })
</script>