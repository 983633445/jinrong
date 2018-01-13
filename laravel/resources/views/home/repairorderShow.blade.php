@extends('common/home/public')

@section('title', '退货单')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">退货单</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>换货单号：HH1515456454545</h2></div>
                <div class="order" style="padding-left:20px;">
					<h2 class="rep-show-title">换货进程</h2>
                    <div class="process-k">
                        <p><strong><b>处理时间</b></strong><span><b>处理进度</b></span></p>
                        <p><strong>2015-01-05  08:15:30</strong><span>审核中</span></p>
                        <p><strong>2015-01-05  08:15:30</strong><span>已申请换货</span></p>
                    </div>
                    <h2 class="rep-show-title">退回地址</h2>
                    <div class="process-address">
                    	<p>我们将在审核通过后显示退回地址，请您耐心等待... </p>
                    </div>
                    <h2 class="rep-show-title">收货地址</h2>
                    <div class="process-address">
                    	<p><span>收货人：</span>某某某</p>
                        <p><span>电话：</span>福建省泉州市丰泽区西湖街紫荆广场2号楼333室</p>
                        <p><span>地址：</span>18659594551</p>
                    </div>
                    <h2 class="rep-show-title">售后服务商品</h2>
                    <div class="process-pro-list">
                        <table width="700"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <th>商品名称</th>
                            <th>商品编号</th>
                            <th>商品单号</th>
                          </tr>
                          <tr>
                            <td>小米手机1S 电信版 其它 黑色</td>
                            <td>HH1515456454545</td>
                            <td>HH1515456454545</td>
                          </tr>
                          <tr>
                            <td>小米手机小米手机小米手机小米手机1S 电信版 其它 黑色</td>
                            <td>HH1515456454545</td>
                            <td>HH1515456454545</td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>



	</div>
@endsection