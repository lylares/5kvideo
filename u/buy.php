<?php

require("../init.php");
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

require("chk.php");

mui_head('购买',0) ;
	?>
<?php
$sql = 'select * from wudu_user where u_name="'.$_SESSION['uid'].'"';                        
$row=$db->getRow($sql);
if($row){?>
<?php require('head.php');?>

  

<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9">
<div class="wdu-part-layout wdu-back-whits">
<div class="wdu-user-title wdu-list-head wdu-part-rows wdu-padding wdu-line-bottom">
<h2 class="wdu-font-xvi wdu-padding">充值中心</h2>
<ul class="wdu-part-tips wdu-padding">
<li class="wdu-padding">
<a class="wdu-more" href="/index.php/user/index.html">返回</a>
</li>
</ul>
</div>
<form class="wdu-user-form wdu-user-info wdu-part-rows" action="/index.php/user/buy.html" data-pay="/index.php/user/pay.html">
<ul class="wdu-user-list wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">充值金额</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input name="price" value="10" placeholder="充值金额"></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs12 wdu-part-eone">最小充值金额为10元，1元=1积分</span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone wdu-hide-xs">&nbsp;</span>
<a class="wdu-subm-price wdu-col-xs7 wdu-col-sm6 wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12">确认</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-top wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">联系站长</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><a href="https://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes" target="_blank">QQ:123456</a></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">在线购卡</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><a href="" target="_blank">点我购买</a></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">充值卡号</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input name="cardnum" maxlength="40" placeholder="充值卡号"></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">充值卡密</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input name="cardpwd" maxlength="40" placeholder="充值卡密"></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone wdu-hide-xs">&nbsp;</span>
 <a class="wdu-subm-cards wdu-col-xs7 wdu-col-sm6 wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12">确认</a>
</li>
</ul>
</form>
</div>
</div>
</div>
</div></div>
<? }?>
<?php require('footer.php');?>