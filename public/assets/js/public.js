
$(function(){


  if (store.enabled) {
        var theme = window.globalConfig.currenTheme = store.get('theme')? store.get('theme'): window.globalConfig.currenTheme;
        var themeChanged = store.get('userChangeTheme')? store.get('userChangeTheme'): window.globalConfig.userInfo.userChangeTheme;
  }
	
	if(theme){
		now = new Date(),hour = now.getHours() ;
      //hour= 22;
		if (hour>18&&hour < 23)
{
  if(!(theme == 'black'|| theme == 'golds')&& window.globalConfig.userInfo.logined ==1 && themeChanged ==0){
	layer.confirm('是否开启夜间模式？', {
       title: '主题切换',
  btn: ['立即开启','算了'] 
}, function(){
  wduThemeChange('golds');layer.closeAll();
    store.set("userChangeTheme",1);   
}, function(){

});
}

}else{

   store.set("userChangeTheme",0); 

}
		wduThemeChange(theme);
		
	}
	
$(".wdu-lazy").lazyload({effect: "fadeIn"});  

$(".wdu-navs-login").click(function(){
   var loginPanel = '<div class="wdu-part-mask wdu-part-full wdu-back-masks"></div>'+
	                    '<div class="wdu-mode-info wdu-event">'+
	                        '<div class="wdu-part-layout wdu-back-whits wdu-anim wdu-anim-scale">'+
		                        '<a class="wdu-mode-close" href="javascript:;">×</a>'+
		                    '<div class="wdu-user-login">'+
			                    '<div class="wdu-list-head wdu-part-rows wdu-padding">'+
				                    '<h2 class="wdu-font-xviii wdu-text-center">登录</h2>'+
			                    '</div>'+
			                    '<form class="wdu-user-form wdu-user-width wdu-part-rows">'+
				                    '<input class="wdu-user-text wdu-col-xs12" type="text" id="username" placeholder="账号/邮箱" >'+
				                    '<input class="wdu-user-text wdu-col-xs12" type="password" id="password" placeholder="密码" >'+
								    '<input class="wdu-user-text wdu-col-xs8" type="tel" id="verify" placeholder="验证码" maxlength="6">'+
				                    '<img class="wdu-user-code wdu-user-text wdu-col-xs4" height="45" src="'+window.globalConfig.siteUrl+'data/verifycode.html" onclick="this.src=this.src" title="看不清楚? 换一张！">'+
								    '<span class="wdu-user-tips wdu-text-gules wdu-padding-v wdu-visible wdu-col-xs12">　</span>'+
                                    '<lable class="wdu-text-left" style="margin-bottom: 10px;"><input type="checkbox" name="cookietime" value="604800" />记住登陆</lable> '+
				                    '<div class="wdu-subm-login wdu-user-submit wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs12"  id="login_button">登录</div>'+
				                    '<a class="wdu-padding wdu-col-xs6 wdu-text-left" href="'+window.globalConfig.siteUrl+'u/login.html">忘记密码 ?</a>'+
								    '<a class="wdu-padding wdu-col-xs6 wdu-text-right" href="'+window.globalConfig.siteUrl+'u/login.html">新用户注册</a>'+
			                    '</form>'+
		                    '</div>'+
	                    '</div>'+
                    '</div>';
	$("body").append(loginPanel);
})	


$("body").on("click",".wdu-part-full",function(){
	$(this).remove();$(".wdu-mode-info").remove();
})

$("body").on("click",".wdu-mode-close",function(){
	$(".wdu-part-full").remove();$(".wdu-mode-info").remove();
})
  

  $("body").on("click",".wdu-theme-change",function(){
	var _theme_ = $(this).data('type');
    wduThemeChange(_theme_);
    
})  
})


$(function(){
    $("body").bind("click", function (e) {
            
			if($(e.target).closest(".wdu-icon-lishi").length>0){
				$('.wdu-anim-upbit').removeAttr("style");
				$(".wdu-pops-record").slideToggle(50,function(){})
			}else if($(e.target).closest(".wdu-navs-close").length>0){
			$(".wdu-navs-search").slideToggle(50,function(){})
            $(".wdu-pops-search").hide();			
			}else if($(e.target).closest(".wdu-icon-sousuo").length>0){
				$('.wdu-anim-upbit').removeAttr("style");
				$(".wdu-navs-search").slideToggle(50,function(){})
			}else if($(e.target).closest(".wdu-navs-code").length>0){
				$(".wdu-navs-record-icon").removeClass("wdu-edge-top")
	        $(".wdu-navs-record-icon").addClass("wdu-edge-bottom")
			$('.wdu-anim[id!="wdu-pops-code"]').removeAttr("style");
				$('.wdu-pops-search').removeAttr("style");
            $(".wdu-pops-code").slideToggle(50,function(){})
            }else if($(e.target).closest(".wdu-navs-record").length>0){
			$('.wdu-anim[id!="wdu-pops-record"]').removeAttr("style");
			$('.wdu-pops-search').removeAttr("style");
			if($(".wdu-navs-record-icon").hasClass("wdu-edge-bottom")){
			$(".wdu-navs-record-icon").removeClass("wdu-edge-bottom")
	        $(".wdu-navs-record-icon").addClass("wdu-edge-top")
			}else{
				$(".wdu-navs-record-icon").removeClass("wdu-edge-top")
	        $(".wdu-navs-record-icon").addClass("wdu-edge-bottom")
			}
			 $(".wdu-pops-record").slideToggle(50,function(){})
		    }else if($(e.target).closest(".wdu-goto-color").length>0){
              if(window.globalConfig.userInfo.logined==1){
				 $('.wdu-colo-info').animate({width: 'toggle'},{duration: 50}); 
            }else{
            //layer.msg("请登录后使用皮肤更换功能！");
              var html = '<div style="padding: 15px; text-align: center; background-color: #e2e2e2;max-width: 400px;">'+
                 ' <p class="layer_notice" style="background: #4CAF50;padding: 15px;color: aliceblue;">请登陆后使用雾都TV主题功能！</p>'+
             ' <a id="wudu-theme-preview" title="点击预览主题">'+
                '<img src="https://tva1.sinaimg.cn/mw690/007vLMz8ly1g11cmzpch7j31mi0u0b29.jpg" alt="雾都tv" style="width: 100%; height:149.78px;">'+
                  '</a>'+
                  '<a id="pops-login-button" target="_blank" class="layui-btn" style="display: inline-block;height: 38px;line-height: 38px;padding: 0 18px;background-color: #2196f3; color: #fff;white-space: nowrap; text-align: center;font-size: 14px;border: none; border-radius: 2px;cursor: pointer;margin-top:15px;width: 100%;">立即登录</a>'+
             ' </div>';
             layer.open({
               title:"更换主题",
  type: 1,
  skin: 'layui-layer-demo',
  closeBtn: 0, 
  anim: 2,
  shadeClose: true, 
  content: html
});
            
            }
			}else{
				
				if($(e.target).closest(".wdu-anim-upbit").length==0){
					
					$(".wdu-navs-record-icon").removeClass("wdu-edge-top")
	        $(".wdu-navs-record-icon").addClass("wdu-edge-bottom")
            $(".wdu-anim-upbit").attr("style","display:none")
			$('.wdu-colo-info').removeAttr("style")
            $(".wdu-conceal").removeAttr("style")
					if($(e.target).closest(".wdu-navs-input").length>0){
						if($(window).width() > 751){
			$(".wdu-pops-search").attr("style","display:block")
						}
					}
				}			
        }
    })

})


function wduThemeChange(param)
{
var usercolor = $("#usercolor");
//console.log(usercolor);
if(usercolor)
{
$("#usercolor").remove();
updateElement(param);
}	
}

$('.wdu-goto-toper').click(function () {
    $('html,body').animate({ scrollTop: 0 }, 500);
});

function updateElement(filename, filetype) {
  if (filetype == "js") { //if filename is a external JavaScript file
    // alert('called');
    var fileref = document.createElement('script')
    fileref.setAttribute("type", "text/javascript")
    fileref.setAttribute("src", filename)
    alert('called');
  } else if (filetype == "css"||!filetype) {
    file = window.globalConfig.siteUrl +'public/assets/css/'+filename+'.css';
    var fileref = document.createElement("link")
    fileref.setAttribute("rel", "stylesheet")
	fileref.setAttribute("id", "usercolor")
    fileref.setAttribute("type", "text/css")
    fileref.setAttribute("href", file)
    if (store.enabled) {
        store.set("theme", filename);

    }	
  }
  if (typeof fileref != "undefined"){
  document.getElementsByTagName("head")[0].appendChild(fileref)}
}
	  $(document).ready(function(){
            $(".wdu-goto-info").hide()
            $(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop()>1){
                        $(".wdu-goto-info").fadeIn();
                    } else {
                        $(".wdu-goto-info").fadeOut();
                    }
                });
            });
			
			    $.ajax({
                     url: window.globalConfig.api.getHotlistquery,
                     type: "GET",
                    dataType: "jsonp",
                     jsonpCallback: "__jsonp0__",
                    success: function (data) {
                        //console.log(data);
						var html ="";
						for(var i=0;i<6;i++){
						var j = i+1;
						html += '<li class="wdu-col-xs6">'+
						            '<a class="wdu-event wdu-part-eone" target="_blank" onclick=\'window.open("'+window.globalConfig.siteUrl+'search.html?wd='+data[i].title+'")\'>'+
									    ' <span class="wdu-part-nums wdu-part-num'+j+'">'+j+'</span>'+
										 '<span class="wdu-name">'+data[i].title+'</span>'+
									'</a>'+
								'</li>'
						
						$(".hotquery").html(html);
						}
                    }
                });

	$(".wdu-pops-search").click(function(){
		
return false;
});			
				
		$('.wdu-navs-input').removeAttr('onclick');	

$('.wdu-navs-input').focus(function(){
	
	$(".wdu-pops-search").slideToggle(50,function(){})
})		
				
        })
	
	$('body').on('click','#button_loginout',function(){
i=layer.load();
  $.ajax({
			type: "GET",
			url: window.globalConfig.api.userloginOut,
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {timestamp:"<?php echo time();?>"},
			success: function(data) {
              
			var obj;
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }

			if(obj.code==10001)
			{
              
             setTimeout(function() {  layer.close(i); }, 3000);
               location.reload();
			}

			},
			error: function(request) {
			},
		})
  
})	

$('body').on('click','#login_button',function(){

  var username = $("#username").val(),pass = $("#password").val(),vcode = $("#verify").val();
if(username==""){
layer.msg("用户名不能为空！");
return false;
}

if(pass==""){
layer.msg("密码不能为空！");
return false;
}

if(vcode ==""){
layer.msg("请输入验证码！");
  
return false;
}
  i=layer.load();
   var cookietime =  $('input[name="cookietime"]:checked').val();

  
  
  var pwd = md5(pass);
      $.ajax({
			type: "POST",
			url: window.globalConfig.api.userlogin,
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {username:username,password:pwd,verify:vcode,cookietime:cookietime},
			success: function(data) {
            
			var obj;
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }
              
            setTimeout(function() {layer.close(i);}, 3000);
layer.msg(obj.msg); 
              if(obj.code==10001){
              setTimeout(function() {
	//window.location.href= WAPI.siteUrl;
                location.reload();
}, 3000);
            }


			},
			error: function(request) {
			},
		})

 
  })

$('body').on('click','#pops-login-button',function(){

var el = document.getElementById('wdu-top-nav-login');
  layer.closeAll();
el.click();
}) 

$('body').on('click','#wudu-theme-preview',function(){
$.getJSON(window.globalConfig.api.getThemeDemo + '?timestamp='+new Date().getTime(), function(json){
  var _p = layer.photos({
    photos: json
    ,anim: 5 
  });
}); 
  
})