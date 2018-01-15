@extends('common.admin.public')
@section('title', '资金申请')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i> 首页 
		<span class="c-gray en">&gt;</span> 资金管理 
		<span class="c-gray en">&gt;</span> 我的申请 
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
							<th width="60">剩余金额</th>
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
							<td><?php echo $v->residuePrice ?>元</td>
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
							<td class="f-14 td-manage"><a style="text-decoration:none" onClick="checkStatus({{$v->status}},{{$v->id}})" href="javascript:;" title="新增红包">新增红包</a>
								</td>
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
	  {"orderable":false,"aTargets":[0,2,3,5,6,7,8,9,10]}// 制定列不参与排序
	]
});
//
function checkStatus(status,id){
	if(status!=2){
		alert('当前批次不可用');
		return false;
	}else{
		window.location.href="{{url('admin/redpacket/add?id=')}}"+id
	}
}
</script>
@endsection