@extends('common.admin.public')
@section('title', '红包管理')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<a class="Hui-iconfont" href="javascript:history.go(-1)">&#xe67d;</a>
		<a class="Hui-iconfont" href="javascript:history.go(-1)">&#xe63d;</a>
		<i class="Hui-iconfont">&#xe67f;</i> 首页 
		<span class="c-gray en">&gt;</span> 红包管理 
		<span class="c-gray en">&gt;</span> 红包详情 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="40">ID</th>
							<th width="90">红包ID</th>
							<th width="90">兑换码</th>
							<th width="60">红包有效期</th>
							<th width="60">红包状态</th>
							<th width="60">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $v): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="1" name=""></td>
							<td><?php echo $v->id; ?></td>
							<td><?php echo $v->rid; ?></td>
							<td><?php echo $v->code; ?></td>
							<td><?php echo $v->time ?>天</td>
							<td class="td-status"><span class="label label-success radius">
								<?php
									if($v->status==1){
										echo "未领取";
									}else if($v->status==2){
										echo "已领取";
									}
								?>
							</span></td>
							<td class="f-14 td-manage"><a style="text-decoration:none" href="details?id={{$v->id}}">
									详情
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
	  {"orderable":false,"aTargets":[0,2,3,4,6]}// 制定列不参与排序
	]
});
</script>
@endsection