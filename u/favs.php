<?php
include('../init.php');

require("chk.php");

mui_head("我的收藏",0);
?>
<?php
$sql = 'select * from wudu_user where u_name="'.$_SESSION['uid'].'"';                        
$row=$db->getRow($sql);
if($row){?>
<?php require('head.php');?>  
  
<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9">
<div class="wdu-part-layout wdu-back-whits">
<div class="wdu-user-title wdu-list-head wdu-part-rows wdu-padding wdu-line-bottom">
<h2 class="wdu-font-xvi wdu-padding">我的收藏</h2>
<ul class="wdu-part-tips wdu-padding">
<li class="wdu-padding">
<a class="wdu-more" href="/index.php/user/index.html">返回</a>
</li>
</ul>
</div>
<form class="wdu-user-form wdu-user-info" action="/index.php/user/ulog_del.html">
<ul class="wdu-padding-v wdu-part-rows">
<li class="wdu-padding-v wdu-col-xs3 wdu-col-md1 wdu-part-rows">
<a class="wdu-col-xs12 wdu-rims-info wdu-btns-info wdu-btns-green" onClick="fed.myuser.all('ids[]');">全选</a>
</li>
<li class="wdu-padding-v wdu-col-xs3 wdu-col-md1 wdu-part-rows">
<a class="wdu-col-xs12 wdu-rims-info wdu-btns-info wdu-btns-green" onClick="fed.myuser.other('ids[]');">反选</a>
</li>
<li class="wdu-padding-v wdu-col-xs3 wdu-col-md1 wdu-part-rows">
<a class="wdu-favs-del wdu-col-xs12 wdu-rims-info wdu-btns-info wdu-btns-green">删除</a>
</li>
<li class="wdu-padding-v wdu-col-xs3 wdu-col-md1 wdu-part-rows">
<a class="wdu-favs-clear wdu-col-xs12 wdu-rims-info wdu-btns-info wdu-btns-green">清空</a>
</li>
</ul>
<ul class="wdu-user-list wdu-part-rows wdu-line-top">
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs9 wdu-col-sm6 wdu-part-eone"><input class="wdu-form-comp" name="ids[]" type="checkbox" value="288"><a target="_blank" href="/index.php/vod/play/id/25309/sid/2/nid/1.html">[泰国剧] 黑帮卧底第二季 [25309-2-1]</a></span>
<span class="wdu-col-xs3 wdu-col-sm3 wdu-part-eone wdu-hide-xs"><a target="_blank" href="/index.php/vod/play/id/25309/sid/2/nid/1.html">重新观看</a></span>
<span class="wdu-col-xs3 wdu-col-sm3 wdu-part-eone wdu-text-right">消费积分:0</span>
</div>
</li>
</ul>
<script type="text/javascript">
if(document.getElementById('wdu-now')) document.getElementById('wdu-now').innerHTML='1';
if(document.getElementById('wdu-count')) document.getElementById('wdu-count').innerHTML='1';
</script>
</form>
</div>
</div>
</div>
</div></div>
<? }?>
<?php require('footer.php');?>