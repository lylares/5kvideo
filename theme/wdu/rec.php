<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
mui_head('特别策划',0) ;
?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<?php
      	//$data=GBS::curl("http://www.yinyuetai.com/mv/get-bigpic");
            
            //$data = json_decode($data,1);
            
            //$data = $data['bigPics'];
      if(GBS::is_ipad()){?>
       <div class="wdu-swip-container  wdu-part-rows">
		    <div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
              
             	<?php 
                             
                foreach($data as $key => $row){
                   preg_match('/video\/(\d+)/',$row['url'],$tid);
                ?>			
			    <div class="swiper-slide wdu-swip-slide">
				   <a class="wdu-list-pics wdu-list-pic wdu-part-5by2 wdu-swip-lazy" href="dplay/2_<?php echo $tid[1];?>.html" target="_blank" style="background: url(https:<?php echo $row['image'];?>)  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					   <div class="wdu-swip-title wdu-swiper-title wdu-text-white wdu-part-eone">
						    <span class="wdu-part-eone wdu-font-xviii wdu-swip-head"><?php echo $row['title'];?></span>
						    <span class="wdu-part-eone wdu-font-xii"><?php $content = $row['title']; echo $att = $content ? $content : $row['title'];?></span>
					   </div>
				   </a>
				</div>
               <?php }?> 
			</div>
		    <div class="wdu-swiper-next wdu-swip-next wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-you" href="javascript:;"></div>
			<div class="wdu-swiper-prev wdu-swip-prev wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-zuo" href="javascript:;"></div>
			<div class="swiper-pagination wdu-swip-pagin wdu-font-size wdu-text-right"></div>
		</div>	
      <?php }else{?>
      
      <div id="wuduslider" class="swiper-container">
    <div class="swiper-wrapper">
      <?php
	

						foreach($data as $key => $row){
                          
                          preg_match('/video\/(\d+)/',$row['url'],$tid);

						?>
                 
      
                      <div class="swiper-slide wudu-slider" data-target="dplay/2_<?php echo $tid[1];?>.html" style="background-image:url(https:<?php echo $row['image'];?>)">
                            <div class="info" >
                                <h3><?php echo $row['title'];?></h3>
                                <p class="attr"><?php $content = $row['title']; echo $att = $content ? $content : $row['title'];?></p>
                            </div>
                      </div>
				    
					<?php }
		            ?>
    </div>
    <div class="swiper-button-prev wudu-prev"></div>
    <div class="swiper-button-next wudu-next"></div>
</div>     
     <? }?>
          
		<div class="wdu-back-whits wdu-hidden">
			<ul class="wdu-part-rows">
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href="#">动作片</a>
				</li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href=" ">喜剧片</a>
				</li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href=" ">爱情片</a>
				</li>
			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-padding">
				<p>
					<?php echo $wudu_postinfo;?>
				</p>
			</div>
		</div>
      
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">直播推荐</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
                  $api = "https://m.huya.com/cache.php?m=Live&do=ajaxGetProfileLive&page=1&pageSize=18";
              
                  $para['ua'] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1';
      
                   $data = GBS::curl($api,$para);

                   $data  = json_decode($data,1);

                  $data = $data['gameList'];

                 foreach($data as $key => $row){
                      
                    $ok="";
					$ccb='./dplay/6_'.$row['profileRoom'].'.html';	
			     
                    if($key<18){
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['introduction'].'" data-original="'.$row['screenshot'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['totalCount'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['gameFullName'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['introduction'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['nick'].'</span>
					</li>
						';
                    }
                   }
                    ?>

			</ul>
		</div>
      
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">正在直播</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
                  $api = "https://www.huomao.com/channels/channelnew.json?page=1&game_url_rule=all&count=18";
      
                   $data = GBS::curl($api);

                   $data  = json_decode($data,1);
              
              
                  $data = $data['data']['channelList'];

                 foreach($data as $key => $row){
                      
                    $ok="";
					$ccb='./dplay/5_'.$row['room_number'].'.html';	
			     
                    if($key<18){
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['channel'].'" data-original="'.$row['image'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['views'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['gameEname'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['channel'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['username'].'</span>
					</li>
						';
                    }
                   }
                    ?>

			</ul>
		</div>
      
      
      
       <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">英雄联盟</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
      $api = "https://v.huya.com/jsapi/categoryRecommend?channel=vhuyalol";
      
      $data = GBS::curl($api);
      
      $data  = json_decode($data,1);

      ?>
                   <?php 
					//$data=$db->getAll("select pid,name,picture,score,actor  from wudu_vod where rec=1 order by id desc  LIMIT 0,$wudu_spnum");
		            foreach($data as $key => $row){
                    $ok="";
					$ccb='./dplay/4_'.$row['vid'].'.html';	
			     
                      
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['video_title'].'" data-original="'.$row['video_big_cover'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['video_play_num'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['video_duration'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['video_title'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['video_tags'].'</span>
					</li>
						';
		              }?>

			</ul>
		</div>
      
       <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">英雄联盟LPL</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="special.html?cid=0">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
      $api = "http://v.huya.com/jsapi/videoRelate?callback=&relate_vid=131777261&_=";
      
      $data = GBS::curl($api);
      
      $data  = json_decode($data,1);

      ?>
                   <?php 
           
                 
					//$data=$db->getAll("select pid,name,picture,score,actor  from wudu_vod where rec=1 order by id desc  LIMIT 0,$wudu_spnum");
		            foreach($data as $key => $row){
                      
                    $ok="";
					$ccb='./dplay/4_'.$row['vid'].'.html';	
			     
                    if($key<18){
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['video_title'].'" data-original="'.$row['video_big_cover'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['video_play_num'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['video_duration'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['video_title'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['video_tags'].'</span>
					</li>
						';
                    }
                   }
                    ?>

			</ul>
		</div>
      
       <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">英雄联盟LCK</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="special.html?cid=0">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
      $api = "http://v.huya.com/jsapi/videoRelate?callback=&relate_vid=131784771&_=";
      
      $data = GBS::curl($api);
      
      $data  = json_decode($data,1);

      ?>
                   <?php 
           
                 
					//$data=$db->getAll("select pid,name,picture,score,actor  from wudu_vod where rec=1 order by id desc  LIMIT 0,$wudu_spnum");
		            foreach($data as $key => $row){
                      
                    $ok="";
					$ccb='./dplay/4_'.$row['vid'].'.html';	
			     
                    if($key<18){
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['video_title'].'" data-original="'.$row['video_big_cover'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['video_play_num'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['video_duration'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['video_title'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['video_tags'].'</span>
					</li>
						';
                    }
                   }
                    ?>

			</ul>
		</div>
      
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">绝地求生</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="special.html?cid=0">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
                   <?php
      
      $api = "https://v.huya.com/jsapi/categoryRecommend?channel=vhuyajdqs";
      
      $data = GBS::curl($api);
      
      $data  = json_decode($data,1);

      ?>
                   <?php 
					//$data=$db->getAll("select pid,name,picture,score,actor  from wudu_vod where rec=1 order by id desc  LIMIT 0,$wudu_spnum");
		            foreach($data as $key => $row){
                    $ok="";
					$ccb='./dplay/4_'.$row['vid'].'.html';	
			     
                      
                    echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['video_title'].'" data-original="'.$row['video_big_cover'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['video_play_num'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['video_duration'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['video_title'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['video_tags'].'</span>
					</li>
						';
		              }?>

			</ul>
		</div>
      
      
      
		

		
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">推荐资讯</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green">0</span>&nbsp;篇&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">25&nbsp;</span>篇</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-list-img wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				<a class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" target="_blank" href="https://www.lylares.com/sesme-co.html" data-original="https://tva1.sinaimg.cn/large/bfe05ea9ly1fxwdxs2v7lj20kx0b4108.jpg">
                  <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-back-green">前端</span>
                 </a>
                <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">阅后即焚小工具实现sesme.co</a>
				</li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://www.lylares.com/a-api-for-get-tv-album-list.html" data-original="https://tva1.sinaimg.cn/large/bfe05ea9gy1fr21fjnjtnj20m80etq41.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">API</span>
                  </a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">获取视频选集的接口</a>
              </li>
				
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://www.lylares.com/php-code-of-aikan-wallpaper-website.html" data-original="https://tva1.sinaimg.cn/large/bfe05ea9ly1fx6msdrg8zj21kw0rcb2a.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">源码</span>
                  </a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">爱看美图开源PHP版</a>
              </li>
				
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3 wdu-hide-sm wdu-show-md-block">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://doc.berryapi.net/v2/" data-original="https://tva1.sinaimg.cn/large/bfe05ea9ly1fvoat38809j20m80dc76y.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">API</span></a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">接口开放平台</a>
              </li>
			</ul>
		</div>
		<!-- /* <测试> */ -->


		
		<div class="wdu-topi-info wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">专题</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="#">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike220%2C5%2C5%2C220%2C73/sign=a2762037d6a20cf4529df68d17602053/ae51f3deb48f8c546f1a629f3c292df5e1fe7fb1.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 7个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">复仇者联盟</span>
				</div>
				</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C5%2C600%2C395%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=5e23f0003d7adab4299f4103b6e49f29/0bd162d9f2d3572cb7e5dff48113632762d0c397.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 5个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">X战警</span>
				</div>
				</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=6efa53c742a98226accc2375ebebd264/cb8065380cd7912312e345c6ac345982b2b78005.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 6个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">少儿频道直播</span>
				</div>
				</a></li>
			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">友情链接</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="/index.php/gbook/index.html">申请</a></li>
				</ul>
			</div>
			<ul class="wdu-part-rows">
				<li class="wdu-width-x wdu-padding wdu-col-xs3 wdu-col-sm2"><a class="wdu-part-eone wdu-text-line" href="#" target="_blank">主题</a></li>
			</ul>
		</div>
	</div>
</div>
<script>        
  var wuduSwiper = new Swiper ('#wuduslider', {
     loop : true,
    autoplay:{
    delay: 3000,
    disableOnInteraction: false,
},
    //centeredSlides : true,
	slidesPerView : 'auto',
	spaceBetween : 15,
    navigation: {
      nextEl: '.wudu-next',
      prevEl: '.wudu-prev',
    },
  })        
</script>

<script>

    var swiper = new Swiper('.wdu-swip-container', {
      pagination: {
    el: '.swiper-pagination',
  },
		loop: true,
      centeredSlides: true,
      spaceBetween: 30,
	    //paginationClickable: true,
	autoplay:{
    delay: 3000,
    disableOnInteraction: false,
}, 
      navigation: {
      nextEl: '.wdu-swiper-next',
      prevEl: '.wdu-swiper-prev',
    },
    });

</script>
<?php 
mui_footer();