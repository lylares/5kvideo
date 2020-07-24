<?php
include('../init.php');

require("chk.php");

mui_head("充值记录",0);
?>
<?php
$sql = 'select * from wudu_user where u_name="'.$_SESSION['uid'].'"';                        
$row=$db->getRow($sql);
if($row){?>

<?php require('head.php');?>



<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9">
<div class="wdu-part-layout wdu-back-whits">
<div class="wdu-user-title wdu-list-head wdu-part-rows wdu-padding wdu-line-bottom">
<h2 class="wdu-font-xvi wdu-padding"><a class="wdu-text-green wdu-more" href="/index.php/user/orders.html">在线充值记录</a>&nbsp;&nbsp;<a class="wdu-more" href="/index.php/user/cards.html">充值卡记录</a></h2>
<ul class="wdu-part-tips wdu-padding">
<li class="wdu-padding">
<a class="wdu-more" href="/index.php/user/index.html">返回</a>
</li>
</ul>
</div>
<ul class="wdu-user-list wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-part-rows">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs3 wdu-col-sm1 wdu-part-eone">状态</span>
<span class="wdu-col-xs4 wdu-col-sm4 wdu-part-eone">单号</span>
<span class="wdu-col-xs3 wdu-col-sm1 wdu-part-eone wdu-text-right">金额</span>
<span class="wdu-hide-xs wdu-col-sm1 wdu-part-eone wdu-text-right">积分</span>
<span class="wdu-hide-xs wdu-col-sm4 wdu-part-eone wdu-text-right">时间</span>
<span class="wdu-col-xs2 wdu-col-sm1 wdu-part-eone wdu-text-right">操作</span>
</div>
</li>
</ul>
</div>
</div>
</div>
</div></div>
<? }?>
<?php require('footer.php');?>