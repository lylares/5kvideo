<?php 
$playtitle = $title;
$shdesc = $content;
mui_head('正在播放',1) ;

?>
<style>
.tabs-current{display:block;}
</style>
<div class="wdu-tabr-info wdu-back-whits wdu-min-width wdu-line-top wdu-hide-sm">
	<ul class="wdu-part-rows">
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>"><i class="wdu-icon-font wdu-icon-shouye"></i><span class="wdu-font-xii">首页</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>special.html?cid=0"><i class="wdu-icon-font wdu-icon-zixun"></i><span class="wdu-font-xii">精选</span></a></li>
      		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>rec.html"><i class="wdu-icon-font wdu-icon-zhuanti"></i><span class="wdu-font-xii">推荐</span></a></li>

		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>gustbook.html"><i class="wdu-icon-font wdu-icon-liuyan"></i><span class="wdu-font-xii">求片</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="<?php echo $wudu_domain;?>u"><i class="wdu-icon-font wdu-icon-yonghu"></i><span class="wdu-font-xii">我的</span></a></li>
	</ul>
</div>
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
						<div class="wdu-comm-report" data-repo="/index.php/gbook/report.html">
						    <div class="wdu-part-layout wdu-back-whits">
							    <form class="wdu-comm-fork wdu-comm-form wdu-event ser-feed-form" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
								    <ul class="wdu-part-rows">
									    <li class="wdu-padding wdu-col-xs12">
										    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="feed_content" cols="40" rows="4" placeholder="输入留言内容">【ID:<?php echo $pid;?>】无法观看请检查修复。页面地址：<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/splay/'.str_replace('play=','',$_SERVER['QUERY_STRING']).'.html';?>
											</textarea>
											<input name="pid" value="<?php echo $pid;?>" style="display:none">
											<input name="ptype" value="splay" style="display:none">
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
										    <a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks error-submit-btn">提交</a>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
					
					<!-- <div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits wdu-show"> -->
					<div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					    <h2 class="wdu-text-center wdu-play-top wdu-font-xvi">如无法播放请切换线路</h2>
						<ul class="wdu-part-layout wdu-part-rows">
							<li class="wdu-padding wdu-col-xs3">
							    <a class="wdu-btns-info wdu-rims-info wdu-visible ea-line" id="defaultLine" data-aline="<?php echo $wudu_wuduapi; ?>"  href="javascript:;">默认</a>
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
						<li class="wdu-padding wdu-col-xs6"><span class="wdu-play-text wdu-visible wdu-font-xvi wdu-part-eone"><?php echo $name; ?></span></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-reno wdu-event" href="javascript:;">重播</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-btns wdu-event" href="javascript:;">切换线路</a></li>
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
							<?php
                              
                              $playurls=explode("$$$",$scontent);
                              
                              $groupsCount = count($playurls);
                              
                              
                               if(isset($_SESSION['uid'])&&$_SESSION['uid']){

                                
                                $player = "ck";
                                 
                               foreach ($playurls as $k =>$valve){
                                 
                                 
                                $turls=explode("#",$valve);

                                 
                                 foreach ($turls as $k =>$v){
        
                                     $urls=explode("$",$v);
                                   
                                     if(strstr($urls[1],"https")==true){
                                     
                                     $player="dp";
                                 
                                    }
                                   
                                   if(strstr($urls[1],".m3u8")==true){
                                   
                                    echo
									 '
									<li class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
										<a data-num="'.($k+1).'" class="ea-site wdu-btns-info wdu-rims-info wdu-part-eone wdu-tabs-btn" data-href="'.$urls[1].'&player='.$player.'">'.$urls[0].'</a>
									</li>
									';
                                   }
                                 }
                                 
                                 //$ename = preg_replace("/[^a-zA-Z0-9_.-]+/","", $ename);
                               }
                                 
                                 //return;

                              }
                            
                              ;?>
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
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="" data-original="<?php echo $picture;?>">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $score;?></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
							</a>
						</dt>
						<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
						<h1 class="wdu-part-eone wdu-font-xvi"><a href=""><?php echo $name; ?></a></h1>
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
							echo $actor;
						} ?>
							</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">导演：</span><a href="" target="_blank"><?php echo $director;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">演员：</span><a href="" target="_blank"><?php echo $actor;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">分类：</span><a href="" target="_blank"><?php echo $mtype;?></a></li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="" target="_blank"><?php echo $area;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">语言：</span><a href="" target="_blank"><?php echo $language;?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">上映：</span><a href="" target="_blank"><?php echo $date;?></a>&nbsp;&nbsp;</li>
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
									    <img class="wdu-comm-avat wdu-part-roun" src="/static/images/touxiang.png"><div class="wdu-comm-head"><strong class="wdu-text-line">游客</strong><span class="wdu-part-tips">2018-11-14 16:22:18</span></div><div class="wdu-comm-cont">测试<div class="wdu-comm-action wdu-text-right wdu-font-xii"><a class="wdu-comm-repo" data-id="1" href="javascript:;">举报</a><a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="up" href="javascript:;">支持(1)</a><a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="down" href="javascript:;">反对(2)</a><a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a></div><div class="wdu-comm-reply wdu-back-ashen wdu-comm-tops"><img class="wdu-comm-avat wdu-part-roun" src="/static/images/touxiang.png"><div class="wdu-comm-head"><strong class="wdu-text-line">游客</strong><span class="wdu-part-tips">2018-11-14 16:22:29</span></div><div class="wdu-comm-cont">@游客：测试<div class="wdu-comm-action wdu-text-right wdu-font-xii"><a class="wdu-comm-repo" data-id="2" href="javascript:;">举报</a><a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="up" href="javascript:;">支持(<span>2</span>)</a><a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="down" href="javascript:;">反对(<span>0</span>)</a><a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a></div></div></div></div>
									</li>
								</ul>
							
							</div>
						</div>

					</div>
				</div>
				<div class="wdu-part-layout wdu-margin-right wdu-back-whits">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi">猜你喜欢</h2>
						<ul class="wdu-part-tips wdu-padding">
							<li><a class="wdu-more" href="">更多</a></li>
						</ul>
					</div>
					<ul class="wdu-list-info wdu-part-rows">
				      <?php 
                      
                      
                      $sql = "SELECT vod_id,vod_name,vod_pic,vod_score,vod_year from wf_vod WHERE type_id = '$type_id' and type_id_1 = '$type_id_1' and vod_id >= ((SELECT MAX(vod_id) FROM wf_vod)-(SELECT MIN(vod_id) FROM wf_vod)) * RAND() + (SELECT MIN(vod_id) FROM wf_vod) order by vod_year desc LIMIT 5";

                      $res = $fdb->getAll($sql);

                      foreach ($res as $k =>$v){

	                   echo '
					    <li class="wdu-list-item wdu-padding wdu-width-xx wdu-col-xs4 wdu-col-sm3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'wplay/'.$v['vod_id'].'.html" data-original="'.$v['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
                                <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$v['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$v['vod_year'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone">'.$v['vod_name'].'</a>
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
						<img src="<?php echo $picture;?>" alt="<?php echo $name;?>" style="display:none">
							<img class="wdu-side-image" src="<?php echo  $wudu_qrapi.'https://'.$_SERVER['HTTP_HOST'].'/splay/'.str_replace('play=','',$_SERVER['QUERY_STRING']).'.html';?>"/>
						</div>
						<p class="wdu-text-center">
							也可以分享到朋友圈哦
						</p>
					</div>
					<div class="wdu-side-list wdu-list-info wdu-line-bottom wdu-list-rank wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">
						<?php if($mkcmstyle=='m')echo'电影';if($mkcmstyle=='tv')echo'电视剧';if($mkcmstyle=='va')echo'综艺';if($mkcmstyle=='ct')echo'动漫';?>排行榜
						    <a class="wdu-part-tips wdu-font-xiv" href="">更多</a>
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
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">推荐专题<a class="wdu-part-tips wdu-font-xiv" href="">更多</a></h2>
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
_wdu_playinfo.videoApi = $("#defaultLine").attr("data-aline");
var playDefaultUrl = $('.ea-site[data-num="1"]').data("href");
var playDefaultepd = $('.ea-site[data-num="1"]').data("num"),vodSource = $("#defaultEspPanel").data('name'),esptotalnum ='<?php echo $esptotlaNum;?>';
var videoInfo = {
	types: "wplay",
    id: "<?php echo $pid;?>",
	name: "<?php echo $name;?>",
    url: playDefaultUrl,
	cover: "<?php echo $picture;?>",
    episode: playDefaultepd,
    site: vodSource
}

$(function() {
   if($('.ea-site[data-num="1"]').hasClass("wdu-btns-green")){
   $(".wdu-play-next").addClass("wdu-btns-disad");
   }
   
   if($('.ea-site[data-num="'+esptotalnum+'"]').hasClass("wdu-btns-green")){
   $(".wdu-play-prev").addClass("wdu-btns-disad");
   }
    if (store.enabled) {
       // _wdu_playinfo.videoApi = store.get('videoApi')? store.get('videoApi'): _wdu_playinfo.videoApi;
      // $(".ea-line").each(function () {
       //     if($(this).data("aline") == _wdu_playinfo.videoApi) {
		//	    $('.ea-line').removeClass("wdu-btns-green");
        //       $(this).addClass("wdu-btns-green");
        ////        return false;
        //    }
       // })

		$("#play_default0").click();

        var histemp = store.get('history')? store.get('history'): [];
        
        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == videoInfo.id) {
                videoInfo.url = histemp[i].url;  // 
                videoInfo.episode = histemp[i].episode;  //
				
               // if(videoInfo.types =="w-"){
					
					layer.msg("您上次观看到第 " + histemp[i].episode + " 集");
					
				//}else if(videoInfo.types =="w-"){
					
					//layer.msg("您上次观看的是" + histemp[i].vodSource + " 源");
					
				//}

                break;
            }
        }
    }


    highlightSource();

	$(".ea-site").on("click",function() { 

        $(".ea-site").removeClass("wdu-btns-green");
        $(this).addClass("wdu-btns-green");
        videoInfo.url = $(this).data("href");    // 
        videoInfo.episode = $(this).data("num");       // 
        videoInfo.site = $(this).parent().attr('id');    //
        console.log(videoInfo);		
        refreshVideo();
		 //if(videoInfo.types =="w-"){
					
					layer.msg("正在播放第 " + videoInfo.episode + " 集");
					
				//}
        
    });

    $(".ea-line").click(function() {
		
		$(".ea-line").removeClass("wdu-btns-green");

		$(this).addClass("wdu-btns-green");

        _wdu_playinfo.videoApi = $(this).data("aline");
        
        refreshVideo();

        layer.msg("已切换至" + $(this).html());
    });

    refreshVideo();
	

});

function highlightSource() {
    $(".ea-site").each(function () {
        if($(this).data("href") == videoInfo.url) {
            $(this).addClass("wdu-btns-green");
            return false;    // 
        }
    });
}

function refreshVideo() {

    $("#wdu-play-iframe").attr("src", _wdu_playinfo.videoApi + videoInfo.url);

    
    //$(".btn-goto-origin").attr("href", videoInfo.url);

    if (store.enabled) {
        store.set("videoApi", _wdu_playinfo.videoApi);    // 记录所用的api接口
        var temp = {
			        types: videoInfo.types,
                    id: videoInfo.id, 
                    name: videoInfo.name,
					cover: videoInfo.cover,
                    url: videoInfo.url,
                    episode: videoInfo.episode,
                    site: videoInfo.site
                };

        var histemp = store.get('history')? store.get('history'): [];

        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == videoInfo.id) {
                histemp.splice(i, 1); // 
                break;
            }
        }
        
        histemp.unshift(temp);

        if(histemp.length > 6) histemp.length = 6; 
        
        store.set('history', histemp);
    }
}

$("body").on("click",".wdu-play-reno",function(){
	refreshVideo();
})

$(".wdu-play-prev").click(function(){
	var preEsp = videoInfo.episode -1;
$('.ea-site[data-num='+preEsp+']').click();
})

$(".wdu-play-next").click(function(){
	var nextEsp = videoInfo.episode +1;
	$('.ea-site[data-num='+nextEsp+']').click();
})

//选集同步
$(function() {

 $.ajax({
			type: "POST",
			url: "https://api.berryapi.net/get/tvlist",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {
				AppKey:'',
				url: playDefaultUrl 
				},
			success: function(data) {
			
			var type = data.origin;
			var esp = data.epsodelist;
            var curruntespNum = esp.length;
			console.log(curruntespNum)
			if(curruntespNum>esptotalnum){		
			$.ajax({
			type: "POST",
			url: "http://t.5kvideo.cc/api/?action=updatesp",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {
				id: "<?php echo $d_id;?>",
				type:type,
				epdata:esp
				},
			success: function(data) {
              if(data.code=='10006'){window.location.href=window.location.href;}
			},
			error: function(request) {
			},
		    })	
			}
           
			},
			error: function(request) {
			},
		})
		
})	
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
require('footer.php');
//////


if(isset($_SESSION['uid'])&&$_SESSION['uid']){

$uid = $_SESSION['uid'];
 
$play = trim($_GET['play']);
$site = trim($_GET['site']);

$playurl = $wudu_domain.'wplay/'.$pid.'.html';
if(isset($play)&&$play)
{

  $sql = "select * from wudu_play where url ='$playurl' and userid = '$uid'";
  $res = $db->getRow($sql);
  $rid = $res['id'];
    $_data['userid'] = $uid;
    $_data['name'] = $name;
    $_data['url'] = $playurl;
    $_data['cover'] = $picture;
    $_data['types'] = "wplay";
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