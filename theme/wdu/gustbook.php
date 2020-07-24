<?php 
mui_head('留言板',0) ;
?>

<div class="wdu-main-info wdu-min-width">
	<div class="wdu-part-case">
		<div class="wdu-part-layout wdu-back-whits">
			<form class="wdu-comm-fork wdu-comm-form wdu-event" data-role="0" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
				<ul class="wdu-part-rows">
					<li class="wdu-padding wdu-col-xs12"><textarea class="wdu-form-info wdu-rims-info wdu-form-area wdu-comm-text wdu-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容"></textarea></li>
					<li class="wdu-padding wdu-col-xs12 wdu-col-md4">
					<p class="wdu-form-info wdu-rims-info wdu-text-muted">
						提示：<span class="wdu-comm-tips">还可以输入255字</span>
					</p>
					</li>
					<li class="wdu-padding wdu-col-xs6 wdu-col-md4"><input class="wdu-form-info wdu-rims-info wdu-comm-veri" type="tel" name="verify" placeholder="验证码"/></li>
					<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><img class="wdu-rims-info wdu-comm-code" height="40" src="<?php echo $wudu_domain;?>data/verifycode.html" data-role="/index.php/verify/index.html" title="看不清楚? 换一张！" onclick="this.src=this.src"/></li>
					<li class="wdu-padding wdu-col-xs3 wdu-col-md2"><a class="wdu-form-info wdu-rims-info wdu-btns-info wdu-btns-green wdu-comm-gbooks">提交</a></li>
				</ul>
			</form>
		</div>
		<div class="wdu-part-layout wdu-back-whits" id="wdu-comm-list">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">留言板</h2>
				<ul class="wdu-part-tips wdu-padding">
					<li><span class="wdu-more"><span class="wdu-hide-xs">当前第&nbsp;<span id="wdu-now" class="wdu-text-green wdu-text-bold">1</span>&nbsp;页，</span>共&nbsp;<span id="wdu-count" class="wdu-text-green wdu-text-bold">0</span>&nbsp;条留言</span></li>
				</ul>
			</div>
			<div class="wdu-comm-list" data-ajax="/index.php/gbook/ajax.html">
				<ul class="wdu-part-rows">
					<li class="wdu-comm-each wdu-part-rows wdu-line-top wdu-margin"><img class="wdu-comm-avat wdu-part-roun" src="/static/images/touxiang.png"/>
					<div class="wdu-comm-head">
						<strong class="wdu-text-line">游客</strong><span class="wdu-part-tips">2018-10-07 22:35:52</span>
					</div>
					<div class="wdu-comm-cont">
						请管理员添加
					</div>
					</li>
					<li class="wdu-comm-each wdu-part-rows wdu-line-top wdu-margin"><img class="wdu-comm-avat wdu-part-roun" src="/static/images/touxiang.png"/>
					<div class="wdu-comm-head">
						<strong class="wdu-text-line">游客</strong><span class="wdu-part-tips">2018-10-01 12:57:46</span>
					</div>
					<div class="wdu-comm-cont">
						请管理员添加《泰迪熊》，谢谢！
					</div>
					</li>
					<li class="wdu-comm-each wdu-part-rows wdu-line-top wdu-margin"><img class="wdu-comm-avat wdu-part-roun" src="/static/images/touxiang.png"/>
					<div class="wdu-comm-head">
						<strong class="wdu-text-line">游客</strong><span class="wdu-part-tips">2018-09-24 02:23:44</span>
					</div>
					<div class="wdu-comm-cont">
						5465643545454
					</div>
					</li>
				</ul>
				<script type="text/javascript">if(document.getElementById('wdu-now')) document.getElementById('wdu-now').innerHTML='1';if(document.getElementById('wdu-count')) document.getElementById('wdu-count').innerHTML='3';</script>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.php');
?>