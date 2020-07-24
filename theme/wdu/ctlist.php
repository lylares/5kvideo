<?php 

preg_match_all('/<a class="js-tongjic" href="\/ct\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+<div class="mask-wrap">\r\n\s+<span class="hint">([^<]*)<\/span>\r\n\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>/sU',$content, $ct_temp);


preg_match_all("/<a href='https:\/\/www.360kan.com\/dongman\/list(.*?)' target='_self'>(.*?)<\/a>/",$content,$maxtemp);

$maxpage = end(end($maxtemp));

$totalitem = $maxpage*28;

mui_head('全部动漫',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat=100&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >热血</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=134&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >科幻</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >美少女</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=109&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >魔幻</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=135&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >经典</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=136&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >励志</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=111&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >少儿</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >冒险</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >搞笑</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=137&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >推理</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >恋爱</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=138&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >治愈</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=106&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >幻想</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=104&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >校园</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=110&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >动物</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=112&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >机战</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=131&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >亲子</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=103&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >运动</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=108&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >悬疑</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=113&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>" >怪物</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=115&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">战争</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=114&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">益智</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=123&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">青春</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=121&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">童话</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=119&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">竞技</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=126&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">动作</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=116&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">社会</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=117&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">友情</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=127&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">真人版</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=130&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">电影版</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=128&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">OVA版</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=129&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">TV版</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=132&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">新番</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=133&year='.$year.'&area='.$area.'&pageno='.$pageno ;?>">完结</a></dd>
				</dl>
				<dl>
					<dt>地区</dt>
					<dd class="text"><span class="text-muted">地区</span></dd>
						<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >美国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
				</dl>
				<dl>
					<dt>年代</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.date('Y').'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y');?></a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-1).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-1;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-2).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-2;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-3).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-3;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-4).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-4;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-5).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-5;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-6).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-6;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-7).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-7;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-8).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-8;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-9).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-9;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-10).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-10;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-11).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-11;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-12).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-12;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-13).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-13;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-14).'&area='.$area.'&pageno='.$pageno ;?>" ><?php echo date('Y')-14;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year=other'.'&area='.$area.'&pageno='.$pageno ;?>" class="acat" target="_self">更早</a></dd>
				</dl>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="<?php echo $wudu_domain.'ctlist.html?rank='.'rankhot'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankhot'||!$_GET['rank']){echo'wdu-text-bold wdu-text-green';}?>">热映</a>
				<a href="<?php echo $wudu_domain.'ctlist.html?rank='.'createtime'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='createtime'){echo'wdu-text-bold wdu-text-green';}?>">最近</a>
				</h2>
				<!-- <ul class="wdu-part-tips wdu-padding">
					<li><span class="wdu-more"><span class="wdu-hide-xs">当前第&nbsp;<span id="wdu-now" class="wdu-text-green wdu-text-bold">1</span>&nbsp;页，</span>共&nbsp;<span id="wdu-count" class="wdu-text-green wdu-text-bold">0</span>&nbsp;个影片</span></dd>
				</ul> -->
			</div>
			<ul class="wdu-list-info wdu-part-rows">
			<?php
                if(isMobile()){
	                $urt= '_self';
                }else{
	                $urt = '_blank';
                }
                //print_r($ct_temp);
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
			<div class="wdu-page-info wdu-text-center">
			
			<?php
$totalItems = $totalitem ;
$itemsPerPage = 28;
$currentPage = $pageno;
$urlPattern = '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno=(:num)';
$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
$paginator->setMaxPagesToShow(5);
                echo $paginator;
?>

			</div>
		</div>
	</div>
</div>
<?php
require('footer.php');