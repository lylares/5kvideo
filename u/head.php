<div class="wdu-main-info wdu-min-width">
    <div class="wdu-part-case">
        <div class="wdu-user-head wdu-marg-top wdu-back-whits">

            <div class="wdu-padding wdu-part-rows wdu-back-whits wdu-hide-md">
                 <div class="wdu-user-cards" style="text-align: -webkit-center;width: 100%;">
    <img style="max-width:50px;border-radius: 100%;" src ="<?php echo $_COOKIE['user_avatar'];?>">
    <p><?php echo $row['u_nickname'];?></p>

  </div>

                <ul class="wdu-user-brief wdu-part-rows wdu-back-whits">
                    <li class="wdu-padding-x wdu-text-center wdu-col-xs4">
                        <span class="wdu-visible wdu-text-gules"><?php echo $row['u_points'];?></span>
                        <span class="wdu-visible">我的积分</span>
                    </li>
                    <li class="wdu-padding-x wdu-text-center wdu-line-left wdu-col-xs4">
                        <span class="wdu-visible wdu-text-gules">
                        <?php
                        $row1=$db->getRow('select * from wudu_user_group where ug_id='.$row['u_group'].'');
                        if($row1){echo $row1['ug_name'];}
                        ?>
                        </span>
                        <span class="wdu-visible">我的等级</span>
                     </li>
                     <li class="wdu-padding-x wdu-text-center wdu-line-left wdu-col-xs4">
                         <span class="wdu-visible wdu-text-gules">0</span>
                         <span class="wdu-visible">推广次数</span>
                     </li>
                 </ul>
            </div>
       </div>
<div class="wdu-part-rows">
<div class="wdu-main-left wdu-col-xs12 wdu-col-md4 wdu-col-lg3">
<div class="wdu-part-layout wdu-back-whits wdu-margin-right wdu-hide-xs wdu-hide-sm wdu-show-md-block">
  <div class="wdu-user-cards" style="text-align: -webkit-center;width: 100%;">
    <img style="max-width:50px;border-radius: 100%;" src ="<?php echo $_COOKIE['user_avatar'];?>">
    <p><?php echo $_COOKIE['user_name'];?></p>

  </div>
<ul class="wdu-user-brief wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-text-center wdu-col-xs4">
<span class="wdu-visible wdu-text-gules"><?php echo $row['u_points'];?></span>
<span class="wdu-visible">积分</span>
</li>
<li class="wdu-padding-x wdu-text-center wdu-line-left wdu-col-xs4">
<span class="wdu-visible wdu-text-gules">
 <?php
 $row1=$db->getRow('select * from wudu_user_group where ug_id='.$row['u_group'].'');
if($row1){
  echo $row1['ug_name'];
?>						
<?php }?></span>
<span class="wdu-visible">等级</span>
</li>
<li class="wdu-padding-x wdu-text-center wdu-line-left wdu-col-xs4">
<span class="wdu-visible wdu-text-gules">0</span>
<span class="wdu-visible">推广</span>
</li>
</ul>
</div>
<div class="wdu-part-layout wdu-back-whits wdu-margin-right">
<ul class="wdu-user-list wdu-part-rows wdu-back-whits">
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom wdu-hide-md">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./">
<span class="wdu-col-xs4 wdu-part-eone">我的资料</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom wdu-hide wdu-show-md-block">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./">
<span class="wdu-col-xs4 wdu-part-eone">我的资料</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>

<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./favs.html">
<span class="wdu-col-xs4 wdu-part-eone">我的收藏</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./history.html">
<span class="wdu-col-xs4 wdu-part-eone">播放记录</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>

<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./popedom.html">
<span class="wdu-col-xs4 wdu-part-eone">我的权限</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./buy.html">
<span class="wdu-col-xs4 wdu-part-eone">充值中心</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./orders.html">
<span class="wdu-col-xs4 wdu-part-eone">充值记录</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<li class="wdu-padding-x wdu-part-rows wdu-line-bottom">
<a class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows" href="./upgrade.html">
<span class="wdu-col-xs4 wdu-part-eone">升级会员</span>
<span class="wdu-col-xs8 wdu-part-eone wdu-text-right"><i class="wdu-icon-font wdu-icon-you"></i></span>
</a>
</li>
<div class="wdu-part-rows wdu-padding-top"></div>

</ul>
</div>
</div>
