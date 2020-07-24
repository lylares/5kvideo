<?php 
$id = htmlentities(trim($_GET['id']));
$sql = "select * from wudu_topic where alias = '$id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res))
{
	$topic_id = $row['id'];
	$topic_name = $row['name'];
	$topic_des = $row['des'];
	$topic_cover = $row['cover'];
	$topic_status = $row['status'];
}
mui_head($topic_name.' | 话题',0) ;
?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-part-rows wdu-part-layout wdu-back-whits">
			<div class="wdu-padding wdu-col-xs12 wdu-col-md6">
				<div class="wdu-list-pics wdu-lazy wdu-part-2by1 wdu-part-rows" data-original="<?php echo $topic_cover;?>">
				</div>
			</div>
			<div class="wdu-padding wdu-col-xs12 wdu-col-md6">
				<h3 class="wdu-topi-head wdu-font-xviii wdu-part-rows wdu-line-bottom"><?php echo $topic_name;?></h3>
				<p><?php echo $topic_des;?></p>
			</div>
		</div>
        <?php 
		$sql = "select * from (wudu_topic_detail left join wudu_topic_cat on wudu_topic_detail.cid = wudu_topic_cat.id) left join wudu_topic_cat on wudu_topic_cat.tid=wudu_topic.id where wudu_topic.id = $topic_id";
        $res = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($res))
        {?>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi"><?php echo $row[9];?></h2>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md2">
				    <a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="<?php echo $row['aid'];?>" data-original="<?php echo $row['cover'];?>">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $row['score'];?></span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href=""><?php echo $row['name'];?></a>
					    <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block"><?php echo $row['actor'];?></span>
			    </li>
			</ul>
		</div>
		<?}?>		
	</div>
</div>
<?php
require('footer.php');