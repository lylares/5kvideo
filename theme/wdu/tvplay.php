<?php 
include('system/inc.php');
/* 
if(isMobile()&& !$detect->isTablet()){
	
	require("mtvplay.php");die;
}

 */
$id=$mkcmsid;

$pid = htmlentities(trim($_GET['id']));

$row=$db->getRow("select * from wudu_tvlive where pid = '$pid'");

if($row){
	$play = $row['url'];
	$playtitle=$playname = $row['name'];
	$playimg = $row['img'];
	$livetype = $row['type'];
	$shdesc =$row['dsc'];
    $player = $row['player'];
}

mui_head('正在播放',1) ;
?>
<style>
.tabs-current{display:block;}
</style>

<div class="wdu-main-info wdu-min-width" style="margin-top: 10px;">
	<div class="wdu-part-case">
		<div class="wdu-play-info wdu-part-rows wdu-back-whits wdu-marg-top">
			<div class="wdu-play-player wdu-part-rows wdu-back-black wdu-part-16by9 wdu-part-19by9">
				<div class="wdu-play-loader wdu-part-full">
					<span class="wdu-part-core wdu-font-xvi wdu-text-white wdu-text-center">正在加载...</span>
				</div>
				<iframe id="wdu-play-iframe" class="wdu-play-iframe wdu-part-full" frameborder="0" scrolling="no" allowfullscreen="true" src=""></iframe>
				<div class="wdu-play-parse wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					<h2 class="wdu-text-center wdu-play-top wdu-font-xvi">如有无法播放请切换视频解析接口</h2>
					<ul class="wdu-part-layout wdu-part-rows">
					    <li class="wdu-padding wdu-col-xs3">
							<a  data-aline="https://player.5kvideo.cc/watch?url=" id="defaultLine" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">默认</a>
						</li>
						<li class="wdu-padding wdu-col-xs3">
							<a  data-aline="https://vod-eu.parse.wudutv.cc/?url=" id="2" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">国际线路</a>
						</li>
						<li class="wdu-padding wdu-col-xs3">
							<a  data-aline="https://www.5kvideo.cc/wdu-player/hls.php?url=" id="3" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">备用线路1</a>
						</li>
						<li class="wdu-padding wdu-col-xs3">
							<a  data-aline="https://www.5kvideo.cc/wdu-player?type=live&url=" id="4" class="wdu-btns-info wdu-rims-info wdu-visible ea-line">备用线路2</a>
						</li>
					</ul>
				</div>
				<div class="wdu-play-error wdu-play-box wdu-hidden wdu-conceal wdu-back-whits">
					<h2 class="wdu-text-center wdu-play-top wdu-font-xvi wdu-hide-xs">失效数据，我们会在第一时间内修正</h2>
					<div class="wdu-part-layout wdu-marg-top wdu-back-whits">
						<form class="wdu-comm-fork wdu-comm-form wdu-event" data-role="" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
							<ul class="wdu-part-rows">
								<li class="wdu-padding wdu-col-xs12"><textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容">【ID:<?php echo $pid;?>-名称:<?php echo $playname;?>】无法观看请检查修复。页面地址：</textarea></li>
								<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
								<p class="wdu-form-info wdu-rims-info wdu-text-muted">
									提示：<span class="wdu-comm-tips">还可以输入255字</span>
								</p>
								</li>
								<li class="wdu-padding wdu-col-xs6 wdu-col-md4"><input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码"/></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><img class="wdu-rims-info wdu-comm-code" height="40" src="<?php echo $wudu_domain;?>data/verifycode.html" data-role="" title="看不清楚? 换一张！" onclick="this.src=this.src"/></li>
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks">提交</a></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="wdu-play-title wdu-part-rows">
				<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-parse-btn wdu-event" href="javascript:;">切换线路</a></li>
					<li class="wdu-padding wdu-col-xs6"><input class="wdu-form-info wdu-rims-info wdu-rage-input" data-user="0" data-name="游客" type="text" placeholder="一起吐槽吧！" maxlength="60"/></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-rage-submit wdu-event" href="javascript:;">发送</a></li>
				</ul>
				<ul class="wdu-play-btn wdu-padding wdu-part-rows wdu-col-xs12 wdu-col-md6">
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-erro-btn wdu-event" href="javascript:;">报错</a></li>
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-reno wdu-event" href="javascript:;" onclick="location.reload()">刷新</a></li>
					<li class="wdu-padding wdu-col-xs2"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-share wdu-event" href="javascript:;">分享</a></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-prev wdu-btns-disad" href="">上一集</a></li>
					<li class="wdu-padding wdu-col-xs3"><a class="wdu-btns-info wdu-rims-info wdu-visible wdu-play-next" href="">下一集</a></li>
				</ul>
			</div>
		</div>
		<div class="wdu-tabs-info wdu-play-danmur wdu-part-rows wdu-part-layout wdu-back-whits">
			<h2 class="wdu-list-head wdu-part-rows wdu-padding" id="wdu-tabs-nav">
				<a class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v wdu-text-bold wdu-text-green" href="javascript:;">播放列表</a>
				<a class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v" href="javascript:;">发表评论</a>
				<a class="wdu-tabs-btns wdu-part-curs wdu-font-xvi wdu-mart-v" href="javascript:;">频道简介</a>
			</h2>
			<div class="wdu-tabs-boxs" id="wdu-tabs-container">
				<div class="wdu-tabs-item wdu-drop-info wdu-hidden tab-item tabs-current">
					<div class="wdu-drop-boxs wdu-matp-v">
						<!-- <ul class="wdu-drop-head wdu-padding wdu-part-rows">
							<li class="wdu-padding wdu-col-xs4 wdu-part-eone wdu-font-xvi">播放线路</li>
							<li class="wdu-padding wdu-col-xs8 wdu-part-eone wdu-font-xvi wdu-text-right">无法播放请切换线路<i class="wdu-icon-font wdu-icon-you"></i></span>
						</ul> -->
<!-- 						<ul class="wdu-part-rows">
							<li class="wdu-play-btns wdu-drop-btns wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-btns-info wdu-rims-info wdu-part-eone wdu-back-green" href="javascript:;">阿里播放</a></li>
						</ul> -->
					</div>
					<div class="wdu-drop-boxs wdu-drop-tops wdu-matp-v">
						<div class="wdu-play-item wdu-drop-item wdu-visible">
							<ul class="wdu-drop-head wdu-padding wdu-part-rows">
								<li class="wdu-padding wdu-col-xs4 wdu-part-eone wdu-font-xvi">播放源</li>
								<!-- <li class="wdu-padding wdu-col-xs8 wdu-part-eone wdu-font-xvi wdu-text-right"><a class="wdu-drop-sort" href="javascript:;">视频排序：正序</a><i class="wdu-icon-font wdu-icon-you"></i></li> -->
							</ul>
							<ul class="wdu-part-rows">
								<li class="wdu-padding wdu-col-xs3 wdu-col-md2 wdu-col-lg1"><a class="wdu-btns-info wdu-rims-info wdu-part-eone wdu-btns-green ea-site" data-href="<?php echo $play.'&player='.$player.'&poster='.$playimg;?>" data-num="1">高清1</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="wdu-conv-boxs wdu-conv-comm wdu-hidden tab-item">
						    <div class="wdu-comm-info" data-id="395" data-mid="1">
							    <form class="wdu-comm-fort wdu-comm-form" id="wdu-comm-form" data-role="1" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
								    <input type="hidden" name="comment_pid" value="0">
									    <ul class="wdu-part-rows">
										    <li class="wdu-padding wdu-col-xs12">
											    <textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="comment_content" cols="40" rows="4" placeholder="输入留言内容"></textarea>
										    </li>
											<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
											    <p class="wdu-form-info wdu-rims-info wdu-text-muted">提示：<span class="wdu-comm-tips">还可以输入255字</span></p>
											</li>
											<li class="wdu-padding wdu-col-xs6 wdu-col-md4">
											    <input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码">
											</li>
											<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
											    <img class="wdu-rims-info wdu-comm-code" height="40" src="<?php echo $wudu_domain;?>data/verifycode.html" title="看不清楚? 换一张！" onclick="this.src=this.src">
											</li>
											<li class="wdu-padding wdu-col-xs3 wdu-col-md2">
											    <a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-submit" href="javascript:;">发表</a>
											</li>
										</ul>
								</form>
								<ul class="wdu-comm-list">
								   <li class="wdu-comm-each wdu-part-rows wdu-line-top wdu-margin">
									    <img class="wdu-comm-avat wdu-part-roun" src="/public/assets/images/touxiang.png">
                                        <div class="wdu-comm-head">
                                            <strong class="wdu-text-line">游客</strong>
                                                <span class="wdu-part-tips">2018-11-14 16:22:18</span>
                                        </div>
                                        <div class="wdu-comm-cont">测试<div class="wdu-comm-action wdu-text-right wdu-font-xii">
                                          <a class="wdu-comm-repo" data-id="1" href="javascript:;">举报</a>
                                          <a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="up" href="javascript:;">支持(1)</a>
                                          <a class="wdu-comm-digg" data-id="1" data-mid="4" data-type="down" href="javascript:;">反对(2)</a>
                                          <a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a>
                                          </div>
                                          <div class="wdu-comm-reply wdu-back-ashen wdu-comm-tops">
                                            <img class="wdu-comm-avat wdu-part-roun" src="/public/assets/images/touxiang.png">
                                            <div class="wdu-comm-head">
                                              <strong class="wdu-text-line">游客</strong>
                                              <span class="wdu-part-tips">2018-11-14 16:22:29</span>
                                            </div>
                                            <div class="wdu-comm-cont">@游客：测试<div class="wdu-comm-action wdu-text-right wdu-font-xii">
                                              <a class="wdu-comm-repo" data-id="2" href="javascript:;">举报</a>
                                              <a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="up" href="javascript:;">支持(<span>2</span>)</a>
                                              <a class="wdu-comm-digg" data-id="2" data-mid="4" data-type="down" href="javascript:;">反对(<span>0</span>)</a>
                                              <a class="wdu-comm-rbtn" data-id="1" href="javascript:;">回复</a>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
									</li>
								</ul>
							
							</div>
						</div>
				<div class="wdu-tabs-item wdu-hidden tab-item">
					<div class="wdu-col-xs12 wdu-col-sm8">
						<dl class="wdu-deta-info wdu-margin wdu-part-rows wdu-part-over">
							<dt class="wdu-deta-images wdu-list-info wdu-col-xs3"><a class="wdu-list-pics wdu-lazy wdu-part-2by3" href="#" data-original="<?php echo $playimg;?>" style="background-image: url(<?php echo $playimg;?>);"><span class="wdu-list-play wdu-hide-xs"></span><span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center">高清</span></a></dt>
							<dd class="wdu-deta-content wdu-col-xs7 wdu-col-sm8">
							<h1 class="wdu-part-eone wdu-font-xvi"><a href="#"><?php echo $playname;?></a></h1>
							<ul class="wdu-part-rows">
								<li class="wdu-col-xs12 wdu-part-eone"><span class="wdu-text-muted">主演：</span><a href="" target="_blank"></a>&nbsp;<a href="" target="_blank"></a>&nbsp;</li>
								<li class="wdu-col-xs12 wdu-part-eone wdu-hide-xs"><span class="wdu-text-muted">简介：</span></li>
								<li class="wdu-col-xs12 wdu-part-eone"><span class="wdu-text-muted">导演：</span><a href="" target="_blank"></a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">分类：</span><a href="" target="_blank"></a></li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">地区：</span><a href="" target="_blank"></a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">年份：</span><a href="" target="_blank"></a>&nbsp;</li>
								<li class="wdu-col-xs6 wdu-part-eone"><span class="wdu-text-muted">播放：</span></li>
							</ul>
							</dd><dd class="wdu-deta-button wdu-col-xs7 wdu-col-sm8 wdu-part-rows"><a class="wdu-deta-play wdu-rims-info wdu-btns-info wdu-btns-green wdu-col-xs4" href="#">查看详情</a></dd>
						</dl>
					</div>
					<div class="wdu-hide-xs wdu-col-xs4">
						<div class="wdu-side-code wdu-text-right wdu-padding">
							<p class="wdu-side-text wdu-text-muted wdu-padding">
								手机扫码看
							</p>
							<img class="wdu-side-image wdu-hide qrcode-share-img" src=""/>
						</div>
					</div>
					<p class="wdu-padding wdu-part-both wdu-text-muted">
					<?php echo $shdesc;?>	
					</p>
				</div>
			</div>
		</div>
		<div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">相关热播</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><a class="wdu-more" href="/tvlive.html">更多</a></li>
				</ul>
			</div>
			<ul class="wdu-list-info wdu-list-img wdu-part-rows">
			<?php
			$row=$db->getALL("select * from wudu_tvlive where type = '$livetype' limit 8");
			//$i=0;
            foreach($res as $key =>$row){
			echo '
			    <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				    <a class="wdu-list-pics wdu-lazy wdu-part-5by3" href="'.$wudu_domain.'tvplay/'.$row['pid'].'.html" data-original="'.$row['img'].'">
					    <span class="wdu-list-play wdu-hide-xs"></span>
						<span class="wdu-list-score wdu-font-xii wdu-text-white wdu-back-green">高清</span>
						<span class="wdu-list-remarks wdu-font-xii wdu-text-white wdu-text-center"></span>
					</a>
					<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone" href="tvplay/'.$row['pid'].'.html">'.$row['name'].'</a>
			    </li>
	            ';
			$i++;	
				}
			?>
			</ul>
		</div>
	</div>
</div>

<script>
var playDefaultUrl = $('.ea-site[data-num="1"]').data("href"),playDefaultepd = $('.ea-site[data-num="1"]').data("num"),vodSource = $("#defaultEspPanel").data('name'),esptotalnum ='<?php echo $esptotlaNum;?>',playAPI = $("#defaultLine").attr("data-aline");
window.globalConfig.playInfo = {
	types: "tvlive",
    id: "<?php echo $pid;?>",
	name: "<?php echo $playname;?>",
    url: playDefaultUrl,
	cover: "<?php echo $playimg;?>",
    episode: playDefaultepd,
    site: vodSource,
    videoApi: playAPI
}

//console.log(videoInfo);
$(function() {
   if($('.ea-site[data-num="1"]').hasClass("wdu-btns-green")){
   $(".wdu-play-next").addClass("wdu-btns-disad");
   }
   
   if($('.ea-site[data-num="'+esptotalnum+'"]').hasClass("wdu-btns-green")){
   $(".wdu-play-prev").addClass("wdu-btns-disad");
   }
    if (store.enabled) {


		$("#play_default0").click();

        var histemp = store.get('history')? store.get('history'): [];

    }


    highlightSource();

	$(".ea-site").on("click",function() { 

        $(".ea-site").removeClass("wdu-btns-green");
        $(this).addClass("wdu-btns-green");
		window.globalConfig.playInfo.types = window.globalConfig.playInfo.types;
        window.globalConfig.playInfo.url = $(this).data("href");    // 
        window.globalConfig.playInfo.episode = $(this).data("num");       // 
        window.globalConfig.playInfo.site = $(this).parent().attr('id');    //
    	
        refreshVideo();
	
        
    });

    $(".ea-line").click(function() {
		
		$(".ea-line").removeClass("wdu-btns-green");

		$(this).addClass("wdu-btns-green");

        window.globalConfig.playInfo.videoApi = $(this).data("aline");
        
        refreshVideo();

        layer.msg("已切换至" + $(this).html());
    });

    refreshVideo();
	

});

function highlightSource() {
    $(".ea-site").each(function () {
        if($(this).data("href") == window.globalConfig.playInfo.url) {
            $(this).addClass("wdu-btns-green");
            return false;    // 
        }
    });
}

function refreshVideo() {

    $("#wdu-play-iframe").attr("src", window.globalConfig.playInfo.videoApi + window.globalConfig.playInfo.url);

    
    //$(".btn-goto-origin").attr("href", videoInfo.url);

    if (store.enabled) {
        store.set("videoApi", window.globalConfig.playInfo.videoApi);    // 记录所用的api接口
        var temp = {
			        types: window.globalConfig.playInfo.types,
                    id: window.globalConfig.playInfo.id, 
                    name: window.globalConfig.playInfo.name,
					cover: window.globalConfig.playInfo.cover,
                    url: window.globalConfig.playInfo.url,
                    episode: window.globalConfig.playInfo.episode,
                    site: window.globalConfig.playInfo.site
                };

        var histemp = store.get('history')? store.get('history'): [];

        for(var i=0; i<histemp.length; i++) {
            if(histemp[i].id == window.globalConfig.playInfo.id) {
                histemp.splice(i, 1); // 
                break;
            }
        }
        
        histemp.unshift(temp);

        if(histemp.length > 6) histemp.length = 6; 
        
        store.set('history', histemp);
    }
}
	
</script>
<script type="text/javascript">
   $(function(){

$(".wdu-play-prev").click(function(){
	var preEsp = window.globalConfig.playInfo.episode -1;
$('.ea-site[data-num='+preEsp+']').click();
})

$(".wdu-play-next").click(function(){
	var nextEsp = window.globalConfig.playInfo.episode +1;
	$('.ea-site[data-num='+nextEsp+']').click();
})
  
	   
	   
	   
	   
	   
	   $("body").bind("click", function (e) {
            if($(e.target).closest(".wdu-play-reno").length>0){
				refreshVideo();
			}else if($(e.target).closest(".wdu-play-parse-btn").length>0){
				$(".wdu-conceal").addClass("wdu-hidden")
				$(".wdu-play-parse").removeClass("wdu-hidden")
			}else if($(e.target).closest(".wdu-play-erro-btn").length>0){
				$(".wdu-conceal").addClass("wdu-hidden")
				$(".wdu-play-error").removeClass("wdu-hidden")
			}else{
            $(".wdu-conceal").removeAttr("style")
            $(".wdu-conceal").addClass("wdu-hidden")			
        }
    })


   })

</script>
<script type="text/javascript">
  $(function(){
    tabs($("#wdu-tabs-nav a"), $('#wdu-tabs-container .tab-item'));  
})


var tabs = function(tab, con){
    tab.click(function(){
        var indx = tab.index(this);
        tab.removeClass('wdu-text-bold wdu-text-green');
        $(this).addClass('wdu-text-bold wdu-text-green');
        con.hide();
        con.eq(indx).show();
    })    
}
</script>
<?php require('footer.php');

////

if(isset($_SESSION['uid'])&&$_SESSION['uid']){

$uid = $_SESSION['uid'];
 
$id = trim($_GET['id']);
$site = trim($_GET['site']);

  
$playurl = $wudu_domain.'tvplay/'.$pid.'.html';
  
  
if(isset($id)&&$id)
{

  $sql = "select * from wudu_play where url ='$playurl' and userid = '$uid'";
  $res = $db->getRow($sql);
  $rid = $res['id'];
    $_data['userid'] = $uid;
    $_data['name'] = $playname;
    $_data['url'] = $playurl;
    $_data['cover'] = $playimg;
    $_data['types'] = "tvplay";
       $_data['type'] = "电视直播";

   // $_data['site'] = $site;
    $_data['times'] = date("Y-m-d H:i:s");
  
  if(!$res){
    
   $res = $db->insert("wudu_play",$_data);
  }else{
       $db->update("wudu_play",$_data,"id='$rid'");

  
  }

}
  
}