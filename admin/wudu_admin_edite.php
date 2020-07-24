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
	<?php
	$m_id = htmlentities(trim($_GET['id']));
	$row=$db->getRow("select * from wudu_manager where m_id = $m_id");
	if($row){
		//print_r($row);
		?>
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">编辑管理员</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form id="post-content" >
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_name">用户名</label>
                <input class="form-control" id="m_name" name="m_name" type="text" size="60" value="<?php echo $row['m_name'];?>" placeholder="* 用户名">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_password">原密码</label>
                <input class="form-control" id="m_password" name="m_password" type="password" size="60" value="" placeholder="* 原密码" >
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_npassword">新密码</label>
                <input class="form-control" id="m_npassword" name="m_npassword" type="password" size="60" value="" placeholder="* 输入新密码" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="m_cpassword">确认密码</label>
                <input class="form-control" id="m_cpassword" name="m_cpassword" type="password" value="" placeholder="* 再次输入新密码">
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
<script>
$(function() {
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
   form.append('id','<?php echo $m_id;?>');
   var uname = $("#m_name").val().replace(/(^\s*)|(\s*$)/g, ""),upwd = $("#m_password").val().replace(/(^\s*)|(\s*$)/g, ""),unpwd=$("#m_npassword").val().replace(/(^\s*)|(\s*$)/g, "");
   var ucpwd = $("#m_cpassword").val().replace(/(^\s*)|(\s*$)/g, "");
   
    if(!uname||!upwd||!unpwd||!ucpwd)
   {
	var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '添加失败,请检查表单！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;
   }else if(unpwd !==ucpwd)
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
			url: _wudu_info.domain+"Adm/update/admin",
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
	            message:obj.msg
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
	<?php }?>
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