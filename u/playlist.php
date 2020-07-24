<?php
include('../inc/inc.php');

require("chk.php");

$result = mysqli_query($conn,'select * from wudu_user where u_name="'.$_SESSION['user_name'].'"');
					if($row = mysqli_fetch_array($result)){
$u_id=$row['u_id'];
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
<title>会员中心-<?php echo $wudu_seoname;?></title>
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
	<script src="js/html5shiv.js"></script>   
	<script src="js/respond.min.js"></script>  
<![endif]-->
<style type="text/css">
.form-group .list{margin-left:-30px}
.form-group .list li {
	padding:8px 5px;
	border:1px solid #eee;width:800px;
}
.form-group .list li {
	padding:8px 0;
}
.form-group .list .text-muted{width:20px;}
.form-group .list a{padding:8px 5px;}

</style>
</head>

<body>
<?php include('head.php');?>

<div id="content-container" class="container">

      <div class="row row-3-9">
<?php include('left.php');?>
        <div class="col-md-9">	
          <div class="panel panel-default panel-col">
	        <div class="panel-heading">播放记录</div>
<div class="panel-body">
  <script type="text/javascript " src="<?php echo $wudu_domain;?>style/js/history.js "></script>
								
					<div class="form-group ">
						<script type="text/javascript ">
					$MH.limit = 30;
					$MH.WriteHistoryBox(800, 0, 'font');
					$MH.recordHistory({
						name: '',
						link: '',
						pic: ''
					})
				</script>
            		</div>


		       </div>
	         </div>
          </div>
     </div>
  </div>

  <script src="public/jquery.js"></script>
<script src="public/wind.js"></script>
<script src="public/bootstrap.min.js"></script>
<script src="public/frontend.js"></script>
<script src="public/artDialog/artDialog.js"></script>
<script src="public/jquery.cityselect.js"></script>
<script type="text/javascript">
var p=document.getElementById('p').value;
var c=document.getElementById('c').value;
var d=document.getElementById('d').value;
  $(function(){
		$("#city").citySelect({
			nodata:"none",
			prov:p,
			city:c,
			dist:d,
			required:false
		}); 
	});
</script> 
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #ff6428;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 10px 4px 0 4px;text-align:center" class="container-fluid"><?php echo $wudu_copyright;?><?php echo $wudu_tongji;?></p>
				 </div>
			 </div>
	     </div>   
</body>

</html>
