<?php 
require("../init.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>登陆与注册|雾都TV</title>
<link rel="stylesheet" href="<?php echo $wudu_domain;?>public/assets/css/style.login.css">
<link rel="stylesheet" href="<?php echo $wudu_domain;?>public/assets/css//iconfont.css">
<script src="https://lib.baomitu.com/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/v3/js/store.js"></script>
<script src="https://cdn.bootcss.com/blueimp-md5/2.10.0/js/md5.min.js"></script>
<script> var _wdu_playinfo = { siteUrl: "<?php echo $wudu_domain;?>" }</script>

</head>
<body>
<div class="login-nav fix">
	<ul class="f-r">
		<li><a href="/">首页</a></li>
	</ul>
</div>
<div class="login-banner" style="background: url(https://ww2.sinaimg.cn/large/007vLMz8ly1g0sd1zk7t7j31hc0u0doz.jpg) center /cover no-repeat;">
</div>
<div class="login-box">
	<div class="box-con tran">
		<div class="login-con f-l">
			<div class="form-group">
				<input type="text" placeholder="邮箱" id="username">
				<span class="error-notic">邮箱不正确</span>
			</div>
			<div class="form-group">
				<input type="password" placeholder="密码" id="password">
				<span class="error-notic">密码不正确</span>
			</div>
 
				<div style="margin-top: 10px;"><input type="checkbox" name="cookietime" value="604800" style="width:15px;height: 16px;">
                  <span class="cinfo" style="margin-left:15px">一周内自动登陆</span>
          </div>
			
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran" id="login_button">登录</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif" style="display:block">
				</button>
			</div>
			<div class="from-line">
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-signup a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran"></i></a>
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-reset a-tag tran">忘记密码？重置 <i class="iconfont tran"></i></a>
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-other a-tag tran">使用第三方帐号登录<i class="iconfont tran"></i></a>
			</div>
		</div>
		<div class="signup f-l">
			<div class="form-group">
				<div class="signup-form">
					<input type="text" placeholder="邮箱" class="email-mobile" onblur="verify.verifyEmail(this)">
					<!-- <a href="javascript:;" class="signup-select">手机注册</a> -->
				</div>
				<span class="error-notic">邮箱格式不正确</span>
			</div>
			<div class="signup-email">
				<div class="form-group">
					<input type="text" placeholder="  昵称">
				</div>
				<div class="form-group">
					<input type="password" placeholder="密码（字母、数字，至少6位）" onblur="verify.PasswordLenght(this)">
					<span class="error-notic">密码长度不够</span>
				</div>
				<div class="form-group">
					<button type="submit" class="tran pr">
					<a href="javascript:;" class="tran">注册</a>
					<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
					</button>
				</div>
				<p class="view-clause">
					点击注册，即同意我们的 <a href="">用户隐私条款</a>
				</p>
			</div>
			<div class="signup-tel" style="display:none">
				<div class="signup-form" id="message-inf" style="display:none">
					<input type="text" placeholder="短信验证码" style="width:180px;" onblur="verify.VerifyCount(this)">
					<a href="javascript:;" class="reacquire">重新获取（59）</a>
					<span class="error-notic">验证码输入错误</span>
				</div>
				<div class="form-group">
					<button type="submit" class="tran get-message pr">
					<a href="javascript:;" class="tran">获取短信验证码</a>
					<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
					</button>
				</div>
			</div>
			<div class="from-line">
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-login a-tag tran blue-border">已有帐号？登录<i class="iconfont tran"></i></a>
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-other a-tag tran">使用第三方帐号登录<i class="iconfont tran"></i></a>
			</div>
		</div>
		<div class="other-way f-l">
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">QQ帐号登录</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">新浪微博帐号登录</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">微信帐号登录</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">网易帐号登录</a>
				<img class="loading" src=".<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<div class="from-line">
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-signup a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran"></i></a>
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-login a-tag tran">已有帐号？登录<i class="iconfont tran"></i></a>
			</div>
		</div>
		<div class="mimachongzhi f-l">
			<div class="form-group">
				<input type="text" placeholder="请输入您的邮箱地址">
				<span class="error-notic">邮箱格式不正确</span>
			</div>
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">发送重置密码邮件</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<div class="from-line">
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-signup	a-tag tran blue-border">还没有帐号？免费注册<i class="iconfont tran"></i></a>
			</div>
			<div class="form-group">
				<a href="javascript:;" class="move-login a-tag tran">已有帐号？登录<i class="iconfont tran"></i></a>
			</div>
		</div>
		<div class="mobile-success f-l">
			<p>
				手机号 <span>186****7580</span> 验证成功
			</p>
			<p>
				请完善您的账号信息，您也可以<a href="javascript:0">绑定现有账号</a>
			</p>
			<div class="form-group">
				<input type="text" placeholder="邮箱" class="email-mobile" onblur="verify.verifyEmail(this)">
				<span class="error-notic">邮箱格式不正确</span>
			</div>
			<div class="form-group">
				<input type="text" placeholder="昵称">
			</div>
			<div class="form-group">
				<input type="password" placeholder="密码（字母、数字，至少6位）" onblur="verify.PasswordLenght(this)">
				<span class="error-notic">密码长度不够</span>
			</div>
			<div class="form-group">
				<button type="submit" class="tran pr">
				<a href="javascript:;" class="tran">注册</a>
				<img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">
				</button>
			</div>
			<p class="view-clause">
				点击注册，即同意我们的 <a href="">用户隐私条款</a>
			</p>
		</div>
	</div>
</div>

<script>
		var _handle='';//储存电话是否填写正确
		$(function(){
			$(".signup-form input").on("focus",function(){
				$(this).parent().addClass("border");
			});
			$(".signup-form input").on("blur",function(){
				$(this).parent().removeClass("border");
			})
			//注册方式切换
			$(".signup-select").on("click",function(){
				var _text=$(this).text();
				var $_input=$(this).prev();
				$_input.val('');
				if(_text=="手机注册"){
					$(".signup-tel").fadeIn(200);
					$(".signup-email").fadeOut(180);
					$(this).text("邮箱注册");
					$_input.attr("placeholder","手机号码");
					$_input.attr("onblur","verify.verifyMobile(this)");
					$(this).parents(".form-group").find(".error-notic").text("手机号码格式不正确")
				}
				if(_text=="邮箱注册"){
					$(".signup-tel").fadeOut(180);
					$(".signup-email").fadeIn(200);
					$(this).text("手机注册");
					$_input.attr("placeholder","邮箱");
					$_input.attr("onblur","verify.verifyEmail(this)");
					$(this).parents(".form-group").find(".error-notic").text("邮箱格式不正确")
				}
			});
			//步骤切换
			var _boxCon=$(".box-con");
			$(".move-login").on("click",function(){
				$(_boxCon).css({
					'marginLeft':0
				})
			});
			$(".move-signup").on("click",function(){
				$(_boxCon).css({
					'marginLeft':-320
				})
			});
			$(".move-other").on("click",function(){
				$(_boxCon).css({
					'marginLeft':-640
				})
			});
			$(".move-reset").on("click",function(){
				$(_boxCon).css({
					'marginLeft':-960
				})
			});
			$("body").on("click",".move-addinf",function(){
				$(_boxCon).css({
					'marginLeft':-1280
				})
			});
			//获取短信验证码
			var messageVerify=function (){
				$(".get-message").on("click",function(){
					if(_handle){
						$("#message-inf").fadeIn(100)
						$(this).html('<a href="javascript:;">下一步</a><img class="loading" src="<?php echo $wudu_domain;?>public/assets/images/loading.gif">').addClass("move-addinf");
					}
				});
			}();
		});
		//表单验证
		function showNotic(_this){
			$(_this).parents(".form-group").find(".error-notic").fadeIn(100);
            $(_this).focus();
		}//错误提示显示
		function hideNotic(_this){
			$(_this).parents(".form-group").find(".error-notic").fadeOut(100);
		}//错误提示隐藏
		var verify={
			verifyEmail:function(_this){
				var validateReg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var _value=$(_this).val();
            	if(!validateReg.test(_value)){
            		showNotic(_this)
            	}else{
            		hideNotic(_this)
            	}
			},//验证邮箱
			verifyMobile:function(_this){
				var validateReg = /^((\+?86)|(\(\+86\)))?1\d{10}$/;
				var _value=$(_this).val();
            	if(!validateReg.test(_value)){
            		showNotic(_this);
            		_handle=false;
            	}else{
            		hideNotic(_this);
            		_handle=true;
            	}
            	return _handle
			},//验证手机号码
			PasswordLenght:function(_this){
				var _length=$(_this).val().length;
				if(_length<6){
					showNotic(_this)
				}else{
            		hideNotic(_this)
            	}
			},//验证设置密码长度
			VerifyCount:function(_this){
				var _count="123456";
				var _value=$(_this).val();
				console.log(_value)
				if(_value!=_count){
					showNotic(_this)
				}else{
					hideNotic(_this)
				}
			}//验证验证码
		}
	</script>
<script>
  $("body").on("click",".wudu-slider",function(){
    
    var target = $(this).data("target");
    window.open(target);


})
</script>
<script src="https://www.5kvideo.cc/public/assets/js/public.js"></script>
<script src="https://file.5kvideo.cc/layer/layer.js"></script>
<script src="https://www.5kvideo.cc/public/assets/js/ustore.js"></script>
<script>
var histemp = store.get('history')? store.get('history'): [];
$(function() {

  $.ajax({
			type: "GET",
			url: "https://www.5kvideo.cc/api/v1/get/user",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {timestamp:"1552379472"},
			success: function(data) {
			var obj;
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }
			 console.log(obj.code)
			if(obj.code==1)
			{
              
              //$("#user-avatar").attr("src",obj.ret.avatar);

			}

			},
			error: function(request) {
			},
		})
})

</script>
    <!-- 百度统计代码放在这里 ↓↓↓ -->
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6215debcd516a89d323747d07433cbd2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

    <!-- 百度统计代码放在这里 ↑↑↑ -->
</body>
</html>