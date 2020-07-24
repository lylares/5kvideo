<?php
 require('header.php');?>
<style>
.wdu-deta-info .wdu-deta-content li {
    padding-top: .3125rem;
    line-height: 1.375rem;
}
.wdu-list-pics {
    position: relative;
    display: block;
    width: 100%;
    height: 0;
    transition: all .2s;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFW…QgZW5kPSJyIj8+9ZdGEAAAAA9JREFUeNpi+Pz5M0CAAQAFtgLaHYxUFQAAAABJRU5ErkJggg==);
    background-position: 50% 50%;
    background-size: cover;
}
.wdu-deta-info .wdu-deta-images {
    width: 7.5rem;
}
@media (min-width: 48rem)
.wdu-deta-info .wdu-deta-images {
    width: 8.75rem;
}

.wdu-deta-info .wdu-deta-content {
    position: absolute;
    left: 8.125rem;
}
@media (min-width: 48rem)
.wdu-deta-info .wdu-deta-content, .wdu-deta-info .wdu-deta-button {
    left: 9.6875rem;
}
</style>
<div class="wdu-tabr-info wdu-back-whits wdu-min-width wdu-line-top wdu-hide-sm">
	<ul class="wdu-part-rows">
		<li class="wdu-text-center"><a class="wdu-visible" href="/"><i class="wdu-icon-font wdu-icon-shouye"></i><span class="wdu-font-xii">首页</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="/index.php/art/index.html"><i class="wdu-icon-font wdu-icon-zixun"></i><span class="wdu-font-xii">资讯</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="/index.php/vod/type/id/27.html"><i class="wdu-icon-font wdu-icon-zhibo"></i><span class="wdu-font-xii">直播</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="/index.php/gbook/index.html"><i class="wdu-icon-font wdu-icon-liuyan"></i><span class="wdu-font-xii">留言</span></a></li>
		<li class="wdu-text-center"><a class="wdu-visible" href="/index.php/user/index.html"><i class="wdu-icon-font wdu-icon-yonghu"></i><span class="wdu-font-xii">我的</span></a></li>
	</ul>
</div>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-part-layout wdu-part-rows wdu-back-whits">
			<div class="wdu-col-xs12 wdu-col-sm8">
				<dl class="wdu-deta-info wdu-margin wdu-part-rows wdu-part-over">
					<dt class="wdu-deta-images wdu-list-info wdu-col-xs3"><a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="/index.php/actor/detail/id/43484.html" data-original="<?php
echo $starArr['star_advatar']; ?>"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $starArr['star_other_name'];?></span></a></dt>
					<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
					<h1 class="wdu-part-eone wdu-font-xvi"><?php echo $q; ?></h1>
					<ul class="wdu-part-rows">
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">身高：</span><?php
echo $starArr['star_hight']; ?></li>
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">体重：</span><?php
echo $starArr['star_weight']; ?></li>
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">星座：</span><?php
echo $starArr['star_xz']; ?></li>
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">血型：</span><?php
echo $starArr['star_xx']; ?></li>
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><?php
echo $starArr['star_area']; ?></li>
						<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">人气：</span>217</li>
						<li class="wdu-col-xs12 wdu-part-eone"><span class="wdu-text-muted">生日：</span><?php
echo $starArr['star_birthday']; ?></li>
						<li class="wdu-col-xs12"><span class="wdu-text-muted">毕业院校：</span></li>
						<li class="wdu-col-xs12 wdu-hide-xs"><span class="wdu-text-muted">代表作品：</span></li>
					</ul>
					</dd>
				</dl>
			</div>
			<div class="wdu-hide-xs wdu-col-xs4">
				<div class="wdu-side-code wdu-text-right wdu-padding">
					<p class="wdu-side-text wdu-text-muted wdu-padding">
						扫描二维码手机看大片
					</p>
					<img class="wdu-side-image wdu-hide" src="/upload/site/20181124-1/590b1be3fd6eabfc9e9a7b4ccb081095.png" alt="当前网页二维码"/>
				</div>
			</div>
		</div>
		<div class="wdu-part-layout wdu-margin-right wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="<?php echo $wudu_domain;?>search.html?wd=<?php echo $q;?>&tab=all" class="<?php if($_GET['tab']=='all'||!$_GET['tab']){echo'wdu-text-bold  wdu-text-green';}?>">全部作品</a>
				<? if(in_array('电影',$tab[2])){?>
				<a href="<?php echo $wudu_domain;?>search.html?wd=<?php echo $q;?>&tab=dy" class="<?php if($_GET['tab']=='dy'){echo'wdu-text-bold  wdu-text-green';}?>">电影</a>
				<?}?>
				<? if(in_array('电视剧',$tab[2])){?>
				<a href="<?php echo $wudu_domain;?>search.html?wd=<?php echo $q;?>&tab=ds" class="<?php if($_GET['tab']=='ds'){echo'wdu-text-bold  wdu-text-green';}?>">电视剧</a>
				<?}?>
				<? if(in_array('综艺',$tab[2])){?>
				<a href="<?php echo $wudu_domain;?>search.html?wd=<?php echo $q;?>&tab=zy" class="<?php if($_GET['tab']=='zy'){echo'wdu-text-bold  wdu-text-green';}?>">综艺</a>
				<?}?>
				<? if(in_array('动漫',$tab[2])){?>
				<a href="<?php echo $wudu_domain;?>search.html?wd=<?php echo $q;?>&tab=dm" class="<?php if($_GET['tab']=='dm'){echo'wdu-text-bold  wdu-text-green';}?>">动漫</a>
				<?}?>
				</h2>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
			<?php
			if($_GET['tab']=='dy'){
				$totalitem = $totalm[1];
			preg_match_all("/<img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/><span class='w-mfigure-hintbg'>(.*?)<\/span><span class='w-mfigure-hint'>(.*?)<\/span><\/a><h4><a class='w-mfigure-title' href='http:\/\/www.360kan.com\/m\/(.*?).html'>(.*?)<\/a>/", $content, $matches5);
    preg_match_all("/<b class='w-mfigure-score'>(.*?)<\/b>/", $content, $matches51);
    $star_movie_count = count($matches5[1]);
    for ($i = 0; $i < $star_movie_count; $i++) {
        $marr[$i]['name'] = $matches5[3][$i];
        $marr[$i]['cover'] = $matches5[2][$i];
		if($matches5[2][$i]==''){
		$marr[$i]['cover'] = $cover_default;	
		}
        $marr[$i]['year'] = $matches5[4][$i];
        $marr[$i]['score'] = $matches51[1][$i];
        $marr[$i]['url'] = './play/m_'.$matches5[6][$i].'.html';
		echo'<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$marr[$i]['url'].'" data-original="'.$marr[$i]['cover'].'">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$marr[$i]['score'].'分</span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$marr[$i]['year'].'</span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$marr[$i]['url'].'">'.$marr[$i]['name'].'</a>
					<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$marr[$i]['name2'].'</span>
				</li>'; }
			}elseif($_GET['tab']=='ds'){
				$totalitem = $totaltv[1];
    preg_match_all("/<a class='w-mfigure-imglink g-playicon js-playicon' href='http:\/\/www.360kan.com\/tv\/(.*?).html'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/><span class='w-mfigure-hintbg'>(.*?)<\/span>/", $content, $matches6);
    //print_r($matches6);
    $star_tv_count = count($matches6[1]);
    for ($i = 0; $i < $star_tv_count; $i++) {
        $tvarr[$i]['name'] = $matches6[4][$i];
        $tvarr[$i]['cover'] = $matches6[3][$i];
		if($matches6[3][$i]==''){
		$tvarr[$i]['cover'] = $cover_default;	
		}
        $tvarr[$i]['episode'] = $matches6[5][$i];
       	$tvarr[$i]['url'] = './play/tv_'.$matches6[1][$i].'.html';
		echo'<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$tvarr[$i]['url'].'" data-original="'.$tvarr[$i]['cover'].'">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$tvarr[$i]['episode'].'</span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$tvarr[$i]['year'].'</span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$tvarr[$i]['url'].'">'.$tvarr[$i]['name'].'</a>
					<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$tvarr[$i]['name2'].'</span>
				</li>';
		unset($tvarr); 
    }
}elseif($_GET['tab']=='zy'){
	$totalitem = $totalva[1];
	preg_match_all("/<a class='w-mfigure-imglink g-playicon js-playicon' href='http:\/\/www.360kan.com\/va\/(.*?).html'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/>/", $content, $matches7);
    preg_match_all("/<span class='w-mfigure-hintbg'>(.*?)<\/span>/", $content, $matches71);
    $star_zy_count = count($matches7[1]);
    for ($i = 0; $i < $star_zy_count; $i++) {
        $zyarr[$i]['name'] = $matches7[4][$i];
        $zyarr[$i]['cover'] = $matches7[3][$i];
		if( $matches7[3][$i]==''){
			 $zyarr[$i]['cover'] = $cover_default;
		}
        $zyarr[$i]['episode'] = $matches71[1][$i];
		$zyarr[$i]['url'] = './play/va_'.$matches7[1][$i].'.html';
		echo'<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$zyarr[$i]['url'].'" data-original="'.$zyarr[$i]['cover'].'">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$zyarr[$i]['episode'].'</span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$zyarr[$i]['year'].'</span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$zyarr[$i]['url'].'">'.$zyarr[$i]['name'].'</a>
					<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$zyarr[$i]['name2'].'</span>
				</li>';
		unset($zyarr); 
    }
	
}elseif($_GET['tab']=='dm'){
	
	preg_match_all("/<a class='w-mfigure-imglink g-playicon js-playicon' href='http:\/\/www.360kan.com\/ct\/(.*?).html'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/><span class='w-mfigure-hintbg'>(.*?)<\/span>/", $content, $matches8);
    $star_dm_count = count($matches8[1]);
    for ($i = 0; $i < $star_dm_count; $i++) {
        $dmarr[$i]['name'] = $matches8[4][$i];
        $dmarr[$i]['cover'] = $matches8[3][$i];
		if($matches8[3][$i]==''){
		$dmarr[$i]['cover'] = $cover_default;	
		}
        $dmarr[$i]['episode'] = $matches8[5][$i];
        $dmarr[$i]['url'] = './play/ct_'.$matches8[1][$i].'.html';
		echo'<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$dmarr[$i]['url'].'" data-original="'.$dmarr[$i]['cover'].'">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$dmarr[$i]['episode'].'</span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$dmarr[$i]['year'].'</span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$dmarr[$i]['url'].'">'.$dmarr[$i]['name'].'</a>
					<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$dmarr[$i]['name2'].'</span>
				</li>';
		unset($dmarr);   
    }
}else{
	
	
	
}
	?>
				
				
			</ul>
			<div class="wdu-page-info wdu-text-center">
			
			<?php
$totalItems = $totalitem ;
$itemsPerPage = 20;
$currentPage = $pageno;
$urlPattern = '?wd='.$q.'&tab='.$tab.'&pageno=(:num)';
$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
$paginator->setMaxPagesToShow(5);
                echo $paginator;
?>

			</div>
		</div>
		<div class="wdu-conv-info wdu-part-layout wdu-margin-right wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi"><a class="wdu-conv-btn" href="javascript:;">明星简介</a></h2>
			</div>
			<div class="wdu-conv-deta">
				<div class="wdu-conv-boxs wdu-conv-cont">
					<p class="wdu-conv-text wdu-padding wdu-text-muted">
						<?php echo $starArr['star_info'];?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require('footer.php');?>