@extends('common/home/public')

@section('title', '商品评价')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">商品评价</a></h2></div>
    	<div class="user-content">
        	<div class="review-left">
            	<img src="images/4li.jpg" width="220" height="220" />
                <p>米键绿色<span>已有109566人评论</span></p>
            </div>
            <div class="review-right">
            	<h2>为"米键 绿色"评个星吧</h2>
                <div class="review-list" id="star">
                	<span>评星：</span><ul class="star-k"><li></li><li></li><li></li><li></li><li></li></ul>
                </div>
                <div class="review-list">
                	<span>短签：</span>
                    <ul class="review-d-title">
                    	<li><a href="javascript:;" onclick="choice(this)"><i class="icon-check"></i><p>好玩</p></a></li>
                        <li><a href="javascript:;" onclick="choice(this)"><i class="icon-check"></i><p>实用</p></a></li>
                        <li><a href="javascript:;" onclick="choice(this)"><i class="icon-check"></i><p>性价超高</p></a></li>
                        <li><a href="javascript:;" onclick="choice(this)"><i class="icon-check"></i><p>作用高</p></a></li>
                        <div id="d-title" style="float:left; display:none"></div>
                        
                        
                        <li><a href="javascript:;" id="add-d-title-btn" onclick="add_btn()"><strong>+</strong><p>自定义</p></a></li>
                        <li><div id="add-d-title"><input type="text"  value=""/><button type="button" onclick="add_title()">添加</button></div></li>
                    </ul>
                </div>
                <div class="review-list">
                	<span>评价：</span><textarea></textarea>
                </div>
                <div class="review-list">
                	<span>晒靓照：</span>
                    <a href="#" class="add-pic"></a>
                    <a href="review-show.html" class="review-btn-tj">提交</a>
                </div>
            </div>
        	
        </div>



	</div>

    
<script type="text/javascript">
$(function(){
	//星级评分
	var oStar = document.getElementById("star");
	var aLi = oStar.getElementsByTagName("li");
	var oUl = oStar.getElementsByTagName("ul")[0];
	var i = iScore = iStar = 0;
	for (i = 1; i <= aLi.length; i++){
		aLi[i - 1].index = i;
		
		//鼠标移过显示分数
		aLi[i - 1].onmouseover = function (){
			fnPoint(this.index);
		};
		
		//鼠标离开后恢复上次评分
		aLi[i - 1].onmouseout = function (){
			fnPoint();
		};

		//点击后进行评分处理
		aLi[i - 1].onclick = function (){
			iStar = this.index;
		}
	}
	
	//评分处理
	function fnPoint(iArg){
		//分数赋值
		iScore = iArg || iStar;
		for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";	
	}
})



function choice(_obj){
		var dq_class=$(_obj).find("i").attr("class");
		if(dq_class=="icon-check")
		{
			$(_obj).find("i").attr("class","icon-check-active");
		}
		else{
			$(_obj).find("i").attr("class","icon-check")
		}
	}

function add_btn(){
		$("#add-d-title-btn").css("display","none");
		$("#add-d-title").css("display","block");
	}

function add_title(){
		var add_value=$("#add-d-title").find("input").attr("value");
		if(add_value!="")
		{
			$("#d-title").before("<li><a href=\"javascript:;\" onclick=\"choice(this)\"><i class=\"icon-check-active\"></i><p>"+add_value+"</p></a></li>");
		}
		$("#add-d-title").css("display","none");
		$("#add-d-title-btn").css("display","block");
	}





</script>
@endsection
