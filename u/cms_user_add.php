<?php
include('../system/inc.php');
include('cms_check.php');

if ( isset($_POST['save']) ) {
null_back($_POST['u_name'],'请填写登录帐号');
	null_back($_POST['u_password'],'请填写登录密码');
$result = mysqli_query($conn,'select * from wudu_user where u_name = "'.$_POST['u_name'].'"');
	if(mysqli_fetch_array($result)){
		alert_back('帐号重复，请输入新的帐号。');
	}
	$_data['u_name'] = $_POST['u_name'];
	$_data['u_password'] = md5($_POST['u_password']);
	$_data['u_email'] = $_POST['u_email'];
	$_data['u_status'] = $_POST['u_status'];
	$_data['u_group'] = $_POST['u_group'];
	$_data['u_points'] = $_POST['u_points'];
	$_data['u_fav'] =0;
	$_data['u_plays'] =0;
	$_data['u_downs'] =0;
	$_data['u_status'] =1;
	$_data['u_regtime'] =time();
	$_data['u_start'] =time();
	$_data['u_end'] =time();
	$str = arrtoinsert($_data);
	$sql = 'insert into wudu_user ('.$str[0].') values ('.$str[1].')';
	if (mysqli_query($conn,$sql)) {
		alert_href('添加成功!','cms_user.php');
	} else {
		alert_back('添加失败!');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc_head.php') ?>
</head>
<body>
<?php include('inc_header.php') ?>
<div id="content">
	<div class="container">
		<div class="line-big">
			<?php include('inc_left.php') ?>
			<div class="xx105">
				<div class="hd-1">添加会员</div>
				<div class="bd-1">
					<form method="post">
						<div class="line-big">
							<div class="form-group x6">
								<div class="label"><label for="d_name">名称 <span class="badge bg-dot">必填</span></label></div>
								<div class="field">
									<input id="u_name" class="input" name="u_name" type="text" size="60" data-validate="required:请输入名称" value="" />
									<div class="input-note">请输入名称</div>
								</div>
							</div>
							<div class="form-group x6">
								<div class="label"><label for="d_picture">密码</label></div>
								<div class="field">
									<input id="u_password" class="input" name="u_password" type="password" size="60" data-validate="required:请输入密码" value="" />
									<div class="input-note">请输入密码</div>
								</div>
							</div>
							<div class="fc"></div>
														<div class="form-group x6">
								<div class="label"><label for="d_name">状态</label></div>
								<div class="field">
			<select id="u_status" class="input" name="u_status">
										
<option value="1">启用</option><option value="0">禁用</option>
									</select>
								</div>
							</div>
							<div class="form-group x6 form-auto">
								<div class="label"><label for="d_user">会员组</label></div>
								<div class="field">
			<select id="u_group" class="input" name="u_group">
													<?php
							$result = mysqli_query($conn,'select * from wudu_user_group');
							while($row = mysqli_fetch_array($result)){
						?>
						<option value="<?php echo $row['ug_id']?>"><?php echo $row['ug_name']?></option>
<?php
							}
						?>
									</select>
									<div class="input-note">请选择会员组</div>
		
								</div>
							</div>
							<div class="fc"></div>
							<div class="form-group x6">
								<div class="label"><label for="d_parent">积分</label></div>
								<div class="field">
<input id="u_points" class="input" name="u_points" type="text" size="60"  value="0" />
									<div class="input-note">请输入积分</div>
								</div>
							</div>
							<div class="form-group x6">
								<div class="label"><label for="d_rec">email</label></div>
								<div class="field">
<input id="u_email" class="input" name="u_email" type="text" size="60"  value="" />
									<div class="input-note">请输入email</div>
								</div>
							</div>

							<div class="fc"></div>
							<div class="form-group x12">
								<div class="label"><label></label></div>
								<div class="field">
									<input id="save" class="btn bg-dot btn-block" name="save" type="submit" value="保存" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('inc_footer.php') ?>
</body>
</html>
