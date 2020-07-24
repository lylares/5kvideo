<?php 
require('header.php');
?>

<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<title>本周热门 - 热播剧 - 热门影视</title>
		<div class="wdu-part-case wdu-part-rows">
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">电影<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/1.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<?php 
				      require './data/bangdan.php';
				      foreach ($bdArr['m']['title'] as $k=>$title){
						
						$bdurl=$bdArr['m']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['m']['num'][$k];//num

						$num = $k+1; 
						echo '
						<li class="wdu-part-eone">
						    <a href="http://www.5kvideo.cc/vod'.$bdurl.'">
							    <span class="wdu-part-nums wdu-part-num1">'.$bdnum.'</span>'.$title.'
								<span class="wdu-part-tips wdu-text-green">'.$num.'</span>
							</a>
						</li>';
					}?>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">连续剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/2.html">更多</a></h2>
					<ul class="wdu-part-rows">
					 <?php 
				      foreach ($bdArr['tv']['title'] as $k=>$title){
						
						$bdurl=$bdArr['tv']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['tv']['num'][$k];//num

						$num = $k+1; 
						echo '
						<li class="wdu-part-eone">
						    <a href="http://www.5kvideo.cc/vod'.$bdurl.'">
							    <span class="wdu-part-nums wdu-part-num1">'.$bdnum.'</span>'.$title.'
								<span class="wdu-part-tips wdu-text-green">'.$num.'</span>
							</a>
						</li>';
					}?>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">直播<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/27.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11710.html"><span class="wdu-part-nums wdu-part-num1">1</span>CCTV6电影<span class="wdu-part-tips wdu-text-green">46</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11797.html"><span class="wdu-part-nums wdu-part-num2">2</span>北京卫视<span class="wdu-part-tips wdu-text-green">41</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11706.html"><span class="wdu-part-nums wdu-part-num3">3</span>CCTV3综艺<span class="wdu-part-tips wdu-text-green">27</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11705.html"><span class="wdu-part-nums wdu-part-num4">4</span>CCTV2财经<span class="wdu-part-tips wdu-text-green">13</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11709.html"><span class="wdu-part-nums wdu-part-num5">5</span>CCTV5+体育赛事<span class="wdu-part-tips wdu-text-green">13</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11712.html"><span class="wdu-part-nums wdu-part-num6">6</span>CCTV8电视剧<span class="wdu-part-tips wdu-text-green">12</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11711.html"><span class="wdu-part-nums wdu-part-num7">7</span>CCTV7军事·农业<span class="wdu-part-tips wdu-text-green">10</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11717.html"><span class="wdu-part-nums wdu-part-num8">8</span>CCTV13新闻<span class="wdu-part-tips wdu-text-green">10</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11756.html"><span class="wdu-part-nums wdu-part-num9">9</span>沁县电视台<span class="wdu-part-tips wdu-text-green">10</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">综艺<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/3.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<?php 
				      foreach ($bdArr['va']['title'] as $k=>$title){
						
						$bdurl=$bdArr['va']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['va']['num'][$k];//num

						$num = $k+1; 
						echo '
						<li class="wdu-part-eone">
						    <a href="http://www.5kvideo.cc/vod'.$bdurl.'">
							    <span class="wdu-part-nums wdu-part-num1">'.$bdnum.'</span>'.$title.'
								<span class="wdu-part-tips wdu-text-green">'.$num.'</span>
							</a>
						</li>';
					}?>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">动漫<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/4.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<?php 
				      foreach ($bdArr['ct']['title'] as $k=>$title){
						
						$bdurl=$bdArr['ct']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['ct']['num'][$k];//num

						$num = $k+1; 
						echo '
						<li class="wdu-part-eone">
						    <a href="http://www.5kvideo.cc/vod'.$bdurl.'">
							    <span class="wdu-part-nums wdu-part-num1">'.$bdnum.'</span>'.$title.'
								<span class="wdu-part-tips wdu-text-green">'.$num.'</span>
							</a>
						</li>';
					}?>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">小视频<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/28.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10227.html"><span class="wdu-part-nums wdu-part-num1">1</span>siyamm57<span class="wdu-part-tips wdu-text-green">1000</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20142.html"><span class="wdu-part-nums wdu-part-num2">2</span>赤足丝袜33<span class="wdu-part-tips wdu-text-green">999</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/14097.html"><span class="wdu-part-nums wdu-part-num3">3</span>Rosimm2<span class="wdu-part-tips wdu-text-green">999</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21091.html"><span class="wdu-part-nums wdu-part-num4">4</span>美女自拍秀107<span class="wdu-part-tips wdu-text-green">997</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10880.html"><span class="wdu-part-nums wdu-part-num5">5</span>嫩模视频秀61<span class="wdu-part-tips wdu-text-green">994</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10405.html"><span class="wdu-part-nums wdu-part-num6">6</span>siyamm82<span class="wdu-part-tips wdu-text-green">993</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10627.html"><span class="wdu-part-nums wdu-part-num7">7</span>4k-STAR美女秀19<span class="wdu-part-tips wdu-text-green">992</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/15277.html"><span class="wdu-part-nums wdu-part-num8">8</span>Sexy街拍美女112<span class="wdu-part-tips wdu-text-green">989</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10481.html"><span class="wdu-part-nums wdu-part-num9">9</span>动感小站140<span class="wdu-part-tips wdu-text-green">989</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">动作片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/6.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18775.html"><span class="wdu-part-nums wdu-part-num1">1</span>金刚狼2<span class="wdu-part-tips wdu-text-green">991</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/15051.html"><span class="wdu-part-nums wdu-part-num2">2</span>大事件<span class="wdu-part-tips wdu-text-green">956</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23097.html"><span class="wdu-part-nums wdu-part-num3">3</span>致命蜜月<span class="wdu-part-tips wdu-text-green">941</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22686.html"><span class="wdu-part-nums wdu-part-num4">4</span>黑暗真相<span class="wdu-part-tips wdu-text-green">910</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21048.html"><span class="wdu-part-nums wdu-part-num5">5</span>再生勇士<span class="wdu-part-tips wdu-text-green">905</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/7089.html"><span class="wdu-part-nums wdu-part-num6">6</span>神奇燕尾服<span class="wdu-part-tips wdu-text-green">905</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18670.html"><span class="wdu-part-nums wdu-part-num7">7</span>速度与激情7<span class="wdu-part-tips wdu-text-green">901</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20572.html"><span class="wdu-part-nums wdu-part-num8">8</span>生死拳速<span class="wdu-part-tips wdu-text-green">898</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/1881.html"><span class="wdu-part-nums wdu-part-num9">9</span>流星蝴蝶剑<span class="wdu-part-tips wdu-text-green">897</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">喜剧片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/7.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19199.html"><span class="wdu-part-nums wdu-part-num1">1</span>憨豆特工<span class="wdu-part-tips wdu-text-green">968</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20468.html"><span class="wdu-part-nums wdu-part-num2">2</span>女校春色<span class="wdu-part-tips wdu-text-green">967</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19788.html"><span class="wdu-part-nums wdu-part-num3">3</span>王牌保龄球<span class="wdu-part-tips wdu-text-green">959</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20217.html"><span class="wdu-part-nums wdu-part-num4">4</span>圣诞狗狗<span class="wdu-part-tips wdu-text-green">930</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23026.html"><span class="wdu-part-nums wdu-part-num5">5</span>功夫老婆<span class="wdu-part-tips wdu-text-green">917</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20926.html"><span class="wdu-part-nums wdu-part-num6">6</span>横财就手美版<span class="wdu-part-tips wdu-text-green">757</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2483.html"><span class="wdu-part-nums wdu-part-num7">7</span>蜜月期<span class="wdu-part-tips wdu-text-green">742</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/5706.html"><span class="wdu-part-nums wdu-part-num8">8</span>为朱莉复仇<span class="wdu-part-tips wdu-text-green">739</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/4677.html"><span class="wdu-part-nums wdu-part-num9">9</span>缝纫机乐队<span class="wdu-part-tips wdu-text-green">735</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">爱情片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/8.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23007.html"><span class="wdu-part-nums wdu-part-num1">1</span>吻隐者<span class="wdu-part-tips wdu-text-green">957</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3594.html"><span class="wdu-part-nums wdu-part-num2">2</span>花滑女王[国语]<span class="wdu-part-tips wdu-text-green">955</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21931.html"><span class="wdu-part-nums wdu-part-num3">3</span>三界传说之魔界圣僧<span class="wdu-part-tips wdu-text-green">954</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19911.html"><span class="wdu-part-nums wdu-part-num4">4</span>相见恨早<span class="wdu-part-tips wdu-text-green">950</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19962.html"><span class="wdu-part-nums wdu-part-num5">5</span>远离尘嚣<span class="wdu-part-tips wdu-text-green">945</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19708.html"><span class="wdu-part-nums wdu-part-num6">6</span>前女友们的幽灵<span class="wdu-part-tips wdu-text-green">908</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22987.html"><span class="wdu-part-nums wdu-part-num7">7</span>七年之痒<span class="wdu-part-tips wdu-text-green">876</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2504.html"><span class="wdu-part-nums wdu-part-num8">8</span>他其实没那么喜欢你<span class="wdu-part-tips wdu-text-green">870</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3990.html"><span class="wdu-part-nums wdu-part-num9">9</span>把心打开<span class="wdu-part-tips wdu-text-green">868</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">科幻片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/9.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2367.html"><span class="wdu-part-nums wdu-part-num1">1</span>机器人劫难<span class="wdu-part-tips wdu-text-green">954</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18245.html"><span class="wdu-part-nums wdu-part-num2">2</span>超级大山炮之海岛奇遇<span class="wdu-part-tips wdu-text-green">911</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/4554.html"><span class="wdu-part-nums wdu-part-num3">3</span>分歧者：异类觉醒<span class="wdu-part-tips wdu-text-green">731</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21812.html"><span class="wdu-part-nums wdu-part-num4">4</span>哆啦A梦 剧场版 大雄与梦幻三剑士<span class="wdu-part-tips wdu-text-green">682</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/7360.html"><span class="wdu-part-nums wdu-part-num5">5</span>生死新纪元<span class="wdu-part-tips wdu-text-green">610</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/7264.html"><span class="wdu-part-nums wdu-part-num6">6</span>灵魂战车<span class="wdu-part-tips wdu-text-green">610</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2429.html"><span class="wdu-part-nums wdu-part-num7">7</span>最新命令<span class="wdu-part-tips wdu-text-green">606</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3234.html"><span class="wdu-part-nums wdu-part-num8">8</span>青天降妖录<span class="wdu-part-tips wdu-text-green">597</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/8486.html"><span class="wdu-part-nums wdu-part-num9">9</span>九天玄女<span class="wdu-part-tips wdu-text-green">592</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">恐怖片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/10.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19031.html"><span class="wdu-part-nums wdu-part-num1">1</span>地狱男爵2：黄金军团<span class="wdu-part-tips wdu-text-green">946</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18158.html"><span class="wdu-part-nums wdu-part-num2">2</span>我们的父亲<span class="wdu-part-tips wdu-text-green">915</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18530.html"><span class="wdu-part-nums wdu-part-num3">3</span>阴阳路4<span class="wdu-part-tips wdu-text-green">905</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19451.html"><span class="wdu-part-nums wdu-part-num4">4</span>红潮风暴<span class="wdu-part-tips wdu-text-green">880</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22722.html"><span class="wdu-part-nums wdu-part-num5">5</span>暴疯语 粤语<span class="wdu-part-tips wdu-text-green">790</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22027.html"><span class="wdu-part-nums wdu-part-num6">6</span>生死线<span class="wdu-part-tips wdu-text-green">732</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21824.html"><span class="wdu-part-nums wdu-part-num7">7</span>鬼屋冤魂<span class="wdu-part-tips wdu-text-green">709</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18788.html"><span class="wdu-part-nums wdu-part-num8">8</span>驱魔人<span class="wdu-part-tips wdu-text-green">703</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3787.html"><span class="wdu-part-nums wdu-part-num9">9</span>笔仙之生死劫<span class="wdu-part-tips wdu-text-green">702</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">剧情片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/11.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21922.html"><span class="wdu-part-nums wdu-part-num1">1</span>守护 2014<span class="wdu-part-tips wdu-text-green">999</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18121.html"><span class="wdu-part-nums wdu-part-num2">2</span>灵魂摆渡·黄泉<span class="wdu-part-tips wdu-text-green">998</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23031.html"><span class="wdu-part-nums wdu-part-num3">3</span>只有我不在的街道<span class="wdu-part-tips wdu-text-green">994</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21372.html"><span class="wdu-part-nums wdu-part-num4">4</span>鬼谷山庄<span class="wdu-part-tips wdu-text-green">984</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19319.html"><span class="wdu-part-nums wdu-part-num5">5</span>迷幻<span class="wdu-part-tips wdu-text-green">983</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/13400.html"><span class="wdu-part-nums wdu-part-num6">6</span>致命防御中英双字<span class="wdu-part-tips wdu-text-green">983</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2151.html"><span class="wdu-part-nums wdu-part-num7">7</span>大冲撞<span class="wdu-part-tips wdu-text-green">983</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19029.html"><span class="wdu-part-nums wdu-part-num8">8</span>冲出宁静号<span class="wdu-part-tips wdu-text-green">982</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/13029.html"><span class="wdu-part-nums wdu-part-num9">9</span>新鬼打鬼<span class="wdu-part-tips wdu-text-green">982</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">战争片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/12.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22091.html"><span class="wdu-part-nums wdu-part-num1">1</span>以革命的名义<span class="wdu-part-tips wdu-text-green">601</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/21157.html"><span class="wdu-part-nums wdu-part-num2">2</span>43版巴坦战役<span class="wdu-part-tips wdu-text-green">426</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3564.html"><span class="wdu-part-nums wdu-part-num3">3</span>红海行动[国语]<span class="wdu-part-tips wdu-text-green">6</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22486.html"><span class="wdu-part-nums wdu-part-num4">4</span>血战西盘岛<span class="wdu-part-tips wdu-text-green">6</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/2997.html"><span class="wdu-part-nums wdu-part-num5">5</span>越空追击<span class="wdu-part-tips wdu-text-green">4</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3030.html"><span class="wdu-part-nums wdu-part-num6">6</span>新兵马强<span class="wdu-part-tips wdu-text-green">4</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/3975.html"><span class="wdu-part-nums wdu-part-num7">7</span>兽人战争<span class="wdu-part-tips wdu-text-green">4</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/4367.html"><span class="wdu-part-nums wdu-part-num8">8</span>地下航线<span class="wdu-part-tips wdu-text-green">4</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/4606.html"><span class="wdu-part-nums wdu-part-num9">9</span>谍影特工<span class="wdu-part-tips wdu-text-green">4</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">伦理片<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/20.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16647.html"><span class="wdu-part-nums wdu-part-num1">1</span>欢乐性今宵cd2<span class="wdu-part-tips wdu-text-green">998</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/17655.html"><span class="wdu-part-nums wdu-part-num2">2</span>迷宫秘密爱<span class="wdu-part-tips wdu-text-green">996</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16494.html"><span class="wdu-part-nums wdu-part-num3">3</span>红发女郎<span class="wdu-part-tips wdu-text-green">994</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23086.html"><span class="wdu-part-nums wdu-part-num4">4</span>美味三姐妹<span class="wdu-part-tips wdu-text-green">969</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/17443.html"><span class="wdu-part-nums wdu-part-num5">5</span>我们<span class="wdu-part-tips wdu-text-green">969</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/17584.html"><span class="wdu-part-nums wdu-part-num6">6</span>裸体之夜：掠夺狂爱<span class="wdu-part-tips wdu-text-green">960</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/17539.html"><span class="wdu-part-nums wdu-part-num7">7</span>有夫之妇的爱情<span class="wdu-part-tips wdu-text-green">959</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16454.html"><span class="wdu-part-nums wdu-part-num8">8</span>秘密<span class="wdu-part-tips wdu-text-green">959</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16389.html"><span class="wdu-part-nums wdu-part-num9">9</span>鬼伎回忆录<span class="wdu-part-tips wdu-text-green">959</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">国产剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/13.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22988.html"><span class="wdu-part-nums wdu-part-num1">1</span>武动乾坤第二季<span class="wdu-part-tips wdu-text-green">921</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18960.html"><span class="wdu-part-nums wdu-part-num2">2</span>内衣先生<span class="wdu-part-tips wdu-text-green">595</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10859.html"><span class="wdu-part-nums wdu-part-num3">3</span>合伙人<span class="wdu-part-tips wdu-text-green">589</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22701.html"><span class="wdu-part-nums wdu-part-num4">4</span>鬼吹灯之精绝古城<span class="wdu-part-tips wdu-text-green">588</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23060.html"><span class="wdu-part-nums wdu-part-num5">5</span>降龙之白露为霜<span class="wdu-part-tips wdu-text-green">569</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/581.html"><span class="wdu-part-nums wdu-part-num6">6</span>新万家灯火<span class="wdu-part-tips wdu-text-green">527</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10049.html"><span class="wdu-part-nums wdu-part-num7">7</span>面具<span class="wdu-part-tips wdu-text-green">485</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/8162.html"><span class="wdu-part-nums wdu-part-num8">8</span>只为遇见，所以相逢<span class="wdu-part-tips wdu-text-green">474</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/583.html"><span class="wdu-part-nums wdu-part-num9">9</span>我站在桥上看风景<span class="wdu-part-tips wdu-text-green">454</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">日本剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/15.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22248.html"><span class="wdu-part-nums wdu-part-num1">1</span>超热血！不良少年足球部 前篇<span class="wdu-part-tips wdu-text-green">975</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23064.html"><span class="wdu-part-nums wdu-part-num2">2</span>我与尾巴与神乐坂<span class="wdu-part-tips wdu-text-green">700</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/15221.html"><span class="wdu-part-nums wdu-part-num3">3</span>谁说理科生不懂爱情<span class="wdu-part-tips wdu-text-green">449</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23081.html"><span class="wdu-part-nums wdu-part-num4">4</span>昭和元禄落语心中<span class="wdu-part-tips wdu-text-green">417</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23085.html"><span class="wdu-part-nums wdu-part-num5">5</span>大恋爱~与将我忘记的你<span class="wdu-part-tips wdu-text-green">375</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18223.html"><span class="wdu-part-nums wdu-part-num6">6</span>你已藏在我心底<span class="wdu-part-tips wdu-text-green">266</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19371.html"><span class="wdu-part-nums wdu-part-num7">7</span>弟之夫/弟弟的丈夫<span class="wdu-part-tips wdu-text-green">238</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11147.html"><span class="wdu-part-nums wdu-part-num8">8</span>星屑复仇者<span class="wdu-part-tips wdu-text-green">235</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/9801.html"><span class="wdu-part-nums wdu-part-num9">9</span>满愿<span class="wdu-part-tips wdu-text-green">191</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">韩国剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/14.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22876.html"><span class="wdu-part-nums wdu-part-num1">1</span>最完美的离婚<span class="wdu-part-tips wdu-text-green">891</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19993.html"><span class="wdu-part-nums wdu-part-num2">2</span>Switch-改变世界<span class="wdu-part-tips wdu-text-green">636</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16140.html"><span class="wdu-part-nums wdu-part-num3">3</span>波浪啊 波浪啊<span class="wdu-part-tips wdu-text-green">469</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23069.html"><span class="wdu-part-nums wdu-part-num4">4</span>十二夜<span class="wdu-part-tips wdu-text-green">294</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22782.html"><span class="wdu-part-nums wdu-part-num5">5</span>我的黑历史误答笔记<span class="wdu-part-tips wdu-text-green">230</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10089.html"><span class="wdu-part-nums wdu-part-num6">6</span>阳光先生<span class="wdu-part-tips wdu-text-green">7</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22572.html"><span class="wdu-part-nums wdu-part-num7">7</span>内在美<span class="wdu-part-tips wdu-text-green">7</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22783.html"><span class="wdu-part-nums wdu-part-num8">8</span>被遗忘的季节<span class="wdu-part-tips wdu-text-green">7</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/15058.html"><span class="wdu-part-nums wdu-part-num9">9</span>在你背上扣球<span class="wdu-part-tips wdu-text-green">6</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">欧美剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/16.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22986.html"><span class="wdu-part-nums wdu-part-num1">1</span>河谷镇第三季<span class="wdu-part-tips wdu-text-green">997</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23072.html"><span class="wdu-part-nums wdu-part-num2">2</span>罗曼诺夫后裔第一季<span class="wdu-part-tips wdu-text-green">971</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20390.html"><span class="wdu-part-nums wdu-part-num3">3</span>夏利特医院第一季<span class="wdu-part-tips wdu-text-green">933</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22787.html"><span class="wdu-part-nums wdu-part-num4">4</span>法律与秩序：特殊受害者第二十季<span class="wdu-part-tips wdu-text-green">900</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23070.html"><span class="wdu-part-nums wdu-part-num5">5</span>鬼入侵第一季<span class="wdu-part-tips wdu-text-green">896</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/23083.html"><span class="wdu-part-nums wdu-part-num6">6</span>威尔和格蕾丝 第十季<span class="wdu-part-tips wdu-text-green">880</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22754.html"><span class="wdu-part-nums wdu-part-num7">7</span>新夏威夷神探<span class="wdu-part-tips wdu-text-green">854</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22862.html"><span class="wdu-part-nums wdu-part-num8">8</span>凡妮莎海辛第三季<span class="wdu-part-tips wdu-text-green">806</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22423.html"><span class="wdu-part-nums wdu-part-num9">9</span>嘻哈帝国第五季<span class="wdu-part-tips wdu-text-green">771</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">泰国剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/21.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/22818.html"><span class="wdu-part-nums wdu-part-num1">1</span>仙女/仙女与怨灵<span class="wdu-part-tips wdu-text-green">923</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11013.html"><span class="wdu-part-nums wdu-part-num2">2</span>银幕天堂<span class="wdu-part-tips wdu-text-green">685</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/14994.html"><span class="wdu-part-nums wdu-part-num3">3</span>命运薄荷糖/天生绝配<span class="wdu-part-tips wdu-text-green">634</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/14918.html"><span class="wdu-part-nums wdu-part-num4">4</span>彩色砂<span class="wdu-part-tips wdu-text-green">517</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/11032.html"><span class="wdu-part-nums wdu-part-num5">5</span>机械工新娘/技工新娘<span class="wdu-part-tips wdu-text-green">510</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/14942.html"><span class="wdu-part-nums wdu-part-num6">6</span>超凡少年<span class="wdu-part-tips wdu-text-green">503</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/5488.html"><span class="wdu-part-nums wdu-part-num7">7</span>垂茉莉的诅咒<span class="wdu-part-tips wdu-text-green">477</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/10623.html"><span class="wdu-part-nums wdu-part-num8">8</span>猛虎下山<span class="wdu-part-tips wdu-text-green">473</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/5085.html"><span class="wdu-part-nums wdu-part-num9">9</span>公主罗曼史<span class="wdu-part-tips wdu-text-green">465</span></a></li>
					</ul>
				</div>
			</div>
			<div class="wdu-rank-info wdu-part-layout wdu-part-rows wdu-back-whits wdu-col-sm6 wdu-col-md4">
				<div class="wdu-list-info wdu-list-rank wdu-part-rows wdu-padding">
					<h2 class="wdu-list-head wdu-part-rows wdu-font-xvi">香港剧<a class="wdu-part-tips wdu-font-xiv" href="/index.php/vod/type/id/22.html">更多</a></h2>
					<ul class="wdu-part-rows">
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/18996.html"><span class="wdu-part-nums wdu-part-num1">1</span>三个女人一个因国语<span class="wdu-part-tips wdu-text-green">904</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16241.html"><span class="wdu-part-nums wdu-part-num2">2</span>创世纪2：天地有情<span class="wdu-part-tips wdu-text-green">864</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/20278.html"><span class="wdu-part-nums wdu-part-num3">3</span>宫心计2国语<span class="wdu-part-tips wdu-text-green">857</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16033.html"><span class="wdu-part-nums wdu-part-num4">4</span>身后事务所<span class="wdu-part-tips wdu-text-green">843</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/15123.html"><span class="wdu-part-nums wdu-part-num5">5</span>包青天之碧血丹心<span class="wdu-part-tips wdu-text-green">644</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16229.html"><span class="wdu-part-nums wdu-part-num6">6</span>无业楼民<span class="wdu-part-tips wdu-text-green">607</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/19353.html"><span class="wdu-part-nums wdu-part-num7">7</span>翻生武林粤语<span class="wdu-part-tips wdu-text-green">539</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16247.html"><span class="wdu-part-nums wdu-part-num8">8</span>鬼同你OT<span class="wdu-part-tips wdu-text-green">536</span></a></li>
						<li class="wdu-part-eone"><a href="/index.php/vod/detail/id/16196.html"><span class="wdu-part-nums wdu-part-num9">9</span>IT行者<span class="wdu-part-tips wdu-text-green">479</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.php');
?>