<?php 
//error_reporting(E_ALL);

//ini_set('display_errors', '1');

mui_head('正在播放',1) ;
   if($mkcmstyle =='tv'){
       $category="2";
        } else{
        $category="4";
	    }
    $id=$mkcmsid;
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
					<iframe id="wdu-play-iframe" class="wdu-play-iframe wdu-part-full" frameborder="0" scrolling="no" allowfullscreen="true" data-name="创业时代" src="<?php echo $mjk; ?>"></iframe>
					<div class="wdu-play-error wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					    <h2 class="wdu-text-center wdu-font-xvi wdu-hide-xs">失效数据，我们会在第一时间内修正</h2>
						<div class="wdu-comm-report" data-repo="">
						    <div class="wdu-part-layout wdu-back-whits">
							    <form class="wdu-comm-fork wdu-comm-form wdu-event user-feed-form" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
								    <ul class="wdu-part-rows">
									    <li class="wdu-padding wdu-col-xs12">
										    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容">【ID:<?php echo $id;?>】无法观看请检查修复。页面地址：<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/vod'.str_replace('play=','',$_SERVER['QUERY_STRING']);?>
											</textarea>
											<input name="pid" value="<?php echo $pid;?>" style="display:none">
											<input name="ptype" value="vod" style="display:none">
											<input name="vtype" value="<?php echo $mkcmstyle;?>" style="display:none">
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
                            $playAPI=explode("#",$wudu_playapi);
                            for($k=0;$k<count($playAPI);$k++)
							{
								$playAPI[$k]=explode('$',$playAPI[$k]);
                            echo 
							'
							<li class="wdu-padding wdu-col-xs3">
								<a  data-aline="'.$playAPI[$k][1].'" id="'.$k.'" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">'.$playAPI[$k][0].'</a>
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
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-btns wdu-event" href="javascript:;">切换线路</a></li>
					</ul>
					<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
						<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-erro wdu-event" href="javascript:;">报错</a></li>
						
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-prev wdu-btns-disad" href="javascript:;"><?php if ($mkcmstyle=='m'){echo'上一源';}else{echo'上一集';}?></a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-next" href="javascript:;"><?php if ($mkcmstyle=='m'){echo'下一源';}else{echo'下一集';}?></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-col-xs12 wdu-col-md3">
				<div class="wdu-tabs-info wdu-tabs-play wdu-conv-double wdu-part-roll">
					<?php if ($mkcmstyle=='m'){?>
					<div class="wdu-tabs-boxs">
						<div class="wdu-tabs-head">
							<span class="wdu-tabs-title wdu-visible wdu-font-xvi wdu-part-rows"><span class="wdu-col-xs4 wdu-part-eone">播放源</span></span>
						</div>
						<div class="wdu-tabs-foot">
							<ul class="wdu-padding wdu-part-rows">
							<?php
                            
                           if(isset($_SESSION['uid'])){

  
  
	                        foreach ($c as $kk => $vod)
							{
                                
								$dyurl = str_replace('http://cps.youku.com/redirect.html?id=0000028f&url=', '', "$vod");
	                            
								$dyname = str_replace('(付费)','', "$d[$kk]");
							echo'
								<li class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
								    <a data-href="'.$dyurl.'" id="'.$kk.'"  class="wdu-btns-info wdu-rims-info wdu-part-eone wdu-tabs-btn ea-site" data-num="'.($kk+1).'">'.($kk+1).'</a>
								</li>
								';
                            }
                          }else{
                           echo '<div class="wdu-part-layout wdu-back-whits" style="color: aliceblue !important;background: #FF5722 !important;">
			                              <div class="wdu-padding">
				                              <p> 请登录后观看 !</p>
			                              </div>
		                             </div>';}?>
							</ul>
						</div> 
					</div>
					<? }?>
					<?php if ($mkcmstyle=='tv'||$mkcmstyle=='ct'){?>
					<?php if(count($espOrigin)>1){?>
					<div class="wdu-tabs-boxs">
						<div class="wdu-tabs-head">
							<span class="wdu-tabs-top wdu-tabs-title wdu-font-xvi wdu-part-rows wdu-hidden wdu-show">
							    <span class="wdu-col-xs4 wdu-part-eone">播放源</span>
							</span>
						</div>
						<div class="wdu-tabs-foot">
							<ul class="wdu-tabs-btm wdu-padding wdu-part-rows">
								<?php
                                             

								foreach($espOrigin as $key=>$value)
								{
								if($value['site']==$defaultSite)
								{
								$style = 'wdu-btns-green';	
								}else{
									$style = '';	
								}
								echo'
								<li  class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
									<a data-id="'.$value['id'] .'" data-site="'.$value['site'].'" class="wdu-btns-info wdu-rims-info wdu-part-eone '.$style.' ea-source">'.($key+1).'</a>
								</li>
								';}
                                                             
                                                         
                              
                              
                              ?>
							</ul>
						</div>
					</div>
					<? } ?>
					<div class="wdu-tabs-boxs">
						<div class="wdu-tabs-head">
							<span class="wdu-tabs-top wdu-tabs-title wdu-font-xvi wdu-part-rows wdu-hidden wdu-show">
							    <span class="wdu-col-xs4 wdu-part-eone">选集</span>
							</span>
						</div>
						<div class="wdu-tabs-foot">
							<ul class="wdu-tabs-btm wdu-padding wdu-part-rows" id="play-source-panel">
								<?php
                                if(isset($_SESSION['uid'])){


								$api = "http://www.360kan.com/cover/switchsite?site=".$defaultSite."&id=".$id."&category=".$category;
								$data = GBS::curl($api);

                                $data=json_decode($data,true);
  
                                $ordata = $data['data'];
  
                                $callback = decodeTVUrl($ordata,$site);

								$espData = $callback['playurl'];
								$asp_count=count($espData);
								foreach($espData as $key =>$value)
								{
								echo '
								<li  class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
									<a data-num="'.$value['no'] .'" data-href="'.$value['url'].'" class="wdu-btns-info wdu-rims-info wdu-part-eone ea-site" data-num="'.($key+1).'">'.$value['no'].'</a>
								</li>
								';	
								}
                                }else{
                           echo '<div class="wdu-part-layout wdu-back-whits" style="color: aliceblue !important;background: #FF5722 !important;">
			                              <div class="wdu-padding">
				                              <p> 请登陆后观看 !</p>
			                              </div>
		                             </div>';}?>
							</ul>
						</div>
					</div>

					<?php } ?>
					
					<?php if ($mkcmstyle =='va') {?>
					
					<div class="wdu-tabs-boxs">
						<div class="wdu-tabs-head">
							<span class="wdu-tabs-top wdu-tabs-title wdu-font-xvi wdu-part-rows wdu-hidden wdu-show">
							    <span class="wdu-col-xs4 wdu-part-eone">选集</span>
							</span>
						</div>
						<div class="wdu-tabs-foot">
							<ul class="wdu-tabs-btm wdu-padding wdu-part-rows">
								<?php 
                                if(isset($_SESSION['uid'])){



													foreach ($varityData as $num=>$varurl){
														
														$vaespname = str_replace(date('Y').'-','',$varityTitle[$num]);
														
		                                            echo'
												        <li class="wdu-padding wdu-col-xs3 wdu-col-md6 wdu-col-lg4">
														    <a data-num="'.($num+1).'" data-href="'.$varurl.'"class="wdu-btns-info wdu-rims-info wdu-part-eone ea-site" title="'.$varityTitle[$num].'" data-num="'.($num+1).'">'.$vaespname.'</a></li>
														';
		                                            }
                            }else{
                           echo '<div class="wdu-part-layout wdu-back-whits" style="color: aliceblue !important;background: #FF5722 !important;">
			                              <div class="wdu-padding">
				                              <p> 请登录后观看 !</p>
			                              </div>
		                             </div>';}?>

							</ul>
						</div>
					</div>
					
					
					
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="wdu-part-rows">
			<div class="wdu-main-left wdu-col-xs12 wdu-col-md9">
				<div class="wdu-part-layout wdu-back-whits wdu-margin-right">
					<dl class="wdu-list-deta wdu-margin wdu-part-rows wdu-part-over">
						<dt class="wdu-deta-images wdu-list-info wdu-col-xs3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="" data-original="<?php echo $vodCover;?>">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $tvScore;?></span>
								<?php if($mkcmstyle=='ct'){?>
								<?php if($vodasp){$vodasp='更新至'.$vodasp.'集';}else{$vodasp='全集';}?>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $vodasp;?></span>
								<?}?>
								<?php if($mkcmstyle=='tv'){?>
								<?php if($vodasp){$vodasp='更新至'.$vodasp.'集';}else{$vodasp='全集';}?>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $vodasp;?></span>
								<?}?>
								<?php if($mkcmstyle=='va'){?>
								<?php if($vodasp){$vodasp='更新至'.$vodasp;}else{$vodasp='全集';}?>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $vodasp;?></span>
								<?}?>
							</a>
						</dt>
						<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
						<h1 class="wdu-part-eone wdu-font-xvi"><a href="/index.php/vod/detail/id/23062.html"><?php echo $timu; ?></a></h1>
						<ul class="wdu-part-rows">
						    <?php if($mkcmstyle=='tv'||$mkcmstyle=='m'||$mkcmstyle=='ct'){?>
							<li class="wdu-part-eone"><span class="wdu-text-muted">导演：</span>
							<?php
							foreach($director as $key =>$vaule){
								echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vaule.'" target="_blank">'.$vaule.'</a>&nbsp;&nbsp;
								';	
							}?>
							</li>
							<? }?>
							<?php if($mkcmstyle=='va'){?>
							<li class="wdu-part-eone"><span class="wdu-text-muted">播出：</span>
							
							<?php echo $playorigin;?>
							</li>
							<? }?>
							
							<?php if($mkcmstyle=='ct'){?>
							<li class="wdu-part-eone"><span class="wdu-text-muted">人物：</span>
							<?php
							foreach($vodActor as $key =>$vaule){
								echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vaule.'" target="_blank">'.$vaule.'</a>&nbsp;&nbsp;
								';	
							}?>
							</li>
							<? }else{?>
							<li class="wdu-part-eone"><span class="wdu-text-muted">演员：</span>
							<?php
							foreach($vodActor as $key =>$vaule){
								echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vaule.'" target="_blank">'.$vaule.'</a>&nbsp;&nbsp;
								';	
							}?>
							</li>
							
							<? }?>
							
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">分类：</span>
							<?php
							foreach($vodtype as $key =>$vaule){
								echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vaule.'" target="_blank">'.$vaule.'</a>&nbsp;&nbsp;
								';	
							}?>
                            </li>
							<?php if($mkcmstyle=='ct'){?>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span>
							<?php
							foreach($vodarea as $key =>$vaule){
								echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vaule.'" target="_blank">'.$vaule.'</a>&nbsp;&nbsp;
								';	
							}?>
							</li>
							<?}else{?>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span>
							<?php echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vodarea.'" target="_blank">'.$vodarea.'</a>&nbsp;&nbsp;
								';?>
							</li>
							<?}?>
							
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span>

							<?php echo '
								<a href="'.$wudu_domain.'search.html?wd='.$vodyear.'" target="_blank">'.$vodyear.'</a>&nbsp;&nbsp;
								';?>
							</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span></li>
						</ul>
						</dd>
						<!-- <dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="">查看详情</a></dd> -->
					</dl>
				</div>
				<div class="wdu-conv-info wdu-part-layout wdu-margin-right wdu-back-whits">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi" id="wdu-tabs-nav">
							<a class="wdu-conv-btn wdu-text-bold wdu-text-green" href="javascript:void(0)">剧情简介</a>
							<a class="wdu-conv-btn " href="javascript:void(0)">我要评论</a>
						</h2>
					</div>
					<div class="wdu-conv-deta" id="wdu-tabs-container">
					    <div class="wdu-conv-boxs wdu-conv-cont wdu-hidden tab-item  tabs-current">
						    <p class="wdu-conv-text wdu-padding wdu-text-muted"><?php echo strip_tags($brinfo); ?></p>
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
								<script type="text/javascript">if(document.getElementById('wdu-now')) document.getElementById('wdu-now').innerHTML='1';if(document.getElementById('wdu-count')) document.getElementById('wdu-count').innerHTML='1';</script>
							</div>
						</div>
					</div>
				</div>
				<div class="wdu-part-layout wdu-margin-right wdu-back-whits">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi">相关热播</h2>
						<ul class="wdu-part-tips wdu-padding">
							<li><a class="wdu-more" href="">更多</a></li>
						</ul>
					</div>
					<ul class="wdu-list-info wdu-part-rows">
						<?php 
                      require('public/inc/like.php');


foreach ($likename as $ks=>$vs){

$recid =$likeurl[$ks]; 

$recid = str_replace($mkcmstyle.'/',$mkcmstyle.'_',$recid);
if ($wudu_wei==1){
$chuandi=$wudu_domain.'play'.$recid;
}
else{
$chuandi=$wudu_domain.'play'.$recid;	
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
						    <a class="wdu-part-tips wdu-font-xiv" href="">更多</a>
						</h2>
						<ul class="wdu-part-rows">
                       
						<?php 
				        $rank = getRank($mkcmstyle);
						
						//print_r(  $rank);
						
				        foreach ($rank as $k=>$value){
						$num = $k+1; 
						echo' 
						    <li class="wdu-part-eone">
						        <a href="'.$wudu_domain.'play/'.$mkcmstyle.'_'.$value['id'].'.html" title="'.$value['name'].'">
							        <span class="wdu-part-nums wdu-part-num'.$num.'">'.$num.'</span>'.$value['name'].'
								    <span class="wdu-part-tips wdu-text-green">'.$value['num'].'</span>
						        </a>
						    </li>
						';}?>	
						</ul>
					</div>

					<div class="wdu-side-list wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">推荐专题<a class="wdu-part-tips wdu-font-xiv" href="">更多</a></h2>
						<ul class="wdu-list-info">
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="/" style="background-image: url(https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike220%2C5%2C5%2C220%2C73/sign=a2762037d6a20cf4529df68d17602053/ae51f3deb48f8c546f1a629f3c292df5e1fe7fb1.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">复仇者联盟</span></a></li>
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="/" style="background-image: url(https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C5%2C600%2C395%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=5e23f0003d7adab4299f4103b6e49f29/0bd162d9f2d3572cb7e5dff48113632762d0c397.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">X战警</span></a></li>
							<li class="wdu-side-item"><a class="wdu-list-pics wdu-part-2by1" href="/" style="background-image: url(https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=6efa53c742a98226accc2375ebebd264/cb8065380cd7912312e345c6ac345982b2b78005.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">少儿频道直播</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
var playDefaultUrl = $('.ea-site[data-num="1"]').data("href"),playDefaultepd = $('.ea-site[data-num="1"]').data("num"),vodSource = $("#defaultEspPanel").data('name'),esptotalnum ='<?php echo $esptotlaNum;?>',playApi =$("#defaultLine").attr("data-aline");
window.globalConfig.playInfo = {
	types: "vod-<?php echo $mkcmstyle;?>",
    id: "<?php echo $id;?>",
	name: "<?php echo $playtitle;?>",
    url: playDefaultUrl,
	cover: "<?php echo $vodCover;?>",
    episode: playDefaultepd,
    site:'',
    videoApi:playApi
}
setPlaySite(window.globalConfig.playInfo);
//播放API

$(function() {
   if($('.ea-site[data-num="1"]').hasClass("wdu-btns-green")){
   $(".wdu-play-next").addClass("wdu-btns-disad");
   }
   
   if($('.ea-site[data-num="'+esptotalnum+'"]').hasClass("wdu-btns-green")){
   $(".wdu-play-prev").addClass("wdu-btns-disad");
   }
    if (store.enabled) {
       window.globalConfig.playInfo.videoApi = store.get('videoApi')? store.get('videoApi'): window.globalConfig.playInfo.videoApi;
     $(".ea-line").each(function () {
        if($(this).data("aline") == window.globalConfig.playInfo.videoApi) {
	    $('.ea-line').removeClass("wdu-btns-green");
            $(this).addClass("wdu-btns-green");
             return false;
        }
      });
  // alert(videoInfo.site)	
	if(window.globalConfig.playInfo.site =='le'||window.globalConfig.playInfo.site =='cntv'||window.globalConfig.playInfo.site =='sohu'||window.globalConfig.playInfo.site =='wasu'){
  
   
     $("#defaultLine").click();
    //WAPI.videoApi = playAPI;
   
   }else{
   
      //WAPI.videoApi = $("#defaultLine").attr("data-aline");
   
    $('.ea-line[id="3"]').click();
   }	

		$("#play_default0").click();

        var histemp = store.get('history')? store.get('history'): [];
        
        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == window.globalConfig.playInfo.id) {
				
                window.globalConfig.playInfo.url = histemp[i].url;  // 
                window.globalConfig.playInfo.episode = histemp[i].episode;  //
				$('.ea-source[data-site="'+window.globalConfig.playInfo.site+'"]').addClass("wdu-btns-green");
				$('.ea-site[data-num="'+window.globalConfig.playInfo.episode+'"]').addClass("wdu-btns-green");
                if(window.globalConfig.playInfo.types =="vod-tv"){
					
					layer.msg("您上次观看到第 " + histemp[i].episode + " 集");
					
				}else if(window.globalConfig.playInfo.types =="vod-mv"){
					
					layer.msg("您上次观看的是" + histemp[i].vodSource + " 源");
					
				}

                break;
            }
        }
    }


    highlightSource();
$(document).on("click",".ea-site",function(){
        $(".ea-site").removeClass("wdu-btns-green");
        $(this).addClass("wdu-btns-green");
        window.globalConfig.playInfo.url = $(this).data("href");    // 
        window.globalConfig.playInfo.episode = $(this).data("num");       // 
        window.globalConfig.playInfo.site = window.globalConfig.playInfo.site;    //
      	
        refreshVideo();
		 if(window.globalConfig.playInfo.types =="vod-tv"){
					
					layer.msg("正在加载第 " + window.globalConfig.playInfo.episode + " 集");
					
				}else if(window.globalConfig.playInfo.types =="vod-mv"){
					
					layer.msg("正在加载" + window.globalConfig.playInfo.vodSource + " 源");
					
				}
        
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

function setPlaySite(param){

  var site = param.url.split(".")[1];
    
  if(site =='iqiyi'){
     
    site = 'qiyi';
     
     }
  param.site = site;

}
  
  
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

        if(histemp.length > 6) histemp.length = 6; 
        
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
	
</script>
<script type="text/javascript">
$(function(){
	   
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
//播放源切换
$(document).on("click",".ea-source",function(){	
	$(".ea-source").removeClass('wdu-btns-green');
	$(this).addClass('wdu-btns-green');
	layer.msg("已切换至" + $(this).html()+'播放源');
	var id = "<?php echo $id;?>",site =$(this).data('site'),category ="<?php echo $category;?>";
    
$.ajax({
			type: "POST",
			url: window.globalConfig.api.userSwitchSource,
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			//dataTpye: 'json',
			data: {id:id,site:site,category:category},
			success: function(data) {
            $("#play-source-panel").html(data);
			window.globalConfig.playInfo.url = $(this).data("href");    // 
            window.globalConfig.playInfo.episode = window.globalConfig.playInfo.episode;       // 
            window.globalConfig.playInfo.site = site;    //
			$('.ea-site[data-num='+ window.globalConfig.playInfo.episode+']').click();
            console.log( window.globalConfig.playInfo.site);
			refreshVideo();
			},
			error: function(request) {
			},
		});	
})  
	   
	   
	   
	   
	   
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
////

if(isset($_SESSION['uid'])&&$_SESSION['uid']){

$uid = $_SESSION['uid'];
 
$play = trim($_GET['id']);
$site = trim($_GET['site']);
$ptypes = trim($_GET['types']);  
$playurl = $wudu_domain.'play/'.$mkcmstyle.'_'.$id.'.html';
  
if(isset($play)&&$play&&isset($mkcmstyle)&&$mkcmstyle)
{

  $sql = "select * from wudu_play where userid = '$uid' and url ='$playurl'";
  $res = $db->getRow($sql);
  $rid = $res['id'];
    $_data['userid'] = $uid;
    $_data['name'] = $playtitle;
    $_data['url'] = $playurl;
    $_data['cover'] = $vodCover;
    $_data['types'] = 'play/'.$mkcmstyle;
    $_data['type'] = "360影视";

   // $_data['site'] = $site;
    $_data['times'] = date("Y-m-d H:i:s");
  
  
  if(!$res){
    
   $res = $db->insert("wudu_play",$_data);
  }else{
       $db->update("wudu_play",$_data,"id='$rid'");

  
  }

}
  
}