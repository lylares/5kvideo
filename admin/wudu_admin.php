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
              <h6 class="h2 text-white d-inline-block mb-0">系统设置</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">管理员设置</li>
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
          <h3 class="mb-0">添加管理员</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form id="post-content" >
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_name">用户名</label>
                <input class="form-control" id="m_name" name="m_name" type="text" size="60" placeholder="* 用户名" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_password">密码</label>
                <input class="form-control" id="m_password" name="m_password" type="password" size="60" placeholder="* 密码" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="m_cpassword">确认密码</label>
                <input class="form-control" id="m_cpassword" name="m_cpassword" type="password" placeholder="* 确认密码" required>
              </div>
            </div>
			
			
          </div>
		  </form>
		  <div class="row">
          <div class="col-lg-3">
				  <div id="buttons-block-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="buttons-block-component-tab">
              <button type="button" class="btn btn-primary btn-block save-action">保存</button>
            </div>
			</div>
			</div>
        
		 
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
              <h3 class="mb-0">账号管理</h3>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="导出账号">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                <span class="btn-inner--text">导出账号</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
			    <th>id</th>
                <th>用户</th>
                <th>创建时间</th>
                <th>创建人</th>
                <th >状态</th>
				<th>操作</th>
              </tr>
            </thead>
            <tbody>
			<?php
				  $list=$db->getAll('select * from wudu_manager order by m_id desc');
			foreach($list as $key =>$row){
			?>
              <tr>
			    <td>
                  <span class="text-muted"><?php echo $row['m_id']?></span>
                </td>
                <td class="table-user">
                  <img src="./assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b><?php echo $row['m_name']?></b>
                </td>
                <td>
                  <span class="text-muted"><?php echo $row['createtime']?></span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold"><?php echo $row['createuser']?></a>
                </td>
				<td>
                  <label class="custom-toggle">
                    <input type="checkbox" <?php if($row['m_status']==1){echo'checked';}?>>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="禁用" data-label-on="启用"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="wudu_admin_edite.html?id=<?php echo $row['m_id'];?>" class="table-action" data-toggle="tooltip" data-original-title="编辑">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="删除">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
			<? } ?>
            </tbody>
          </table>
        </div>
      </div>
			</div>
			</div>
			</div>
<script>
$(function() {
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
   form.append('id','<?php echo $m_id;?>');
   form.append('ip','<?php echo $_SERVER["REMOTE_ADDR"];?>');
   var uname = $("#m_name").val().replace(/(^\s*)|(\s*$)/g, ""),upwd = $("#m_password").val().replace(/(^\s*)|(\s*$)/g, ""),ucpwd = $("#m_cpassword").val().replace(/(^\s*)|(\s*$)/g, "");
   if(!uname||!upwd||!ucpwd)
   {
	var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '添加失败,请检查表单！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;
   }else if(upwd !==ucpwd)
   {
	 var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '两次输入密码不一致，添加失败 ！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;  
   }else{
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/add/admin",
			contentType:false,
			dataTpye: 'json',
			data: form,
			processData:false,
			success: function(data) {
			var obj;
             //判断是否是json格式
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }
			 console.log(obj.code)
			if(obj.code==10001)
			{

             $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: obj.msg
               },{
	           // settings
	           type: 'success'
              });
            
setTimeout(function() {
	location.reload();
}, 500);
			}else{
				var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: obj.msg 
               },{
	           // settings
	           type: 'danger'
              });

			}
			},
			error: function(request) {
			},
		})
  }
  })
  
})
</script>

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