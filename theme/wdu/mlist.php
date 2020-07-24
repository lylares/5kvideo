<?php 

$tv='class="active"';

preg_match_all('/<a class="js-tongjic" href="\/m\/(\w*).html">\r\n\s+<div class="cover g-playicon">\r\n\s+<img src="([^"]*)">\r\n\s+(<span class="pay">付费<\/span>)?\s+<div class="mask-wrap">\r\n\s+<span class="hint">(\d*)<\/span>\s+(<span class="point">([^<]*)<\/span>)?\s+<\/div>\r\n\s+<\/div>\r\n\s+<div class="detail">\r\n\s+<p class="title g-clear">\r\n\s+<span class="s1">(.*)<\/span>\r\n\s+<\/p>\r\n\s+<p class="star">(.*)<\/p>/sU', $content, $_mtemp);
preg_match_all("/<a href='https:\/\/www.360kan.com\/dianying\/list(.*?)' target='_self'>(.*?)<\/a>/",$content,$maxtemp);

$maxpage = end(end($maxtemp));

$totalitem = $maxpage*28;

mui_head('全部电影',0) ;

?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
					 <dd><a href="<?php echo '?rank='.$rank.'&cat=103&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >喜剧</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=100&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >爱情</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=106&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >动作</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=102&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >恐怖</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=104&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >科幻</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=112&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >剧情</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=105&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >犯罪</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=113&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >奇幻</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=108&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >战争</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=115&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >悬疑</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=107&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >动画</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=117&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >文艺</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=101&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >伦理</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=118&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >纪录</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=119&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >传记</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=120&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >歌舞</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=121&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >古装</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=122&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >历史</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=123&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>" >惊悚</a></dd>
			            <dd><a href="<?php echo '?rank='.$rank.'&cat=other&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno ;?>">其他</a></dd>
				</dl>
				<dl>
					<dt>地区</dt>
					<dd><a href="<?php echo '?rank='.$rank;?>">全部</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=11&act='.$act.'&pageno='.$pageno ;?>" >美国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=10&act='.$act.'&pageno='.$pageno ;?>" >大陆</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=15&act='.$act.'&pageno='.$pageno ;?>" >香港</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=13&act='.$act.'&pageno='.$pageno ;?>" >韩国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=14&act='.$act.'&pageno='.$pageno ;?>" >日本</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=12&act='.$act.'&pageno='.$pageno ;?>" >法国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=16&act='.$act.'&pageno='.$pageno ;?>" >英国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=17&act='.$act.'&pageno='.$pageno ;?>" >德国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=18&act='.$act.'&pageno='.$pageno ;?>" >台湾</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=21&act='.$act.'&pageno='.$pageno ;?>" >泰国</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=22&act='.$act.'&pageno='.$pageno ;?>" >印度</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&area=other&act='.$act.'&pageno='.$pageno ;?>" >其他</a></dd>
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
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=成龙';?>"  >成龙</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周星驰';?>"  >周星驰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李连杰' ;?>"  >李连杰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=林正英' ;?>"  >林正英</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=吴京';?>"  >吴京</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=徐峥';?>"  >徐峥</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=黄渤' ;?>"  >黄渤</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=王宝强' ;?>"  >王宝强</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=李小龙' ;?>"  >李小龙</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=张国荣' ;?>"  >张国荣</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=洪金宝' ;?>"  >洪金宝</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=姜文' ;?>"  >姜文</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=范冰冰' ;?>"  >范冰冰</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=沈腾' ;?>"  >沈腾</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=邓超' ;?>"  >邓超</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=巩俐' ;?>"  >巩俐</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=马丽' ;?>"  >马丽</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=闫妮' ;?>"  >闫妮</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=周冬雨' ;?>"  >周冬雨</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=刘昊然' ;?>"  >刘昊然</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=汤唯' ;?>"  >汤唯</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=舒淇' ;?>"  >舒淇</a></dd>
						<dd><a href="<?php echo '?rank='.$rank.'&cat='.$cat.'&year='.$year.'&act=白百何' ;?>"  >白百何</a></dd>
				</dl>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="<?php echo $wudu_domain.'mlist.html?rank='.'rankhot'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankhot'||!$_GET['rank']){echo'wdu-text-bold wdu-text-green';}?>">热映</a>
				<a href="<?php echo $wudu_domain.'mlist.html?rank='.'createtime'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='createtime'){echo'wdu-text-bold wdu-text-green';}?>">最近</a>
				<a href="<?php echo $wudu_domain.'mlist.html?rank='.'rankpoint'.'&cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&pageno='.$pageno;?>" class="<?if($_GET['rank']=='rankpoint'){echo'wdu-text-bold wdu-text-green';}?>">好评</a>
				
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
                //print_r($_mtemp);
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