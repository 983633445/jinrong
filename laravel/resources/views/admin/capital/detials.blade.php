@extends('common.admin.public')
@section('title', '申请详情')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i> 首页 
		<span class="c-gray en">&gt;</span> 资金管理 
		<span class="c-gray en">&gt;</span> 申请详情 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请人：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ $data->sqname }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>批次号：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ $data->orderNumber }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请时间：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ date('Y-m-d H:i:s',$data->time) }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请部门：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ $data->department }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请金额：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ $data->numberPrice }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>审核人：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ $data->uname }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>审核时间：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="{{ date('Y-m-d H:i:s',$data->stime) }}" placeholder="" id="" name="numberName">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>审核状态：</label>
			<div class="formControls col-xs-4 col-sm-2">
				<input type="text" class="input-text" disabled="disabled" value="<?php
					if($data->status==2){
						echo "审核通过";
					}else{
						echo "未通过";
					}
				?>"
				 placeholder="" id="" name="numberName">
			</div>
		</div>
		<!-- {{ request()->cookie('uid') }} -->
	</form>
</article>
</section>
@endsection
@section('js')
<script type="text/javascript" src="{{ URL::asset('lib/datatables/1.10.0/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	 // {"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,2,3,5,6,7,8,9,10]}// 制定列不参与排序
	]
});
function sendAjax(id,status)
{
	$.ajax({
           url:"updateStatus", //你的路由地址
           type:"post",
           dataType:"json",
           data:{
           	"cid":id,
           	"status":status,
           	"uname":"{{ request()->cookie('uname') }}",
           	"_token":'{{ csrf_token() }}'
           },
           success:function(data){
           }
      });
}
/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		sendAjax(id,2);
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" href="details?id='+id+'">详情</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已通过</span>');
		$(obj).remove();
		layer.msg('已通过', {icon:6,time:1000});
	},
	function(){
		sendAjax(id,3);
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" href="details?id='+id+'">详情</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
</script>
@endsection