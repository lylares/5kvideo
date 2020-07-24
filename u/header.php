<?php
require('../init.php');

$pt = pageType();
    ?>
<!DOCTYPE html>
<html>
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

<title>用户中心|<?php echo $wudu_seoname; ?></title>
<meta name="keywords" content="<?php echo $timu; ?>,<?php echo $wudu_keywords;?>">
<meta name="description" content="<?php echo $timu; ?>,<?php echo strip_tags($jian); ?>">
<meta itemprop="url" property="og:url" content="/index.php/index/index.html"/>
<meta itemprop="name" property="og:title" content="热播剧 - 热门影视"/>
<meta itemprop="image" property="og:image" content=""/>
<meta itemprop="description" property="og:description" content="提供最新最快的影视资讯和在线播放"/>
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
<link rel="stylesheet" type="text/css" href="<?php echo $wudu_domain;?>u/css/style.css?v=3.1.9"/>
<script src="https://lib.baomitu.com/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript' src="https://file.5kvideo.cc/wudu/2.0/js/LazyLoad.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/2.0/js/swiper.min.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/v3/js/store.js"></script>
<script> var _wdu_playinfo = { siteUrl: "<?php echo $wudu_domain;?>" }</script>
</head>
<body class="wdu-min-width">
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
			<a class="wdu-navs-title wdu-font-xvi wdu-hide wdu-show-lg-block" href="#">小视频</a>
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
			<a class="wdu-navs-login wdu-text-black wdu-hide-xs wdu-show-sm-block" href="javascript:;">登录</a>
			<a class="wdu-text-black wdu-event wdu-hide-sm wdu-icon-font wdu-icon-lishi"></a>
			<a class="wdu-navs-wechat wdu-navs-code  wdu-text-black wdu-event"  href="javascript:;">公众号+</a>
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
				<li class="wdu-col-sm2 "><a class="wdu-part-eone" href="<?php echo $wudu_domain;?>">小视频</a></li>
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
						<ul class="wdu-pops-list wdu-padding-xo wdu-back-whits wdu-part-rows"><li class="wdu-col-xs6"><a class="wdu-part-eone" href="/index.php/vod/search.html?wd=%E7%81%AB%E5%BD%B1%E5%BF%8D%E8%80%85"><span class="wdu-name">火影忍者</span></a></li>
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
			    <a class="wdu-clear wdu-event wdu-text-right wdu-col-xs3" href="javascript:;">清空</a>
		    </div>
			<ul class="wdu-pops-list wdu-back-whits">
			    <li class="wdu-part-rows wdu-line-bottom">
				    <a class="wdu-part-rows" href="#">
					    <span class="wdu-part-eone wdu-col-xs9">Ru1mm美女秀223<span class="wdu-text-muted">[BD高清]</span></span>
						<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">豆瓣M3U8</span>
					</a>
				</li>
			    <li class="wdu-part-rows wdu-line-bottom">
				    <a class="wdu-part-rows" href="#">
					    <span class="wdu-part-eone wdu-col-xs9">Ru1mm美女秀229<span class="wdu-text-muted">[BD高清]</span></span>
						<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">666M3U8</span>
					</a>
				</li>
				<li class="wdu-part-rows wdu-line-bottom">
				    <a class="wdu-part-rows" href="#">
		                <span class="wdu-part-eone wdu-col-xs9">解码游戏<span class="wdu-text-muted">[BD1280高清中英双字]</span></span>
						<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">八戒M3U8</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="wdu-pops-code wdu-back-whits wdu-box-shadow wdu-hidden wdu-conceal wdu-anim wdu-anim-upbit" id="wdu-pops-code">
			<div class="wdu-pops-cont">
				<p style="text-align: center;">
					<img src="https://api.lylares.com/qrcode/?s=6&c=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];?>" alt="公众号"/>
				</p>
				<p style="text-align: center;">
					欢迎关注微信公众号
				</p>
			</div>
		</div>
		<div class="wdu-pops-user wdu-box-shadow wdu-back-whits wdu-hidden wdu-conceal wdu-anim wdu-anim-upbit">
			<ul class="wdu-pops-list wdu-font-size wdu-back-whits">
				<li><a href="/index.php/user/index.html">游客</a></li>
				<li><a href="/index.php/user/info.html">修改资料</a></li>
				<li><a href="/index.php/user/favs.html">我的收藏</a></li>
				<li><a href="/index.php/user/plays.html">播放记录</a></li>
				<li><a href="/index.php/user/downs.html">下载记录</a></li>
				<li><a href="/index.php/user/buy.html">充值中心</a></li>
				<li><a href="/index.php/user/upgrade.html">升级会员</a></li>
				<li><a href="/index.php/user/logout.html">退出登录</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- <div class="wdu-tabr-info wdu-back-whits wdu-min-width wdu-line-top wdu-hide-sm">
	<ul class="wdu-part-rows">
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-shouye"></i><span class="wdu-font-xii">首页</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-zixun"></i><span class="wdu-font-xii">博客</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>gustbook.html"><i class="wdu-icon-font wdu-icon-liuyan"></i><span class="wdu-font-xii">求片</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-zhuanti"></i><span class="wdu-font-xii">专题</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-yonghu"></i><span class="wdu-font-xii">我的</span></a></li>
	</ul>
</div> -->
