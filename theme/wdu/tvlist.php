<?php 


preg_match_all('/<a class="js-tongjic" href="\/tv\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+<div class="mask-wrap">\r\n\s+<span class="hint">([^<]*)<\/span>\s+(<span class="point">([^<]*)<\/span>)?\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>\r\n\s+<p class="star">(.*)<\/p>/sU',$content, $tl_temp);
//$tvList = $tvcontent['data']['list'];

preg_match_all("/<a href='https:\/\/www.360kan.com\/dianshi\/list.php(.*?)' target='_self'>(.*?)<\/a>/",$content,$maxtemp);

$maxpage = end(end($maxtemp));

$totalitem = $maxpage*28;

mui_head('全部电视剧',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
					<dd><a href="<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >言情</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >伦理</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=109&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >喜剧</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=108&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >悬疑</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=111&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >都市</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=100&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >偶像</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=104&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >古装</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >军事</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=103&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >警匪</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=112&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >历史</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >宫廷</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=116&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >励志</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=117&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >神话</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=118&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >谍战</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=119&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >青春</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=120&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >家庭</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=115&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >动作</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=114&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >情景</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=106&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >武侠</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=113&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >科幻</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=other&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>">其他</a></dd>
				</dl>
				<dl>
					<dt>地区</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >香港</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=16&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >泰国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >美国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=17&act='.$act.'&pageno='.$pageno ;?>" >英国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=18&act='.$act.'&pageno='.$pageno ;?>" >新加坡</a></dd>
				</dl>
				<dl>
					<dt>年代</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.date('Y').'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y');?></a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-1).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-1;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-2).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-2;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-3).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-3;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-4).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-4;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-5).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-5;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-6).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-6;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-7).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-7;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-8).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-8;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-9).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-9;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-10).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-10;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.(date('Y')-11).'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" ><?php echo date('Y')-11;?></a></dd> 
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year=other'.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" class="acat" target="_self">更早</a>
				</dl>
				<dl>
					<dt>明星</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=杨幂';?>"  >杨幂</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=热巴';?>"  >热巴</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=张嘉译' ;?>"  >张嘉译</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵丽颖' ;?>"  >赵丽颖</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=郑爽';?>"  >郑爽</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵又廷';?>"  >赵又廷</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=胡歌' ;?>"  >胡歌</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=孙俪' ;?>"  >孙俪</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=韩东君' ;?>"  >韩东君</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周迅' ;?>"  >周迅</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=张一山' ;?>"  >张一山</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李小璐' ;?>"  >李小璐</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=吴秀波' ;?>"  >吴秀波</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李沁' ;?>"  >李沁</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=陈坤' ;?>"  >陈坤</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=刘亦菲' ;?>"  >刘亦菲</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=唐嫣' ;?>"  >唐嫣</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李小冉' ;?>"  >李小冉</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周冬雨' ;?>"  >周冬雨</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=于和伟' ;?>"  >于和伟</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李易峰' ;?>"  >李易峰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=雷佳音' ;?>"  >雷佳音</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=何冰' ;?>"  >何冰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=阮经天' ;?>"  >阮经天</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=梅婷' ;?>"  >梅婷</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=徐峥' ;?>"  >徐峥</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=祖峰' ;?>"  >祖峰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=秦海璐' ;?>"  >秦海璐</a></dd>
                        <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=杨紫' ;?>"  >杨紫</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=任嘉伦' ;?>"  >任嘉伦</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=贾乃亮' ;?>"  >贾乃亮</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=罗晋' ;?>"  >罗晋</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄渤' ;?>"  >黄渤</a></dd>
				</dl>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="<?php echo $wudu_domain.'tvlist.html?rank='.'rankhot'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankhot'||!$_GET['rank']){echo'wdu-text-bold wdu-text-green';}?>">热映</a>
				<a href="<?php echo $wudu_domain.'tvlist.html?rank='.'rankpoint'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankpoint'){echo'wdu-text-bold wdu-text-green';}?>">好评</a>
				</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><span class="wdu-more"><span class="wdu-hide-xs">当前第&nbsp;<span id="wdu-now" class="wdu-text-green wdu-text-bold">1</span>&nbsp;页，</span>共&nbsp;<span id="wdu-count" class="wdu-text-green wdu-text-bold">0</span>&nbsp;个影片</span></dd>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
			<?php
                if(isMobile()){
	                $urt= '_self';
                }else{
	                $urt = '_blank';
                }
                
                //print_r($tl_temp);
                foreach ($tl_temp[1] as $k=>$v){
                	
                	$score = $tl_temp[5][$k];
                	if(!$score){
                	$score = '无评分';
                }
			    echo '
			       <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'play/tv_'.$v.'.html" data-original="'.$tl_temp[2][$k].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				        <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$score.'</span>
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$tl_temp[3][$k].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" >'.$tl_temp[6][$k].'</a>
				    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$tl_temp[7][$k].'</span>
				   </li>
					';}?>
			
				
				
			
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
?>