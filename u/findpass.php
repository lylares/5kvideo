<?php
include('../init.php');
	
if(isset($_POST['submit'])){
$username = stripslashes(trim($_POST['name']));
$email = trim($_POST['email']);
// 检测用户名是否存在
$sql = "select u_id from wudu_user where u_name='$username' and u_email='$email'";
  $row=$db->getRow($sql);

if(!!$row){
$_data['u_password'] = md5(123456);
  
//$sql = 'update wudu_user set '.arrtoupdate($_data).' where ';

$res = $db->update("wudu_user",$_data,'u_name="'.$username.'"');

  
if ($res) {
	
$token =$row['u_question'];
require("emailconfig.php");
    //创建$smtp对象 这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp = new Smtp($MailServer, $MailPort, $smtpuser, $smtppass, true); 
    $smtp->debug = false; 
    $mailType = "HTML"; //信件类型，文本:text；网页：HTML
    $email = $email;  //收件人邮箱
    $emailTitle = "".$wudu_name."用户找回密码"; //邮件主题
    $emailBody = "亲爱的".$username."：<br/>感谢您在我站注册帐号。<br/>您的初始密码为123456<br/>如果此次找回密码请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- ".$wudu_name." 敬上</p>";
    
    // sendmail方法
    // 参数1是收件人邮箱
    // 参数2是发件人邮箱
    // 参数3是主题（标题）
    // 参数4是邮件主题（标题）
    // 参数4是邮件内容  参数是内容类型文本:text 网页:HTML
    $rs = $smtp->sendmail($email, $smtpMail, $emailTitle, $emailBody, $mailType);
if($rs==true){
echo '<script>alert("请登录到您的邮箱查看您的密码！");window.history.go(-1);</script>';
}else{
echo "找回密码失败";
}

}
}
}
mui_head("找回密码",0);?>
<script type="text/javascript">
function chk_form(){
var user = document.getElementById("user");
if(user.value==""){
alert("用户名不能为空！");
return false;
//user.focus();
}
var email = document.getElementById("email");
if(email.value==""){
alert("Email不能为空！");
return false;
//email.focus();
}
var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
if(!preg.test(email.value)){ 
alert("Email格式错误！");
return false;
//email.focus();
}
}
</script>

<div class="wdu-main-info wdu-min-width">
<div class="wdu-part-case">
<div class="wdu-part-layout wdu-back-whits wdu-part-height" style="min-height:35rem">
<div class="wdu-user-login wdu-part-core">
<div class="wdu-list-head wdu-part-rows wdu-padding">
<h2 class="wdu-font-xvii wdu-text-center">找回密码</h2>
</div>
<form class="wdu-user-form wdu-user-width wdu-part-rows" method="post" onsubmit="return chk_form();">
<input class="wdu-user-text wdu-col-xs12" type="text" name="name" id="user" placeholder="用户名" />
<input class="wdu-user-text wdu-col-xs12" type="text" name="email" id="email" placeholder="注册邮箱" />
<input class="wdu-user-text wdu-col-xs12" type="text" name="user_answer" placeholder="请输入密保答案" />
<input class="wdu-user-text wdu-col-xs12" type="password" name="user_pwd" placeholder="请输入新密码" maxlength="20" />
<input class="wdu-user-text wdu-col-xs12" type="password" name="user_pwd2" placeholder="再次输入新密码" maxlength="20" />
<input class="wdu-user-text wdu-col-xs8" type="tel" name="verify" placeholder="请输入验证码" maxlength="4" />
<img class="wdu-user-code wdu-user-text wdu-col-xs4" height="45" src="/data/verifycode.html" onClick="this.src=this.src+'?'" title="看不清楚? 换一张！" />
<span class="wdu-user-tips wdu-text-gules wdu-padding-v wdu-visible wdu-col-xs12">　</span>
<button class="wdu-subm-finds wdu-user-submit wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12" name="submit" type="submit">提交</button>
<a class="wdu-padding wdu-col-xs3 wdu-text-left" href="/u/reg.html">注册账号</a>
<a class="wdu-padding wdu-col-xs6 wdu-text-center" href="javascript:;">&nbsp;</a>
<a class="wdu-padding wdu-col-xs3 wdu-text-right" href="/u/login.html">立即登录</a>
</form>
</div>
</div>
</div></div>
<?php
require('footer.php');?>

