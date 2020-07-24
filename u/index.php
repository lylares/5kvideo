<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

require("../init.php");

require("chk.php");

mui_head('个人中心',0) ;

$uid = $_SESSION['uid'];
$sql = "select * from wudu_user where u_name= '$uid'";                        
$row=$db->getRow($sql);
if($row){?>
<?php require('head.php');?>
 
<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9 wdu-hide-xs wdu-hide-sm wdu-show-md-block">
<div class="wdu-part-layout wdu-back-whits">
<div class="wdu-user-title wdu-list-head wdu-part-rows wdu-padding wdu-line-bottom">
<h2 class="wdu-font-xvi wdu-padding">我的资料</h2>
<ul class="wdu-part-tips wdu-padding">
<li class="wdu-padding">
<a class="wdu-more" href="./info.html">修改</a>
</li>
</ul>
</div>
<ul class="wdu-user-list wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">用户名</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php
                                
								echo $row['u_nickname'];?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">所属会员组</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php
							 $row1=$db->getRow('select * from wudu_user_group where ug_id='.$row['u_group'].'');
							if($row1){
						?>
						<?php echo $row1['ug_name']?>
<?php
							}
						?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">到期时间</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php if($row['u_group']>1){ echo"<a  class='mll btn btn-default'>";echo date('Y-m-d',$row['u_end']);echo"</a>";};?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">账户积分</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php echo $row['u_points'];?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">QQ号码</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone">未填写</span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">邮件地址</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone">未填写</span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">联系电话</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone">未填写</span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">注册时间</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php echo $row['u_createtime'];?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">登录时间</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php echo $row['u_logintime'];?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">登录IP</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><?php echo $row['u_loginip'];?></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">推广次数</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone">0</span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
<li class="wdu-padding-x wdu-part-rows">
<div class="wdu-user-input wdu-visible wdu-font-xvi wdu-part-rows">
<span class="wdu-col-xs4 wdu-col-sm3 wdu-part-eone">推广链接</span>
<span class="wdu-col-xs7 wdu-col-sm8 wdu-part-eone"><input id="url" class="wdu-visible" value="" /></span>
<span class="wdu-col-xs1 wdu-col-sm1 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<? }?>
<?php require('footer.php');?>