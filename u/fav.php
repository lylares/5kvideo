<?php
include('../init.php');

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
</head>

<body>
<?php include('head.php');?>

<div id="content-container" class="container">

      <div class="row row-3-9">
<?php include('left.php');?>
        <div class="col-md-9">	
          <div class="panel panel-default panel-col">
	        <div class="panel-heading">收藏记录</div>
<div class="panel-body">

								
					<div class="form-group">
<table class="table table-bordered">
							<tr>
								<th>ID</th>
								<th>名称</th>
								<th>地址</th>

							</tr>
							<?php
                            $result = mysqli_query($conn,'select * from wudu_fav where userid="'.$u_id.'"');
							while($row= mysqli_fetch_array($result)){
							?>
							<tr>
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><a href="<?php echo $row['url'] ?>">继续观看</a></td>
								</td>
								
							</tr>
							<?php } ?>

						</table>
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
	     </div>  >   
</body>

</html>
