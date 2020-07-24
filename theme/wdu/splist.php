<?php 

//总数

$row=$db->getALL('select count(*) from wudu_vod');

$totalcount = $row[0]['count(*)'];
//
$page_size = 24;
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

$sql = "select * from wudu_vod order by id desc limit $begin_position,$page_size";

$itemresult=$db->getALL($sql);

mui_head('第'.$current_page_number.'页|精选',0) ;
?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-casc-info wdu-part-layout wdu-back-whits wdu-part-rows" style="    padding: .9375rem;
    margin-top: 1.25rem;">
			<div class="wdu-casc-list wdu-part-rows">
				<dl>
					<dt>分类</dt>
					<dd><a href="./special.html?cid=0">全部</a></dd>
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
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="'.$wudu_domain.'splay/'.$row['pid'].'.html" data-original="'.$row['picture'].'">
				        <span class="wdu-list-play wdu-hide-xs"></span>
				        <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['score'].'</span>
				        <span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['date'].'</span>
				    </a>
				    <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$wudu_domain.'splay/'.$row['pid'].'.html">'.$row['name'].'</a>
				    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['actor'].'</span>
				   </li>
					';}?>
			</ul>
			<div class="wdu-page-info wdu-text-center">
			
			<?php
$totalItems = $totalcount ;
$itemsPerPage = 24;
$currentPage = $current_page_number;
$urlPattern = '?cid='.$_GET['cid'].'&page=(:num)';
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