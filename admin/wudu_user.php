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
              <h6 class="h2 text-white d-inline-block mb-0">会员</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">会员管理</li>
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
          <h3 class="mb-0">添加会员</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form id="post-content" >
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="u_name">用户名</label>
                <input class="form-control" id="u_name" name="u_name" type="text" size="60" placeholder="* 用户名">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="u_password">密码</label>
                <input class="form-control" id="u_password" name="u_password" type="password" size="60" placeholder="* 密码" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="u_cpassword">确认密码</label>
                <input class="form-control" id="u_cpassword" name="u_cpassword" type="password" placeholder="* 确认密码">
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="u_email">邮箱</label>
                <input class="form-control" id="u_email" name="u_email" type="text" size="60" placeholder="* 邮箱">
              </div>
            </div>
			
          </div>
		  <div class="row">
		  
		  <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="u_points">积分</label>
                <input class="form-control" id="u_points" name="u_points" type="number" size="60" value="0" placeholder="* 积分" >
              </div>
            </div>
			
			<div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect1">会员组</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="u_group">
					<?php
						
							$list=$db->getAll('select * from wudu_user_group');
		      foreach ($list as $key =>$row){
						?>
                      <option value="<?php echo $row['ug_id']?>"><?php echo $row['ug_name']?></option>
							<?}?>
                    </select>
                  </div>
            </div>
			<div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">状态</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="u_status_on" name="u_status" value="1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="u_status_on">启用</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="u_status_off" name="u_status" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="u_status_off">禁用</label>
                        </div>
                    </div>
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
			$list=$db->getAll('select * from wudu_user order by u_id DESC');
		      foreach ($list as $key =>$row){
			?>
              <tr>
			    <td>
                  <span class="text-muted"><?php echo $row['u_id']?></span>
                </td>
                <td class="table-user">
                  <img src="./assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                  <b><?php echo $row['u_name']?></b>
                </td>
                <td>
                  <span class="text-muted"><?php echo $row['createtime']?></span>
                </td>
                <td>
                  <a href="#!" class="font-weight-bold"><?php echo $row['createuser']?></a>
                </td>
				<td>
                  <label class="custom-toggle">
                    <input type="checkbox" <?php if($row['u_status']==1){echo'checked';}?>>
                    <span class="custom-toggle-slider rounded-circle" data-label-off="禁用" data-label-on="启用"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="<?php echo $wudu_domain?>admin/wudu_user_edite.html?id=<?php echo $row['u_id'];?>" class="table-action" data-toggle="tooltip" data-original-title="编辑">
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
   form.append('ip','<?php echo $_SERVER["REMOTE_ADDR"];?>');
   var u_name = $("#u_name").val(),upwd = $("#u_password").val(),ucpwd=$("#u_cpassword").val();
   var u_email = $("#u_email").val();
    if(!u_name||!upwd||!ucpwd||!u_email)
   {
	var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '添加失败,请检查表单！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;
   }else if(ucpwd !==upwd)
   {
	 var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '两次输入密码不一致，管理员更新失败 ！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;  
   }else{
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/add/user",
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
		});
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