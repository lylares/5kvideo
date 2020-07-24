<?php 
$id = htmlentities(trim($_GET['id']));
$site = htmlentities(trim($_GET['type']));

switch ($site){
	
	case '1':
	
	$playurl = 'https://v.pptv.com/show/'.$id.'.html';
	
	$pdata = GBS::curl("https://api.cn.berryapi.net/?s=Parse/Tvlist&url=".$playurl);
	
	$pdata = json_decode($pdata,true);

    $watchcount = $pdata['epsodelist'][0]['pv'];

    $playtitle = $pdata['epsodelist'][0]['title'];

    $playcover = $pdata['epsodelist'][0]['capture'];
	
	break;
    
    case '2':
	
	$playurl = 'http://v.yinyuetai.com/video/'.$id;
	
	$pdata = GBS::curl("http://ext.yinyuetai.com/main/get-h-mv-info?json=true&videoId=".$id);
	
	$pdata = json_decode($pdata,true);
    
    $playtitle = $pdata['videoInfo']['coreVideoInfo']['videoName'];
    $playcover = 'https:'.$pdata['videoInfo']['coreVideoInfo']['bigHeadImage'];
    $pauthor = $pdata['videoInfo']['coreVideoInfo']['artistNames'];

    //$watchcount = $pdata['epsodelist'][0]['pv'];

	
	break;
    case '3':
	
	$playurl = 'http://www.1905.com/video/play/'.$id.'.shtml';
	
	$pdata = GBS::curl("http://www.1905.com/api/video/getlist2.php?id=".$id);
    
    preg_match('/video_'.$id.'\((.*?)\)/',$pdata,$tdata);
    
	
	$tdata = json_decode($tdata[1],true);

    $playtitle = $tdata['tab1']['video'][0]['title'];
    $playcover = $tdata['tab1']['video'][0]['thumb'];
    $playtotal = $tdata['tab1']['video'][0]['hits'];

    //$watchcount = $pdata['epsodelist'][0]['pv'];

	
	break;
     case '4':
	
	$playurl = 'http://v.huya.com/play/'.$id.'.html';
	
	$pdata = GBS::curl("http://v.huya.com/jsapi/getVideoInfo?callback=&vids=".$id);

	$tdata = json_decode($pdata,true);
    
    $tdata = $tdata[$id];

    $playtitle = $tdata['video_title'];
    $playcover = $tdata['video_cover'];
    $playtotal = $tdata['video_play_num'];

    //$watchcount = $pdata['epsodelist'][0]['pv'];

	
	break;
     case '5':
	
	$playurl = 'https://www.huomao.com/'.$id;
	
	$pdata = GBS::curl($playurl);
    preg_match('/channelOneInfo = \{(.*?)\};/',$pdata,$temp);
    
    $pdata = '{'.$temp[1].'}';
    
    $pdata = json_decode($pdata,1);
    
    $playtitle = $pdata['channel'];
    
    $playcover = $pdata['image'];

    //$playtotal = $pdata['channel'];
	
	break;
     case '6':
	
	$playurl = 'https://www.huya.com/'.$id;
    
    $murl = 'https://m.huya.com/'.$id;
    
    $para['ua'] ="Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1";
	
	$pdata = GBS::curl($murl,$para);
    
    preg_match("/game_name: '(.*?)',/",$pdata,$temp);
    preg_match("/iveRoomName = '(.*?)';/",$pdata,$temp1);
    preg_match("/picURL = '(.*?)'/",$pdata,$temp2);
    preg_match("/ANTHOR_NICK = '(.*?)';/",$pdata,$temp3);
    preg_match("/videoTitle = '(.*?)';/",$pdata,$temp4);

	$playtitle = $temp4[1];
    $playcover = $temp2[1];

	
	break;
}

if(!isset($_SESSION['uid'])){
$playurl="";
};

mui_head('正在播放',1) ;
?>
<style>
.tabs-current{display:block;}
</style>

<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-play-info wdu-margin-top wdu-box-shadow wdu-back-whits wdu-part-rows">
			<div class="wdu-col-xs12 wdu-col-md9">
				<div class="wdu-play-player wdu-part-rows wdu-back-black wdu-part-16by9">
					<div class="wdu-play-loader wdu-part-full">
						<span class="wdu-part-core wdu-font-xvi wdu-text-white wdu-text-center">正在加载...</span>
					</div>
					<iframe id="wdu-play-iframe" class="wdu-play-iframe wdu-part-full" frameborder="0" scrolling="no" allowfullscreen="true" src=""></iframe>
					<div class="wdu-play-error wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					    <h2 class="wdu-text-center wdu-font-xvi wdu-hide-xs">失效数据，我们会在第一时间内修正</h2>
						<div class="wdu-comm-report" data-repo="">
						    <div class="wdu-part-layout wdu-back-whits">
							    <form class="wdu-comm-fork wdu-comm-form wdu-event" data-role="0" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
								    <ul class="wdu-part-rows">
									    <li class="wdu-padding wdu-col-xs12">
										    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容">【ID:<?php echo $d_id;?>】无法观看请检查修复。页面地址：<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/wdu/'.$site.'/'.$id.'.html';?></textarea>
										</li>
										<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
										    <p class="wdu-form-info wdu-rims-info wdu-text-muted">提示：<span class="wdu-comm-tips">还可以输入154字</span></p>
										</li>
										<li class="wdu-padding wdu-col-xs6 wdu-col-md4">
										    <input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码">
										</li>
										<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
										    <img class="wdu-rims-info wdu-comm-code" height="40" src="<?php echo $wudu_domain;?>data/verifycode.html" data-role="" title="看不清楚? 换一张！" onclick="this.src=this.src">
										</li>
										<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
										    <a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks">提交</a>
										</li>
									</ul>
								</form></div>
						</div>
					</div>
					
					<!-- <div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits wdu-show"> -->
					<div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					    <h2 class="wdu-text-center wdu-play-top wdu-font-xvi">如有无法播放请切换视频解析接口</h2>
						<ul class="wdu-part-layout wdu-part-rows">
							<li class="wdu-padding wdu-col-xs3">
							    <a class="wdu-btns-info wdu-rims-info ea-line wdu-visible" id="defaultLine" data-aline="<?php echo $wudu_wuduapi; ?>"  href="javascript:;">默认</a>
							</li>
							<?php
                            $parseLine=explode("\r\n",$wudu_playapi);
							$num= count($parseLine);
                            for($i=0;$i<$num;$i++)
							{
								$parseLine[$i]=explode('$',$parseLine[$i]);
                            echo 
							'
							<li class="wdu-padding wdu-col-xs3">
								<a  data-aline="'.$parseLine[$i][1].'" id="'.$i.'" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">'.$parseLine[$i][0].'</a>
							</li>
							';
							}?>
						</ul>
					</div>
				</div>
				<div class="wdu-play-title wdu-part-rows">
					<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
						<li class="wdu-padding wdu-col-xs6"><span class="wdu-play-text wdu-visible wdu-font-xvi wdu-part-eone"><?php echo $playtitle; ?></span></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-reno wdu-event" href="javascript:;">重播</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-btns wdu-event" href="javascript:;">切换接口</a></li>
					</ul>
					<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
						<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-erro wdu-event" href="javascript:;">报错</a></li>
						
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-prev" href="javascript:">上一集</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-next" href="javascript:;">下一集</a></li>
					</ul>
				</div>
				
			</div>
			<div class="wdu-col-xs12 wdu-col-md3">
				<div class="wdu-tabs-info wdu-tabs-play wdu-conv-double wdu-part-roll">
					<div class="wdu-tabs-boxs">
						<div class="wdu-tabs-head">
							<span class="wdu-tabs-top wdu-tabs-title wdu-font-xvi wdu-part-rows wdu-hidden wdu-show">
							    <span class="wdu-col-xs4 wdu-part-eone">剧集</span>
							</span>
						</div>
						<div class="wdu-tabs-foot">
							<ul class="wdu-tabs-btm wdu-padding wdu-part-rows">
								<li class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
									<a data-num="1" class="ea-site wdu-btns-info wdu-rims-info wdu-part-eone wdu-tabs-btn" data-href="<?php echo $playurl;?>">1</a>
								</li>
				
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wdu-part-rows">
			<div class="wdu-main-left wdu-col-xs12 wdu-col-md9">
				<div class="wdu-part-layout wdu-back-whits wdu-margin-right">
					<dl class="wdu-list-deta wdu-margin wdu-part-rows wdu-part-over">
						<dt class="wdu-deta-images wdu-list-info wdu-col-xs3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="#" data-original="<?php echo $playcover;?>">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $tvScore;?></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
							</a>
						</dt>
						<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
						<h1 class="wdu-part-eone wdu-font-xvi"><a href=""><?php echo $playtitle; ?></a></h1>
						<ul class="wdu-part-rows">
							<li class="wdu-part-eone">
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
							</li>
							<li class="wdu-part-eone"><span class="wdu-text-muted">导演：</span><a href="" target="_blank"></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">分类：</span><a href="" target="_blank"></a></li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="" target="_blank"><?php echo $tvarea;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span><a href="" target="_blank"><?php echo $tvyear;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span></li>
						</ul>
						</dd>
						<!-- <dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="">查看详情</a></dd> -->
					</dl>
				</div>
				
              
              <div class="wdu-conv-info wdu-part-layout wdu-margin-right wdu-back-whits notice">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi" id="wdu-tabs-nav">
						    <a class="wdu-conv-btn  wdu-text-bold wdu-text-green" href="javascript:void(0)">剧情简介</a>
						    <a class="wdu-conv-btn" href="javascript:void(0)">我要评论</a>
						</h2>
					</div>
					<div class="wdu-conv-deta" id="wdu-tabs-container">
					    <div class="wdu-conv-boxs wdu-conv-cont wdu-hidden tab-item tabs-current">
						    <p class="wdu-conv-text wdu-padding wdu-text-muted"><?php echo $content; ?></p>
						</div>
					    <div class="wdu-conv-boxs wdu-conv-comm wdu-hidden tab-item">
						    <div class="wdu-comm-info" data-id="395" data-mid="1">
							    <form class="wdu-comm-fort wdu-comm-form" id="wdu-comm-form" data-role="1" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
								    <input type="hidden" name="comment_pid" value="0">
									    <ul class="wdu-part-rows">
										    <li class="wdu-padding wdu-col-xs12">
											    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="comment_content" cols="40" rows="4" placeholder="输入留言内容"></textarea>
										    </li>
											<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
											    <p class="wdu-form-info wdu-rims-info wdu-text-muted">提示：<span class="wdu-comm-tips">还可以输入255字</span></p>
											</li>
											<li class="wdu-padding wdu-col-xs6 wdu-col-md4">
											    <input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码">
											</li>
											<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
											    <img class="wdu-rims-info wdu-comm-code" height="40" src="<?php echo $wudu_domain;?>data/verifycode.html" title="看不清楚? 换一张！" onclick="this.src=this.src">
											</li>
											<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
											    <a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-submit" href="javascript:;">发表</a>
											</li>
										</ul>
								</form>
								<ul class="wdu-comm-list">
								    <li class="wdu-comm-each wdu-part-rows wdu-line-top wdu-margin">
									    <img class="wdu-comm-avat wdu-part-roun" src="/public/assets/images/touxiang.png">
                                        <div class="wdu-comm-head">
                                            <strong class="wdu-text-line">游客</strong>
                                                <span class="wdu-part-tips">2018-11-14 16:22:18</span>
                                        </div>
                                        <div class="wdu-comm-cont">测试<div class="wdu-comm-action wdu-text-right wdu-font-xii">
                                          <a class="wdu-comm-repo" data-id="1" href="javascript:;">举报</a>
                                          <a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="up" href="javascript:;">支持(1)</a>
                                          <a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="down" href="javascript:;">反对(2)</a>
                                          <a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a>
                                          </div>
                                          <div class="wdu-comm-reply wdu-back-ashen wdu-comm-tops">
                                            <img class="wdu-comm-avat wdu-part-roun" src="/public/assets/images/touxiang.png">
                                            <div class="wdu-comm-head">
                                              <strong class="wdu-text-line">游客</strong>
                                              <span class="wdu-part-tips">2018-11-14 16:22:29</span>
                                            </div>
                                            <div class="wdu-comm-cont">@游客：测试<div class="wdu-comm-action wdu-text-right wdu-font-xii">
                                              <a class="wdu-comm-repo" data-id="2" href="javascript:;">举报</a>
                                              <a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="up" href="javascript:;">支持(<span>2</span>)</a>
                                              <a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="down" href="javascript:;">反对(<span>0</span>)</a>
                                              <a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
									</li>
								</ul>
							
							</div>
						</div>

					</div>
				</div>
              
				<div class="wdu-part-layout wdu-margin-right wdu-back-whits">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi">相关热播</h2>
						<ul class="wdu-part-tips wdu-padding">
							<li><a class="wdu-more" href="/">更多</a></li>
						</ul>
					</div>
					<ul class="wdu-list-info wdu-part-rows">
						<?php include 'data/like.php';

foreach ($likename as $ks=>$vs){

$host1=$likeurl[$ks]; 
$hjiami=$host1; 
if ($wudu_wei==1){
$chuandi='../../vod'.$hjiami;
}
else{
$chuandi='./vod'.$hjiami;	
}
	                   echo '
					    <li class="wdu-list-item wdu-padding wdu-width-xx wdu-col-xs4 wdu-col-sm3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$chuandi.'" data-original="'.$likeimg[$ks].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">'.$vs.'</a>
						</li>
						';
					   
					   
					} ?>   

					</ul>
				</div>
			</div>
			<div class="wdu-main-right wdu-col-xs12 wdu-col-md3">
				<div class="wdu-side-info wdu-part-layout wdu-back-whits wdu-hide-xs wdu-hide-sm wdu-show-md-block">
					<div class="wdu-side-list wdu-text-center wdu-hide-xs wdu-part-rows wdu-line-bottom">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi wdu-text-center">扫描二维码手机看大片</h2>
						<div class="wdu-side-code">
							<img class="wdu-side-image qrcode-share-img" src=""/>
						</div>
						<p class="wdu-text-center">
							也可以分享到朋友圈哦
						</p>
					</div>
					<div class="wdu-side-list wdu-list-info wdu-line-bottom wdu-list-rank wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">
						<?php if($mkcmstyle=='m')echo'电影';if($mkcmstyle=='tv')echo'电视剧';if($mkcmstyle=='va')echo'综艺';if($mkcmstyle=='ct')echo'动漫';?>排行榜
						    <a class="wdu-part-tips wdu-font-xiv" href="/index.php/label/rank.html">更多</a>
						</h2>
						<ul class="wdu-part-rows">
                       
						<?php 
				        include './data/bangdan.php';
				        foreach ($bdArr[$mkcmstyle]['title'] as $k=>$title){
						$bdurl=$bdArr[$mkcmstyle]['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr[$mkcmstyle]['num'][$k];//num
						$num = $k+1; 
						echo' 
						    <li class="wdu-part-eone">
						        <a href="'.$wudu_domain.'vod'.$bdurl.'" title="'.$title.'">
							        <span class="wdu-part-nums wdu-part-num'.$num.'">'.$num.'</span>'.$title.'
								    <span class="wdu-part-tips wdu-text-green">'.$bdnum.'</span>
						        </a>
						    </li>
						';}?>	
						</ul>
					</div>

					<div class="wdu-side-list wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">推荐专题<a class="wdu-part-tips wdu-font-xiv" href="{maccms:link_topic_vod}">更多</a></h2>
						<ul class="wdu-list-info">
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="" style="background-image: url(https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike220%2C5%2C5%2C220%2C73/sign=a2762037d6a20cf4529df68d17602053/ae51f3deb48f8c546f1a629f3c292df5e1fe7fb1.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">复仇者联盟</span></a></li>
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="" style="background-image: url(https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C5%2C600%2C395%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=5e23f0003d7adab4299f4103b6e49f29/0bd162d9f2d3572cb7e5dff48113632762d0c397.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">X战警</span></a></li>
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="" style="background-image: url(https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=6efa53c742a98226accc2375ebebd264/cb8065380cd7912312e345c6ac345982b2b78005.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">少儿频道直播</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
var playDefaultUrl = $('.ea-site[data-num="1"]').data("href"),playDefaultepd = $('.ea-site[data-num="1"]').data("num"),vodSource = $("#defaultEspPanel").data('name'),esptotalnum ='<?php echo $esptotlaNum;?>',playApi = $("#defaultLine").attr("data-aline");
window.globalConfig.playInfo = {
	types: "dplay",
    id: "<?php echo $site.'_'.$id;?>",
	name: "<?php echo $playtitle;?>",
    url: playDefaultUrl,
	cover: "<?php echo $playcover;?>",
    episode: playDefaultepd,
    site: vodSource,
    videoApi:playApi,
}

$(function() {
   if($('.ea-site[data-num="1"]').hasClass("wdu-btns-green")){
   $(".wdu-play-next").addClass("wdu-btns-disad");
   }
   
   if($('.ea-site[data-num="'+esptotalnum+'"]').hasClass("wdu-btns-green")){
   $(".wdu-play-prev").addClass("wdu-btns-disad");
   }
    if (store.enabled) {


		$("#play_default0").click();

        var histemp = store.get('history')? store.get('history'): [];
        
        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == window.globalConfig.playInfo.id) {
                window.globalConfig.playInfo.url = histemp[i].url;  // 
                window.globalConfig.playInfo.episode = histemp[i].episode;  //
									
					layer.msg("您上次观看到第 " + histemp[i].episode + " 集");


                break;
            }
        }
    }


    highlightSource();

	$(".ea-site").on("click",function() { 

        $(".ea-site").removeClass("wdu-btns-green");
        $(this).addClass("wdu-btns-green");
        window.globalConfig.playInfo.url = $(this).data("href");    // 
        window.globalConfig.playInfo.episode = $(this).data("num");       // 
        window.globalConfig.playInfo.site = $(this).parent().attr('id');    //
        console.log(videoInfo);		
        refreshVideo();
					
		layer.msg("正在播放第 " + window.globalConfig.playInfo.episode + " 集");
					
					
					
				
        
    });

    $(".ea-line").click(function() {
		
		$(".ea-line").removeClass("wdu-btns-green");

		$(this).addClass("wdu-btns-green");

        window.globalConfig.playInfo.videoApi = $(this).data("aline");
        
        refreshVideo();

        layer.msg("已切换至" + $(this).html());
    });

    refreshVideo();
	

});

function highlightSource() {
    $(".ea-site").each(function () {
        if($(this).data("href") == window.globalConfig.playInfo.url) {
            $(this).addClass("wdu-btns-green");
            return false;    // 
        }
    });
}

function refreshVideo() {

    $("#wdu-play-iframe").attr("src", window.globalConfig.playInfo.videoApi + window.globalConfig.playInfo.url);

    
    //$(".btn-goto-origin").attr("href", videoInfo.url);

    if (store.enabled) {
        store.set("videoApi", window.globalConfig.playInfo.videoApi);    // 记录所用的api接口
        var temp = {
			        types: window.globalConfig.playInfo.types,
                    id: window.globalConfig.playInfo.id, 
                    name: window.globalConfig.playInfo.name,
					cover: window.globalConfig.playInfo.cover,
                    url: window.globalConfig.playInfo.url,
                    episode: window.globalConfig.playInfo.episode,
                    site: window.globalConfig.playInfo.site
                };

        var histemp = store.get('history')? store.get('history'): [];

        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == window.globalConfig.playInfo.id) {
                histemp.splice(i, 1); // 
                break;
            }
        }
        
        histemp.unshift(temp);

        if(histemp.length > 10) histemp.length = 10; 
        
        store.set('history', histemp);
    }
}

$("body").on("click",".wdu-play-reno",function(){
	refreshVideo();
})

$(".wdu-play-prev").click(function(){
	var preEsp = window.globalConfig.playInfo.episode -1;
$('.ea-site[data-num='+preEsp+']').click();
})

$(".wdu-play-next").click(function(){
	var nextEsp = window.globalConfig.playInfo.episode +1;
	$('.ea-site[data-num='+nextEsp+']').click();
})

//选集同步
	
</script>
<script type="text/javascript">
   $(function(){
	   $("body").bind("click", function (e) {
            if($(e.target).closest(".wdu-play-btns").length>0){
				$(".wdu-conceal").addClass("wdu-hidden")
				$(".wdu-play-parse").removeClass("wdu-hidden")
			}else if($(e.target).closest(".wdu-play-erro").length>0){
				$(".wdu-conceal").addClass("wdu-hidden")
				$(".wdu-play-error").removeClass("wdu-hidden")
			}else{
            $(".wdu-conceal").removeAttr("style")
            $(".wdu-conceal").addClass("wdu-hidden")			
        }
    })


   })

</script>
<script type="text/javascript">
  $(function(){
    tabs($("#wdu-tabs-nav a"), $('#wdu-tabs-container .tab-item'));  
})


var tabs = function(tab, con){
    tab.click(function(){
        var indx = tab.index(this);
        tab.removeClass('wdu-text-bold wdu-text-green');
        $(this).addClass('wdu-text-bold wdu-text-green');
        con.hide();
        con.eq(indx).show();
    })    
}
</script>
<?php
mui_footer();

if(isset($_SESSION['uid'])&&$_SESSION['uid']){

$uid = $_SESSION['uid'];
 
$play = trim($_GET['id']);
$site = trim($_GET['type']);
  
$playurl = $wudu_domain.'dplay/'.$site.'_'.$id.'.html'; 

if(isset($play)&&$play)
{

  $sql = "select * from wudu_play where userid = '$uid' and url ='$playurl' and site = '$site'";
  $res = $db->getRow($sql);
  
  $rid = $res['id'];
    $_data['userid'] = $uid;
    $_data['name'] = $playtitle;
    $_data['url'] = $playurl;
    $_data['cover'] = $playcover;
    $_data['types'] = "dplay";
     $_data['type'] = "雾都影视";
    $_data['site'] = $site;
    $_data['times'] = date("Y-m-d H:i:s");
    
   if(!$res){
    
   $res = $db->insert("wudu_play",$_data);
  }else{
       $db->update("wudu_play",$_data,"id='$rid'");

  
  }
}
  
}