<?php 
require 'data/Paginator.php';


$tvcontent = json_decode($content,true);

$tvList = $tvcontent['data']['list'];

$totalitem = $tvcontent['data']['total'];

mui_head('综艺频道',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">

		<div class="wdu-back-whits wdu-box-shadow wdu-margin-top">
			<div class="wdu-swip-container  wdu-part-rows">
				<div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
                    <?php
					
					$curl = "https://www.360kan.com/zongyi/index.html";
				    $name = md5($curl);

					$vaindexcontent = gzinflate(file_get_contents('./data/runtime/360indexVarank/'.$name));
					
					$vaslider =echovaslider($vaindexcontent);
                    $vaslidercount = count($vaslider );

					for($i=7;$i<12;$i++){
					
					echo'
					<div class="swiper-slide wdu-swip-slide">
					    <a class="wdu-list-pics wdu-part-5by2 wdu-swip-lazy" href="'.$wudu_domain.'vod/'.$vaslider[$i]['id'].'.html" target="" style="background: url('.$vaslider[$i]['cover'].')  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					        <div class="wdu-swip-title wdu-text-white wdu-part-eone">
						        <span class="wdu-part-eone wdu-font-xviii wdu-swip-head">'.$vaslider[$i]['name'].'</span>
								<span class="wdu-part-eone wdu-font-xii">'.$vaslider[$i]['dsc'].'</span>
					        </div>
					    </a>
					</div>
					';
					}?>
				</div>
				<div class="swiper-button-next wdu-swip-next wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-you" href="javascript:;"></div>
				<div class="swiper-button-prev wdu-swip-prev wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-zuo" href="javascript:;"></div>
				<div class="swiper-pagination wdu-swip-pagin wdu-font-size wdu-text-right"></div>
			</div>
		</div>
		
		<div class="wdu-scre-list wdu-part-layout wdu-back-whits wdu-part-rows">
			<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4">
				<dt>地区</dt>
				<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >香港</a></dd>
					    <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >欧美</a></dd>
			</dl>
			<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block">
				<dt>分类</dt>
				<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=121&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >脱口秀</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=120&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >真人秀</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >选秀</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >八卦</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=103&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >访谈</a></a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=104&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >情感</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >生活</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=106&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >晚会</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >搞笑</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=108&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >音乐</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=109&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >时尚</a></dd>
			            <dd><a href="valist.html<?php echo '?rank='.$rank.'&cat=110&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >游戏</a></dd>

			</dl>
			<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4">
				<dt>明星</dt>
				<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=邓超';?>"  >邓超</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周星驰';?>"  >周星驰</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=陈赫' ;?>"  >陈赫</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=何炅' ;?>"  >何炅</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=汪涵';?>"  >汪涵</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=王俊凯';?>"  >王俊凯</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄磊' ;?>"  >黄磊</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=谢娜' ;?>"  >谢娜</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄渤' ;?>"  >黄渤</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周杰伦' ;?>"  >周杰伦</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=吴亦凡' ;?>"  >吴亦凡</a></dd>
						<dd><a href="valist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵薇' ;?>"  >赵薇</a></dd>
			</dl>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最近更新</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">46</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">1706&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="valist.html">更多</a></li>
				</ul>
			</div>
			<div class="wdu-col-sx12">
				<ul class="wdu-list-info wdu-part-rows">
				<?php
                if(isMobile()){
	                $urt= '_self';
                }else{
	                $urt = '_blank';
                }
                foreach ($tvList as $key=>$value){
			    echo '
			        <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'vod'.$value['coverpage'].'" data-original="'.$value['cover'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
						    <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$value['tag'].'</span>
						    <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$value['tag'].'</span>
						</a>
						<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/23082.html">'.$value['title'].'</a>
						<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$value['desc'].'</span>
					</li>
					';}?>	
				</ul>
			</div>
		</div>

		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">其他</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="valist.html">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
			</ul>
		</div>
	</div>
</div>
<script>
$(function() {
    var swiper = new Swiper('.wdu-swip-container', {
        pagination: '.swiper-pagination',
		loop: true,
	    //paginationClickable: true,
	    autoplay: 3000,
	    nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
})
</script>
<?php
require('footer.php');
?>