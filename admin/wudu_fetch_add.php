<?php
require('header.php');
function curl($url){ 
    $ch = curl_init(); 
    $timeout = 30; 
    $ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);   // 伪造ua 
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); // 取消gzip压缩
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $content = trim(curl_exec($ch)); 
    curl_close($ch); 
    return $content; 
}

function getSina($url)
{
$api = 'https://api.cn.berryapi.net/?service=Upload.Sina&AppKey=29udGFjdEBseWxhcmVzLmNvbVk5N2NBbzRFR0Jze&weburl='.$url;

$r = curl($api);

$r = json_decode($r,1);
  
$r = 'https://ww2.sinaimg.cn/large/'.$r['data']['pid'].'.jpg';
  

return $r;
}

$m=$_GET['m'];
$zd=$_GET['zd'];
$seach=curl(''.$zd.'?m='.$m);

$szz='#<li><input type="checkbox" name="copy_sel" value="(.*)" checked="" />(.*)</li>#';
$szzz='#<li>类型：<span>(.*) </span></li>#';  

$szz1='#<img class="lazy" src="(.*)" alt="(.*)" />#';  

$szz2='#<li>导演：<span>(.*)</span></li> #'; 

$szz3='#<li>主演：<span>(.*)</span></li>#'; 
$szz4='#<div class="vodplayinfo">(.*)</div>#'; 
$szz6='#<li>地区：<span>(.*)</span></li>#'; 
$szz7='#<li>语言：<span>(.*)</span></li>#'; 
$szz8='#<li>上映：<span>(.*)</span></li>#';

$szz9='#<label>(.*)</label>#';
preg_match_all($szz,$seach,$sarr);
preg_match_all($szzz,$seach,$sarrr);
preg_match_all($szz1,$seach,$sarr1);
preg_match_all($szz2,$seach,$sarr2);
preg_match_all($szz3,$seach,$sarr3);
preg_match_all($szz4,$seach,$sarr4);

preg_match_all($szz6,$seach,$sarr6);
preg_match_all($szz7,$seach,$sarr7);
preg_match_all($szz8,$seach,$sarr8);
preg_match_all($szz9,$seach,$sarr9);
$one=$sarr[2];//标题

$tpp=$sarr1[2][0];//图片
$tp=$sarr1[1][0];//图片
$dy=$sarr2[1][0];//导演
$zy=$sarr3[1][0];//主演
$jj=$sarr4[1][0];//剧情介绍
$mtype=$sarrr[1][0];//类型

$area = $sarr6[1][0];
$language = $sarr7[1][0];
$date = $sarr8[1][0];
$score = $sarr9[1][0];

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
				  <li class="breadcrumb-item" >视频采集</li>
                  <li class="breadcrumb-item active" aria-current="page">视频添加</li>
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
          <h3 class="mb-0">视频详情</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form id="post-content" >
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="name">视频名称</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="视频名称" value="<?php echo $tpp?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="picture">封面</label>
                <input type="text" class="form-control" id="picture" name="picture" value = "<?php echo getSina($tp);?>"  placeholder="视频封面" >
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="img-get">外链</label>
                <input type="text" class="form-control" id="img-get" placeholder="外链" value="<?php echo $tp;?>">
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="director">导演</label>
                <input type="text" class="form-control" id="director" name="director" placeholder="导演" value="<?php echo $dy?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="actor">主演</label>
                <input type="text" class="form-control" id="actor" name="actor" placeholder="主演" value="主演：<?php echo $zy?>">
              </div>
            </div>
			 

		   <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="integral">所需积分</label>
                <input type="text" class="form-control" id="integral" name="integral" placeholder="优化标题" value="0">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="user">可看会员级别</label>
                    <select class="form-control" id="user" name="user">
                      <option value="0">全部</option>
					    <?php
							 $list=$db->getAll('select * from wudu_user_group');
							foreach($list as $key =>$row1){
						?>
					  <option value="<?php echo $row1['ug_id']?>"><?php echo $row1['ug_name']?></option>
					  
						<? }?>
                    </select>
                  </div>
            </div>
			
			<div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="type">播放类型</label>
                    <select class="form-control" id="type" name="type">
                      <option value="tv">电视剧</option>
					  <option value="mv" selected>电影</option>
                    </select>
                  </div>
            </div>
			
			<div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="mtype">类型</label>
                <input type="text" class="form-control" id="mtype"  name="mtype" placeholder="类型" value="<?php echo $mtype?>">
              </div>
            </div>
			
			 <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="keywords">关键字</label>
                <input type="text" class="form-control" id="keywords"  name="keywords" placeholder="关键字" value="">
              </div>
            </div>

            
           
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="seoname">优化标题</label>
                <input type="text" class="form-control" id="seoname" name="seoname" placeholder="优化标题" value="">
              </div>
            </div>
			       <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="description">关键描述</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="关键描述" value=''>
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="date">年份</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="年份" value="<?php echo $date?>">
              </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="score">评分</label>
                <input type="text" class="form-control" id="score" name="score" placeholder="评分" value="<?php echo $score?>">
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="area">地区</label>
                <input type="text" class="form-control" id="area" name="area" placeholder="评分" value="<?php echo $area?>">
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="language">语言</label>
                <input type="text" class="form-control" id="language" name="language" placeholder="语言" value="<?php echo $language?>">
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
              
              <!-- Card body -->
              <div class="card-body">
                <form>
				<div class="row">
				
				<?php
  $size=count($one)-1; 
foreach ($one as $ni=>$cs){
  
  if(strstr($cs,".m3u8")==true){
//$tupian=$tp[$ni];
//$zong.=$cs;采集的时候符号不变
$zong.=str_replace("","",$cs);//采集的时候$符号变|符号
if ($size!=$ni) {
	$zong.="\r\n";
}
}
}
?>
				 
                  <div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="scontent">视频地址</label>
                    <textarea class="form-control" id="scontent" name="scontent"  rows="10" resize="none"><?php echo $zong; ?></textarea>
                  </div>

			</div>
			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="content">视频描述</label>
                    <textarea class="form-control" id="content" name="content" rows="10" resize="none"><?php echo $jj?></textarea>
                  </div>
			</div>
                  
                    	<div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="player">播放器</label>
                    <select class="form-control" id="player" name="player">
                      <option value="dp" selected>DP</option>
					  <option value="ck" >CK</option>
                    </select>
                  </div>
            </div>

				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">推荐</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="rec_on" name="rec" value="1" class="custom-control-input"  checked>
                            <label class="custom-control-label" for="rec_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="rec_off" name="rec" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="rec_off">关闭</label>
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

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
	  <script>
$(function() {
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
   var name = $("#name").val().replace(/(^\s*)|(\s*$)/g, ""),picture = $("#picture").val().replace(/(^\s*)|(\s*$)/g, ""),scontent = $("#scontent").val().replace(/(^\s*)|(\s*$)/g, "");
   if(!name||!picture||!scontent)
   {
	var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: '添加失败,请检查表单！' 
               },{
	           // settings
	           type: 'danger'
              }); return false;
   }else{
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/add/vod",
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
	window.location.href= _wudu_info.domain+'admin/wudu_fetch.html';
}, 500);
			}else{
				var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
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
  }
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
			url: "https://api.cn.berryapi.net/?service=Upload.Sina",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data:{url:weburl,AppKey:'29udGFjdEBseWxhcmVzLmNvbVk5N2NBbzRFR0Jze'},
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
  './assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'
]; 
require('footer.php');