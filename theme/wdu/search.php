<?php
mui_head('搜索到关于:'.$q.'的结果',0) ;
?>

<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-part-rows">
			<div class="wdu-main-left wdu-col-xs12 wdu-col-md9">
				<div class="wdu-part-layout wdu-back-whits wdu-margin-right">
					<div class="wdu-list-head wdu-part-rows wdu-padding">
						<h2 class="wdu-font-xvi">搜索到与&nbsp;“<span class="wdu-list-keys wdu-text-green wdu-text-bold"><?php echo $q;?></span>”&nbsp;相关的&nbsp;“<span id="wdu-count" class="wdu-list-sums wdu-text-green wdu-text-bold"></span>”&nbsp;内容</h2>
						<!-- <ul class="wdu-part-tips wdu-padding">
							<li><span class="wdu-more wdu-hide-xs">当前第&nbsp;<span id="wdu-now" class="wdu-text-green wdu-text-bold">1</span>&nbsp;页</span></li>
						</ul> -->
					</div>
					<?php 
                    $sql = "select * from wudu_tvlive where name like '%{$q}%' order by id desc";
					
					//$ttcount = mysqli_query($conn,"select count(*) from wudu_tvlive where name like '%{$q}%' order by id desc");
					
					//$ttcount = mysqli_fetch_row($ttcount);
					
	               // $result1 = mysqli_query($conn,$sql);
					
					$result1=$db->getALL($sql);
					 
					if($result1){
					?>
					<ul class="wdu-list-info wdu-list-img wdu-part-rows" style="    margin-top: 25px;">
	
					<?php
		            foreach($result1 as $key =>$row)
                    {
                        $tupian=$row['img'];
                        $cs=$row['name'];
                        //$jianjie=$row['tl_content'];
                        $dd="./tvplay/";
                   
                        $chuandi=$dd.$row['pid'].'.html';
                   ?>
					
					<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				    <a class="wdu-list-pics wdu-lazy wdu-part-5by3" target="_blank" href="<?php echo $chuandi?>" data-original="<?php echo $tupian;?>">
					    <span class="wdu-list-play wdu-hide-xs"></span>
					    <span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">直播</span>
					    <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $cs?></span>
					</a>
			        </li>
					
					<? } ?>
					</ul>
					<?}?>
                  
					<?php 
                    $sql = "select * from wudu_vod where concat(name,content) like '%{$q}%' order by id desc";
					$result2=$db->getALL($sql);
		            foreach($result2 as $key =>$row1)
                    {
                        $tupian=$row1['picture'];
                        $cs=$row1['name'];
                        $jianjie=$row1['content'];
                        $dd="./splay/";
                  
                        $chuandi=$dd.$row1['pid'].'.html';
                    ?>

					<dl class="wdu-list-deta wdu-deta-padding wdu-line-top wdu-margin wdu-part-rows wdu-part-over">
						<dt class="wdu-deta-images wdu-list-info wdu-col-xs3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="<?php echo $chuandi?>" data-original="<?php echo $tupian?>">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green"></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
							</a>
						</dt>
						<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
						<h1 class="wdu-part-eone wdu-font-xvi"><a href="<?php echo $chuandi?>"><?php echo $cs?></a></h1>
						<ul class="wdu-part-rows">
							<li class="wdu-part-eone">
							    <span class="wdu-text-muted">主演：</span>
								<a href="#" target="_blank"><?php echo $row1['actor']?></a>&nbsp;&nbsp;
							</li>
							<li class="wdu-part-eone">
							    <span class="wdu-text-muted">导演：</span>
								<a href="#" target="_blank"><?php echo $row1['director']?></a>&nbsp;&nbsp;
							</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">类型：</span><a href="#" target="_blank"><?php echo get_channel_name($row1['parent'])?></a></li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="#" target="_blank"><?php echo $row1['area']?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span><a href="#" target="_blank"><?php echo $row1['date']?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span></li>
						</ul>
						</dd><dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="<?php echo $chuandi?>">查看详情</a></dd>
					</dl>
					<?php } ?>
                  
                   
                  
					<?php
                    $scount = count($tmpArr);

                    for ($i=0; $i< $scount ; $i++) 
					{?>
					<dl class="wdu-list-deta wdu-deta-padding wdu-line-top wdu-margin wdu-part-rows wdu-part-over">
						<dt class="wdu-deta-images wdu-list-info wdu-col-xs3">
						    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="<?php echo $tmpArr[$i]['url'].'" data-original="'.$tmpArr[$i]['cover'];?>">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $tmpArr[$i]['score'];?></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
							</a>
						</dt>
						<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
						<h1 class="wdu-part-eone wdu-font-xvi"><a href="<?php echo $tmpArr[$i]['url']; ?>"><?php echo $tmpArr[$i]['name'];?></a></h1>
					
						<ul class="wdu-part-rows">
							<li class="wdu-part-eone">
							    <span class="wdu-text-muted">主演：</span>

						
						<?php
						
						foreach ($tmpArr[$i]['actor'] as $key =>$value){
						
						echo '
						    <a href="#" target="_blank">'.$value.'</a>&nbsp;&nbsp;
						
						';
						
						}?>

					 		</li>
							<!-- <li class="wdu-part-eone">
							    <span class="wdu-text-muted">导演：</span>
								    <a href="#" target="_blank"></a>&nbsp;&nbsp;
							</li> -->
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">类型：</span><a href="#" target="_blank"><?php echo $tmpArr[$i]['type'];?></a></li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="#" target="_blank"><?php echo $tmpArr[$i]['area'];?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span><a href="#" target="_blank"><?php echo $tmpArr[$i]['year'];?></a>&nbsp;&nbsp;</li>
							<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span></li>
						</ul>
						</dd><dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="<?php echo $tmpArr[$i]['url'];?>">查看详情</a></dd>
					</dl>	
					<?php } ?>

					<!-- <script type="text/javascript">if(document.getElementById('wdu-now')) document.getElementById('wdu-now').innerHTML='1';if(document.getElementById('wdu-count')) document.getElementById('wdu-count').innerHTML='6';</script> -->
				</div>
				<?php
				if(!$ttcount[0]&&!$ttcount1[0]&&$scount==0){?>
				<div class="wdu-part-layout wdu-back-whits">
				    <form class="wdu-comm-fork wdu-comm-form wdu-event" data-role="" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
					    <ul class="wdu-part-rows">
						    <li class="wdu-padding wdu-col-xs12">
							    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容">请管理员添加《<?php echo $q;?>》，谢谢！</textarea>
							</li>
							<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
							    <p class="wdu-form-info wdu-rims-info wdu-text-muted">提示：<span class="wdu-comm-tips">还可以输入240字</span></p>
							</li>
							<li class="wdu-padding wdu-col-xs6 wdu-col-md4">
							    <input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码">
							</li>
							<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
							    <img class="wdu-rims-info wdu-comm-code" height="40" src="" data-role="" title="看不清楚? 换一张！" onclick="this.src=this.src+'?v=1543925570'">
							</li>
							<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks">提交</a>
							</li>
						</ul>
				    </form>
				</div>
				<?php } ?>
			</div>
			<div class="wdu-main-right wdu-col-xs12 wdu-col-md3">
				<div class="wdu-side-info wdu-part-layout wdu-back-whits wdu-hide-xs wdu-hide-sm wdu-show-md-block">
					<div class="wdu-side-list wdu-text-center wdu-hide-xs wdu-part-rows wdu-line-bottom">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi wdu-text-center">扫描二维码手机看大片</h2>
						<div class="wdu-side-code">
							<img class="wdu-side-image" src="<?php echo  $wudu_qrapi;?>https://www.5kvideo.cc"/>
						</div>
						<p class="wdu-text-center">
							也可以分享到朋友圈哦
						</p>
					</div>
					<div class="wdu-side-list wdu-list-info wdu-line-bottom wdu-list-rank wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">热门电影<a class="wdu-part-tips wdu-font-xiv" href="/mlist.html">更多</a></h2>
						<ul class="wdu-part-rows">
						<?php
                          
                         $rankM = getRank('m');
				         foreach ($rankM as $k=>$v){
                          $n = $k+1;
                          ?>
						<li class="wdu-part-eone">
						    <a href="/play/m_<?php echo $v['id'];?>.html">
							    <span class="
                                wdu-part-nums
                                <?php
                                 if($n==1){
                                 
                                 echo'wdu-part-num1';
                                 
                                 }elseif($n==2){
                                  echo'wdu-part-num2';
                                 
                                 } elseif($n==3){
                                  echo'wdu-part-num3';
                                 
                                 }           
                                ?>          
                                "><?php echo $n;?></span><?php echo $v['name'];?>
								<span class="wdu-part-tips wdu-text-green"><?php echo $v['num'];?></span>
							</a>
						</li>  
					    <? }?>
						</ul>
					</div>
					<div class="wdu-side-list wdu-list-info wdu-line-bottom wdu-list-rank wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">热门连续剧<a class="wdu-part-tips wdu-font-xiv" href="/tvlist.html">更多</a></h2>
						<ul class="wdu-part-rows">
						<?php 
                           $rankTv = getRank('tv');
				      foreach ($rankTv as $k=>$v){
                          $n = $k+1;
                          ?>
						<li class="wdu-part-eone">
						    <a href="/play/tv_<?php echo $v['id'];?>.html">
							    <span class="
                                wdu-part-nums
                                <?php
                                 if($n==1){
                                 
                                 echo'wdu-part-num1';
                                 
                                 }elseif($n==2){
                                  echo'wdu-part-num2';
                                 
                                 } elseif($n==3){
                                  echo'wdu-part-num3';
                                 
                                 }           
                                ?>          
                                "><?php echo $n;?></span><?php echo $v['name'];?>
								<span class="wdu-part-tips wdu-text-green"><?php echo $v['num'];?></span>
							</a>
						</li>  
					    <? }?>
						</ul>
					</div>
					<div class="wdu-side-list wdu-part-rows wdu-padding">
						<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">推荐专题<a class="wdu-part-tips wdu-font-xiv" href="{maccms:link_topic_vod}">更多</a></h2>
						<ul class="wdu-list-info">
							<li class="wdu-side-item">
							    <a class="wdu-list-pics wdu-part-2by1" href="#" style="background-image: url(https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike220%2C5%2C5%2C220%2C73/sign=a2762037d6a20cf4529df68d17602053/ae51f3deb48f8c546f1a629f3c292df5e1fe7fb1.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">复仇者联盟</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.php');
?>