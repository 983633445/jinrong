<link rel="stylesheet" type="text/css" href="{{url('static/h-ui/css/H-ui.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('static/h-ui.admin/css/H-ui.admin.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('lib/Hui-iconfont/1.0.8/iconfont.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
<link rel="stylesheet" type="text/css" href="{{url('static/h-ui.admin/css/style.css')}}" />
<article class="cl pd-20" >
	<form action="add" method="get" class="form form-horizontal" id="form-admin-add" >
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所属权限：</label>
			<div class="formControls col-xs-4 col-sm-3"> <span class="select-box" style="width:150px;">
				<select class="select" id="p_id" name="p_id" size="1">
					<option value="0">顶级权限</option>
					<?php foreach ($data as $v): ?>
						<option value="{{$v->auth_id}}">{{$v->auth_name}}</option>
					<?php endforeach; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限名称：</label>
			<div class="formControls col-xs-6 col-sm-7">
				<input type="text" class="input-text" value="" placeholder="" id="auth_name" name="auth_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>控制器：</label>
			<div class="formControls col-xs-6 col-sm-7">
				<input type="text" class="input-text" value="" placeholder="" id="controller" name="controller">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>方法：</label>
			<div class="formControls col-xs-6 col-sm-7">
				<input type="text" class="input-text" value="" placeholder="" id="functions" name="functions">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="{{url('lib/jquery/1.9.1/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{url('lib/layer/2.4/layer.js')}}"></script> 
<script type="text/javascript" src="{{url('static/h-ui/js/H-ui.js')}}"></script> 
<script type="text/javascript" src="{{url('static/h-ui.admin/js/H-ui.admin.page.js')}}"></script> 

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{url('lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script> 
<script type="text/javascript" src="{{url('lib/jquery.validation/1.14.0/validate-methods.js')}}"></script> 
<script type="text/javascript" src="{{url('lib/jquery.validation/1.14.0/messages_zh.js')}}"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			auth_name:{
				required:true,
			},
			controller:{
				required:true,
			},
			function:{
				required:true,
			}
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid"
	});
	$(":submit").click(function(){
		 var p_id = $("#p_id").val();
		 var auth_name = $("#auth_name").val();
		 var controller = $("#controller").val();
		 var functions = $("#functions").val();
        $(this).ajaxSubmit({
            type: 'post', // 提交方式 get/post
            url: "add", // 需要提交的 url
            data: {
                "_token":"{{ csrf_token() }}",
                "functions":functions,
                "controller":controller,
                "auth_name":auth_name,
                "p_id":p_id
            },
            success: function(data) { 
                // data 保存提交后返回的数据，一般为 json 数据
                // 此处可对 data 作相关处理
                alert("添加成功!");
                var index = parent.layer.getFrameIndex(window.name);
				parent.$('.btn-refresh').click();
				parent.layer.close(index);
                
            }
        });
        return false; // 阻止表单自动提交事件
	});
});
</script>