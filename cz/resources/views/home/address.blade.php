@extends('common/home/public')

@section('title', '我的收货地址')

@section('content')


    <!--main-->
	<div class="main">
    	<div class="current-position"><h2><a href="#">首页</a> > <a href="#">个人中心</a> > <a href="#">收货地址管理</a></h2></div>
    	<div class="user-content">
        	@include('common/home/presonalCenter')
            
        	<div class="user-right">
            	<div class="user-right-title"><h2>管理收货地址</h2></div>
                <div class="checkout-box address-k">
                    <div class="xm-address-list" id="checkoutAddrList">
                        <dl class="item selected">
                            <dt><strong class="itemConsignee">庄明勇</strong></dt>
                            <dd>
                                <p class="tel">159****3461</p>
                                <p class="itemRegion">福建 厦门市 思明区</p>
                                <p class="itemStreet">福建厦门思明区湖滨四里64号湖光大厦11楼A座(361001)</p>
                                <span class="edit-btn theme-login">编辑</span>
                                <span class="del-btn">删除</span>
                            </dd>
                        </dl>
                        <dl class="item selected">
                            <dt><strong class="itemConsignee">庄明勇</strong></dt>
                            <dd>
                                <p class="tel">159****3461</p>
                                <p class="itemRegion">福建 厦门市 思明区</p>
                                <p class="itemStreet">福建厦门思明区湖滨四里64号湖光大厦11楼A座(361001)</p>
                                <span class="edit-btn theme-login">编辑</span>
                                <span class="del-btn">删除</span>
                            </dd>
                        </dl>
                
                        <div class="item use-new-addr"  id="J_useNewAddr">
                             <span class="icon-add theme-login"></span> 
                            使用新地址
                        </div>
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
                </div>
            </div>
        </div>

	</div>
    
    
    -->
    @endsection
<script type="text/javascript">
$(function(){
    //弹出框效果
    $('.theme-login').click(function(){
        $('.theme-popover-mask').show();
        $('.theme-popover-mask').height($(document).height());
        $('.theme-popover').slideDown(200);
    })
    $('.theme-popover .close').click(function(){
        $('.theme-popover-mask').hide();
        $('.theme-popover').slideUp(200);
    })
    
    //删除
   $(".del-btn").click(function(){
            var icurrent=$(this).parents('dl').remove();
    });
})
</script>
