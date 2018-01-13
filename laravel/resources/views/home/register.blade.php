@extends('common/home/public')

@section('title', '用户登录')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="login-left">
        	<div class="title"><h2>注册会员<span>REGISTRATION</span></h2></div>
            <div class="form-group">
            	<div class="input-k">
                	<span>帐号：</span><input type="text" /><p class="prompt">请填写常用的邮箱/手机号码！</p>
                </div>
                <div class="input-k">
                	<span>密码：</span><input type="password" />
                </div>
                <div class="input-k">
                	<span>确认密码：</span><input type="password" />
                </div>
                <div class="input-k">
                    <span>邮箱：</span><input type="email" />
                </div>
                <div class="input-k">
                	<span>验证码：</span><input type="text" style="width:75px;"/><img src="images/yzm.gif" style="float:left"/><a href="#" class="hyz">换一张</a>
                </div>
				<div class="input-k">
                	<span></span><input type='checkbox' name='checkbox' value=1 class="checkbox"><span class="jzzt">我已阅读并同意遵守&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">有货服务条款</a></span>
                </div>
                <div class="input-k">
                	<span></span><button type="button">注册</button>
                </div>
            </div>
        </div>
        
        <div class="login-right">
        	<p>已经是我们的会员？</p>
            <a href="login.html" style="padding-left:40px;">立即登录</a>
        </div>
        
    </div>
	
    @endsection