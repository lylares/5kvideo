<?php 

$tv='class="active"';

preg_match_all('/<a class="js-tongjic" href="\/ct\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+<div class="mask-wrap">\r\n\s+<span class="hint">([^<]*)<\/span>\r\n\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>/sU',$content, $ct_temp);

mui_head('动漫频道',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
      	<?php
        $curl = "https://www.360kan.com/dongman/index.html";
				   /*  $name = md5($curl);
				    $ctdata = gzinflate(file_get_contents('./data/runtime/360ctindex/'.$name)); */
					$ctdata =curl($curl);
					$slider_patten='/<a href="\/ct\/(.*?).html">
                <span class="b-topslider-tit">(.*?)<\/span><span class="colon">&nbsp;<\/span><span class="b-topslider-desc">(.*?)<\/span>
            <\/a>/';
                    
					preg_match_all('/<span class="b-topslider-img js-slide-img" style="background-image:url\((.*?)\);"><\/span>/',$ctdata,$stemp2);
                    preg_match_all('/class="" href="(.*?)ct\/(.*?).html">/',$ctdata,$tid);
                    preg_match_all('/<span class="b-topslider-tit">(.*?)<\/span>/',$ctdata,$ttitle);
                    preg_match_all('/<span class="b-topslider-desc">(.*?)<\/span>/',$ctdata,$tdesc);
      ?>
       <?php if(GBS::is_ipad()){?>
       <div class="wdu-swip-container  wdu-part-rows">
		    <div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
              
             	<?php 
                            
                for($i=0;$i<5;$i++){?>			
			    <div class="swiper-slide wdu-swip-slide">
				   <a class="wdu-list-pics wdu-list-pic wdu-part-5by2 wdu-swip-lazy" href="<?php echo $wudu_domain;?>play/ct_'.$tid[2][$i].'.html" target="_blank" style="background: url(<?php echo $stemp2[1][$i];?>)  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					   <div class="wdu-swip-title wdu-swiper-title wdu-text-white wdu-part-eone">
						    <span class="wdu-part-eone wdu-font-xviii wdu-swip-head"><?php echo $ttitle[1][$i];?></span>
						    <span class="wdu-part-eone wdu-font-xii"><?php echo $tdesc[1][$i];?></span>
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
					for($i=0;$i<5;$i++){
					echo'
					<div class="swiper-slide wudu-slider" data-target="play/ct_'.$tid[2][$i].'.html" style="background-image:url('.$stemp2[1][$i].')">
					    
                         <div class="info" >
                            <h3>'.$ttitle[1][$i].'</h3>
                          <p class="attr">'.$tdesc[1][$i].'。</p>
                         </div>

					</div>
					';}?>
				</div>
				<div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
		    </div>
           <?php }?>
		<div class="wdu-back-whits wdu-hidden">
			<ul class="wdu-part-rows">
			<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html?<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >香港</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=16&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >泰国</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >日本</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >美国</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=17&act='.$act.'&pageno='.$pageno ;?>" >英国</a></li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right"><a href="tvlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=18&act='.$act.'&pageno='.$pageno ;?>" >新加坡</a></li>	
			</ul>
		</div>
		
		
		<div class="wdu-scre-list wdu-part-layout wdu-back-whits wdu-part-rows">
				<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4">
					<dt>分类</dt>
                        <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=100&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >热血</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=134&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >科幻</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >美少女</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=109&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >魔幻</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=135&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >经典</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=136&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >励志</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=111&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >少儿</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >冒险</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >搞笑</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=137&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >推理</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >恋爱</a></dd>
			            <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat=138&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >治愈</a></dd>

				</dl>
				<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block">
					<dt>地区</dt>
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >美国</a></dd>
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
				</dl>
				<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4">
					<dt>年代</dt>
                        <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.date('Y').'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y');?></a></dd>
                        <dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-1).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-1;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-2).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-2;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-3).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-3;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-4).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-4;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-5).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-5;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-6).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-6;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-7).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-7;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-8).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-8;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-9).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-9;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-10).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-10;?></a></dd> 
						<dd><a href="ctlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-11).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-11;?></a></dd> 
						
				</dl>
			</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最近更新</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">46</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">1706&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="ctlist.html">更多</a></li>
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
                foreach ($ct_temp[1] as $k=>$v){
                	
			    echo '
			       <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'play/ct_'.$v.'.html" data-original="'.$ct_temp[2][$k].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				       
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$ct_temp[3][$k].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone">'.$ct_temp[4][$k].'</a>
				    
				   </li>
					';}
					
					?>	
				</ul>
			</div>
		</div>

		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">其他</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="ctlist.html">更多</a></li>
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