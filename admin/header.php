<?php 
require('../init.php');
if(!isset($_SESSION['user_name'])){
		header('location:./wudu_login.html');
	};
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>后台管理|雾都TV</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="" />
  <!--  Social tags      -->
  <meta name="keywords" content="雾都TV,雾都,电影,视频大全,在线高清电影,付费电影,免费电影,电视剧,电影,在线观看,VIP高清电影直播">
  <meta name="description" content="提供最新最快的影视资讯和在线播放">

  <!-- Favicon -->
  <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <?php if($style){addStyle($style);}?>
  <!-- Argon CSS -->
  
  <link rel="stylesheet" href="./assets/vendor/animate.css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="./assets/vendor/sweetalert2/dist/sweetalert2.min.css" type="text/css">
  <link rel="stylesheet" href="./assets/css/main.css?v=1.0.0" type="text/css">
  <!-- Google Tag Manager -->
  <script> var _wudu_info = {domain: "<?php echo $wudu_domain;?>" }</script>
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->

  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="./">
          <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
		    <li class="nav-item">
              <a class="nav-link" href="./">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">首页</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">视频</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_vod_add.html" class="nav-link">添加</a>
                  </li>
				  <li class="nav-item">
                    <a href="./wudu_fetch.html" class="nav-link">采集</a>
                  </li>
                  <li class="nav-item">
                    <a href="./wudu_vod_edite.html" class="nav-link">管理</a>
                  </li>
                  <li class="nav-item">
                    <a href="./lock.html" class="nav-link">Lock</a>
                  </li>
                  <li class="nav-item">
                    <a href="./timeline.html" class="nav-link">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a href="./profile.html" class="nav-link">Profile</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">直播</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_tvlive.html" class="nav-link">直播管理</a>
                  </li>
                  <li class="nav-item">
                    <a href="./cards.html" class="nav-link">Cards</a>
                  </li>
                  <li class="nav-item">
                    <a href="./grid.html" class="nav-link">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a href="./notifications.html" class="nav-link">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a href="./icons.html" class="nav-link">Icons</a>
                  </li>
                  <li class="nav-item">
                    <a href="./typography.html" class="nav-link">Typography</a>
                  </li>
                  <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                    <div class="collapse show" id="navbar-multilevel" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Third level menu</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Just another link</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">One last link</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">轮播图</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_slideshow.html" class="nav-link">管理</a>
                  </li>
                  <li class="nav-item">
                    <a href="./components.html" class="nav-link">Components</a>
                  </li>
                  <li class="nav-item">
                    <a href="./validation.html" class="nav-link">Validation</a>
                  </li>
                </ul>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#navbar-topic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">话题</span>
              </a>
              <div class="collapse" id="navbar-topic">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_topic.html" class="nav-link">话题</a>
                  </li>
                  <li class="nav-item">
                    <a href="./wudu_topic_cat.html" class="nav-link">分类</a>
                  </li>
                  <li class="nav-item">
                    <a href="./wudu_topic_detail.html" class="nav-link">内容</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">会员</span>
              </a>
              <div class="collapse" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_user.html" class="nav-link">会员管理</a>
                  </li>
                  <li class="nav-item">
                    <a href="./sortable.html" class="nav-link">Sortable</a>
                  </li>
                  <li class="nav-item">
                    <a href="./datatables.html" class="nav-link">Datatables</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">导航</span>
              </a>
              <div class="collapse" id="navbar-maps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./google.html" class="nav-link">Google</a>
                  </li>
                  <li class="nav-item">
                    <a href="./vector.html" class="nav-link">Vector</a>
                  </li>
                </ul>
              </div>
            </li>
            
			<li class="nav-item">
                <a class="nav-link" href="#navbar-sales" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-sales">
                    <i class="ni ni-archive-2 text-green"></i>
                    <span class="nav-link-text">营销</span>
                </a>
                <div class="collapse" id="navbar-sales">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./components.html" class="nav-link">订单</a>
                  </li>
                  <li class="nav-item">
                    <a href="./validation.html" class="nav-link">广告</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./charts.html">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">链接</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#navbar-sys" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-sys">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">系统</span>
              </a>
              <div class="collapse show" id="navbar-sys">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="./wudu_system.html" class="nav-link">站点配置</a>
                  </li>
                  <li class="nav-item">
                    <a href="./wudu_admin.html" class="nav-link active">管理员</a>
                  </li>
				  <li class="nav-item">
                    <a href="./wudu_admin.html" class="nav-link active">缓存</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- Divider -->
          
        </div>
      </div>
    </div>
  </nav>