@extends('common/home/public')

@section('title', '申请售后服务')

@section('content')

    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">修改密码</a></h2></div>
    	<div class="user-content">
            @include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>申请售后服务</h2></div>
                <div class="repairorder-info">
                	<h2>我们能为您提供什么帮助？</h2>
                    <h3>请选择您所需要的服务项目并填写详细信息，并确认提交，我们将尽力帮您解决！</h3>
                </div>
                <div class="repairorder-class">
                	<ul>
                    	<li class="active"><p style="background:url(images/repairorder-1.png) 100px center no-repeat;">退货</p></li>
                        <li><p style="background:url(images/repairorder-2.png) 100px center no-repeat;">换货</p></li>
                        <li><p style="background:url(images/repairorder-3.png) 100px center no-repeat;">维修</p></li>
                    </ul>
                </div>
                <div class="repairorder-pro">
                	<h2 class="repairorder-title">请选择商品<span>*</span></h2>
                    <ul>
                        <li>
                            <img src="images/big-pro3.jpg" width="60" height="60" />
                            <h2>只能手机H3  黑色</h2><br />
                            <span>货号：1221512316512185</span>
                            <i></i>
                        </li>
                        <li>
                            <img src="images/big-pro3.jpg" width="60" height="60" />
                            <h2>只能手机H3  黑色</h2><br />
                            <span>货号：1221512316512185</span>
                            <i></i>
                        </li>
                        <li>
                            <img src="images/big-pro3.jpg" width="60" height="60" />
                            <h2>只能手机H3  黑色</h2><br />
                            <span>货号：1221512316512185</span>
                            <i></i>
                        </li>
                    </ul>
                </div>
                <div class="repairorder-pro">
                	<h2 class="repairorder-title">描述问题<span>*</span></h2>
					<textarea></textarea>
                </div>
                <div class="repairorder-pro">
                	<h2 class="repairorder-title">确认联系方式<span>*</span></h2>
                    <dl class="item-selected">
                        <dt><strong>黄超</strong><pre>139****2057</pre></dt>
                        <dd>
                            <p>河南 郑州市 管城回族区</p>
                            <p>陇海东路126号新天地3D43(450000)</p>
                            <span class="edit-btn">编辑</span>
                        </dd>
                    </dl>
                </div>
                
                <!--隐藏框-->
                <div class="theme-popover-mask"></div>
                <div class="theme-popover">
                  <div class="xm-edit-addr-box" id="J_editAddrBox">
                        <div class="bd-box">
                                    <div class="box-li">
                                        <input type="text" id="Consignee" maxlength="15" value="收货人姓名" onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                        <p class="tip-msg tipMsg"></p>
                                    </div>
                                    <div class="box-li">
                                        <input type="text" id="Telephone" value="11位手机号" onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                        <p class="tip-msg tipMsg"></p>
                                        <p style="font-size:12px; color:#666;">如果不修改手机号，请重新输入原收货手机号 <font color="#FF3300">139****2057</font> 以便确认</p>
                                    </div>
                                    <div class="box-li">
                                        <select id="Provinces" class="select-1">
                                            <option>省份/自治区</option>
                                        </select>
                                        <select id="Citys" class="select-2">
                                            <option>城市/地区/自治州</option>
                                        </select>
                                        <div class="clr10"></div>
                                  <select id="Countys" class="select-3">
                                            <option>区/县</option>
                                        </select>
                                        <div class="clr10"></div>
                                    <textarea  class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                                        <p class="tip-msg tipMsg"></p>
                                    </div>
                                    <div class="box-li">
                                        <input type="text" id="Zipcode" class="input" value="邮政编码"  onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                        <p class="zipcode-tip" id="zipcodeTip"></p>
                                        <p class="tip-msg tipMsg"></p>
                                    </div>
                                    <div class="box-li">
                                        <input type="text" id="Tag" class="input" value='地址标签：如"家"、"公司"。限5个字内'  onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}">
                                        <p class="tip-msg tipMsg"></p>
                                    </div>
                        </div>
                        <div class="ft">
                          <button  type="button"  class="close" id="J_editAddrCancel">重新选择地址</button>
                           <button type="button" class="J_editAddrOk" id="J_editAddrOk">确认收货地址</button>
                        </div>
                    </div>
                </div>


                <!-- 确认提交 -->
                <div class="clr20"></div>
                <div class="box-ft">
                    <a href="repairorder-success.html" class="next">确认提交</a>
                </div>

            </div>
        </div>



	</div>
    
    <div class="clear50"></div>
@endsection