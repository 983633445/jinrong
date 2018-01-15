@extends('common/home/public')

@section('title', '申请售后服务')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">修改密码</a></h2></div>
    	<div class="user-content">
            @include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>申请成功</h2></div>
                <div class="repairorder-info">
                	<h2><font color="#e60012">申请售后服务成功！</font></h2>
                    <h3>工作人员将尽快审核您的服务申请，请您耐心等待。审核进度请留意个人中心的售后服务单详情。</h3>
                </div>
                <div class="rep-success">
					<p><span>商品：</span>小米手机1S 电信版 其它 黑色</p>
                    <p><span>单号：</span>1121012019105285 </p>
                    <p><span>服务：</span>维修</p>
                    <p><span>问题：</span>信号问题</p>
                    <p><span>姓名：</span>zhuangmingyong</p>
                    <p><span>地址：</span>河南 郑州市 管城回族区, 陇海东路126号新天地3D43</p>
                </div>
            </div>
        </div>
	</div>
@endsection