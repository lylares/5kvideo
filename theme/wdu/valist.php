<?php 

preg_match_all('/<a class="js-tongjic" href="\/va\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+(<span class="pay">付费<\/span>)?\s+<div class="mask-wrap">\r\n\s+<span class="hint">([^<]*)<\/span>\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>\r\n\s+<p class="star">(.*)<\/p>/sU',$content, $_vatemp);

preg_match_all("/<a href='https:\/\/www.360kan.com\/zongyi\/list(.*?)' target='_self'>(.*?)<\/a>/",$content,$maxtemp);

$maxpage = end(end($maxtemp));

$totalitem = $maxpage*28;

mui_head('全部综艺',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
					<dd><a href="<?php echo '?rank='.$rank.'&cat=121&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >脱口秀</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=120&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >真人秀</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >选秀</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >八卦</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=103&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >访谈</a></a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=104&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >情感</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >生活</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=106&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >晚会</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >搞笑</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=108&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >音乐</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=109&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >时尚</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=110&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >游戏</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=111&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >少儿</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=112&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >体育</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=113&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >纪实</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=114&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >科教</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=115&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >曲艺</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=116&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >歌舞</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=117&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >财经</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=118&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >汽车</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat=119&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >播报</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=other&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>">其他</a></dd>
				</dl>

				<dl>
					<dt>明星</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=邓超';?>"  >邓超</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周星驰';?>"  >周星驰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=陈赫' ;?>"  >陈赫</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=何炅' ;?>"  >何炅</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=汪涵';?>"  >汪涵</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=王俊凯';?>"  >王俊凯</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄磊' ;?>"  >黄磊</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=谢娜' ;?>"  >谢娜</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄渤' ;?>"  >黄渤</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周杰伦' ;?>"  >周杰伦</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=吴亦凡' ;?>"  >吴亦凡</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=赵薇' ;?>"  >赵薇</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=薛之谦' ;?>"  >薛之谦</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=Angelababy' ;?>"  >Angelababy</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=易烊千玺' ;?>"  >易烊千玺</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=岳云鹏' ;?>"  >岳云鹏</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=王嘉尔' ;?>"  >王嘉尔</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=鹿晗' ;?>"  >鹿晗</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=杨幂' ;?>"  >杨幂</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=沈腾' ;?>"  >沈腾</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=罗志祥' ;?>"  >罗志祥</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=张艺兴' ;?>"  >张艺兴</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=潘玮柏' ;?>"  >潘玮柏</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=华晨宇' ;?>"  >华晨宇</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李维嘉' ;?>"  >李维嘉</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=钱枫' ;?>"  >钱枫</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=宋小宝' ;?>"  >宋小宝</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=贾玲' ;?>"  >贾玲</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=范冰冰' ;?>"  >范冰冰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=沙溢' ;?>"  >沙溢</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=撒贝宁' ;?>"  >撒贝宁</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=涂磊' ;?>"  >涂磊</a></dd>
				</dl>
				
				<dl>
					<dt>地区</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >香港</a></dd>
					    <dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >欧美</a></dd>
				</dl>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="<?php echo $wudu_domain.'valist.html?rank='.'rankhot'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankhot'||!$_GET['rank']){echo'wdu-text-bold wdu-text-green';}?>">热映</a>
				<a href="<?php echo $wudu_domain.'valist.html?rank='.'createtime'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='createtime'){echo'wdu-text-bold wdu-text-green';}?>">好评</a>
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
                
                //print_r($_vatemp);
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