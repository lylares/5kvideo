
<style>
.silder-icon{padding-top: 16px;font-size: 18px;}
.mb-nav{padding-top: 15px;line-height: 25px;}
.mb-title-icon{font-size:18px}
</style>

    <div class="tabbar visible-xs">
		<a href="<?php echo $wudu_domain;?>" class="item mb-nav">
            <i class="fa fa-asterisk mb-title-icon"></i>
            <p class="text">精选</p>
        </a>
	    <a href="<?php echo $wudu_domain;?>tv.html" class="item mb-nav">
            <i class="fa fa-th mb-title-icon"></i>
            <p class="text">分类</p>
        </a>
		<a href="<?php echo $wudu_domain;?>tvlist.html?cid=0" class="item mb-nav">
            <i class="fa fa-television mb-title-icon"></i>
            <p class="text">直播</p>
        </a>
		<a href="<?php echo $wudu_domain;?>rank.html" class="item mb-nav">
            <i class="fa fa-list-ol mb-title-icon"></i>
            <p class="text">榜单</p>
        </a>
		<a href="https://www.5kvideo.cc/wap/user.html" class="item mb-nav">
            <i class="fa fa-user-o mb-title-icon"></i>
            <p class="text">我的</p>
        </a>		
	</div>
		
<div class="row" style="margin-top:10px"></div>
	<div class="hy-layout hidden-xs">
	    <div class="hy-footer-link">
	        <div class="item clearfix">
	            <p style="padding: 0 4px;text-align:center" class="container-fluid"><?php echo $wudu_copyright;?><?php echo $wudu_tongji;?></p>
		    </div>
		</div>
    </div>
<script type="text/javascript">
$(function() {
    var store = $.AMUI.store;
    if (store.enabled) {
        var histemp = store.get('history')? store.get('history'): [];
        
//console.log(histemp);
    }
});

window.onload=function () {
      document.addEventListener('touchstart',function (event) {
        if(event.touches.length>1){
          event.preventDefault();
        }
      })
      var lastTouchEnd=0;
      document.addEventListener('touchend',function (event) {
        var now=(new Date()).getTime();
        if(now-lastTouchEnd<=300){
          event.preventDefault();
        }
        lastTouchEnd=now;
      },false)
    }
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>	
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6215debcd516a89d323747d07433cbd2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script src="https://www.5kvideo.cc/style/layer/mobile/layer.js"></script>

<script src="https://file.5kvideo.cc/amazeui/assets/js/amazeui.min.js"></script>  
<script>
if (top.location != self.location){top.location=self.location;}
if (document.domain != '5kvideo.cc' && document.domain != 'www.5kvideo.cc'){  
window.location.href='https://www.5kvideo.cc/';  
}  
</script>
</body>
</html>