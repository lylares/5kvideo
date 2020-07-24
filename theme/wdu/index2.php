<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
mui_head('首页',0) ;
?>
<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
	  <?php 
      
      if(GBS::is_ipad()){
        
        getslider_mb('index');
      }else{
      
      
      getslider_pc('index');
      }?>
          
		<div class="wdu-back-whits wdu-hidden">
			<ul class="wdu-part-rows">
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href="#">动作片</a>
				</li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href=" ">喜剧片</a>
				</li>
				<li class="wdu-padding-x wdu-col-xs3 wdu-part-rows wdu-text-center wdu-line-top wdu-line-right">
				    <a href=" ">爱情片</a>
				</li>
			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-padding">
				<p>
					<?php echo $wudu_postinfo;?>
				</p>
			</div>
		</div>
       <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">精选</h2>
				<ul class="wdu-part-tips wdu-padding">
					<!-- <li>今日更新&nbsp;<span class="wdu-text-green">102</span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">23119&nbsp;</span>部</li> -->
					<li><a class="wdu-more" href="special.html?cid=0">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
					$data=$db->getAll("select pid,name,picture,score,actor  from wudu_vod where rec=1 order by id desc  LIMIT 0,$wudu_spnum");
		            foreach($data as $key => $row){
                    $ok="";
					$ccb='./splay/'.$row['pid'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['name'].'" data-original="'.$row['picture'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">高清</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最新国产剧</h2>
              <?php
              $start = date('Y-m-d 00:00:00');
              $end = date('Y-m-d H:i:s');
              $_total_all=$fdb->getAll("select count(*) from wf_vod where type_id= 13 and type_id_1= 2");

              $_total_today=$fdb->getAll("select count(*) from wf_vod where type_id= 13 and type_id_1= 2 and vod_time >= unix_timestamp('$start') AND vod_time <= unix_timestamp('$end')");
              //print_r($_total_all);
              ?>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green"><?php echo $_total_today[0]['count(*)'] ;?></span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green"><?php echo $_total_all[0]['count(*)'];?>&nbsp;</span>部</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
					$data=$fdb->getAll("select vod_name,vod_pic,vod_remarks,vod_score,vod_actor,vod_id from wf_vod where type_id= 13 and type_id_1= 2 order by vod_time desc  LIMIT 12");
		            foreach($data as $key => $row){
					$ccb='./wplay/'.$row['vod_id'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['vod_name'].'" data-original="'.$imgent.$row['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['vod_name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
      	<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最新电影</h2>
              <?php
             
              $_total_all=$fdb->getAll("select count(*) from wf_vod where type_id_1= 1");

              $_total_today=$fdb->getAll("select count(*) from wf_vod where type_id_1= 1 and vod_time >= unix_timestamp('$start') AND vod_time <= unix_timestamp('$end')");
              //print_r($_total_all);
              ?>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green"><?php echo $_total_today[0]['count(*)'] ;?></span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green"><?php echo $_total_all[0]['count(*)'];?>&nbsp;</span>部</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
					$data=$fdb->getAll("select vod_name,vod_pic,vod_remarks,vod_score,vod_actor,vod_id from wf_vod where type_id_1= 1 and type_id <> 20 and type_id <> 22 order by vod_time desc  LIMIT 12");
		            foreach($data as $key => $row){
					$ccb='./wplay/'.$row['vod_id'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['vod_name'].'" data-original="'.$imgent.$row['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['vod_name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
      
      <?php
      
      $api = "http://www.yinyuetai.com/mv/get-first-video?area=all&size=12";
      
      $data = GBS::curl($api);
      
      $data  = json_decode($data,1);
      
      $ydata = $data['videos'];

      ?>
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">音乐MV</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
		            foreach($ydata as $key => $row){
                      
					$ccb='./dplay/2_'.$row['videoId'].'.html';
                      
                      $acror = $row['artists'];
                      
                      $act = $acror[0]['artistName'].' '.$acror[1]['artistName'];
                         echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['title'].'" data-original="'.$imgent.'http:'.$row['image'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
                                <span class="wdu-list-score wdu-font-xii wdu-back-green">高清</span>
		
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['title'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$act.'</span>
						</li>
						';
			      
		              }?>

			</ul>
		</div>
      
      
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最新日韩剧</h2>
              <?php
             
              $_total_all=$fdb->getAll("select count(*) from wf_vod where type_id = 15 and type_id_1= 2");

              $_total_today=$fdb->getAll("select count(*) from wf_vod where type_id = 15 and type_id_1= 2 and vod_time >= unix_timestamp('$start') AND vod_time <= unix_timestamp('$end')");
              //print_r($_total_all);
              ?>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green"><?php echo $_total_today[0]['count(*)'] ;?></span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green"><?php echo $_total_all[0]['count(*)'];?>&nbsp;</span>部</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
					$data=$fdb->getAll("select vod_name,vod_pic,vod_remarks,vod_score,vod_actor,vod_id from wf_vod where type_id= 15 and type_id_1= 2 order by vod_time desc  LIMIT 12");
		            foreach($data as $key => $row){
					$ccb='./wplay/'.$row['vod_id'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['vod_name'].'" data-original="'.$imgent.$imgent.$row['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['vod_name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
      <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最新欧美剧</h2>
              <?php
             
              $_total_all=$fdb->getAll("select count(*) from wf_vod where type_id = 16 and type_id_1= 2");

              $_total_today=$fdb->getAll("select count(*) from wf_vod where type_id = 16 and type_id_1= 2 and vod_time >= unix_timestamp('$start') AND vod_time <= unix_timestamp('$end')");
              //print_r($_total_all);
              ?>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green"><?php echo $_total_today[0]['count(*)'] ;?></span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green"><?php echo $_total_all[0]['count(*)'];?>&nbsp;</span>部</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
					$data=$fdb->getAll("select vod_name,vod_pic,vod_remarks,vod_score,vod_actor,vod_id from wf_vod where type_id= 16 and type_id_1= 2 order by vod_time desc  LIMIT 12");
		            foreach($data as $key => $row){
					$ccb='./wplay/'.$row['vod_id'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['vod_name'].'" data-original="'.$imgent.$row['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['vod_name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
      
       <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">最新综艺</h2>
              <?php
             
              $_total_all=$fdb->getAll("select count(*) from wf_vod where type_id= 3");

              $_total_today=$fdb->getAll("select count(*) from wf_vod where type_id= 3 and vod_time >= unix_timestamp('$start') AND vod_time <= unix_timestamp('$end')");
              //print_r($_total_all);
              ?>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green"><?php echo $_total_today[0]['count(*)'] ;?></span>&nbsp;部&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green"><?php echo $_total_all[0]['count(*)'];?>&nbsp;</span>部</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
             <?php 
             
					$data=$fdb->getAll("select vod_name,vod_pic,vod_remarks,vod_score,vod_actor,vod_id from wf_vod where type_id= 3 order by vod_time desc LIMIT 12");
		            foreach($data as $key => $row){
					$ccb='./wplay/'.$row['vod_id'].'.html';	
			       echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="'.$ccb.'" title="'.$row['vod_name'].'" data-original="'.$imgent.$row['vod_pic'].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$row['vod_score'].'</span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['vod_remarks'].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="'.$ccb.'">'.$row['vod_name'].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$row['vod_actor'].'</span>
						</li>
						';
		              }?>

			</ul>
		</div>
      
   
       
       
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">电视剧</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="./tv.html">更多</a></li>
				</ul>
			</div>
			<div class="wdu-col-sx12">
				<ul class="wdu-list-info wdu-part-rows">
				<?php 
				$name = md5('https://www.360kan.com/');
				
$gxpd=time()-filemtime('data/runtime/360index/'.$name);

if(!is_file('data/runtime/360index/'.$name))
{
	
	$tvData = GBS::curl('https://www.360kan.com/');
	
	file_put_contents('data/runtime/360index/'.$name, gzdeflate($tvData));
	
}elseif($gxpd>2*60*60){

	$tvData = GBS::curl('https://www.360kan.com/');
	
	file_put_contents('data/runtime/360index/'.$name, gzdeflate($tvData));

		
}

$indexcontent = gzinflate(file_get_contents('./data/runtime/360index/'.$name));
			
$tvnews = indexTvitem($indexcontent);

$num = count($tvnews);	
	
for($i=0;$i<$num ;$i++){


              echo '
                   <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
						<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="play/'.$tvnews[$i]['id'].'.html'.'" title="'.$tvnews[$i]['name'].'" data-original="'.$tvnews[$i]['cover'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$tvnews[$i]['asp'].'</span>
						</a>
						<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="play/'.$tvnews[$i]['id'].'.html'.'">'.$tvnews[$i]['name'].'</a>
						<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$tvnews[$i]['status'].'</span>
					</li>
						';	
	
} 
unset($tvnews);
?>		
				</ul>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">花絮预告</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
            <?php
              
            $m1905 = "http://www.1905.com/";
              
            $m1905 = file_get_contents($m1905);
              
            preg_match_all('/<img src="(.*?)" data-original="(.*?)" width="320" height="174" alt="(.*?)">/',$m1905,$timg);
              
            preg_match_all('/<span class="live-galleryDuration">(.*?)<\/span>/',$m1905,$tduration);

              
             preg_match_all('/play\/(.*?).shtml" target="_blank" title="(.*?)" data-hrefexp="fr=homepc_xpdt_tpq">/',$m1905,$tid);
              
              
            for($i=0;$i<6;$i++){
            
            echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="dplay/3_'.$tid[1][$i].'.html" title="'.$tid[2][$i].'" data-original="'.$imgent.$timg[2][$i].'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$tduration[1][$i].'</span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="dplay/1_'.$tid[1][$i].'.html">'.$tid[2][$i].'</a>
						</li>
				';
            
            
            }
           // print_r($timg);
                          //print_r($tid);

              // print_r($tduration);
              
              
            ?>
            <?php 
            
			$curl = "http://tv.pptv.com/";
		    $name = md5($curl);
            $gxpd=time()-filemtime('data/runtime/ptvnew/'.$name);
            if(!is_file('data/runtime/ptvnew/'.$name))
            {
	            $tvData = GBS::curl($curl);
	            file_put_contents('data/runtime/ptvnew/'.$name, gzdeflate($tvData));
            }elseif($gxpd>2*60*60)
			{
	            $tvData = GBS::curl($curl);
	            file_put_contents('data/runtime/ptvnew/'.$name, gzdeflate($tvData));
            }
				$ptcontent = gzinflate(file_get_contents('./data/runtime/ptvnew/'.$name));

                preg_match_all('/(?s)<ul class="cf">(.*?)<\/ul>/',$ptcontent,$temp);
				
                $patten = "/href='\/\/v.pptv.com\/show\/(.*?).html' target='_play' title=\"(.*?)\">/";//id	

                preg_match_all($patten,$temp[0][6],$tpid);
				
				preg_match_all('/data-src2="(.*?)">/',$temp[0][6],$tpimg);
				
				preg_match_all('/<dd>(.*?)<\/dd>/',$temp[0][6],$tpattr);
				
				//print_r($tpattr);
				
				$total = count($tpid[1]);

				for($i=0;$i<12;$i++){
					
                echo '
			            <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
							<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="dplay/1_'.$tpid[1][$i].'.html" title="'.$tpid[2][$i].'" data-original="'.str_replace('http','https',$tpimg[1][$i]).'">
							    <span class="wdu-list-play wdu-hide-xs"></span>
								<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
							</a>
							<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="dplay/1_'.$tpid[1][$i].'.html">'.$tpid[2][$i].'</a>
							<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$tpattr[1][$i].'</span>
						</li>
				';}?>
			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">推荐资讯</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li>今日更新&nbsp;<span class="wdu-text-green">0</span>&nbsp;篇&nbsp;&nbsp;共&nbsp;<span class="wdu-text-green">25&nbsp;</span>篇</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-list-img wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				<a class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" target="_blank" href="https://www.lylares.com/sesme-co.html" data-original="https://ws2.sinaimg.cn/large/bfe05ea9ly1fxwdxs2v7lj20kx0b4108.jpg">
                  <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-back-green">前端</span>
                 </a>
                <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">阅后即焚小工具实现sesme.co</a>
				</li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://www.lylares.com/a-api-for-get-tv-album-list.html" data-original="https://wx2.sinaimg.cn/large/bfe05ea9gy1fr21fjnjtnj20m80etq41.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">API</span>
                  </a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">获取视频选集的接口</a>
              </li>
				
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://www.lylares.com/php-code-of-aikan-wallpaper-website.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fx6msdrg8zj21kw0rcb2a.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">源码</span>
                  </a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">爱看美图开源PHP版</a>
              </li>
				
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3 wdu-hide-sm wdu-show-md-block">
                  <a target="_blank" class="wdu-list-pics wdu-lazy wdu-part-16by9 lazyload" href="https://doc.berryapi.net/v2/" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fvoat38809j20m80dc76y.jpg">
                    <span class="wdu-list-play wdu-list-arts wdu-hide-xs"></span>
                    <span class="wdu-list-score wdu-font-xii wdu-back-green">API</span></a>
                  <a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="">接口开放平台</a>
              </li>
			</ul>
		</div>
		<!-- /* <测试> */ -->
		<div class="wdu-list-home wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">综艺</h2>
				<ul class="wdu-part-tips wdu-padding">
				<?php
				$curl = "https://www.360kan.com/zongyi/index.html";
				$name = md5($curl);
                $gxpd=time()-filemtime('data/runtime/360indexVarank/'.$name);
                if(!is_file('data/runtime/360indexVarank/'.$name))
                {
	            $tvData = GBS::curl($curl);
	            file_put_contents('data/runtime/360indexVarank/'.$name, gzdeflate($tvData));
                }elseif($gxpd>2*60*60){
	            $tvData = GBS::curl($curl);
	            file_put_contents('data/runtime/360indexVarank/'.$name, gzdeflate($tvData));
                }
				$vaindexcontent = gzinflate(file_get_contents('./data/runtime/360indexVarank/'.$name));
				
				$attdata = echovahotitem($vaindexcontent,2);
				
				for($i=0;$i<5;$i++)
				{
				echo
				    '
				    <li class="wdu-hide-xs"><a href="play/'.$attdata[$i]['id'].'" class="text-muted border-right">'.$attdata[$i]['name'].'</a> /</li>	
				    ';
				}
				?>
				    <li class="wdu-more"><a href="./variety.html">更多 <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="wdu-padding wdu-col-sx12 wdu-col-md5">

				<div class="wdu-swip-container  wdu-part-rows">
				    <ul class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">	
					<?php
					
					$vaslider =echovaslider($vaindexcontent);
                    $vaslidercount = count($vaslider );
					for($i=0;$i<6;$i++){
						
					echo'
					    <li class="swiper-slide wdu-swip-slide">
					        <a href="play/'.$vaslider[$i]['id'].'.html'.'" class="wdu-list-pics wdu-part-3by2 wdu-swip-lazy" style="background:url('.$imgent.$vaslider[$i]['cover'].')">
					            <div class="wdu-swip-title wdu-text-white wdu-part-eone">
						            <span class="wdu-part-eone wdu-font-xviii wdu-swip-head">'.$vaslider[$i]['name'].'</span>
								    <span class="wdu-part-eone wdu-font-xii"></span>
					            </div>
					        </a>
					    </li>
					';}
					?> 
				    </ul>
				    <div class="wdu-swiper-next wdu-next wdu-swip-next wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-you" href="javascript:;"></div>
				    <div class="wdu-swiper-prev wdu-prev wdu-swip-prev wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-zuo" href="javascript:;"></div>
				    <div class="swiper-pagination wdu-swiper-pagination wdu-swip-pagin wdu-font-size wdu-text-right"></div>
			    </div>
			
				
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-hide-xs wdu-hide-sm wdu-show-md-block">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">本周热门<a class="wdu-part-tips wdu-font-xiv" href="./rank.html">更多</a></h2>
					<div class="wdu-col-md4 wdu-list-ones">
						<a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="<?php echo 'play/'.$vaslider[6]['id'].'.html';?>" data-original="<?php echo $vaslider[6]['cover'];?>">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $vaslider[6]['name'];?></span>
						</a>
					</div>
					<div class="wdu-col-md8">
						<ul class="wdu-part-rows">
						<?php
						//$varankcontent = echovarank($vaindexcontent);
						$varankcontent = getRank('va');
						for ($i=0;$i<7;$i++){
						$j =$i+1;
                        echo'
						<li class="wdu-part-eone">
						    <a href="play/va_'.$varankcontent[$i]['id'].'.html">
							    <span class="wdu-part-nums wdu-part-num'.$j.'">'.$j.'</span>'.$varankcontent[$i]['name'].'
								<span class="wdu-part-tips wdu-text-green">'.$varankcontent[$i]['asp'].'</span>
							</a>
						</li>
                        ';}
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="wdu-col-sx12 wdu-col-md7">
				<ul class="wdu-list-info wdu-part-rows">
				    <?php
                    $vaitem = echovaitem($vaindexcontent);
					for($i=0;$i<8;$i++){
					echo'
					<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md3">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 lazyload" href="play/va_'.$vaitem[$i]['id'].'.html'.'" data-original="'.$vaitem[$i]['cover'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$vaitem[$i]['asp'].'</span>
						</a>
						<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="play/'.$vaitem[$i]['id'].'.html">'.$vaitem[$i]['name'].'</a>
						<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$vaitem[$i]['status'].'</span>
					</li>
					';}?>

					
	
				</ul>
			</div>
		</div>
		<!-- /* <测试> */ -->
		
		<div class="wdu-list-home wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">电影</h2>
				<ul class="wdu-part-tips wdu-padding">
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=103&page=1" class="text-muted border-right">喜剧</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=100&page=1" class="text-muted border-right">爱情</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=106&page=1" class="text-muted border-right">动作</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=102&page=1" class="text-muted border-right">恐怖</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=104&page=1" class="text-muted border-right">科幻</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=121&page=1" class="text-muted border-right">剧情</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=105&page=1" class="text-muted border-right">犯罪</a> /</li>
                    <li class="wdu-hide-xs"><a href="./movie.html?cat=113&page=1" class="text-muted border-right">奇幻</a> /</li>
				    <li class="wdu-more"><a href="./movie.html">更多 <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="wdu-padding wdu-col-sx12 wdu-col-md5">

				<div class="wdu-swip-container  wdu-part-rows">
				    <ul class="swiper-wrapper wdu-swip-wrapper wdu-font-size ">	
					<?php
					$mrankcontent = getRank('m');
					$mitems = indexMvitem($indexcontent);
					$vaslider =echovaslider($indexcontent);
                    $vaslidercount = count($vaslider);
				    $DbData=$db->getAll("select * from wudu_slideshow where status = '1' order by sorder desc");
					foreach($DbData as $key => $row){
							if($row['type']==1)
						{
							$locatedUrl = $wudu_domain.'play/'.$row['url'];
							
						}elseif($row['type']==2)	
						{
							$locatedUrl = $wudu_domain.'splay/'.$row['url'];
						}elseif($row['type']==3)	
						{
							$locatedUrl = $wudu_domain.'wudu/'.$row['url'];
						}elseif($row['type']==4)	
						{
							$locatedUrl = $wudu_domain.'tvplay/'.$row['url'];
						}
					if(strstr($row['position'],'oth')==true){

					echo'
					    <li class="swiper-slide wdu-swip-slide">
					        <a href="'.$locatedUrl.'" class="wdu-list-pics wdu-lazy wdu-part-3by2 wdu-swip-lazy" data-original="'.$row['picture'].'">
					            <div class="wdu-swip-title wdu-text-white wdu-part-eone">
						            <span class="wdu-part-eone wdu-font-xviii wdu-swip-head">'.$row['name'].'</span>
								    <span class="wdu-part-eone wdu-font-xii"></span>
					            </div>
					        </a>
					    </li>
					';
					
					}
					}
   
					?> 
				    </ul>
				    <div class="wdu-swiper-next wdu-next wdu-swip-next wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-you" href="javascript:;"></div>
				    <div class="wdu-swiper-prev wdu-prev wdu-swip-prev wdu-text-white wdu-text-center wdu-hide-xs wdu-icon-font wdu-icon-zuo" href="javascript:;"></div>
				    <div class="swiper-pagination wdu-swip-pagin wdu-font-size wdu-text-right"></div>
			    </div>
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-hide-xs wdu-hide-sm wdu-show-md-block">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">本周热门<a class="wdu-part-tips wdu-font-xiv" href="./rank.html">更多</a></h2>
					<div class="wdu-col-md4 wdu-list-ones">
						<a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="<?php echo 'play/'.$mitems[8]['id'].'.html';?>" data-original="<?php echo $mitems[8]['cover'];?>">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"><?php echo $mitems[8]['name'];?></span>
						</a>
					</div>
					<div class="wdu-col-md8">
						<ul class="wdu-part-rows">
						<?php
						for ($i=0;$i<7;$i++){
						$j =$i+1;
                        echo'
						<li class="wdu-part-eone">
						    <a href="play/m_'.$mrankcontent[$i]['id'].'.html">
							    <span class="wdu-part-nums wdu-part-num'.$j.'">'.$j.'</span>'.$mrankcontent[$i]['name'].'
								<span class="wdu-part-tips wdu-text-green">'.$mrankcontent[$i]['num'].'</span>
							</a>
						</li>
                        ';
						}
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="wdu-col-sx12 wdu-col-md7">
				<ul class="wdu-list-info wdu-part-rows">
				    <?php
                   
					for($i=0;$i<8;$i++){
					echo'
					<li class="wdu-list-item wdu-padding wdu-col-xs4 wdu-col-sm3 wdu-col-md3">
					    <a class="wdu-list-pics wdu-lazy wdu-part-2by3 lazyload" href="play/'.$mitems[$i]['id'].'.html'.'" data-original="'.$mitems[$i]['cover'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-score wdu-font-xii wdu-back-green">'.$mitems[$i]['score'].'</span>
						</a>
						<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="play/'.$mitems[$i]['id'].'.html">'.$mitems[$i]['name'].'</a>
						<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$mitems[$i]['des'].'</span>
					</li>
					';
					}?>

					
	
				</ul>
			</div>
		</div>
		
		<!-- /* <测试> */ -->

		<div class="wdu-list-home wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">电视直播</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li class="wdu-hide-xs"><a href="">央视</a>/</li>
					<li class="wdu-hide-xs"><a href="">卫视</a>/</li>
					<li class="wdu-hide-xs"><a href="">地方台</a>/</li>
					<li class="wdu-hide-xs"><a href="">城市</a>/</li>
					<li class="wdu-hide-xs"><a href="">少儿</a>/</li>
					<li class="wdu-hide-xs"><a href="">电影</a>/</li>
					<li class="wdu-hide-xs"><a href="">体育</a>/</li>
					<li><a class="wdu-more" href="">更多</a></li>
				</ul>
			</div>
			<div class="wdu-part-rows">
				<ul class="wdu-list-info wdu-list-img wdu-part-rows">
				 <?php 
					$data=$db->getAll("select * from wudu_tvlive where rec = 1 order by id asc LIMIT 0,8");
					foreach($data as $key => $row){	
					echo'
                    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
					    <a class="wdu-list-pics wdu-lazy wdu-part-5by3 lazyload" href="tvplay/'.$row['pid'].'.html" data-original="'.$row['img'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span>
							<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$row['name'].'</span>
						</a>
					</li>
						';
							
                        }
		              ?>
				</ul>
			</div>
		</div>

		<div class="wdu-list-home wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">动漫</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li class="wdu-hide-xs"><a href="./cartoon.html?cat=100&page=1" >热血</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=101&page=1" >恋爱</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=102&page=1" >美少女</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=103&page=1" >运动</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=104&page=1" >校园</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=105&page=1" >搞笑</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=106&page=1" >幻想</a> /</li>
                    <li class="wdu-hide-xs"><a href="./cartoon.html?cat=107&page=1" >冒险</a> /</li>
				    <li><a class="wdu-more" href="./cartoon.html">更多</a></li>
				</ul>
			</div>
			<div class="wdu-part-rows">
				<ul class="wdu-list-info wdu-part-rows">
				  <?php
				    $curl = "https://www.360kan.com/dongman/index.html";
				    $name = md5($curl);
                    $gxpd=time()-filemtime('data/runtime/360ctindex/'.$name);
                    if(!is_file('data/runtime/360ctindex/'.$name))
                    {
	                $tvData = GBS::curl($curl);
	                file_put_contents('data/runtime/360ctindex/'.$name, gzdeflate($tvData));
                    }elseif($gxpd>2*60*60){
	                $tvData = GBS::curl($curl);
	                file_put_contents('data/runtime/360ctindex/'.$name, gzdeflate($tvData));
                    }
				    $ctindexcontent = gzinflate(file_get_contents('./data/runtime/360ctindex/'.$name));  
                    $ctItem = echoindexCtitem($ctindexcontent);
					//$num = count($ctItem);
					//print_r( $ctItem);
					for($i=0;$i<12;$i++){
					echo
					'
					<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md2">
						<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  target="'.$urt.'" href="play/'.$ctItem[$i]['id'].'.html" title="'.$ctItem[$i]['name'].'" data-original="'.$ctItem[$i]['cover'].'">
						    <span class="wdu-list-play wdu-hide-xs"></span>
							<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">'.$ctItem[$i]['status'].'</span>
						</a>
						<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="play/'.$ctItem[$i]['id'].'.html">'.$ctItem[$i]['name'].'</a>
						<span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$ctItem[$i]['desc'].'</span>
					</li>
					';	
					}?>	
				</ul>
			</div>
		</div>

		<div class="wdu-topi-info wdu-part-layout wdu-back-whits wdu-part-rows">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">专题</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="#">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike220%2C5%2C5%2C220%2C73/sign=a2762037d6a20cf4529df68d17602053/ae51f3deb48f8c546f1a629f3c292df5e1fe7fb1.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 7个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">复仇者联盟</span>
				</div>
				</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4 wdu-hide-sm wdu-show-md-block"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss2.bdstatic.com/-fo3dSag_xI4khGkpoWK1HF6hhy/baike/crop%3D0%2C5%2C600%2C395%3Bc0%3Dbaike80%2C5%2C5%2C80%2C26/sign=5e23f0003d7adab4299f4103b6e49f29/0bd162d9f2d3572cb7e5dff48113632762d0c397.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 5个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">X战警</span>
				</div>
				</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs12 wdu-col-sm6 wdu-col-md4"><a class="wdu-list-pics wdu-lazy wdu-part-2by1 lazyload" href="#" data-original="https://gss1.bdstatic.com/-vo3dSag_xI4khGkpoWK1HF6hhy/baike/c0%3Dbaike80%2C5%2C5%2C80%2C26/sign=6efa53c742a98226accc2375ebebd264/cb8065380cd7912312e345c6ac345982b2b78005.jpg">
				<div class="wdu-topi-back">
					<span class="wdu-list-title wdu-visible wdu-font-xvi wdu-text-white wdu-text-center"><i class="wdu-icon-font wdu-icon-zhuanti"></i>专题</span><span class="wdu-list-name wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">—— 6个影片 ——</span><span class="wdu-list-count wdu-visible wdu-font-xvi wdu-text-white wdu-text-center">少儿频道直播</span>
				</div>
				</a></li>
			</ul>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">友情链接</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="/index.php/gbook/index.html">申请</a></li>
				</ul>
			</div>
			<ul class="wdu-part-rows">
				<li class="wdu-width-x wdu-padding wdu-col-xs3 wdu-col-sm2"><a class="wdu-part-eone wdu-text-line" href="#" target="_blank">主题</a></li>
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
      nextEl: '.wudu-next',
      prevEl: '.wudu-prev',
    },
  })        
</script>

<script>

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
mui_footer();