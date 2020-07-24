<?php
require('../init.php');
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

mui_head("用户注册",0);
?>
<div class="wdu-main-info wdu-min-width">
    <div class="wdu-part-case">
        <div class="wdu-part-layout wdu-back-whits wdu-part-height">
            <div class="wdu-user-login wdu-part-core">
                <div class="wdu-list-head wdu-part-rows wdu-padding">
                    <h2 class="wdu-font-xvii wdu-text-center">用户注册</h2>
                </div>
               <form class="wdu-user-form wdu-user-width wdu-part-rows" id="post-content" >
    
     <input type="email" name="email" id="email" placeholder="邮箱" autocomplete="off" class="wdu-user-text wdu-col-xs12">
     <input type="text" name="rec" id="rec"style ="display:none" value="<?php echo trim($_GET['rec']);?>">
     <input class="wdu-user-text wdu-col-xs8" id="verify" name="verify" placeholder="请输入验证码"  />
     <img class="wdu-user-code wdu-user-text wdu-col-xs4" height="45" src="<?php echo $wudu_domain;?>data/verifycode.html" onClick="this.src=this.src+'?'" title="看不清楚? 换一张！" />
     <span class="wdu-user-tips wdu-text-gules wdu-padding-v wdu-visible wdu-col-xs12">　</span>
     <div class="wdu-subm-regis wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12" id="reg_button">注册</div>
   <a class="wdu-padding wdu-col-xs3 wdu-text-left" href="<?php echo $wudu_domain;?>u/findpass.html">忘记密码</a>
<a class="wdu-padding wdu-col-xs3 wdu-text-right" href="<?php echo $wudu_domain;?>u/login.html">立即登录</a>
                </form>
      
              </div>
          </div>
     </div>
</div>

<?php require('footer.php');