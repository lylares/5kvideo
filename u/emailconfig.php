<?php include('../system/inc.php');
include("smtp.class.php");
$MailServer = $wudu_smtp; //SMTP服务器
    $MailPort = 465; //SMTP服务器端口
    $smtpMail = $wudu_muser; //SMTP服务器的用户邮箱
    $smtpuser = $wudu_muser; //SMTP服务器的用户帐号
    $smtppass = $wudu_mpwd; //SMTP服务器的用户密码
?>
