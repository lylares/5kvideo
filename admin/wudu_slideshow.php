<?php
$style=[
'./assets/vendor/select2/dist/css/select2.min.css',
'./assets/vendor/quill/dist/quill.core.css'];
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
              <h6 class="h2 text-white d-inline-block mb-0">轮播图</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">轮播图管理</li>
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
          <h3 class="mb-0">添加轮播图</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
		<form id="post-content" >
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">标题</label>
                <input class="form-control" id="example3cols1Input" name="name" type="text" size="60" placeholder="标题" required>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">落地页</label>
                <input class="form-control" id="example3cols3Input" name="url" type="text" placeholder="落地页链接" required>
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">图片外链</label>
                <input class="form-control"  id="img-get" type="text"  placeholder="外链" >
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="s_picture">图片链接</label>
                <input class="form-control" id="picture" name="picture" type="text"  placeholder="图片链接" required>
              </div>
            </div>
          </div>
           <div class="row">
		   <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="s_order">排序</label>
                <input class="form-control" id="order" name="sorder" type="number"  placeholder="排序" required>
              </div>
            </div>
			<div class="col-lg-3">
		<label class="form-control-label" for="vid">选择视频</label>
			<select class="form-control" id="vid" data-toggle="select" name="vid">
				  <?php
				  $sql2 = "select * from wudu_vod order by id desc";
				  $list=$db->getAll($sql2);
				  //$itemresult = mysqli_query($conn,$sql2);
				  foreach($list as $key =>$row){
				  ?>
                    <option value="<?php echo $row['pid']?>"><?php echo $row['name']?></option>
				  <?}?>
				  <?php
				  $sql3 = "select * from wudu_tvlive order by id desc";
				  $list=$db->getAll($sql3);
				  //$itemresult = mysqli_query($conn,$sql2);
				  foreach($list as $key =>$row33){
				  ?>
                    <option value="<?php echo $row33['pid']?>"><?php echo $row33['name']?></option>
				  <?}?>
                  </select>

			</div>
		    <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">播放类型</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="com" name="type" value="1" class="custom-control-input" checked="checked" >
                            <label class="custom-control-label" for="com">通用</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sp" name="type" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="sp">特别策划</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="wdv" name="type" value="3" class="custom-control-input">
                            <label class="custom-control-label" for="wdv">雾都VOD</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tl" name="type" value="4" class="custom-control-input">
                            <label class="custom-control-label" for="tl">直播</label>
                        </div>
                      <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="wplay" name="type" value="5" class="custom-control-input">
                            <label class="custom-control-label" for="wplay">wplay</label>
                        </div>
                    </div>
                  </div>
				  </div>

		<div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label">上线状态</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="online" name="status" value="1" class="custom-control-input" checked="checked" >
                            <label class="custom-control-label" for="online">上线</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="offline" name="status" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="offline">下线</label>
                        </div>
                    </div>
					
                  </div>
				  </div>
				  
				  

                 
		   </div>
		  <div class="row">
		  
		  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label">视频类型</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="v_m" name="vtype" value="m" class="custom-control-input" checked="checked" >
                            <label class="custom-control-label" for="v_m">电影</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="v_tv" name="vtype" value="tv" class="custom-control-input">
                            <label class="custom-control-label" for="v_tv">电视剧</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="v_va" name="vtype" value="va" class="custom-control-input">
                            <label class="custom-control-label" for="v_va">综艺</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="v_ct" name="vtype" value="ct" class="custom-control-input">
                            <label class="custom-control-label" for="v_ct">动漫</label>
                        </div>
                    </div>
					
                  </div>
				  </div>

			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea2">描述</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" name="content"  rows="8" resize="none"></textarea>
                  </div>

			</div>
			
		  	   <div class="col-md-3">
			   <label class="form-control-label" for="exampleFormControlTextarea2">封面上传</label>
		  <div class="dropzone dropzone-single" data-toggle="dropzone" data-dropzone-url="<?php echo $wudu_domain;?>Adm/upload/images">
		  
          <div class="fallback">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="dropzoneBasicUpload">
            <label class="custom-file-label" for="dropzoneBasicUpload">选择图片</label>
        </div>
    </div>

    <div class="dz-preview dz-preview-single">
        <div class="dz-preview-cover">
            <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
        </div>
    </div>
</div>
		</div>

		
		
		  
		  </div>
		  
				 
				  <div class="form-group">
                    <label class="form-control-label" for="position">位置</label>
                    <select multiple class="form-control" id="position" name="position[]">
                      <option value="index">首页</option>
                      <option value="tv">电视剧</option>
                      <option value="m">电影</option>
                      <option value="va">综艺</option>
                      <option value="ct">动漫</option>
					  <option value="tl">电视</option>
					  <option value="oth">其他</option>
                    </select>
                  </div>
				 
		   </form>
		  <div class="row">
		  
          <div class="col-lg-3">
				  
              <button type="button" class="btn btn-primary btn-block save-action" id="save-action">保存</button>
           
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
              <h3 class="mb-0">轮播图管理</h3>
            </div>
            <!-- <div class="col-6 text-right">
              <a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="导出账号">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                <span class="btn-inner--text">导出账号</span>
              </a>
            </div> -->
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
			    <th>id</th>
				<th>排序</th>
                <th>预览</th>
				<th>标题</th>
				<th>类型</th>
				<th>落地页</th>
                <th>状态</th>
				<th>操作</th>
              </tr>
            </thead>
            <tbody>
			<?php
						$list=$db->getAll('select * from wudu_slideshow order by id desc');
						foreach ($list as $key =>$row){
							
						if($row['type']==1)
						{
							$locatedUrl = $wudu_domain.'vod/'.$row['url'];
							
						}elseif($row['type']==2)	
						{
							$locatedUrl = $wudu_domain.'splay/'.$row['url'];
						}elseif($row['type']==3)	
						{
							$locatedUrl = $wudu_domain.'wudu/'.$row['url'];
						}elseif($row['type']==4)	
						{
							$locatedUrl = $wudu_domain.'tvplay/'.$row['url'];
						}elseif($row['type']==5)	
						{
							$locatedUrl = $wudu_domain.'wplay/'.$row['url'];
						}	
						?>
              <tr>
			    <td>
                  <span class="text-muted"><?php echo $row['id']?></span>
                </td>
				<td>
                  <span class="text-muted"><?php echo $row['sorder']?></span>
                </td>
                <td class="table-user">
                  <img src="<?php echo $row['picture']?>" class="avatar avatar-xl">
                </td>
				<td class="table-user">
                  <b><?php echo $row['name']?></b>
                </td>
                <td>
                  <span class="text-muted"><?php echo $row['type']?></span>
                </td>
				<td>
                  <span class="text-muted"><a href="<?php echo $locatedUrl;?>" target="_blank"><?php echo $locatedUrl;?></a></span>
                </td>
				<td>
                  <label class="custom-toggle slider-status" data-id="<?php echo $row['id']?>">
                    <input type="checkbox" <?php if($row['status']==1){echo'checked';$sstus = 1;}else{$sstus = 0;}?> id="sstaus">
                    <span class="custom-toggle-slider rounded-circle" data-label-off="下线" data-label-on="上线"></span>
                  </label>
                </td>
                <td class="table-actions">
                  <a href="wudu_slideshow_edit.html?id=<?php echo $row['id']?>" class="table-action" data-toggle="tooltip" data-original-title="编辑" data-id="<?php echo $row['id']?>">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="删除" data-id="<?php echo $row['id']?>">
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
	 $(".table-action-delete").click(function(){
		  var sid = $(this).data('id');
		  
		  			  /////////////////////			  
			  
swal({
  title: '确定要删除该轮播图 ?',
  text: '确定后轮播图将从系统中删除',
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: '确定',
  cancelButtonText: '取消',
  showLoaderOnConfirm: true,
  preConfirm: function(email) {
    return new Promise(function(resolve, reject) {
      setTimeout(function() {

          resolve(
		  
		 	$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/del/slider",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {id:sid},
			success: function(data) {
			var obj;
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }
			 console.log(obj.code)
			if(obj.code==10001)
			{
 var notify = $.notify({
	            // options
				icon: 'ni ni-bell-55',
				placement: {
		        from: "bottom",
		        align: "right"
	            },
				align:'right',
	            message: obj.msg
               },{
	           // settings
	           type: 'success'
              });
setTimeout(function() {
	location.reload();
}, 500);
			}else{
				$.notify({
	            // options
				icon: 'ni ni-bell-55',
	            message:obj.msg 
               },{
	           // settings
	           type: 'danger'
              });
			}

			},
			error: function(request) {
			},
		})
		  
		  
		  );

      }, 2000);
    });
  },
  allowOutsideClick: false
})		  
//////////////////////
		  
		  
		  
		  
		  
   //var form = new FormData(document.getElementById("post-content"));

  })  
	  
	  
	  $(".slider-status").click(function(){
		  var sid = $(this).data('id'),status= $('#sstaus').val();

   //var form = new FormData(document.getElementById("post-content"));
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/update/sliderStatus",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {id:sid,status:<?php echo $sstus;?>},
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
	            message: '轮播图上线！' 
               },{
	           // settings
	           type: 'success'
              });

			}else{
				var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: 'o(╥﹏╥)o 轮播图状态更新失败！' 
               },{
	           // settings
	           type: 'danger'
              });
			  /////////////////////			  
	  
//////////////////////
			}
			},
			error: function(request) {
			},
		});
  })  
	  
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/add/slider",
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
	            message: '轮播图添加成功' 
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
	            message: '轮播图添加失败！' 
               },{
	           // settings
	           type: 'danger'
              });

			}
			},
			error: function(request) {
			},
		});
  })
  })
  </script>
  <script>
$(function() {

	
	$("#img-get").bind("input propertychange",function(event){
		
		var weburl = $("#img-get").val();
       
	   $("#img-get").blur(function(){
		   
if(weburl.length>5){
 
 $.ajax({
			type: "POST",
			url: "https://api-cn.berryapi.net/?service=Upload.Sina",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data:{weburl:weburl,AppKey:'29udGFjdEBseWxhcmVzLmNvbVk5N2NBbzRFR0Jze'},
			success: function(data) {
			 $("#picture").val('https://ww2.sinaimg.cn/large/'+data.data.pid+'.jpg');
			},
			error: function(request) {
			},
		})
		
}

	})

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
  './assets/js/validate.js',
  './assets/vendor/sweetalert2/dist/sweetalert2.min.js'
]; 
require('footer.php');