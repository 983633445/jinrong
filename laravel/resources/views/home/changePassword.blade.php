
@extends('common/home/public')

@section('title', '修改密码')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">修改密码</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>修改密码</h2></div>
                <div class="changepassword">
                	<div class="list-input">
                    	<span>当前密码：</span><input type="password" />
                    </div>
                    <div class="list-input">
                    	<span>新密码：</span><input type="password" />
                    </div>
                    <div class="list-input">
                    	<span>再次确认新密码：</span><input type="password" />
                    </div>
                    <div class="list-input">
                    	<span></span><button type="button">提交</button>
                    </div>
                </div>
            </div>
        </div>



	</div>
@endsection
