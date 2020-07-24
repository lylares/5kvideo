<?php 


preg_match_all('/<a class="js-tongjic" href="\/va\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+(<span class="pay">付费<\/span>)?\s+<div class="mask-wrap">\r\n\s+<span class="hint">([^<]*)<\/span>\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>\r\n\s+<p class="star">(.*)<\/p>/sU',$content, $_vatemp);

mui_head('综艺频道',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<?php
        $curl = "https://www.360kan.com/zongyi/index.html";
				   // $name = md5($curl);

					$vaindexcontent = GBS::curl($curl);
					
					$vaslider =echovaslider($vaindexcontent);
                    $vaslidercount = count($vaslider);
      ?>
       <?php if(GBS::is_ipad()){?>
       <div class="wdu-swip-container  wdu-part-rows">
		    <div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
              
             	<?php 
                                
                for($i=0;$i<$vaslidercount;$i++){?>			
			    <div class="swiper-slide wdu-swip-slide">
				   <a class="wdu-list-pics wdu-list-pic wdu-part-5by2 wdu-swip-lazy" href="<?php echo $wudu_domain.'play/'.str_replace('/','_',$vaslider[$i]['id']);?>.html" target="_blank" style="background: url(<?php echo $vaslider[1]['cover'];?>)  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					   <div class="wdu-swip-title wdu-swiper-title wdu-text-white wdu-part-eone">
						    <span class="wdu-part-eone wdu-font-xviii wdu-swip-head"><?php echo $vaslider[$i]['name'];?></span>
						    <span class="wdu-part-eone wdu-font-xii"><?php echo $vaslider[$i]['dsc'];?></span>
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
					for($i=0;$i<$vaslidercount;$i++){
					
					echo'
		
                     <div class="swiper-slide wudu-slider" data-target="'.$wudu_domain.'play/'.str_replace('/','_',$vaslider[$i]['id']).'.html" style="background-image:url('.$vaslider[$i]['cover'].')">
                         <div class="info" >
                            <h3>'.$vaslider[$i]['name'].'</h3>
                          <p class="attr">'.$vaslider[$i]['dsc'].'</p>
                         </div>
                       </div>
					';
					}?>
				</div>
				 <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
		</div>
		<?php }?>
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
                  
              
                 foreach ($_vatemp[1] as $k =>$v){
                	$score  = $_vatemp[3][$k];
                	if(!$score){
                	
                	$score = '免费';}
                	
			    echo '
			       <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'play/va_'.$v.'.html" data-original="'.$_vatemp[2][$k].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				        <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$score.'</span>
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$_vatemp[4][$k].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone">'.$_vatemp[5][$k].'</a>
				    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$_vatemp[6][$k].'</span>
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
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  }) 

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
require('footer.php');
?>