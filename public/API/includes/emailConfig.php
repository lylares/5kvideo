<?php
if (!defined('BERRYAPI')) {
	exit('Request Error!');
}
require_once(SYSTEM_ROOT."/public/libs/email/functions.php");

function mailContent($con)
{
$c1='
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FAFAFA"  class="full-width">
    <tbody>
        <tr>
	        <td align="center">
		        <table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width" style="margin:0 auto;">
		            <tbody>
		                <tr>
			                <td width="700" align="center">
				                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="full-width" style="margin:0 auto;">
				                    <tbody>
				<tr>
					<td width="14" bgcolor="#fafafa">
					</td>
					<td width="2" bgcolor="#f9f9f9">
					</td>
					<td width="2" bgcolor="#f7f7f7">
					</td>
					<td width="2" bgcolor="#f3f3f3">
					</td>
					<td width="660" valign="top" bgcolor="#FFFFFF">
					
					
					    
						<table width="660" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#FFFFFF" style="border-top: 2px solid #f3f3f3">
						<tbody>
						<tr>
							<td align="center" width="660">
								<a name="Logo" style="display:block" href="https://res.lylares.com/" target="_blank" rel="noopener">资源中心</a>
							</td>
						</tr>
						<tr>
							<td>
								<div style="border-top: 1px solid #e0e0e0; width: 660px; height: 2px" class="full-width">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="font-size:30px;line-height:29px;">
									&nbsp;
								</div>
							</td>
						</tr>
						<tr>
							<td align="center" width="660">
								<img width="34" src="https://file.5kvideo.cc/images/mobile_icon_mobile@2x.png" style="display: block;margin-top:10px" border="0">
							</td>
						</tr>
						
						<tr>
							<td align="center" width="600" class="full-width" style="padding-top: 30px;padding-left: 20px; padding-right:20px" valign="top">
								<a style="color: #FFFFFF; background: #35bb3b; -moz-border-radius: 9px; -webkit-border-radius: 9px; border-radius: 9px; padding-left: 20px; padding-right: 20px; width: 320px; display: block; font-size: 18px; font-weight: bold; line-height: 50px; text-align:center; text-decoration:none; font-family: helvetica,arial;" rel="noopener" target="_blank">分享成功！</a>
							</td>
						</tr>
						<tr>
							<td>
								<div style="font-size:30px;line-height:30px;">
									&nbsp;
								</div>
							</td>
						</tr>
						<tr>
							<td align="center" valign="top" style="    padding-top: 30px;font-family:helvetica,arial,sans-serif; color:#646464; font-size:14px; line-height:22px;">
								<span style="font-size:16px; font-weight:bold; line-height:26px;">资源信息:</span>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width">
						<tbody>
						<tr>
							<td>
								<div style="font-size:20px;line-height:20px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width">
						<tbody>
						<tr>
							<td align="center" valign="top" style="font-family:helvetica,arial,sans-serif; color:#646464; font-size:13px; line-height:22px; padding-left:20px; padding-right:20px" class="body">';
							
							
							foreach($con as $key =>$value){
								
								$c2 += '<p style="color: #111212;background: #9e9e9e45;padding-left: 20px; line-height: 25px; text-align:center; padding-right: 20px; width: 320px;">rid:'.$value['rid'].'  sharekey:'.$value['sharekey'].'</p>';
								
							}
								
								
								$c3= '
							</td>
						</tr>
						</tbody>
						</table>
						<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width">
						<tbody>
						<tr>
							<td>
								<div style="font-size:20px;line-height:20px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						
						<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width">
						<tbody>
						<tr>
							<td>
								<div style="font-size:20px;line-height:19px;">
									&nbsp;
								</div>
							</td>
						</tr>
						<tr>
							<td width="660">
								<div style="border-bottom: 1px solid #e0e0e0; width: 660px; height:2px;" class="full-width">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="font-size:20px;line-height:40px;">
									&nbsp;
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="full-width" style="color: #949494">
								<tbody>
								<tr>
									<td align="center" style="    padding-top: 25px;">
										<span style="font-family : helvetica, arial; font-weight : bold; font-size: 16px; ">

										</span>
									</td>
								</tr>
								<tr>
									<td>
										<div style="font-size:15px;line-height:15px;">
											&nbsp;
										</div>
									</td>
								</tr>
								<tr>
									<td align="center">
										<span class="pw-note" style="font-family: helvetica, arial; font-size: 15px; line-height: 22px; display: block;"><br>
										                             分享与创造.</span>
									</td>
								</tr>
								<tr>
									<td class="show">
										<div style="font-size:20px;line-height:0px;" class="line40">
											&nbsp;
										</div>
									</td>
								</tr>
								</tbody>
								</table>
							</td>
						</tr>
						</tbody>
						</table>
					</td>
					<td width="2" bgcolor="#f3f3f3">
					</td>
					<td width="2" bgcolor="#f7f7f7">
					</td>
					<td width="2" bgcolor="#f9f9f9">
					</td>
					<td width="14" bgcolor="#fafafa">
					</td>
				</tr>
				</tbody>
				</table>
			</td>
		</tr>
		</tbody>
		</table>
	</td>
</tr>
</tbody>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="    margin-top: 60px;">
<tbody>
<tr>
	<td valign="top" align="center">
		<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#ffffff" class="full-width" style="margin:0 auto;">
		<tbody>
		<tr>
			<td valign="top" width="20" class="hide" bgcolor="#5e72e4">
				<div style="font-size:44px;line-height:44px;">
					&nbsp;
				</div>
			</td>
			<td valign="top" width="660" bgcolor="#FFFFFF" class="hide" height="40" border="0">
			</td>
			<td valign="top" width="20" class="hide" bgcolor="#5e72e4">
				<div style="font-size:44px;line-height:44px;">
					&nbsp;
				</div>
			</td>
		</tr>
		</tbody>
		</table>
		<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width" style="margin:0 auto;">
		<tbody>
		<tr>
			<td valign="top" align="center">
				<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
				<tbody>
				<tr>
					<td valign="top" align="center">
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td valign="top" width="660" bgcolor="#5e72e4">
								<div style="font-size:39px;line-height:39px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<!-- <td valign="top" width="20" class="hide">
								&nbsp;
							</td> -->
							<!-- <td align="center" valign="top" width="660" bgcolor="#5e72e4">
								<a name="Logo_1" style="display:block;" href="" target="_blank" rel="noopener"><img src="" width="64" height="64" border="0" style="display:block;"></a>
							</td> -->
							<td valign="top" width="20" class="hide">
								&nbsp;
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td valign="top" width="20" class="hide">
								&nbsp;
							</td>
							<td align="center" valign="top" width="660" bgcolor="#5e72e4">
								<div style="font-size:5px;line-height:5px;">
									&nbsp;
								</div>
							</td>
							<td valign="top" width="20" class="hide">
								&nbsp;
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td valign="top" width="700">
								<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5e72e4" class="full-width">
								<tbody>
								<tr>
									<td align="center">
										<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5e72e4" style="margin-top: 30px;">
										<tbody>
										</tbody>
										</table>
									</td>
								</tr>
								</tbody>
								</table>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td align="center" valign="top" width="660" bgcolor="#5e72e4">
								<div style="font-size:25px;line-height:25px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td valign="top" width="700">
								<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5e72e4" class="full-width" style="margin-top: 30px;">
								<tbody>
								<tr>
									<td>
										<table border="0" cellspacing="0" cellpadding="0" width="700" class="full-width" bgcolor="#5e72e4">
										<tbody>
										<tr>
											<td align="center" style="font-family:Helvetica, arial,helv,sans-serif;font-size:16px;color:#F9F9F9; font-weight:bold;" bgcolor="#5e72e4">
												<a name="Privacy Policy" href="https://res.lylares.com/PageAction/get/file" class="footerlinks" style="color:#F9F9F9; text-decoration:none;" rel="noopener" target="_blank">资源提取</a>&nbsp;&nbsp;&nbsp; <a name="Terms" class="footerlinks" style="color:#F9F9F9; text-decoration:none;" href="https://res.lylares.com/PageAction/share/file" rel="noopener" target="_blank">资源分享</a>
											</td>
										</tr>
										</tbody>
										</table>
									</td>
								</tr>
								</tbody>
								</table>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td align="center" valign="top" width="660" bgcolor="#5e72e4">
								<div style="font-size:25px;line-height:25px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td align="center" valign="top" width="620" bgcolor="#5e72e4">
								<table width="93%" border="0" align="center" cellspacing="0" cellpadding="0">
								<tbody>
								<tr>
									<td align="center" height="1">
										<table width="660" border="0" align="center" cellspacing="0" cellpadding="0" class="full-width">
										<tbody>
										<tr>
											<td align="center" height="1" bgcolor="#646464">
												<div style="font-size:1px;line-height:1px;">
                                        &nbsp;
												</div>
											</td>
										</tr>
										</tbody>
										</table>
									</td>
								</tr>
								</tbody>
								</table>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td align="center" valign="top" width="660" bgcolor="#5e72e4">
								<div style="font-size:25px;line-height:25px;">
									&nbsp;
								</div>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="700" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#5e72e4" class="full-width">
						<tbody>
						<tr>
							<td valign="top" width="700">
								<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5e72e4" class="full-width">
								<tbody>
								<tr>
									<td>
										<table border="0" cellspacing="0" cellpadding="0" width="700" class="full-width" bgcolor="#5e72e4">
										<tbody>
										<tr>
											<td align="center" class="footer-padding" style="font-family:Helvetica, arial,helv,sans-serif;font-size:10px; color:#949494; font-weight:bold; padding-left:20px; padding-right:20px" bgcolor="#5e72e4">
                                        此为自动生成的通知 — 请勿回复此邮件。此邮件旨在提醒您在res.lylares.com的资源分享成功；如果你未进行此次操作，请忽略此邮件或联系 
												<a href="mailto:support@lylares.com" rel="noopener" target="_blank">support@lylares.com</a> 获取更多信息.<br>
												<br>
												                                             <span class="appleLinksWhite">XCENG LTD <span style="border-bottom:1px dashed #ccc;z-index:1" t="7" onclick="return false;" data="2019"> 2019</span> 保留所有权利
.</span><br>
												<div id="stat-div" style="visibility:hidden !important;" height="0px">
													<img id="stat-link" src="" border="0" width="0px" height="0px" style="visibility:hidden !important;">
												</div>
												<br>
												<br>
												<br>
											</td>
										</tr>
										</tbody>
										</table>
									</td>
								</tr>
								</tbody>
								</table>
							</td>
						</tr>
						</tbody>
						</table>
					</td>
				</tr>
				</tbody>
				</table>
			</td>
		</tr>
		</tbody>
		</table>
	</td>
</tr>
</tbody>
</table>
  ';
	
	
	return $c1.$c2.$c3;
}
