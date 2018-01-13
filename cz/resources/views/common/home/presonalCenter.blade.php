<div class="user-menu">
	<dl>
    	<dt>个人中心</dt>
        <dd><a href="personal">我的个人中心</a></dd>
        <dd><a href="order">我的订单</a></dd>
        <dd><a href="comment">商品评价</a></dd>
        <dd><a href="favorite">我的收藏</a></dd>
        
        <dt>售后服务</dt>
        <dd><a href="orderth">退货单</a></dd>
        <dd><a href="ordertk">退款单</a></dd>

        <dt>帐号管理</dt>
        <dd><a href="address">收货地址管理</a></dd>
        <dd><a href="changePassword">修改密码</a></dd>
    </dl>
</div>
<script>
    $(function(){
        var url = window.location.pathname;
        var arr = url.split('/');
        var method = arr[5];
        $("a[href='"+method+"']").parent('dd').attr('class','active');

    })
    //                    class="active"
</script>