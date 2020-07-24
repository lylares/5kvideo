<?php
include('../init.php');
if(isset($_SESSION['user_name'])){
header('location:index.php');
};
	
if(isset($_POST['submit'])){
	null_back($_POST['u_name'],'请输入用户名');
	null_back($_POST['u_password'],'请输入密码');
	$u_name = $_POST['u_name'];
	$u_password = $_POST['u_password'];
	$sql = 'select * from wudu_user where u_name = "'.$u_name.'" and u_password = "'.md5($u_password).'" and u_status=1';
	$result = mysqli_query($conn,$sql);
	if(!! $row = mysqli_fetch_array($result)){
		
	$_data['u_loginnum'] = $row['u_loginnum']+1; 
	$_data['u_loginip'] =$_SERVER["REMOTE_ADDR"]; 
	$_data['u_logintime'] =date('y-m-d h:i:s',time());
	if(!empty($row['u_end'])) $u_end= $row['u_end'];
	if(time()>$u_end){
	$_data['u_flag'] =="0";
	$_data['u_start'] =="";
	$_data['u_end'] =="";
	$_data['u_group'] =1;
	}else{
	$_data['u_flag'] ==$row["u_flag"];
	$_data['u_start'] ==$row["u_start"];
	$_data['u_end'] ==$row["u_end"];
	$_data['u_group'] =$row["u_group"];
	}
	mysqli_query($conn,'update wudu_user set '.arrtoupdate($_data).' where u_id ="'.$row['u_id'].'"');
	$_SESSION['user_name']=$row['u_name'];
	$_SESSION['user_group']=$row['u_group'];
	if($_POST['brand1']){ 
setcookie('user_name',$row['u_name'],time()+60); 
setcookie('user_password',$row['u_password'],time()+60); 
} 
		header('location:index.php');
	}else{
		alert_href('用户名或密码错误货尚未激活','login.php');
	}
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>会员登录-<?php echo $wudu_seoname;?></title>
<meta name="keywords" content="<?php echo $wudu_keywords;?>">
<meta name="description" content="<?php echo $wudu_description;?>">
<link href="css/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" media="screen" href="css/common.css" />
<link rel="stylesheet" media="screen" href="css/main.css" />
<link rel="stylesheet" media="screen" href="css/es-icon.css" />
<link rel="stylesheet" media="screen" href="css/iconfont.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="screen" href="css/theme.css" />
<link href="cssdefault.css" rel="stylesheet" />
<!--[if lt IE 9]>    
	<script src="../style/js/html5shiv.js"></script>   
	<script src="../style/js/respond.min.js"></script>  
<![endif]-->
</head>
<body>	
<?php include('head.php');?>
<div id="wrapper" class="pad-bottom">
   <div id="content-container" class="container">
        <div class="es-section login-section">
  <div class="logon-tab clearfix">
    <a class="active">重置密码</a>
    <a href="reg.php">注册帐号</a>
  </div>
  <div class="login-main">
    <form class="form-horizontal js-ajax-form" method="post">
        <label class="control-label" for="login_username">帐号</label>
        <div class="controls">
          <input class="form-control input-lg span4" id="login_username" type="text" name="u_name" value="" required placeholder='邮箱/用户名' />
          <div class="help-block"></div>
        </div>
        <label class="control-label" for="login_password">密码</label>
        <div class="controls" style="margin-bottom:10px;">
          <input class="form-control input-lg span4" id="login_password" type="password" name="u_password" required placeholder='密码'/>
        </div>
		        <label class="control-label" for="login_password"><input type="checkbox" name="brand1" value="">记住密码</label>

        <button type="submit" class="btn btn-primary btn-lg btn-block js-ajax-submit" name="submit" style="margin-left: 0px;margin-top:30px;margin-bottom:10px;">登录</button>
    </form>

    <div class="mbl">
	  <a href="repass.php">找回密码</a>
      <span class="text-muted mhs">|</span>
      <span class="text-muted">还没有注册帐号？</span>
      <a href="reg.php">立即注册</a>
    </div>
    <div class="social-login">
        <div class="line"></div>
    </div>
   </div>
  </div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/wind.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/frontend.js"></script>
<script src="js/artDialog/artDialog.js"></script>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #ff6428;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 10px 4px 0 4px;text-align:center" class="container-fluid"><?php echo $wudu_copyright;?><?php echo $wudu_tongji;?></p>
				 </div>
			 </div>
	     </div> 
</body>
</html>
