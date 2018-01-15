@extends('common.admin.public')
@section('title', '红包批次')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i> 首页 
		<span class="c-gray en">&gt;</span> 资金管理 
		<span class="c-gray en">&gt;</span> 全部申请 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="40">ID</th>
							<th width="100">申请人</th>
							<th width="90">批次号</th>
							<th width="130">申请时间</th>
							<th width="60">申请部门</th>
							<th width="60">申请金额</th>
							<th>资金用途</th>
							<th width="60">状态</th>
							<th width="60">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $v): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo $v->id; ?></td>
							<td><?php echo $v->realName; ?></td>
							<td><?php echo $v->orderNumber; ?></td>
							<td><?php echo date('Y-m-d H:i:s',$v->time); ?></td>
							<td><?php echo $v->department ?></td>
							<td><?php echo $v->numberPrice ?>元</td>
							<td class="text-l"><?php echo $v->reason; ?></td>
							<td class="td-status"><span class="label label-success radius">
								<?php
									if($v->status==1){
										echo "未审核";
									}else if($v->status==2){
										echo "已通过";
									}else if($v->status==3){
										echo "未通过";
									}else{
										echo "未知状态";
									}
								?>
							</span></td>
							<td class="f-14 td-manage"><a style="text-decoration:none" 
								<?php if($v->status==1){
									echo "onClick='article_shenhe(this,$v->id)' href=javascript:;";
								}else{
									echo "href=details?id=$v->id";
								}
								?>
							  >
							  	<?php
							  		if($v->status==1){
							  			echo "审核";
							  		}else{
							  			echo "详情";
							  		}
							  	?>
							  </a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</article>
	</div>
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
	  {"orderable":false,"aTargets":[0,2,3,5,6,7,8,9]}// 制定列不参与排序
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
	layer.confirm('审核批次？', {
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