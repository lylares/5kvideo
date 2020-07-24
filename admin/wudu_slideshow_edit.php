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
                  <li class="breadcrumb-item"><a href="<?php echo $wudu_domain;?>admin/wudu_slideshow.html"><i class="fas fa-home"></i></a></li>
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
	<?php
	$row=$db->getRow('select * from wudu_slideshow where id = '.$_GET['id'].' ');
	if ($row){
	?>
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">编辑轮播图</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
		<form id="post-content" >
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">标题</label>
                <input class="form-control" id="example3cols1Input" name="name" type="text" size="60" value="<?php echo $row['name'];?>" placeholder="标题" required>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">落地页</label>
                <input class="form-control" id="example3cols3Input" name="url" type="text" value="<?php echo $row['url'];?>" placeholder="落地页链接" required>
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
                <input class="form-control" id="picture" name="picture" type="text"  value="<?php echo $row['picture'];?>" placeholder="图片链接" required>
              </div>
            </div>
          </div>
           <div class="row">
		   <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="s_order">排序</label>
                <input class="form-control" id="order" name="sorder" type="number"  value="<?php echo $row['sorder'];?>" placeholder="排序" required>
              </div>
            </div>
			<div class="col-lg-3">
		<label class="form-control-label" for="vid">选择视频</label>
			<select class="form-control" id="vid" data-toggle="select" name="vid">
				  <?php
				  $list=$db->getAll('select * from wudu_vod order by id desc');
				  
				  foreach($list as $key=>$row2){
				  ?>
                    <option value="<?php echo $row2['pid']?>" <?php if($row2['id'].'.html'==$row['id']){echo 'selected';}?>><?php echo $row2['name']?></option>
				  <?}?>
				  
				   <?php
				  $list=$db->getAll('select * from wudu_tvlive order by id desc');
				  
				  foreach($list as $key=>$row3){
				  ?>
                    <option value="<?php echo $row3['pid']?>" <?php if($row3['id'].'.html'==$row['id']){echo 'selected';}?>><?php echo $row3['name']?></option>
				  <?}?>

            </select>

			</div>
		    <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">类型</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="com" name="type" value="1" class="custom-control-input" <?php if( $row['type'] == 1 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="com">通用</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sp" name="type" value="2" class="custom-control-input" <?php if( $row['type'] == 2 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="sp">特别策划</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="wdv" name="type" value="3" class="custom-control-input" <?php if( $row['type'] == 3 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="wdv">雾都VOD</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tl" name="type" value="4" class="custom-control-input" <?php if( $row['type'] == 4 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="tl">直播</label>
                        </div>
                      <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="wplay" name="type" value="5" class="custom-control-input" <?php if( $row['type'] == 5 ){ echo'checked="checked"' ;}?>>
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
                            <input type="radio" id="online" name="status" value="1" class="custom-control-input" <?php if( $row['status'] == 1 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="online">上线</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="offline" name="status" value="0" class="custom-control-input" <?php if( $row['status'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="offline">下线</label>
                        </div>
                    </div>
					
                  </div>
				  </div>

		   </div>
		  <div class="row">

			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea2">描述</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" name="content"  rows="8" resize="none"><?php echo $row['content'];?></textarea>
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
<input type="text" style="display:none" name="id" value="<?php echo htmlentities(trim($_GET['id']));?>">
		  
		  </div>
		  <div class="form-group">
                    <label class="form-control-label" for="position">位置</label>
                    <select multiple class="form-control" id="position" name="position[]">
                      <option value="index" <?php if(strstr($row['position'],'index')==true){echo'delectd';}?>>首页</option>
                      <option value="tv"  <?php if(strstr($row['position'],'tv')==true){echo'delectd';}?>>电视剧</option>
                      <option value="m"  <?php if(strstr($row['position'],'m')==true){echo'delectd';}?>>电影</option>
                      <option value="va"  <?php if(strstr($row['position'],'va')==true){echo'delectd';}?>>综艺</option>
                      <option value="ct"  <?php if(strstr($row['position'],'ct')==true){echo'delectd';}?>>动漫</option>
					  <option value="tl"  <?php if(strstr($row['position'],'tl')==true){echo'delectd';}?>>电视</option>
					  <option value="oth"  <?php if(strstr($row['position'],'oth')==true){echo'delectd';}?>>其他</option>
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

  <script>
  $(function() {
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/update/slider",
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
			 console.log(obj)
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
	//window.location.href= _wudu_info.domain+'admin/wudu_slideshow.html';
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
			  /////////////////////			  
	  
//////////////////////
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
	<?php }?>
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