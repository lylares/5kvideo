<?php
require('header.php');
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
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">会员数量</h5>
                      <span class="h2 font-weight-bold mb-0">
					  <?php
					  $sql="SELECT COUNT(*) AS count FROM wudu_user";
					  $row=$db->getALL($sql);
					  echo $row[0]['count'];?>
					  </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">视频数量</h5>
                      <span class="h2 font-weight-bold mb-0">
					  <?php 
					  $sql="SELECT COUNT(*) AS count FROM wudu_vod";
					  $row=$db->getALL($sql);
					  echo $row[0]['count'];?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

      <div class="row">
        
        
        <div class="col-xl-6">
          <!-- Progress track -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">服务器信息</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/bootstrap.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>服务器操作系统:<?PHP echo PHP_OS; ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/angular.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>服务器端信息：<?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/sketch.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>最大上传限制:<?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件";?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/react.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>最大执行时间：<?PHP echo get_cfg_var("max_execution_time")."秒 "; ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
				<li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/react.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>脚本运行占用最大内存：<?PHP echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无" ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
				<li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/react.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>PHP程式版本：<?PHP echo PHP_VERSION; ?>></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
				<li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/react.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>ZEND版本:<?PHP echo zend_version(); ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>
				<li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/react.jpg">
                      </a>
                    </div>
                    <div class="col">
                      <h5>服务器CPU数量： <?php echo $_SERVER['PROCESSOR_IDENTIFIER'] ?></h5>
                      <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
		      <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              <h5 class="h3 mb-0">用户反馈&留言</h5>
            </div>
            <div class="card-header d-flex align-items-center">
              <div class="d-flex align-items-center">
                <a href="#">
                  <img src="./assets/img/theme/team-1.jpg" class="avatar">
                </a>
                <div class="mx-3">
                  <a href="#" class="text-dark font-weight-600 text-sm">John Snow</a>
                  <small class="d-block text-muted">3 days ago</small>
                </div>
              </div>
              <div class="text-right ml-auto">
                <button type="button" class="btn btn-sm btn-primary btn-icon">
                  <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                  <span class="btn-inner--text">Follow</span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row align-items-center my-3 pb-3 border-bottom">
                <div class="col-sm-6">
                  <div class="icon-actions">
                    <a href="#" class="like active">
                      <i class="ni ni-like-2"></i>
                      <span class="text-muted">150</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-chat-round"></i>
                      <span class="text-muted">36</span>
                    </a>
                    <a href="#">
                      <i class="ni ni-curved-next"></i>
                      <span class="text-muted">12</span>
                    </a>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                  <div class="d-flex align-items-center justify-content-sm-end">
                    <div class="avatar-group">
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland">
                        <img alt="Image placeholder" src="./assets/img/theme/team-1.jpg" class="">
                      </a>
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Audrey Love">
                        <img alt="Image placeholder" src="./assets/img/theme/team-2.jpg" class="rounded-circle">
                      </a>
                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis">
                        <img alt="Image placeholder" src="./assets/img/theme/team-3.jpg" class="rounded-circle">
                      </a>
                    </div>
                    <small class="pl-2 font-weight-bold">and 30+ more</small>
                  </div>
                </div>
              </div>
              <!-- Comments -->
              <div class="mb-1">
                <div class="media media-comment">
                  <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="./assets/img/theme/team-1.jpg">
                  <div class="media-body">
                    <div class="media-comment-text">
                      <h6 class="h5 mt-0">Michael Lewis</h6>
                      <p class="text-sm lh-160">Cras sit amet nibh libero nulla vel metus scelerisque ante sollicitudin. Cras purus odio vestibulum in vulputate viverra turpis.</p>
                      <div class="icon-actions">
                        <a href="#" class="like active">
                          <i class="ni ni-like-2"></i>
                          <span class="text-muted">3 likes</span>
                        </a>
                        <a href="#">
                          <i class="ni ni-curved-next"></i>
                          <span class="text-muted">2 shares</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media media-comment">
                  <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="./assets/img/theme/team-2.jpg">
                  <div class="media-body">
                    <div class="media-comment-text">
                      <h6 class="h5 mt-0">Jessica Stones</h6>
                      <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                      <div class="icon-actions">
                        <a href="#" class="like active">
                          <i class="ni ni-like-2"></i>
                          <span class="text-muted">10 likes</span>
                        </a>
                        <a href="#">
                          <i class="ni ni-curved-next"></i>
                          <span class="text-muted">1 share</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="media align-items-center">
                  <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mr-4" src="./assets/img/theme/team-3.jpg">
                  <div class="media-body">
                    <form>
                      <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php 
$pscript=[
  './assets/vendor/chart.js/dist/Chart.min.js',
  './assets/vendor/chart.js/dist/Chart.extension.js',
  './assets/vendor/jvectormap-next/jquery-jvectormap.min.js',
  './assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js'
];
require('footer.php');