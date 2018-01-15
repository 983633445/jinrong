@extends('common.admin.public')
@section('title', '权限管理')
@section('content')
<section class="Hui-article-box">
	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i> 首页 
		<span class="c-gray en">&gt;</span> 权限管理 
		<span class="c-gray en">&gt;</span> 全部权限 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="auth_add('添加权限','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加权限</a> </span>
				<span class="r">共有数据：<strong>54</strong> 条</span>
			</div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-bg table-hover table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">权限名称</th>
							<th width="80">控制器</th>
							<th width="120">方法</th>
							<th width="75">添加时间</th>
							<th width="60">状态</th>
							<th width="120">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $v): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="" name=""></td>
							<td>
								<?php
									if($v['p_id']==0){
										echo "<b><font color='red'>".$v['auth_name']."</font></b>";
									}else{
										echo $v['auth_name'];
									}
								?>
							</td>
							<td>{{ $v['controller'] }}</td>
							<td>{{ $v['functions'] }}</td>
							<td>{{ date("Y-m-d H:i:s",$v['time']) }}</td>
							<td class="td-status"><span class="label label-success radius">
								<?php
									if($v['is_show']==1){
										echo "已启用";
									}else{
										echo "未启用";
									}
								?></span></td>
							<td class="f-14 td-manage"><a style="text-decoration:none" onClick="auth_btn(this,{{ $v['auth_id'] }},{{ $v['is_show'] }})" href="javascript:;" title="修改"><i class="Hui-iconfont">&#xe6de;</i></a>
								<a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
								<a style="text-decoration:none" class="ml-5" onClick="auth_del(this,{{ $v['auth_id'] }})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script type="text/javascript" src="{{ URL::asset('lib/My97DatePicker/4.8/WdatePicker.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('lib/datatables/1.10.0/jquery.dataTables.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('lib/laypage/1.2/laypage.js') }}"></script> 
<script type="text/javascript">
url = "{{url('admin/auth/add')}}"
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
		//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		{"orderable":false,"aTargets":[0,1,2,3,4,5,6]}// 不参与排序的列
	]
});

/*权限-添加*/
function auth_add(title,w,h){
	layer_show(title,url,w,h);
}
/*权限-删除*/
function auth_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: 'upd',
			dataType: 'json',
			data:{
				"id":id,
				"_token":"{{csrf_token()}}"
			},
			success: function(data){
				if(data.code==200){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}else{
					layer.msg('删除失败!',{icon:1,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
/*权限-停用*/
function auth_btn(obj,id,status){
	$.ajax({
		type: 'POST',
		url: 'upds',
		dataType: 'json',
		data:{
			"id":id,
			"status":status,
			"_token":"{{csrf_token()}}"
		},
		success: function(data){
			if(data.code==200){
				$(this).parent().prev().find("span").html(1);				
				//$(obj).parents("tr").remove();2
				//layer.msg('已删除!',{icon:1,time:1000});
			}else{
				alert('失败')
				//layer.msg('删除失败!',{icon:1,time:1000});
			}
		},
		error:function(data) {
			console.log(data.msg);
		},
	});		
}
</script> 
@endsection