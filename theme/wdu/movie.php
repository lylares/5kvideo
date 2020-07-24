<?php 

preg_match_all('/<a class="js-tongjic" href="\/m\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+(<span class="pay">付费<\/span>)?\s+<div class="mask-wrap">\r\n\s+<span class="hint">(\d*)<\/span>\s+(<span class="point">([^<]*)<\/span>)?\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>\r\n\s+<p class="star">(.*)<\/p>/sU', $content, $_mtemp);

mui_head('电影频道',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
      
      <?php
      $curl = "https://www.360kan.com/dianying/index.html";
			/* 	    $name = md5($curl);
                    $gxpd=time()-filemtime('data/runtime/360mindex/'.$name);
                    if(!is_file('data/runtime/360mindex/'.$name))
                    {
	                    $tvData = curl($curl);
	                    file_put_contents('data/runtime/360mindex/'.$name, gzdeflate($tvData));
                    }elseif($gxpd>2*60*60)
					{
	                    $tvData = curl($curl);
	                    file_put_contents('data/runtime/360mindex/'.$name, gzdeflate($tvData));
                    } */
				    $mcontent = GBS::curl($curl);

					$patten_slider="/<ul class=\"b-topslidernew-list js-slide-list\">(.*)\r\n\s+<\/ul>/isU";
					
					preg_match_all($patten_slider,$mcontent,$slider_temp);
      
					
					preg_match_all('/<a class="" href="https:\/\/www.360kan.com\/m\/(.*?).html"/',$slider_temp[0][0],$temp0);

      preg_match_all('/style="background-image:url\((.*?)\);"/',$slider_temp[0][0],$temp);
      preg_match_all('/<span class="b-topslidernew-tit">(.*?)<\/span>/',$slider_temp[0][0],$temp1);
	preg_match_all('/<span class="b-topslidernew-desc">：(.*?)<\/span>/',$slider_temp[0][0],$tempdesc);
                              //  print_r($temp2);

      
      ?>
      <?php if(GBS::is_ipad()){?>
       <div class="wdu-swip-container  wdu-part-rows">
		    <div class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">
              
             	<?php for($i=0;$i<5;$i++){?>			
			    <div class="swiper-slide wdu-swip-slide">
				   <a class="wdu-list-pics wdu-list-pic wdu-part-5by2 wdu-swip-lazy" href="<?php echo $wudu_domain.'play/m_'.$temp0[1][$i];?>.html" target="_blank" style="background: url(<?php echo $temp[1][$i];?>)  no-repeat; background-position:50% 50%; background-size: cover;display: block;position: relative;">
					   <div class="wdu-swip-title wdu-swiper-title wdu-text-white wdu-part-eone">
						    <span class="wdu-part-eone wdu-font-xviii wdu-swip-head"><?php echo $temp1[1][$i];?></span>
						    <span class="wdu-part-eone wdu-font-xii"><?php echo $tempdesc[1][$i];?></span>
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
                    
                    <div class="swiper-slide wudu-slider" data-target="'.$wudu_domain.'play/m_'.$temp0[1][$i].'.html" style="background-image:url('.$temp[1][$i].')">
                         <div class="info" >
                            <h3>'.$temp1[1][$i].'</h3>
                             <p class="attr">'.$tempdesc[1][$i].'</p>
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
				<dd ><a href="mlist.html?<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >香港</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=16&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >泰国</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >美国</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=17&act='.$act.'&pageno='.$pageno ;?>" >英国</a></dd>
				<dd ><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=18&act='.$act.'&pageno='.$pageno ;?>" >新加坡</a></dd>
			</dl>
			<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block">
				<dt>年代</dt>
				<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.date('Y').'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y');?></a></dd>
                        <dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-1).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-1;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-2).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-2;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-3).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-3;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-4).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-4;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-5).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-5;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-6).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-6;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-7).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-7;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-8).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-8;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-9).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-9;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-10).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-10;?></a></dd> 
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-11).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-11;?></a></dd> 

			</dl>
			<dl class="wdu-col-sx12 wdu-col-sm6 wdu-col-md4">
				<dt>主演</dt>
				<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=杨幂';?>"  >杨幂</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=热巴';?>"  >热巴</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=张嘉译' ;?>"  >张嘉译</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵丽颖' ;?>"  >赵丽颖</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=郑爽';?>"  >郑爽</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵又廷';?>"  >赵又廷</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=胡歌' ;?>"  >胡歌</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=孙俪' ;?>"  >孙俪</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=韩东君' ;?>"  >韩东君</a></dd>
						<dd><a href="mlist.html<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周迅' ;?>"  >周迅</a></dd>
			</dl>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最近更新</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">46</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">1706&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="mlist.html">更多</a></li>
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
                foreach ($_mtemp[1] as $k=>$v){
                	$score = $_mtemp[6][$k];
                	if(!$score){
                		
                		$score='无评分';
                		
                	}
			    echo '
			       <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'play/m_'.$v.'.html" data-original="'.$_mtemp[2][$k].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				        <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$score.'</span>
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$_mtemp[3][$k].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone">'.$_mtemp[7][$k].'</a>
				    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$_mtemp[8][$k].'</span>
				   </li>
					';}
					
					?>	
				</ul>
			</div>
		</div>

		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">其他剧</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="mlist.html">更多</a></li>
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