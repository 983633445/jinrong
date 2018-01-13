@extends('common/home/public')

@section('title', '退货单')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">退款单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>退款单</h2></div>
                <div class="order">
                	<p class="not-order">您目前还没有退款单。</p>
                </div>
            </div>
        </div>



	</div>
@endsection