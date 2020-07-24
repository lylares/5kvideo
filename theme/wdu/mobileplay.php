<!DOCTYPE html>
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
<title>正在播放:<?php echo $playtitle; ?>-<?php echo $wudu_seoname;?></title>
<meta name="keywords" content="<?php echo $playtitle; ?>,<?php echo $wudu_keywords;?>">
<meta name="description" content="<?php echo $shdesc; ?>">
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
<!--[if lt IE 9]>
<script src="<?php echo $wudu_domain;?>style/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="<?php echo $wudu_domain;?>style/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://file.5kvideo.cc/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">				
<link href="https://file.5kvideo.cc/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />				
<link href="https://file.5kvideo.cc/wudu/2.0/css/swiper.min.css" rel="stylesheet" type="text/css" >		
<link href="https://file.5kvideo.cc/wudu/2.0/css/iconfont.css" rel="stylesheet" type="text/css" />
<link href="https://file.5kvideo.cc/wudu/2.0/css/color.css" rel="stylesheet" type="text/css" />
<link href="https://file.5kvideo.cc/wudu/2.0/css/style.min.css?v=1.0" rel="stylesheet" type="text/css" />
<script src="https://lib.baomitu.com/jquery/3.3.1/jquery.min.js"></script>
<script> var materialSiteInfo = { siteUrl: "http://www.5kvideo.cc/" }</script>
<script type="text/javascript" src="https://file.5kvideo.cc/bootstrap/3.3.0/js/bootstrap.min.js"></script>	
<script type="text/javascript" src="https://file.5kvideo.cc/wudu/2.0/js/common.js"></script>		
<!-- <script src="<?php echo $wudu_domain;?>style/js/function.js"></script> -->
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/2.0/js/LazyLoad.js"></script>
<script type='text/javascript' src="https://file.5kvideo.cc/wudu/2.0/js/swiper.min.js"></script>
</head>
<body  style="background:#333">
<?php  
//include 'header.php';
    if($mkcmstyle =='tv'){
       $category="2";
        } else{
        $category="4";
	    }
    $id=$mkcmsid;
?>
<style>
.mask{height:100%; width:100%; position:fixed; _position:absolute; top:0; z-index:1000; }
.opacity{ opacity:0.8; filter: alpha(opacity=30); background-color:#000; }
.content{ overflow:auto; border:2px solid #ccc; background-color:#fff; position:absolute; top:30%; left:30%; margin:0 auto; z-index:1001; word-wrap: break-word; padding:50px;}
.esp-button{color: #999;background: #555;border-radius: 5px;padding-top: 2px;padding-bottom: 2px;padding-left: 10px;padding-right: 10px;}
.hy-play-list .item .panel, .hy-comment-list .item h4 {border-top: 0px;}
.option-title{color: #cccccc8a;}

.seleced{background:#2BB656 !important;color:aliceblue!important ;}
.hy-player .item .sidebar {height: auto;}
.hy-layout clearfix{background:#333}
.videopic .score {position: absolute;top: 48px;left: 0px;padding: 0 5px;text-align: right;font-size: 12px;}
.hy-player .item .sidebar {background: #333333;}
.hy-play-list.play .item .panel .option.collapsed {background-color: #333;}
#vidname{font-size: 16px;color:#F4E8A5;margin-top:-15px}
.hy-player .item .footer {height:fit-content !important;}
.hy-play-list .item .panel .playlist ul li, .hy-play-list.play .item .panel .playlist ul li {width: 14%;}
.hy-play-list .item .panel .playlist ul li a {border-radius: 3px;}
.esp-panel a:hover{color: #ddddddb8;}
.esp-panel a:focus{color:#ddddddb8; }
.espd-panel a{
	height: 45px !important;
    width: 45px !important;font-size: 12px;color: #999;border-radius: 3px;list-style: none;display: inline-block;width: 12%;margin-right: 10px;text-align: center;    padding-top: 12px !important;
    padding-left: 9px !important;}
.espd-m-panel a{
	font-size: 12px;color: #999;border-radius: 0px;list-style: none;display: inline-block;width: 18%;margin-right: 10px;text-align: center;    padding: 5px !important;
  }
.related-actor-panel a{margin-right: 10px;	}
.bref-description{font-size: 12px;color: #f0f8ffc4; line-height: 22px;}
.text-muted{color: #f0f8ffc4;}
.related-actor-avatar{    border-radius: 50%;height: 60px;}
.related-actor-name{position: absolute;margin-left: -45px;margin-top: 70px;}
.hy-min-screen .item dl dd a {
    padding-right: 10px;
}
.history-cover{height:90px;width:100%}
.history-item-name{
	color:#f0f8ffb3;
	font-size:13px;
    margin-top: 10px;
}
.text-white{    color: aliceblue;}
.text-s-white{color:#f0f8ffbd;}
.text-bold{font-weight:bold;}
.bd-cover{    border-radius: 3px;}
.duration{color: #f0f8ffe0;position: absolute;margin-top: 17%;margin-left: -10%; text-align: right;}
.as-item-title{margin-left: 43%;margin-top: -23%;position: absolute;font-size: 13px;}
.as-panel{margin-bottom: 10px;}
.as-cover{width:43%;max-height: 90px;}
.padding-l0{padding-left:10px !important}
.origin-panel a {
    height: 45px !important;
    width: 50px !important;
    font-size: 12px;
    color: #999;
    border-radius: 3px;
    list-style: none;
    display: inline-block;
    width: 12%;
    margin-right: 10px;
    text-align: center;
    padding-top: 12px !important;
    padding-left: 6px !important;
}
.ea-ori-site{width:20%}
.ori-button {
    background: #555;

}

@media (max-width: 767px)
.hy-player .item .info {
    height: 280px;
    padding: 0px 0;
}

</style>

<div class="container">
	<div class="row">
		<div class="hy-player clearfix">
			<div class="item">
				<!-- 播放器 -->
				<div class="col-md-9 col-sm-12 padding-0" id ="playersttingPanel">
					<div class="info clearfix"  style="padding: 0px;">
                        <div id="shiping_box" style="height:300px">
						    <iframe id="wuduPlayer" src=""  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none;height:100%"></iframe>
						</div>
                    </div>
				    <!--  /* 播放器操作 */ -->
				    <div class="footer clearfix" style="margin-top: 50px;height:70px">
					    <div class="text-muted text-bold" id="vidname"><?php echo $playtitle; ?>
						    <span id="esp_num"></span>
						</div>
						<div class="text-muted" style="margin-top: -5px;font-size: 12px;"><?php echo '  '.$tvScore; ?> <?php if($tvScore&&$tvitemType){echo'/';};?> <? echo $tvitemType;?>
						</div>
						<div class="text-muted" style="line-height:18px;font-size: 12px;">
						<?php 
						$actorNum = count($vodActor);$actorNum = $actorNum -1;
						foreach ($vodActor as $key => $actor){
							if($key == $actorNum ){
								 $actor = $actor.'...';
							}else{
                            $actor = $actor.'/';
							}
							echo"
							$actor
							";
						} ?>
						</div>
						<span id="voddesc" class="plot bref-description" style="display:none"><?php echo $brinfo; ?></span>
						<div class="text-muted" id="videodesc" style="font-size: 12px;"><span id="arrowname">查看简介 <i id="introdarrow" class="fa  fa-angle-down"></i></span> 
						</div>
				    </div>
				    <!--  /* 播放器操作 */ -->
			    </div>
			    <!-- 播放器 -->
				<!--  /* 选集面板 */ -->
				<div id ="espSettingPanel" class="col-md-3 col-sm-12 padding-0">
					<div class="sidebar">
						<div class="hy-play-list play">
							<div class="item tyui" id="episodesPanel">
                             <!--  电影选集	 -->							
                            <?php
                            if ($mkcmstyle =='m') {?>
	                            <div class="panel clearfix esp-panel">
									<a class="option collapsed option-setting  text-white text-bold" data-toggle="collapse" data-parent="#playlist" href="#playlist" style="color: #ddddddb8;">视频源
										<span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="playlist" class="playlist collapse in episodesPanel">

									<!-- <滑动选集> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix espd-m-panel" style="padding-left: 5px;">	
		                                    <?php 
											foreach ($c as $kk => $vod) {
                                                                $dyurl = str_replace('http://cps.youku.com/redirect.html?id=0000028f&url=', '', "$vod");
	                                                            $dyname = str_replace('(付费)', '', "$d[$kk]");
		                                                echo '
											                    <a data-num="'.$espData[$i]['no'] .'" data-href="'.$dyurl.'" class="btn js-site esp-button ea-site" id="play_default'.$kk.'">'.$dyname.'</a>
											                ';}?>
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动选集> -->	
										
									</div>
						        </div>
								
								<div class="panel clearfix esp-panel">
									<a class="option collapsed option-setting  text-white text-bold" data-toggle="collapse" data-parent="#linelist" href="#linelist">线路
										<span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="linelist" class="playlist collapse in episodesPanel">
										<!-- <滑动切换线路> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix espd-panel" style="padding-left: 5px;    margin-top: -10px;">	
		                                            <?php if($wudu_wuduapi!=""){ ?>
                                                        <a id="defaultLine" data-aline="<?php echo $wudu_wuduapi; ?>" class="btn btn-sm btn js-site esp-button ea-line seleced">默认</a>
                                                    <?php } ?>  
                                                    <?php
                                                    $jkjk=explode("\r\n",$wudu_playapi);
                                                    for($k=0;$k<count($jkjk);$k++){
                                                    $jkjk[$k]=explode('$',$jkjk[$k]);
											                echo '
											                    <a data-aline="'.$jkjk[$k][1].'" id="'.$k.'" class="btn btn-sm btn js-site esp-button ea-line">'.$jkjk[$k][0].'</a>
											                ';}?>
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动切换线路> -->
									</div>
						        </div>
                            <?php  } ?>
							<!--  电影选集	 -->
							 
							<!--  电视和动漫选集	 -->
						    <?php
							if ($mkcmstyle=='tv'||$mkcmstyle=='ct') {?>
								
								<div class="panel clearfix esp-panel">
<!-- 								    <a class="option collapsed"  style="color: #ddddddb8;">视频源</a> -->
									<a class="option collapsed in option-title option-setting text-white" data-toggle="collapse" data-parent="#originlist" href="#originlist">
									    播放源
									    <span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="originlist" class="playlist collapse">
                                        <div class="playlist collapse in">
										<!-- <滑动切换播放源> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix origin-panel" style="padding-left: 5px;    margin-top: -10px;">
                                                            <?php
														   	foreach($espOrigin as $key=>$value)
								                            {
																
								                            echo'
															    <a data-origin="'.$value['site'].'" class="btn js-site ori-button ea-ori-site" id="orisite_'.$key.'">'.$value['name'].'</a>
															';
							                                } 
														   ?>  
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动切换播放源> -->
										</div>
									</div>
								</div>
	
							    
	                            <div class="panel clearfix esp-panel orig-panel" id="oriPanel_0" data-id="real_0">
<!-- 								    <a class="option collapsed"  style="color: #ddddddb8;">视频源</a> -->
									<a class="option collapsed in option-title option-setting" data-toggle="collapse" data-parent="#playlist" href="#playlist<?php echo $yuan[0];?>">
									    选集
									    <span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="playlist<?php echo $yuan[0];?>" class="playlist collapse in">
                                        <div class="playlist collapse in">
										<!-- <滑动选集> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix espd-panel" style="padding-left: 5px;    margin-top: -10px;">	
		                                    <?php 
											$api = "http://www.360kan.com/cover/switchsite?site=".$yuan[0]."&id=".$id."&category=".$category;
											$data = curl($api);

                                            $data=json_decode($data,true);
  
                                            $ordata = $data['data'];
  
                                            $callback = decodeTVUrl($ordata,$site);

										    $espData = $callback['playurl'];
											$asp_count=count($espData);
											for($j=0;$j<$asp_count;$j++){

													 echo '
											                    <a data-num="'.$espData[$j]['no'] .'" data-href="'.$espData[$j]['url'].'" data-site="'.$yuan[$i].'" class="btn js-site esp-button ea-site" id="play_default'.$j.'">'.$espData[$j]['no'].'</a>
											                ';
													
															
															}?>
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动选集> -->
										</div>
									</div>
								</div>
								
							   
							

								<div class="panel clearfix esp-panel">
									<a class="option collapsed option-setting  text-white text-bold" data-toggle="collapse" data-parent="#linelist" href="#linelist">线路
										<span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="linelist" class="playlist collapse in episodesPanel">
									<!-- <滑动切换线路> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix espd-panel" style="padding-left: 5px;    margin-top: -10px;">	
		                                            <?php if($wudu_wuduapi!=""){ ?>
                                                        <a id="defaultLine" data-aline="<?php echo $wudu_wuduapi; ?>" class="btn btn-sm btn js-site esp-button ea-line seleced">默认</a>
                                                    <?php } ?>  
                                                    <?php
                                                    $jkjk=explode("\r\n",$wudu_playapi);
                                                    for($k=0;$k<count($jkjk);$k++){
                                                    $jkjk[$k]=explode('$',$jkjk[$k]);
											                echo '
											                    <a data-aline="'.$jkjk[$k][1].'" id="'.$k.'" class="btn btn-sm btn js-site esp-button ea-line">'.$jkjk[$k][0].'</a>
											                ';}?>
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动切换线路> -->
									</div>
						        </div>
	                        <?php } ?>
							<!--  电视&&动漫选集	 -->
							 
							<!--  综艺选集	 -->
                            <?php 
                            if ($mkcmstyle =='va') {?>
	                            <div class="panel clearfix esp-panel">
									<a class="option collapsed option-title  text-white" data-toggle="collapse" data-parent="#playValist" href="#playValist">选集
									    <span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="playValist" class="playlist collapse in dianshijua">
										<ul class="playlistlink-1 list-15256 clearfix">
                                            <div class="ji-tab-content js-tab-content" style="opacity:0;">
                                                <div class="num-tab js-tabs">
                                                    <div class="num-tab-main js-tab g-clear" style="display:">
                                                    <?php  

													foreach ($varityData as $num=>$varurl){
														
														$vaname = explode('-',$varityTitle[$num]);
														
														$vaname =$vaname[1].$vaname[2];
														
														$vaname =  str_replace('期','',$vaname);
														
														//print_r($vaname);
														
														//$varEspname = str_replace('期','',substr($varityTitle[$num],5));
		                                            echo"
												        <li>
														    <a data-num='$varityTitle[$num]' data-href='$varurl'  id='play_default$num' class='btn btn-sm js-site ea-site' title='$varityTitle[$num]'>$vaname</a>
														</li>
														";
		                                            }?>
		                                            </div>
                                                </div>
                                            </div>
                                        </ul>
									</div>
						        </div>
								<div class="panel clearfix esp-panel">
									<a class="option collapsed option-setting  text-white text-bold" data-toggle="collapse" data-parent="#linelist" href="#linelist">线路
										<span class="text-muted pull-right"><i class="fa  fa-angle-right"></i></span>
									</a>
									<div id="linelist" class="playlist collapse in episodesPanel">
					<!-- <滑动切换线路> -->	
										    <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                                                <div class="hy-min-screen clearfix">
                                                    <div class="item clearfix">
                                                        <dl class="clearfix">
                                                            <dd class="clearfix espd-panel" style="padding-left: 5px;    margin-top: -10px;">	
		                                            <?php if($wudu_wuduapi){ ?>
                                                        <a id="defaultLine" data-aline="<?php echo $wudu_wuduapi; ?>" class="btn btn-sm btn js-site esp-button ea-line seleced">默认</a>
                                                    <?php } ?>  
                                                    <?php
                                                    $jkjk=explode("\r\n",$wudu_playapi);
                                                    for($k=0;$k<count($jkjk);$k++){
                                                    $jkjk[$k]=explode('$',$jkjk[$k]);
											                echo '
											                    <a data-aline="'.$jkjk[$k][1].'" id="'.$k.'" class="btn btn-sm btn js-site esp-button ea-line">'.$jkjk[$k][0].'</a>
											                ';}?>
		                                                    </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
										<!-- <滑动切换线路> -->					
									</div>
						        </div>	
							<?	} ?>
                            <!--  综艺选集	 -->							
					        </div>
				        </div>
			        </div>
		        </div>
		        <!--  /* 选集面板 */ -->
	        </div>
        </div>
    </div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 hy-main-content">
		    <?php $rlcount = count($rlactor);
			if($rlcount>=1){?>
			<!-- <相关影人> -->	
            <div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
                <div class="hy-video-head">
					<h3 class="margin-0 text-white text-bold" style="font-size:14px;">相关影人</h3>
			    </div>
                <div class="hy-min-screen clearfix">
                    <div class="item clearfix">
                        <dl class="clearfix">
                            <dd class="clearfix related-actor-panel">	
		                    <?php 
								$targetUrl = $wudu_domain.'search.html?wd=';
								for($i=0;$i<$rlcount;$i++)
								{
								echo '
								<a href="'.$targetUrl.$rlactor[$i].'">
									<img class ="related-actor-avatar"  src ="'.$rlactoratavar[$i].'" alt="'.$rlactor[$i].'">
										<span class="text-muted related-actor-name">'.$rlactor[$i].'</span>
								</a>
								';		
								}?>
		                    </dd>
                        </dl>
                    </div>
                </div>
            </div>
			<!-- <相关影人> -->		
            <? } ?>

			<!-- <猜你喜欢> -->
			<div class="hy-layout clearfix" style="color: aliceblue;background: #333;">
			    <div class="hy-video-head">
				    <h3 class="margin-0 text-white text-bold" style="font-size:14px;">猜你喜欢</h3>
				</div>
                <div class="hy-min-screen clearfix">
                    <div class="item clearfix" style="margin-bottom: 20px;">
                        <dl class="clearfix">
                            <dd class="clearfix history-panel">
                             
							<?php
							include 'data/like.php';
							foreach ($likename as $ks=>$vs){
                                $host1=$likeurl[$ks]; 
                                $hjiami=$host1; 
                                if ($wudu_wei==1)
								{
                                    $chuandi='../../vod'.$hjiami;
									
                                }else{
								
                                 $chuandi='./vod'.$hjiami;	
								 
                                }
							
							echo'
							    <a href="'.$chuandi.'" style="width:45%">
							        <img src ="'.$likeimg[$ks].'" class="history-cover bd-cover">
									<div class="history-item-name">'.$vs.'</div>
							    </a>
							';
							}?>
							 
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
			
			<!-- <猜你喜欢> -->
			<!-- /* <观看历史> */ -->
		
			<div class="hy-layout clearfix" style="color: aliceblue;background: #333;margin-top: -25px;">
			    <div class="hy-video-head">
				    <h3 class="margin-0 text-white text-bold" style="font-size:14px;">观看历史</h3>
				</div>
                <div class="hy-min-screen clearfix">
                    <div class="item clearfix" style="margin-bottom: 20px;">
                        <dl class="clearfix">
                            <dd class="clearfix history-panel"id="history-list">	
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
			<!-- /* <观看历史> */ -->
			<!---影视相关--->
			<div class="hy-video-list clearfix" >
			    <div class="hy-video-head" style="padding-left:10px !important;margin-bottom:10px">
				    <h3 class="margin-0 text-white text-bold" style="font-size:14px;">精彩推荐</h3>
				</div>
				<div class="item clearfix">
﻿					<?php 
                    include 'data/vodrelative.php';
					$num = count($relaData) ;
					if($s_recount>$num ){$s_recount = $num;}
					for($i=0;$i<$s_recount;$i++)
					{
						$cover = $relaData[$i]['cover'] ;
						$title =  $relaData[$i]['title'] ;
						$duration =  $relaData[$i]['duration'] ;
						$duration = explode(":",$duration);
						$duration =$duration[0].':'.$duration[1];
						$relId = $relaData[$i]['url'];$relId = explode("/",$relId);
					echo'
					<div class="col-md-12 col-sm-12 col-xs-12 as-panel padding-l0">
						<a href="'.$wudu_domain.'vod/sv/'.$relId[4].'">
						<img src="'.$cover.'" class="as-cover bd-cover" alt="'.$title.'">
						    <span class="duration">'.$duration.'</span>
						</a>
						<div class="as-item-title text-white">'.$title.'
						</div>
					</div>
						';	
					}
					?>
			    </div>   
			</div>
			<!---影视相关--->
		</div>
	</div>
</div>
					
<script>
materialSiteInfo.videoApi = $("#defaultLine").attr("data-aline");
var playId = "<?php echo str_replace('play=','',$_SERVER['QUERY_STRING']);?>",playCover="<?php echo $vodCover;?>",playTitle = "<?php echo $playtitle;?>",playDefaultUrl = $("#play_default0").attr("data-href"),playDefaultepd = $("#play_default0").attr("data-num"),vodSource = $("#orisite_0").data('origin');
var videoInfo = {
	types: "<?php echo $mkcmstyle ;?>",
    id: playId,
	name: playTitle,
    url: playDefaultUrl,
	cover: playCover,
    episode: playDefaultepd,
    site: vodSource
}

$(function() {
    if (store.enabled) {
        materialSiteInfo.videoApi = store.get('videoApi')? store.get('videoApi'): materialSiteInfo.videoApi;
       $(".ea-line").each(function () {
            if($(this).data("aline") == materialSiteInfo.videoApi) {
               // $(this).css("color","#fafafa");
                //$(this).addClass("ll-bg-active");
			    $('.ea-line').removeClass("seleced");
                $(this).addClass("seleced");
                return false;
            }
        });
        
/* 		$(".orig-panel").each(function () 
		{
			if($(this).data("id")=="real_")
			{
				
			}
			
		} */
        $("#orisite_0").addClass("seleced");
		
		$("#play_default0").click();
		
		//layer.msg("正在播放第 " + histemp[i].episode + " 集");
		
    $.each($('.num-tab.js-tabs'),function () {
		
                        if($(this).children('.num-tab-main').length>1){
                            $(this).children('.num-tab-main:eq(0)').remove();
                        }
                     

                    });
    $('.ji-tab-content.js-tab-content').css('opacity',1);

        var histemp = store.get('history')? store.get('history'): [];
        
        for(var i=0; i<histemp.length; i++) {
			
            if(histemp[i].id == videoInfo.id) {
				
                videoInfo.url = histemp[i].url;  // 
                videoInfo.episode = histemp[i].episode;  // 
				videoInfo.cover = histemp[i].cover;  // 
				
				var historySite = histemp[i].site;
				
				if(historySite !=='')
				{
					videoInfo.site = histemp[i].site;  //
					
				}
				//connsole.log(videoInfo.site);
				
				//$('.orig-panel').attr("style",'display:none');	
        
                $("#oriPanel_"+videoInfo.site).show();
				
				$(".ea-ori-site").each(function () {
					
					if($(this).data("num") == videoInfo.episode) {
            $(this).addClass("seleced");
            return false;    // 
        }	
					
			
                if($(this).data("origin") == videoInfo.site) {
				
				$(".ea-site").removeClass("seleced");
				
                $(this).addClass("seleced");
					
			   
                return false;
				
            }
			
        });
                
				if(videoInfo.types =="tv"||videoInfo.types =="ct"){
					
					layer.msg("您上次观看到第 " + histemp[i].episode + " 集");
					
					
					
				}else if(videoInfo.types ="va"){
					
					layer.msg("您上次观看到第 " + histemp[i].episode);
				}

                break;
            }
        }
    }


    highlightSource();
	
	
	$(".ea-ori-site").on("click",function() { 

        $(".ea-ori-site").removeClass("seleced");
		
        $(this).addClass("seleced");
		
        videoInfo.site = $(this).data('origin');    //
		
		//console.log(videoInfo.episode);console.log(videoInfo.site);
		
		$('.orig-panel').attr("style",'display:none');	
        
        $("#oriPanel_"+videoInfo.site).show();	
		
	    $.each($('.ea-site'),function () {
		
           if($(this).data("num")== videoInfo.episode && $(this).data("site")== videoInfo.site)
		   {
							
            
			videoInfo.url = $(this).data("href");
			
			$(this).addClass("seleced");
            
			}
                     

        });
					
		 refreshVideo();

    });

	$(".ea-site").on("click",function() { 

        $(".ea-site").removeClass("seleced");
        $(this).addClass("seleced");
        videoInfo.url = $(this).data("href");    // 
        videoInfo.episode = $(this).data("num");       // 
        videoInfo.site = $(this).data("site");    //		
        refreshVideo();
        
		if(videoInfo.types =="tv"||videoInfo.types =="ct"){
					
					layer.msg("正在播放第 " + videoInfo.episode + " 集");
					
				}else if(videoInfo.types ="va"){
					
					layer.msg("正在播放第 " + videoInfo.episode);
				}
    });

    $(".ea-line").click(function() {
		
		$(".ea-line").removeClass("seleced");

		$(this).addClass("seleced");

        materialSiteInfo.videoApi = $(this).data("aline");
        
        refreshVideo();

        layer.msg("已切换至线路" + $(this).html());
    });

    refreshVideo();
	

});

function highlightSource() {
    $(".ea-site").each(function () {
		    
				if($(this).data("num") == videoInfo.episode) {
            $(this).addClass("seleced");
            return false;    // 
        }
		
			if($(this).data("num") == videoInfo.episode&&$(this).data("site") == videoInfo.site) {
            $(this).addClass("seleced");
            return false;    // 
        }
	        
    });
}

function refreshVideo() {

    $("#wuduPlayer").attr("src", materialSiteInfo.videoApi + videoInfo.url);

    if (store.enabled) {
        store.set("videoApi", materialSiteInfo.videoApi);    // 记录所用的api接口
        var temp = {
			        types: videoInfo.types,
                    id: videoInfo.id, 
                    name: videoInfo.name,
					cover: videoInfo.cover,
                    url: videoInfo.url,
                    episode: videoInfo.episode,
                    site: videoInfo.site
                };
				
				//console.log(temp);

        var histemp = store.get('history')? store.get('history'): [];
        
        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == videoInfo.id) {
                histemp.splice(i, 1); // 
                break;
            }
        }
        
        histemp.unshift(temp);

        if(histemp.length > 10) histemp.length = 10; 
        
        store.set('history', histemp);
    }
}

//////////////////////
	    var swiper = new Swiper('.hy-switch', {
	        //pagination: '.swiper-pagination',
	        //paginationClickable: true,
			//loop:true,
	        slidesPerView: 3,
	        spaceBetween: 0,
	        //nextButton: '.swiper-button-next',
	        //prevButton: '.swiper-button-prev',
	        breakpoints: {
	            1200: {
	                slidesPerView: 4,
	                spaceBetween: 0
	            },
	            767: {
	                slidesPerView: 3,
	                spaceBetween: 0					            
	            }
	        }
	    });	

//移动端播放器位置处理
//if ($(window).width() < 751) {
window.onscroll = function()
{ 
	var t = document.documentElement.scrollTop || document.body.scrollTop;  
	var topMenuFloat = document.getElementById("shiping_box");
	//var msplayer = document.getElementById("wuduPlayer");
	if( t >= 62 ) 
	{ 
		//当scrollTop值大于预设值
		
		if(topMenuFloat)
		{
			topMenuFloat.style = "position:fixed;top:0px;width:100%;height:300px;z-index:9999";
		}

	} 
	else 
	{ 
		
		if(topMenuFloat)
		{
			topMenuFloat.style='width:100%;height:300px;';
		}
	} 
}
//}

/////
 $(function () {
            var span = document.getElementById("voddesc");
            var btn = document.getElementById("videodesc");
            var str = span.innerHTML;
			
            //记录展开和收缩
            var isOn = true;
            btn.onclick = function () {
                isOn  = !isOn;
                if(isOn == false){
					span.style ="";
					span.innerHTML = str;
                    btn.innerHTML = "收起  <i class=\"fa  fa-angle-up\"></i>";
                }else{
                    //收缩
                    span.innerHTML = str.substring(0,0);
					span.style ="display:none";
                    btn.innerHTML = "查看简介 <i class=\"fa  fa-angle-down\"></i>";
					$('html,body').animate({scrollTop: '0px'}, 800);
                }
            }
        });
////////
var store;

$(function() {

        if (store.enabled) {
            var histemp = store.get('history')? store.get('history'): [];
            
            //if(histemp.length == 0) {
               // $("#history-list").html('<li><a href="javascript:;">暂无播放记录</a></li>');
           // } else {
                //$("#history-list").html('');
                
                for(var i=0; i<histemp.length; i++) {
                     
                     switch(histemp[i].types) {
                        case 'splay':
						
						    $("#history-list").append(
							
							
							    '<a href="<?php echo $wudu_domain;?>splay/'+histemp[i].id+'.html" style="width:45%">'+
							        '<img src ="'+histemp[i].cover+'" class="history-cover bd-cover">'+
									'<div class="history-item-name">'+histemp[i].name+'</div>'+
							    '</a>'
							);

                        break;
						
						default:
                            $("#history-list").append(
							
							    '<a href="<?php echo $wudu_domain;?>vod'+histemp[i].id+'" style="width:45%">'+
							        '<img src ="'+histemp[i].cover+'" class="history-cover bd-cover">'+
									'<div class="history-item-name">'+histemp[i].name.substring(0,10)+'</div>'+
							    '</a>'
							 );
                        break;
					 }
                }
            //}
            
        }
   

});
</script>
<script type="text/javascript">

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
<script src="https://file.5kvideo.cc/layer/layer.js"></script>
<style>
.silder-icon{padding-top: 16px;font-size: 18px;}
.mb-nav{padding-top: 15px;line-height: 20px;}
.mb-title-icon{font-size:18px}
</style>
 <div class="tabbar visible-xs">
		<a href="<?php echo $wudu_domain;?>" class="item mb-nav">
            <i class="fa fa-home mb-title-icon"></i>
            <p class="text">首页</p>
        </a>
	    <a href="<?php echo $wudu_domain;?>movie.html" class="item mb-nav">
            <i class="fa fa-film mb-title-icon"></i>
            <p class="text">电影</p>
        </a>
		<a href="<?php echo $wudu_domain;?>tv.html" class="item mb-nav">
            <i class="fa fa-desktop mb-title-icon"></i>
            <p class="text">电视剧</p>
        </a>
		<a href="<?php echo $wudu_domain;?>cartoon.html" class="item mb-nav">
            <i class="fa fa-flickr mb-title-icon"></i>
            <p class="text">动漫</p>
        </a>
		<a href="<?php echo $wudu_domain;?>variety.html" class="item mb-nav">
            <i class="fa fa-star-o mb-title-icon"></i>
            <p class="text">综艺</p>
        </a>		
	</div> 
<?php
function getaspiod($site,$id,$cat,$glue){

$url = "http://www.360kan.com/cover/switchsite?site=".$site."&id=".$id."&category=".$cat;
  
$html = curl($url);$data=json_decode($html);//
$tvzz='#<div class="num-tab-main g-clear\s*js-tab"\s*(style="display:none;")?>[\s\S]+?<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">[\s\S]+?</div>#';
$tvzz1 = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';
preg_match_all($tvzz, $data, $tvarr);
$zcf = implode($glue, $tvarr[0]);
//preg_match_all($tvzz1,  $zcf, $tvarr);

print_r($tvarr);

//return array('url'=>$tvarr[3],'esp'=>$$tvarr[1]);
}
?>
<!-- 移动端 -->