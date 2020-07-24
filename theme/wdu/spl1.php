<?php include 'header.php'; ?>
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo get_ad(3)?></div>
	<div class="row">
	<div class="hy-layout clearfix">
  <div class="hy-min-screen clearfix">
    <div class="item clearfix">
      <dl class="clearfix">
        <dt class="text-muted">按剧情</dt>
        <dd class="clearfix">
<a href="./special.html?cid=0" class="acat" style="white-space: pre-wrap;">全部</a>
											  <?php
$result = mysqli_query($conn,'select * from wudu_vod_class where c_pid=0 order by c_id asc');
while ($row = mysqli_fetch_array($result)){

			echo '<a href="./special.html?cid='.$row['c_id'].'" class="acat" style="white-space: pre-wrap;margin-bottom: 4px;">'.$row['c_name'].'</a>';
		}
?>
						
<?php
if ($_GET['cid'] != 0){
	?>
						
											  <?php
$result = mysqli_query($conn,'select * from wudu_vod_class where c_pid='.$_GET['cid'].' order by c_sort desc,c_id asc');
while ($row = mysqli_fetch_array($result)){

			echo '<a href="./special.html?cid='.$row['c_id'].'" class="acat" style="white-space: pre-wrap;margin-bottom: 4px;">'.$row['c_name'].'</a>';
		}
?>
						
<?php }?>				</dd>
      </dl>

    </div>
  </div>
</div>


		<div class="hy-layout clearfix" style="margin-top: 0;">
			<div class="hy-switch-tabs active clearfix">
				<span class="text-muted pull-right hidden-xs">如果您喜欢本站请动动小手分享给您的朋友！</span>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#">特别策划</a></li>
				</ul>
			</div>
			<div class="hy-video-list">
				<div class="item">
					<ul class="clearfix">
 							<?php
							if (isset($_GET['cid'])) {
								if ($_GET['cid'] != 0){
									$sql = 'select * from wudu_vod where d_parent in ('.$_GET['cid'].') order by d_id desc';
									if(mysqli_num_rows(mysqli_query($conn,$sql))<24)
									{
										$pager = page_handle('page',mysqli_query($conn,$sql),mysqli_num_rows(mysqli_query($conn,$sql)));
									}else{
										$pager = page_handle('page',24,mysqli_num_rows(mysqli_query($conn,$sql)));
									}
									
									$result = mysqli_query($conn,$sql.' limit '.$pager[0].','.$pager[1].'');
								}else{
									$sql = 'select * from wudu_vod order by d_id desc';
									if(mysqli_num_rows(mysqli_query($conn,$sql))<24)
									{
										$pager = page_handle('page',mysqli_num_rows(mysqli_query($conn,$sql)),mysqli_num_rows(mysqli_query($conn,$sql)));
									}else{
									$pager = page_handle('page',24,mysqli_num_rows(mysqli_query($conn,$sql)));
									}
									$result = mysqli_query($conn,$sql.' limit '.$pager[0].','.$pager[1].'');
								}
							}
							while($row= mysqli_fetch_array($result)){
								$cc="./splay.php?play=";
								$dd="./splay/";
if ($wudu_wei==1){
$ccb=$dd.$row['d_id'].'.html';
}
else{
$ccb=$cc.$row['d_id'].'.html';	
}
if ($row['d_jifen']>0){
$ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";
}
else{
$ok="";
}
			echo '<div class="col-md-2 col-sm-3 col-xs-6">
							<a class="videopic lazy index-tv-cover" '.$ok.' href="'.$ccb.'" title="'.$row['d_name'].'" data-original="'.$row['d_picture'].'" style="background: url(https://ws4.sinaimg.cn/large/bfe05ea9ly1fwwhep5tkog20b408cadl.gif) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a>
							<div class="title">
								<h5 class="text-overflow"><a href="'.$ccb.'" '.$ok.'>'.$row['d_name'].'</a></h5>
							</div>
							<div class="subtitle text-muted text-muted text-overflow hidden-xs">'.$row['d_zhuyan'].'</div>
						</div>';

		 } ?>

						</ul>
				</div>
			</div>
			<div class="hy-page clearfix">
				<ul class="cleafix cleafix pagination pagination-primary">
<?php echo page_show_ui($pager[2],$pager[3],$pager[4],2);?></ul>
			</div>		</div>
	</div>
</div>
<script type="text/javascript">
			var w = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
			if (w > 640) {			
	            $(".collapse").addClass("in");
	        }				
		</script>


<?php  include 'footer.php';?>
<?php  ?>
