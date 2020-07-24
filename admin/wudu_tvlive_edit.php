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
              <h6 class="h2 text-white d-inline-block mb-0">电视直播</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo $wudu_domain;?>admin/wudu_slideshow.html"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">电视直播编辑</li>
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
	$row=$db->getRow('select * from wudu_tvlive where id = '.$_GET['id'].' ');
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
                <label class="form-control-label" for="name">名称</label>
                <input class="form-control" id="name" name="name" type="text" size="60" value="<?php echo $row['name'];?>" placeholder="标题" required>
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="url">播放地址</label>
                <input class="form-control" id="url" name="url" type="text"  value="<?php echo $row['url'];?>" placeholder="播放地址" required>
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="score">评分</label>
                <input class="form-control" id="score" name="score" type="number"  value="<?php echo $row['score'];?>" placeholder="评分" required>
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="integral">消耗积分</label>
                <input class="form-control" id="integral" name="integral" type="number"  value="<?php echo $row['integral'];?>" placeholder="消耗积分" required>
              </div>
            </div>

			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">封面外链</label>
                <input class="form-control"  id="img-get" type="text"  placeholder="外链" >
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="picture">封面</label>
                <input class="form-control" id="picture" name="img" type="text"  value="<?php echo $row['img'];?>" placeholder="图片链接" required>
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="seoname">优化标题</label>
                <input class="form-control" id="seoname" name="seoname" type="text"  value="<?php echo $row['seoname'];?>" placeholder="优化标题" required>
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="keywords">优化关键词</label>
                <input class="form-control" id="keywords" name="keywords" type="text"  value="<?php echo $row['keywords'];?>" placeholder="优化关键词" required>
              </div>
            </div>

			
			<div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">类型</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="com" name="type" value="a" class="custom-control-input" <?php if($row['type']=='a'){echo 'checked';}?> >
                            <label class="custom-control-label" for="com">央视</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sp" name="type" value="b" class="custom-control-input" <?php if($row['type']=='b'){echo 'checked';}?>>
                            <label class="custom-control-label" for="sp">卫视</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="wdv" name="type" value="c" class="custom-control-input" <?php if($row['type']=='c'){echo 'checked';}?>>
                            <label class="custom-control-label" for="wdv">地方</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tl" name="type" value="o" class="custom-control-input" <?php if($row['type']=='o'){echo 'checked';}?>>
                            <label class="custom-control-label" for="tl">其他</label>
                        </div>
						<div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tl2" name="type" value="f" class="custom-control-input" <?php if($row['type']=='f'){echo 'checked';}?>>
                            <label class="custom-control-label" for="tl2">国外</label>
                        </div>
                    </div>
                  </div>
				  </div>

		<div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label">推荐</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="online" name="rec" value="1" class="custom-control-input" <?php if($row['rec']==1){echo 'checked';}?> >
                            <label class="custom-control-label" for="online">是</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="offline" name="rec" value="0" class="custom-control-input" <?php if($row['rec']==0){echo 'checked';}?>>
                            <label class="custom-control-label" for="offline">否</label>
                        </div>
                    </div>
					
                  </div>
				  </div>
				  
				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label">热门</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="hotonline" name="hot" value="1" class="custom-control-input" <?php if($row['hot']==1){echo 'checked';}?>>
                            <label class="custom-control-label" for="hotonline">是</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="hotoffline" name="hot" value="0" class="custom-control-input" <?php if($row['hot']==0){echo 'checked';}?>>
                            <label class="custom-control-label" for="hotoffline">否</label>
                        </div>
                    </div>
					
                  </div>
				  </div>
				  
				  <div class="col-lg-3">
		<label class="form-control-label" for="vid">选择直播</label>
			<select class="form-control" id="vid" data-toggle="select" name="vid">
				   <?php
				  $list=$db->getAll('select * from wudu_tvlive order by id desc');
				  
				  foreach($list as $key=>$row3){
				  ?>
                    <option value="<?php echo $row3['url']?>" <?php if($row3['id'].'.html'==$row['id']){echo 'selected';}?>><?php echo $row3['name']?></option>
				  <?}?>

            </select>

			</div>
				  
				  

                 
		   </div>
		  <div class="row">

			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="dsc">描述</label>
                    <textarea class="form-control" id="dsc" name="dsc" rows="8" resize="none"><?php echo $row['name'];?></textarea>
                  </div>

			</div>
			
			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="description">优化描述</label>
                    <textarea class="form-control" id="description" name="description"  rows="8" resize="none"><?php echo $row['name'];?></textarea>
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
   form.append("id","<?php echo $_GET['id'];?>");
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/update/tvlive",
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