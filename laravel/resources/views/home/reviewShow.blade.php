@extends('common/home/public')

@section('title', '商品评价内容')

@section('content')
    
    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">商品评价内容</a></h2></div>
    	<div class="user-content">
        	<div class="review-show-left">
            	<div class="title"><h2>评论内容</h2></div>
            	<div class="review-show-c">
                	<div class="user-header">
                    	<div class="user-toux"><img src="images/photo.jpg" width="85px" height="85px"/><i></i></div>
                        <p>59486467</p>
                    </div>
                    <div class="user-review">
                    	<div class="review-top"><i class="star5"></i><span>2014年11月29日</span></div>
                        <div class="d-title">
                        	<ul>
                            	<li>好玩</li>
                            </ul>
                        </div>
                        <div class="review-word"><p>实用性不是很好，反应太慢了，完全当防尘塞用。。。。。。。实用性不是很好实用性不是很好实用性不是很好实用性不是很好实用性不是很好实用性不是很好实用性不是很好</p></div>
                        <div class="pj-yh"><p>此评论是否有用？</p><a href="#">有用</a><a href="#">没用</a></div>
                    </div>
                </div>
                
                <div class="wyhf">
                	<h2>我要回复</h2>
                    <div class="wyhf-input"><input type="text" /><button type="button">提交</button></div>
                </div>
                
                
                
            </div>
            <div class="review-show-right">
            	<a href="#"><img src="images/502.jpg" width="220" height="220" /></a>
                <p><a href="#">米键 绿色</a><span><strong>49</strong>元</span></p>
                <div class="bottom">
                	<a href="#" class="gwc">加入购物车</a><a href="#" class="sc"></a>
                </div>
            </div>
        	
        </div>
	</div>
     
@endsection