<?php
require('../init.php');
require("chk.php");

mui_head('个人资料',0) ;
?>
<?php
$sql = 'select * from wudu_user where u_name="'.$_SESSION['uid'].'"';                        
$row=$db->getRow($sql);
if($row){?>

<?php require('head.php');?>

<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9">
<div class="wdu-part-layout wdu-back-whits">
<div class="wdu-user-title wdu-list-head wdu-part-rows wdu-padding wdu-line-bottom">
<h2 class="wdu-font-xvi wdu-padding">修改资料</h2>
<ul class="wdu-part-tips wdu-padding">
<li class="wdu-padding">
<a class="wdu-more" href="/index.php/user/index.html">返回</a>
</li>
</ul>
</div>
<form class="wdu-user-form wdu-user-info wdu-part-rows" action="/index.php/user/info.html" data-role="/index.php/user/unbind.html">
<ul class="wdu-user-list wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">用户名</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone">qazvfd</span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">原密码</span>
<span class="wdu-col-xs4 wdu-col-sm6 wdu-part-eone"><input type="password" name="user_pwd" placeholder="原密码" maxlength="20" /></span>
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone wdu-text-right"><span class="wdu-user-tips wdu-text-gules">＊</span></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">新密码</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input type="password" name="user_pwd1" placeholder="新密码" maxlength="20" /></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">重复密码</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input type="password" name="user_pwd2" placeholder="重复密码" maxlength="20" /></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">QQ号码</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input type="tel" name="user_qq" value="" placeholder="QQ号码" /></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">邮件地址</span>
<span class="wdu-col-xs6 wdu-col-sm6 wdu-part-eone"><input type="email" name="user_email" value="" placeholder="邮件地址" /></span>
<span class="wdu-col-xs2 wdu-col-sm3 wdu-part-eone wdu-text-right"><a href="/index.php/user/bind.html?ac=email">绑定</a></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">手机号码</span>
<span class="wdu-col-xs6 wdu-col-sm6 wdu-part-eone"><input type="tel" name="user_phone" value="" placeholder="手机号码" /></span>
<span class="wdu-col-xs2 wdu-col-sm3 wdu-part-eone wdu-text-right"><a href="/index.php/user/bind.html?ac=phone">绑定</a></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">密保问题</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input type="text" name="user_question" value="" placeholder="密保问题" /></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">密保答案</span>
<span class="wdu-col-xs7 wdu-col-sm6 wdu-part-eone"><input type="text" name="user_answer" value="" placeholder="密保答案" size="40" /></span>
<span class="wdu-col-xs1 wdu-col-sm3 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone wdu-hide-xs">&nbsp;</span>
<a class="wdu-subm-infos wdu-col-xs7 wdu-col-sm6 wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12">保存</a>
</li>
</ul>
</form>
</div>
</div>
</div>
</div></div>
<? }?>
<?php require('footer.php');?>