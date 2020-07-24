<?php 

$cat = $_GET['cat'];
$types = $_GET['types'];

//总数

$row=$fdb->getALL("select count(*) from wf_vod where type_id_1='$cat'");

$totalcount = $row[0]['count(*)'];
//
$page_size = 30;
$total_pages = ceil($totalcount/$page_size);
//当前页码
$current_page_number = isset($_GET['page'])?$_GET['page']:1;
if($current_page_number<1) {
    $current_page_number =1;
}
if($current_page_number>$total_pages){
    $current_page_number = $total_pages;
}
$begin_position = ($current_page_number-1)*$page_size;

$sql = "select * from wf_vod where type_id_1='$cat' order by vod_time desc limit $begin_position,$page_size";

$itemresult=$fdb->getALL($sql);

mui_head('第'.$current_page_number.'页|雾都影视列表',0) ;
?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="./special.html?cid=0">全部</a></dd>
                  <dd><a href="./special.html?cid=0">电视剧</a></dd>
                  <dd><a href="./special.html?cid=0">电影</a></dd>
                  <dd><a href="./special.html?cid=0">综艺</a></dd>
                  <dd><a href="./special.html?cid=0">动漫</a></dd>
                  <dd><a href="./special.html?cid=0">VIP</a></dd>
				</dl>

			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">
				<a href="">热映</a>
				<a href="">好评</a>
				</h2>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
			<?php
            foreach($itemresult as $key =>$row){
			    echo '
			       <li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'wplay/'.$row['vod_id'].'.html" data-original="'.$row['vod_pic'].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				        <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$wudu_domain.'wplay/'.$row['vod_id'].'.html">'.$row['vod_name'].'</a>
				    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
				   </li>
					';}?>
			</ul>
			<div class="wdu-page-info wdu-text-center">
			
			<?php
$totalItems = $totalcount ;
$itemsPerPage = 30;
$currentPage = $current_page_number;
$urlPattern = '?cat='.$_GET['cat'].'&types='.$_GET['types'].'&page=(:num)';
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