@extends('common/home/public')

@section('title', '用户登录')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="login-left">
        	<div class="title"><h2>会员登录<span>LOGIN</span></h2></div>
            <div class="form-group">
            	<div class="input-k">
                	<span>帐号：</span><input type="text" />
                </div>
                <div class="input-k">
                	<span>密码：</span><input type="password" /><p class="prompt">请输入您的登录密码！</p>
                </div>
                <div class="input-k">
                	<span></span><input type='checkbox' name='checkbox' value=1 class="checkbox"><span class="jzzt">记住登录状态&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">忘记密码？</a></span>
                </div>
                <div class="input-k">
                	<span></span><button type="button" onclick="javascript:window.location.href='user/personal.html'">立即登录</button>
                </div>
            </div>
            
            <div class="fast-login">
            	<p>使用合作网站帐号登录：</p>
                <div class="fast-logo">
                	<a href="#"><img src="images/fast-qq.jpg" /><span>QQ</span></a>
                    <a href="#"><img src="images/fast-xl.jpg" /><span>新浪微博</span></a>
                    <a href="#"><img src="images/fast-d.jpg" /><span>豆瓣</span></a>
                    <a href="#"><img src="images/fast-zfb.jpg" /><span>支付宝</span></a>
                    <a href="#"><img src="images/fast-rr.jpg" /><span>人人网</span></a>
                </div>
            </div>
        </div>
        
        <div class="login-right">
        	<p>还不是我们的会员？</p>
            <a href="register.html">十秒快速注册</a>
        </div>
        
    </div>
@endsection