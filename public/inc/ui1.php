<?php

header('X-Frame-Options: deny');

function getTvlive($type){
	global $db;
?>

<?php
	            $data=$db->getAll('select * from wudu_tvlive where type="'.$type.'"');
				foreach($data as $key => $row){?>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				    <a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="tvplay/<?php echo $row['pid'];?>.html" data-original="<?php echo $row['img'];?>">
					    <span class="wdu-list-play wdu-hide-xs"></span>
					    <span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span>
					    <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $row['name'];?></span>
					</a>
			    </li>
				
				
				
            <?} ?>	
	
<?php }
function getslider_mb($l){
	global $db;global $wudu_domain;
	$data=$db->getAll("select * from wudu_slideshow where status = '1' order by sorder desc");
	?>
              <div class="wdu-swip-container  wdu-part-rows">
				<div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
                    <?php
                    foreach($data as $key => $row){
							if($row['type']==1)
						{
							$locatedUrl = $wudu_domain.'play/'.$row['vtype'].'_'.$row['url'];
							
						}elseif($row['type']==2)	
						{
							$locatedUrl = $wudu_domain.'splay/'.$row['url'];
						}elseif($row['type']==3)	
						{
							$locatedUrl = $wudu_domain.'wudu/'.$row['url'];
						}elseif($row['type']==4)	
						{
							$locatedUrl = $wudu_domain.'tvplay/'.$row['url'];
						}elseif($row['type']==5)	
						{
							$locatedUrl = $wudu_domain.'wplay/'.$row['url'];
						}
                       if(strstr($row['position'],$l)==true){?>						
					<div class="swiper-slide wdu-swip-slide">
					    <a class="wdu-list-pics wdu-list-pic wdu-part-5by2 wdu-swip-lazy" href="<?php echo $locatedUrl;?>" target="<?php echo $urt;?>" style="background: url(<?php echo $row['picture'];?>)  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					        <div class="wdu-swip-title wdu-swiper-title wdu-text-white wdu-part-eone">
						        <span class="wdu-part-eone wdu-font-xviii wdu-swip-head"><?php echo $row['name'];?></span>
								<span class="wdu-part-eone wdu-font-xii"><?php echo $row['content'];?></span>
					        </div>
					    </a>
					</div>
				    <?}?>
					<?php }
					?>
				</div>
				<div class="wdu-swiper-next wdu-swip-next wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-you" href="javascript:;"></div>
				<div class="wdu-swiper-prev wdu-swip-prev wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-zuo" href="javascript:;"></div>
				<div class="swiper-pagination wdu-swip-pagin wdu-font-size wdu-text-right"></div>
			</div>	
<?php }

function getslider_pc($l,$t=null){
global $db;global $wudu_domain;
?>

<div id="wuduslider" class="swiper-container">
    <div class="swiper-wrapper">
      
      <?php
				$data=$db->getAll("select * from wudu_slideshow where status = '1' order by sorder desc");

						foreach($data as $key => $row){
							if($row['type']==1)
						{
							$locatedUrl = $wudu_domain.'play/'.$row['vtype'].'_'.$row['url'];
							
						}elseif($row['type']==2)	
						{
							$locatedUrl = $wudu_domain.'splay/'.$row['url'];
						}elseif($row['type']==3)	
						{
							$locatedUrl = $wudu_domain.'wudu/'.$row['url'];
						}elseif($row['type']==4)	
						{
							$locatedUrl = $wudu_domain.'tvplay/'.$row['url'];
						}elseif($row['type']==5)	
						{
							$locatedUrl = $wudu_domain.'wplay/'.$row['url'];
						}
						?>
                      <? if(strstr($row['position'],$l)==true){?>
      
         <div class="swiper-slide wudu-slider" data-target="<?php echo $locatedUrl;?>" style="background-image:url(<?php echo $row['picture'];?>)">
            <div class="info" >
                            <h3><?php echo $row['name'];?></h3>
                          <p class="attr"><?php $content = $row['content']; echo $att = $content ? $content : $row['name'];?></p>
            </div>
        </div>
						<?}?>
					<?php }
					?>
     
      
    </div>
    <div class="swiper-button-prev wudu-prev"></div>
    <div class="swiper-button-next wudu-next"></div>

</div>

<?php }
/**
 * 输出网站头，提供网站必备的内容
 * @param $title 页面标题
 * @param $description 页面描述
 * @param $keywords 页面关键字
 * @return 获取到的内容（没有则为默认值）
 */

function mui_head($title,$type,$description=null,$keywords=null,$style=null) {
    header('Content-type: text/html; charset=utf-8');
	global $db;global $wudu_sitename;global $wudu_domain;global $wudu_keywords;global $wudu_desc;global $description;global $playtitle;global $brinfo;global $shdesc;global $wudu_qrapi;
	$description = empty($wudu_desc) ? '' : $wudu_desc;
   
	if($type==1){
	$title = $title.':'.$playtitle;	
	
	if($shdesc)
	{
	$description = $shdesc;	
	}
	$rt = $playtitle;
	}else{
	$rt = $title;
	}
 
    $keywords .='雾都tv,雾都影院,视频解析,vip解析,vip会员'; //这里加上共用的描述词
  
  
    $logincheck = 0;

    $authtoken =  authcode($_COOKIE['wauth'],'DECODE');
  
    $authcheck = explode('\t',$authtoken);
  
    $_user_name = $authcheck[1];
  
    $_user_pwd = $authcheck[0];

    $sql = "select u_name,u_password from wudu_user where u_name = '$_user_name' and u_password = '$_user_pwd'";
  
    $res = $db ->getRow($sql);
  
    if($res){
      
    $_SESSION['uid'] = $_user_name;

    }
  
    if(isset($_SESSION['uid'])&&$_SESSION['uid']){
     
     $logincheck = 1;
     
     }
  
    
  
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<html lang="zh-cmn-Hans">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="author" content="lylares,contact@lylares.com">
<meta name="robots" content="index,follow">
<meta http-equiv="Cache-Control" content="no-siteapp,no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="format-detection" content="telephone=no,email=no,adress=no">
<meta name="viewport"content="width=device-width,height=device-height,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<title><?php echo $title; ?> | <?php echo $wudu_sitename;?></title>
<meta name="keywords" content="<?php echo $rt; ?>,<?php echo $wudu_keywords;?>">
<meta name="description" content="<?php echo $description; ?>">
<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">

<!-- Add to homescreen for Safari on iOS //static.lylares.com/wd/-->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucen">
<meta name="apple-mobile-web-app-title" content="雾都TV"/>
<meta name="google-site-verification" content="78gw4ezi4CN5CoXqB6AOMIpdCtkSLBRykRfRVYgGN1w" />
<meta name="baidu-site-verification" content="qS3moiEmaq" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $wudu_domain;?>images/icon@72.png">
<link rel="icon" href="<?php echo $wudu_domain;?>favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/index.php/rss/index.xml"/>
<link href="" rel="apple-touch-icon-precomposed"/>
<link href="" rel="shortcut icon" type="image/ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo $wudu_domain;?>public/assets/css/style.css?v=3.1.9"/>
<link rel="stylesheet" type="text/css" href="<?php echo $wudu_domain;?>public/assets/css/swiper.min.css?v=3.1.9"/>
<link rel="stylesheet" type="text/css" href="<?php echo $wudu_domain;?>public/assets/css/swiper.main.css?v=3.1.9"/>
<script src="https://lib.baomitu.com/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/2.0/js/LazyLoad.js"></script>
<script src="https://cdn.bootcss.com/Swiper/4.0.2/js/swiper.min.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/v3/js/store.js"></script>
<script src="https://cdn.bootcss.com/blueimp-md5/2.10.0/js/md5.min.js"></script>
<script> var WAPI = { siteUrl: "<?php echo $wudu_domain;?>",uid:"<?php echo $_COOKIE['uid'];?>",login:"<?php echo $logincheck;?>",userChangeTheme:"0" }</script>
<style>
.wdu-swiper-next, .wdu-swiper-prev {
    position: absolute;
    top: 50%;
    width: 27px;
    height: 44px;
    margin-top: -22px;
    z-index: 10;
    cursor: pointer;
    background-size: 27px 44px;
    background-position: center;
    background-repeat: no-repeat;
   background-image: url();
}
  .wdu-swip-title{border-radius: 4px;}
  .wdu-list-pic, .wdu-swiper-title{border-radius: 0px;}
  .wdu-wide{padding-top: 62.5%;background-size: cover;background-position: 50% 50%;}
</style>
</head>
<body class="wdu-min-width">
<!--[if lte IE 9]>
        <script type="text/javascript">
            (function(){
                var t = '你的浏览器也太挫了吧！大佬换一个噻！';
                document.body.innerHTML = t;
                document.body.style.fontSize = '66px';
                document.body.style.textAlign = 'center';
                document.body.style.background = '#000';
                document.body.style.color = '#fff';
                if (prompt('输入代号 666666 销毁此电脑: ', '') === '666666') {
                    alert('拜拜了您呢~')
                } else {
                    alert('总感觉哪里不对');
                }
                window.open('', '_self', '');
                window.close();
            })();
        </script>
    <![endif]-->
<div class="wdu-head-info wdu-back-whits wdu-min-width wdu-box-shadow">
	<div class="wdu-part-case">
		<div class="wdu-navs-left">
			<a class="wdu-navs-logo" href="<?php echo $wudu_domain;?>" style="margin-top: 10px;font-size: 20px;font-weight: 400;width: auto;">雾都TV</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-md-block" href="<?php echo $wudu_domain;?>">首页</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-md-block" href="<?php echo $wudu_domain;?>movie.html">电影</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-md-block" href="<?php echo $wudu_domain;?>tv.html">连续剧</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-md-block" href="<?php echo $wudu_domain;?>tvlive.html">直播</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-lg-block" href="<?php echo $wudu_domain;?>variety.html">综艺</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-lg-block" href="<?php echo $wudu_domain;?>cartoon.html">动漫</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-lg-block" href="<?php echo $wudu_domain;?>rec.html">推荐</a>
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-md-block" href="<?php echo $wudu_domain;?>gustbook.html">求片</a>
			<!-- <a class="wdu-navs-title wdu-font-xvi wdu-navs-navbar wdu-event wdu-hide wdu-show-sm-block" href="javascript:;">导航<span class="wdu-part-move wdu-edge-info wdu-edge-bottom wdu-navs-icon"></span></a> -->
		</div>
		<div class="wdu-navs-search wdu-back-whits wdu-hidden wdu-show-sm-block">
			<a class="wdu-navs-close wdu-conceal wdu-hide-sm" href="javascript:;">取消</a>
			<form class="wdu-navs-form"  autocomplete="off" action="<?php echo $wudu_domain;?>search.html">
				<input class="wdu-navs-input wdu-back-ashen wdu-event" type="search"  name ="wd" placeholder="请输入关键字"/><a class="wdu-navs-submit wdu-back-ashen"><i class="wdu-icon-font wdu-icon-sousuo"></i></a>
			</form>
		</div>
		<div class="wdu-navs-right">
			<a class="wdu-navs-route wdu-text-black wdu-event wdu-hidden wdu-hide-sm" href="javascript:;"></a>
			<a class="wdu-navs-button wdu-text-black wdu-event wdu-hide-sm wdu-icon-font wdu-icon-sousuo" href="javascript:;"></a>
			<a class="wdu-navs-record wdu-text-black wdu-event wdu-hide-xs wdu-show-sm-block" href="javascript:;">看过
			    <span class="wdu-part-move wdu-edge-info wdu-edge-bottom wdu-navs-record-icon"></span>
			</a>
			
          
            <?php if(isset($_SESSION['uid'])&&$_SESSION['uid']){?>
			<a class="wdu-navs-wechat wdu-navs-code  wdu-text-black wdu-event wudu-pops" 
               title="<?php echo $_COOKIE['user_name'];?>"
               href="javascript:;" 
               style="max-height: 45px;max-width: 45px;"
               data-target="wdu-pops-user-panel"
               data-pops="wudu-pops">
              <img id="user-avatar" alt="<?php echo $_COOKIE['user_name'];?>" 
                   src="<?php echo $_COOKIE['user_avatar'];?>" style="width:100%;height:100%;border-radius: 100%;">
            </a>
          <? }else{?>
          <a class="wdu-navs-login wdu-text-black wdu-hide-xs wdu-show-sm-block" id="wdu-top-nav-login">登录</a>
			<a class="wdu-text-black wdu-event wdu-hide-sm wdu-icon-font wdu-icon-lishi"></a>
          <?php }?>
		</div>		
		<div class="wdu-pops-navbar wdu-box-shadow wdu-min-width wdu-hidden wdu-conceal wdu-anim" id="wdu-pops-navbar">
			<div class="wdu-pops-channel wdu-back-whits wdu-part-rows wdu-line-top wdu-hidden">
				选择频道
			</div>
<!-- <a class="wdu-pops-btns wdu-back-whits wdu-text-black wdu-text-center wdu-event wdu-hide-sm wdu-icon-font wdu-icon-fenlei" href="javascript:;"></a>  -->
			<ul class="wdu-pops-list wdu-font-size wdu-back-whits wdu-part-rows">
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">首页</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>movie.html">电影</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>tv.html">连续剧</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>tvlive.html">直播</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>variety.html">综艺</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>cartoon.html">动漫</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>rec.html">推荐</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">博客</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">站内</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">新闻</a></li>
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">专题</a></li>
			</ul>
		</div>
		<div class="wdu-pops-search wdu-anim-upbit wdu-hidden" id="wdu-pops-search">
			<div class="wdu-pops-case wdu-back-ashen wdu-box-shadow">
				<div class="wdu-pops-key">
				</div>
				<div class="wdu-pops-box">
				    <div class="wdu-pops-rec wdu-margin-bottom">
					    <div class="wdu-pops-title wdu-back-whits wdu-part-rows wdu-line-bottom">搜索历史
						    <a class="wdu-clear wdu-part-tips wdu-event" href="javascript:;">清空</a>
						</div>
						<ul class="wdu-pops-list wdu-padding-xo wdu-back-whits wdu-part-rows">
						    <li class="wdu-col-xs6">
							    <a class="wdu-part-eone" href="">
							        <span class="wdu-name">*****</span>
								</a>
						    </li>
					    </ul>
				    </div>
					<div class="wdu-pops-hot">
						<div class="wdu-pops-title wdu-back-whits wdu-part-rows wdu-line-bottom">
							热门搜索
						</div>
						<ul class="wdu-pops-list wdu-back-whits wdu-part-rows hotquery">
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="wdu-pops-record wdu-box-shadow wdu-hidden wdu-anim wdu-anim-upbit" id="wdu-pops-record">
		    <div class="wdu-pops-title wdu-back-whits wdu-line-bottom wdu-part-rows">
		        <span class="wdu-col-xs9">观看记录</span>
			    <a class="wdu-clear wdu-event wdu-text-right wdu-col-xs3" onclick="clearHistory();">清空</a>
		    </div>
			<ul class="wdu-pops-list wdu-back-whits" id="top-history-list">
			</ul>
		</div>
		<div class="wdu-pops-code wdu-back-whits wdu-box-shadow wdu-hidden wdu-conceal wdu-anim wdu-anim-upbit" 
             id="wdu-pops-user-panel"
             style="border-bottom-left-radius: 4px !important;border-bottom-right-radius: 4px !important;">
			<div class="wdu-pops-cont">
				<ul class="wdu-pops-list wdu-font-size wdu-back-whits">
				<li><a href="<?php echo $wudu_domain;?>u/" target="_blank">个人中心</a></li>
				<li><a href="<?php echo $wudu_domain;?>u/favs.html" target="_blank">我的收藏</a></li>
				<li><a href="<?php echo $wudu_domain;?>u/history.html" target="_blank">播放记录</a></li>
				<li><a href="<?php echo $wudu_domain;?>u/buy.html" target="_blank">充值中心</a></li>
				<li><a href="<?php echo $wudu_domain;?>u/upgrade.html" target="_blank">升级会员</a></li>
				<li><a  id="button_loginout">退出登录</a></li>
			</ul>
			</div>
		</div>
		<div class="wdu-pops-user wdu-box-shadow wdu-back-whits  wdu-hidden wdu-conceal wdu-anim wdu-anim-upbit">

		</div>
	</div>
</div>
  <div class="wdu-tabr-info wdu-back-whits wdu-min-width wdu-line-top wdu-hide-sm">
	<ul class="wdu-part-rows">
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-shouye"></i><span class="wdu-font-xii">首页</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>special.html?cid=0"><i class="wdu-icon-font wdu-icon-zixun"></i><span class="wdu-font-xii">精选</span></a></li>
      		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>rec.html"><i class="wdu-icon-font wdu-icon-zhuanti"></i><span class="wdu-font-xii">推荐</span></a></li>

		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>gustbook.html"><i class="wdu-icon-font wdu-icon-liuyan"></i><span class="wdu-font-xii">求片</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>u"><i class="wdu-icon-font wdu-icon-yonghu"></i><span class="wdu-font-xii">我的</span></a></li>
	</ul>
</div>
	<?php }


/**
 * 输出网站顶部banner
 * @param $show 是否展示底部内容
 * @return 输出页面元素
 */

function mui_topNav() {
?>


<?php }


//页脚
 function mui_footer(){ 
 global $wudu_domain;
 ?>

<div class="wdu-colo-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-event wdu-hidden">
	<a class="wdu-padding wdu-colo-black wdu-theme-change" data-type="black" href="javascript:;">黑色</a>
	<a class="wdu-padding wdu-colo-golds wdu-theme-change" data-type="golds" href="javascript:;">黑金</a>
	<a class="wdu-padding wdu-colo-glass wdu-theme-change" data-type="glass" href="javascript:;">透明</a>
	<a class="wdu-padding wdu-colo-colou wdu-theme-change" data-type="colorful" href="javascript:;">彩色</a>
	<a class="wdu-padding wdu-colo-orang wdu-theme-change" data-type="orang" href="javascript:;">橙色</a>
	<a class="wdu-padding wdu-colo-blues wdu-theme-change" data-type="blues"  href="javascript:;">蓝色</a>
	<a class="wdu-padding wdu-colo-white wdu-theme-change" data-type="green"  href="javascript:;">绿色</a>
	<a class="wdu-padding wdu-colo-pinks wdu-theme-change" data-type="pinks"  href="javascript:;">粉色</a>
</div>
<div class="wdu-goto-info">
	<a class="wdu-goto-share wdu-visible wdu-text-center wdu-back-whits wdu-icon-font wdu-icon-fenxiang" href="javascript:;"></a>
	<a class="wdu-goto-color wdu-visible wdu-text-center wdu-back-whits wdu-icon-font wdu-icon-fengge wdu-event" href="javascript:;"></a>
	<a class="wdu-goto-toper wdu-visible wdu-text-center wdu-back-whits wdu-icon-font wdu-icon-top" href="javascript:;"></a>
</div>
<div class="wdu-foot-info wdu-part-layout wdu-back-whits">
	<div class="wdu-part-case">
		<div class="wdu-text-center wdu-text-black">	
		</div>
		<p class="wdu-text-center wdu-text-black">
		</p>
		<p class="wdu-text-center wdu-text-black">
          雾都TV不存储资源，内容来由程序抓取自网络，侵权投诉:admin#5kvideo.cc</br>
		  &copy;&nbsp;<?php echo date('Y');?>&nbsp;雾都TV </br>
		  <a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"></a>
		</p>
	</div>
</div>
<script src="<?php echo $wudu_domain;?>public/assets/js/public.js"></script>
<script src="https://file.5kvideo.cc/layer/layer.js"></script>
<script src="<?php echo $wudu_domain;?>public/assets/js/ustore.js"></script>
<script>
$("body").on("click",".wudu-slider",function(){   
    var target = $(this).data("target");
    window.open(target);
})
var histemp = store.get('history')? store.get('history'): [];
$(function() {
  $.ajax({
			type: "GET",
			url: "<?php echo $wudu_domain;?>api/v1/get/user",
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
<?php jsSiteInfo();?> 
</body>
</html>		
<?php
}

/**
 * 输出网站底部公共文件
 * @param $show 是否展示底部内容
 * @return 输出页面元素
 */

/**
 * 输出 js 文件
 * @param $name js 文件名
 * @param $description js文件描述
 * @param $ver js版本号
 * @return 输出对应js文件
 */
function includeJs($name, $description = '', $ver = '1.0') {
    if($description) echo "\n    <!-- $description -->";
    echo "\n    <script src=\""."//static.lylares.com/wd/assets/js/{$name}.js?v{$ver}\"></script>\n";
}

/**
 * 输出 css 文件
 * @param $name css文件名
 * @param $description css文件描述
 * @param $ver css版本号
 * @return 输出对应css文件
 */
function includeCss($name, $description = '', $ver = '1.0') {
    if($description) echo "\n    <!-- $description -->";
    echo "\n    <link rel=\"stylesheet\" href=\""."//static.lylares.com/wd/assets/css/{$name}.css?v{$ver}\">\n";
}

/**
 * 输出网站相关信息，供页面内的 js 文件调用
 * @param 无
 * @return 无
 */
function jsSiteInfo() {
?>
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
	   
<?php
}
