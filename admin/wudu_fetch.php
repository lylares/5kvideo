<?php
require('header.php');
include('getdata.php');
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
   <?php require('topnav.php');?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">视频</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">视频采集</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
			  <button class="btn btn-neutral" type="submit">保存</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">视频采集</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form method="POST" action="<?php echo $wudu_domain;?>admin/wudu_fetch.html">
          <div class="row">

			<div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect1">视频源</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="from">
                      <!-- <option value="http://www.156zy.com/">156资源[推荐]</option> -->
			
			<option value="http://www.baiwanzy.com/">百万资源</option>
            			<option value="http://www.ziyuanpian.net/">推荐</option>

             <option value="http://www.zuidazy.net/">最大资源</option>
             <option value="http://www.okokzy.cc/">OK资源</option>
           	<option value="http://www.kubozy.net/">酷播资源</option>
            <option value="http://www.605zy.com/">605资源</option>
            <option value="http://www.kukuzy.com/">酷酷资源网</option>
            <option value="http://zy.itono.cn/">1717资源</option>
            <option value="http://zy.ataoju.com/">6U资源网</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="wd">关键字</label>
                <input class="form-control" id="wd" name="wd"  type="text" placeholder="影片名称" >
              </div>
            </div>

          </div>
		  <div class="row">
          <div class="col-lg-3">
				<div id="buttons-block-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="buttons-block-component-tab">
              <button class="btn btn-primary btn-block" type="submit">开始采集</button>
            </div>
			</div>
			</div>
        
		 </form>
        </div>
      </div>

	  <div class="row">
        
		<div class="col-lg-12">
          <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">采集预览</h3>
            </div>
            
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
			    <th>名称</th>
				<th>类型</th>
				<th>更新时间</th>
				<th>操作</th>
              </tr>
            </thead>
            <tbody>
<?php
if(isset($_POST["wd"])&&$_POST["wd"])
{
$q=$_POST['wd'];
 if(strlen($q) < 1){
    exit("<script>alert('请输入影片名字');location.href='javascript:history.back()';</script>");
}
$laiyuan=$_POST['from'];
$seach=file_get_contents(''.$laiyuan.'index.php?m=vod-search&wd='.$q);
//$szz='#<span class="xing_vb4"><a href="(.*)" target="_blank">(.*)<span>(.*)</span></a></span> <span class="xing_vb5">(.*)</span> <span class="xing_vb6">(.*)</span>#'; 
$szz='#<span class="xing_vb4"><a href="(.*)" target="_blank">(.*)</a></span> <span class="xing_vb5">(.*)</span> <span class="xing_vb6">(.*)</span>#';
preg_match_all($szz,$seach,$sarr);

$one=$sarr[2];//标题
$onee=$sarr[1];//标题
$oneee=$sarr[3];//
$oneeee=$sarr[4];//

foreach ($one as $ni=>$cs){ 
$pingfen = str_replace('/', '', "$onee[$ni]");
$lx = str_replace('', '', "$oneee[$ni]");
$sj = str_replace('', '', "$oneeee[$ni]");


?>
              <tr>
			    <td>
                  <span class="text-muted">
				  <a target="_blank" href="wudu_fetch_add.php<?php echo $pingfen?>&zd=<?php echo $laiyuan?>" style="color: #337ab7;
    text-decoration: none;"><?php echo $cs?>
	             </a>
				 </span>
                </td>
                <td><?php echo $lx?></td>
				<td><?php echo $sj?></td>
				<td>
				    <a class="btn btn-success" href="wudu_fetch_add.html<?php echo $pingfen?>&zd=<?php echo $laiyuan?>" style="border-radius:4px;">采集</a>
				</td>
              </tr>
<?php 
}
} 
?>
            </tbody>
          </table>
        </div>
      </div>
			</div>
			</div>
			</div>
<?php
$pscript=[
  './assets/vendor/select2/dist/js/select2.min.js',
  './assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
  './assets/vendor/nouislider/distribute/nouislider.min.js',
  './assets/vendor/quill/dist/quill.min.js',
  './assets/vendor/dropzone/dist/min/dropzone.min.js',
  './assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'
]; 
require('footer.php');