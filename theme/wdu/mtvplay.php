<?php 

$id=$mkcmsid;

$pid = htmlentities(trim($_GET['play']));

$row=$db->getRow("select * from wudu_tvlive where id = $pid");

if($row){
	$play = $row['url'];
	$playname = $row['name'];
	$playimg = $row['img'];
	$livetype = $row['type'];
}

require('header.php');
?>

<div class="wdu-main-info wdu-min-width" style="margin-top: 10px;">
	<div class="wdu-part-case">
		<div class="wdu-play-info wdu-part-rows wdu-back-whits wdu-marg-top">
			<div class="wdu-play-player wdu-part-rows wdu-back-black wdu-part-16by9 wdu-part-19by9">
				<div class="wdu-play-loader wdu-part-full">
					<span class="wdu-part-core wdu-font-xvi wdu-text-white wdu-text-center">正在加载...</span>
				</div>
				<iframe id="wdu-play-iframe" src="<?php echo $wudu_domain;?>wdu-player/hls.php?type=live&url=<?php echo $play;?>" class="wdu-play-iframe wdu-part-full" frameborder="0" scrolling="no" allowfullscreen="true" data-name="<?php echo $playname;?>" >
				</iframe>
				<div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					<h2 class="wdu-text-center wdu-play-top wdu-font-xvi">如有无法播放请切换视频解析接口</h2>
					<ul class="wdu-part-layout wdu-part-rows">
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">腾讯解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">优酷解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">搜狐解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">芒果解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">乐视解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">华数解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">央视解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">1905解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">B站解析</a></li>
						<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible" data-api="//jx..top/player.php?url=" href="javascript:;">音悦台</a></li>
					</ul>
				</div>
				<div class="wdu-play-error wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					<h2 class="wdu-text-center wdu-play-top wdu-font-xvi wdu-hide-xs">失效数据，我们会在第一时间内修正</h2>
					<div class="wdu-part-layout wdu-marg-top wdu-back-whits">
						<form class="wdu-comm-fork wdu-comm-form wdu-event" data-role="" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
							<ul class="wdu-part-rows">
								<li class="wdu-padding wdu-col-xs12"><textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容">【ID:11710-名称:CCTV6电影高清1-阿里播放】无法观看请检查修复。页面地址：index.php/vod/play/id/11710/sid/1/nid/1.html</textarea></li>
								<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
								<p class="wdu-form-info wdu-rims-info wdu-text-muted">
									提示：<span class="wdu-comm-tips">还可以输入255字</span>
								</p>
								</li>
								<li class="wdu-padding wdu-col-xs6 wdu-col-md4"><input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码"/></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><img class="wdu-rims-info wdu-comm-code" height="40" src="/index.php/verify/index.html" data-role="/index.php/verify/index.html" title="看不清楚? 换一张！" onclick="this.src=this.src+'?v=1543068001'"/></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks">提交</a></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="wdu-play-title wdu-part-rows">
				<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-cuts wdu-event" href="javascript:;">切换解析</a></li>
					<li class="wdu-padding wdu-col-xs6"><input class="wdu-form-info wdu-rims-info wdu-rage-input" data-user="0" data-name="游客" type="text" placeholder="一起吐槽吧！" maxlength="60"/></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-rage-submit wdu-event" href="javascript:;">发送</a></li>
				</ul>
				<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-erro wdu-event" href="javascript:;">报错</a></li>
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-reno wdu-event" href="javascript:;" onclick="location.reload()">刷新</a></li>
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-share wdu-event" href="javascript:;">分享</a></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-prev wdu-btns-disad" href="/index.php/vod/play/id/11710/sid/1/nid/1.html">上一集</a></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-next" href="/index.php/vod/play/id/11710/sid/1/nid/2.html">下一集</a></li>
				</ul>
			</div>
		</div>
		<div class="wdu-tabs-info wdu-play-danmur wdu-part-rows wdu-part-layout wdu-back-whits">
			<ul class="wdu-list-head wdu-part-rows wdu-padding">
				<li class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v wdu-text-green" href="javascript:;">播放列表</li>
				<li class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v" href="javascript:;">发表评论</li>
				<li class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v" href="javascript:;">剧情简介</li>
			</ul>
			<div class="wdu-tabs-boxs">
				<div class="wdu-tabs-item wdu-drop-info wdu-visible">
					<div class="wdu-drop-boxs wdu-matp-v">
						<ul class="wdu-drop-head wdu-padding wdu-part-rows">
							<li class="wdu-padding wdu-col-xs4 wdu-part-eone wdu-font-xvi">播放线路</li>
							<li class="wdu-padding wdu-col-xs8 wdu-part-eone wdu-font-xvi wdu-text-right">无法播放请切换线路<i class="wdu-icon-font wdu-icon-you"></i></span>
						</ul>
						<ul class="wdu-part-rows">
							<li class="wdu-play-btns wdu-drop-btns wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-btns-info wdu-rims-info wdu-part-eone wdu-back-green" href="javascript:;">阿里播放</a></li>
						</ul>
					</div>
					<div class="wdu-drop-boxs wdu-drop-tops wdu-matp-v">
						<div class="wdu-play-item wdu-drop-item wdu-visible">
							<ul class="wdu-drop-head wdu-padding wdu-part-rows">
								<li class="wdu-padding wdu-col-xs4 wdu-part-eone wdu-font-xvi">播放集数</li>
								<li class="wdu-padding wdu-col-xs8 wdu-part-eone wdu-font-xvi wdu-text-right"><a class="wdu-drop-sort" href="javascript:;">视频排序：正序</a><i class="wdu-icon-font wdu-icon-you"></i></li>
							</ul>
							<ul class="wdu-part-rows">
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2 wdu-col-lg1"><a class="wdu-btns-info wdu-rims-info wdu-part-eone wdu-btns-green" href="/index.php/vod/play/id/11710/sid/1/nid/1.html">高清1</a></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2 wdu-col-lg1"><a class="wdu-btns-info wdu-rims-info wdu-part-eone" href="/index.php/vod/play/id/11710/sid/1/nid/2.html">高清2</a></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2 wdu-col-lg1"><a class="wdu-btns-info wdu-rims-info wdu-part-eone" href="/index.php/vod/play/id/11710/sid/1/nid/3.html">高清3</a></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2 wdu-col-lg1"><a class="wdu-btns-info wdu-rims-info wdu-part-eone" href="/index.php/vod/play/id/11710/sid/1/nid/4.html">高清4</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="wdu-tabs-item wdu-hidden">
					<div class="wdu-comm-info" data-id="11710" data-mid="1">
					</div>
				</div>
				<div class="wdu-tabs-item wdu-hidden">
					<div class="wdu-col-xs12 wdu-col-sm8">
						<dl class="wdu-deta-info wdu-margin wdu-part-rows wdu-part-over">
							<dt class="wdu-deta-images wdu-list-info wdu-col-xs3"><a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="/index.php/vod/detail/id/11710.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5f2kpgsj20ak063t8u.jpg" style="background-image: url(https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5f2kpgsj20ak063t8u.jpg);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">高清</span></a></dt>
							<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
							<h1 class="wdu-part-eone wdu-font-xvi"><a href="/index.php/vod/detail/id/11710.html">CCTV6电影</a></h1>
							<ul class="wdu-part-rows">
								<li class="wdu-col-xs12 wdu-part-eone"><span class="wdu-text-muted">主演：</span><a href="/index.php/vod/search/actor/%E6%B6%82%E7%BB%8F%E7%BA%AC.html" target="_blank">涂经纬</a>&nbsp;<a href="/index.php/vod/search/actor/%E6%9D%8E%E8%9C%9C.html" target="_blank">李蜜</a>&nbsp;</li>
								<li class="wdu-col-xs12 wdu-part-eone wdu-hide-xs"><span class="wdu-text-muted">简介：</span>中央电视台电影频道（频道呼号：CCTV-6电影）是以宣传电影、培养电影观众、传播影视文化为宗旨的专业频道，于1996年1</li>
								<li class="wdu-col-xs12 wdu-part-eone"><span class="wdu-text-muted">导演：</span><a href="/index.php/vod/search/director/%E6%9D%8E%E4%B8%96%E5%AE%8F.html" target="_blank">李世宏</a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">分类：</span><a href="/index.php/vod/type/id/34.html" target="_blank">央视</a></li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="/index.php/vod/search/area/%E5%8C%97%E4%BA%AC.html" target="_blank">北京</a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span><a href="/index.php/vod/search/year/1996.html" target="_blank">1996</a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span>234</li>
							</ul>
							</dd><dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="/index.php/vod/detail/id/11710.html">查看详情</a></dd>
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
					<p class="wdu-padding wdu-part-both wdu-text-muted">
						中央电视台电影频道（频道呼号：CCTV-6电影）是以宣传电影、培养电影观众、传播影视文化为宗旨的专业频道，于1996年1月1日开播。
					</p>
				</div>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">相关热播</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="/index.php/vod/type/id/34.html">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-list-img wdu-part-rows">
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11704/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq590adp9j20ak063glq.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">354播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11704.html">CCTV1综合</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11710/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5f2kpgsj20ak063t8u.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">234播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11710.html">CCTV6电影</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11719/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5l8ye9ej20ak0633yq.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">标清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">58播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11719.html">CCTV15音乐</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11708/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5co3tu4j20ak063aab.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">60播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11708.html">CCTV5体育</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11709/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5e8ny7tj20ak063glv.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">51播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11709.html">CCTV5+体育赛事</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11716/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5j7ayrjj20ak063mxf.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">31播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11716.html">CCTV12社会与法</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11705/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq59mr18cj20ak0630sv.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">78播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11705.html">CCTV2财经</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11706/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq54s6f4yj20ak0630sv.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">67播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11706.html">CCTV3综艺</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11707/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5am47v1j20ak0630sx.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">49播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11707.html">CCTV4中文国际</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11711/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5fof73vj20ak063mxc.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">40播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11711.html">CCTV7军事·农业</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11712/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5gj5b7zj20ak063t8w.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">33播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11712.html">CCTV8电视剧</a></li>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3"><a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="/index.php/vod/play/id/11713/sid/1/nid/1.html" data-original="https://ww2.sinaimg.cn/large/bfe05ea9ly1fwq5h0kynvj20ak0633yr.jpg"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">36播放</span></a><a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="/index.php/vod/detail/id/11713.html">CCTV9记录</a></li>
			</ul>
		</div>
	</div>
</div>
<?php require('footer.php');?>