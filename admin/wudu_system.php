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
                  <li class="breadcrumb-item active" aria-current="page">基本设置</li>
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
	$row=$db->getRow('select * from wudu_system where id = 1');
	if($row){
		?>
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">站点设置</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
		  <form id="post-content" >
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="sitename">名称</label>
                <input type="text" class="form-control" id="sitename" name="sitename" placeholder="站点名称" value="<?php echo $row['sitename'];?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="domain">域名</label>
                <input type="text" class="form-control" id="domain" name="domain" placeholder="尾部带'/'的完整域名" value="<?php echo $row['domain'];?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="keywords">关键字</label>
                <input type="text" class="form-control" id="keywords" name="keywords" placeholder="关键字" value="<?php echo $row['keywords'];?>">
              </div>
            </div>
          </div>
          <div class="row">
		    <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="seoname">优化标题</label>
                <input type="text" class="form-control" id="seoname" name="seoname" placeholder="优化标题" value="<?php echo $row['seoname'];?>">
              </div>
            </div>
			<div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="desc">描述</label>
                <input type="text" class="form-control" id="desc" placeholder="站点描述" value="<?php echo $row['desc'];?>">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                    <label class="form-control-label" for="theme">主题</label>
					<?php $fff=scandir('../moban/');?>
					<select class="form-control" name="theme">
                    <?php for($m=2;$m<count($fff);$m++){
					$mname=file_get_contents('../moban/'.$fff[$m].'/name.txt');
					if(empty($mname))
					{
						$mname=$fff[$m];
					}
                    if($fff[$m]===$row['theme'])
					{
						$sec='selected = "selected"';
					}echo '
					    <option value="'.$fff[$m].'" '.$sec.'>'.$mname.'</option>
						';
					unset($sec);unset($mname);
					}?>
                    </select>					
                  </div>
            </div>
			
            
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="hctime">缓存时间</label>
                <input type="text" class="form-control" id="hctime"  name="hctime" placeholder="缓存时间" value="<?php echo $row['hctime'];?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="postinfo">通知</label>
                <input type="text" class="form-control" id="postinfo" name="postinfo" placeholder="通知" value='<?php echo $row['postinfo'];?>'>
              </div>
            </div>
			<div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="copyright">版权信息</label>
                <input type="text" class="form-control" id="copyright" name="copyright" placeholder="版权信息" value='<?php echo $row['copyright'];?>'>
              </div>
            </div>
          </div>
		  <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="adtime">播放前广告(s)</label>
                <input type="text" class="form-control" id="adtime" name="adtime" placeholder="播放前广告" value='<?php echo $row['adtime'];?>'>
              </div>
            </div>
			<div class="col-md-9">
              <div class="form-group">
                <label class="form-control-label" for="tongji">统计代码</label>
                <input type="text" class="form-control" id="tongji" name="tongji" placeholder="统计代码" value='<?php echo $row['tongji'];?>'>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
		<div class="col-lg-5">
          <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">首页配置</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
				<div class="row">

				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">电影</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_m_on" name="movie" value="1" class="custom-control-input" <?php if( $row['movie'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_m_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_m_off" name="movie" value="0" class="custom-control-input" <?php if( $row['movie'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_m_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
				   <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">电视剧</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_tv_on" name="tv" value="1" class="custom-control-input" <?php if( $row['tv'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_tv_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_tv_off" name="tv" value="0" class="custom-control-input" <?php if( $row['tv'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_tv_off">关闭</label>
                        </div>
                    </div>
					<div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_tv_new" name="tv_type" value="1" class="custom-control-input" <?php if( $row['tvnew'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_tv_new">最新</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_tv_hot" name="tv_type" value="0" class="custom-control-input" <?php if( $row['tvhot'] == 1 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_tv_hot">最热</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
				  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">综艺</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_va_on" name="va" value="1" class="custom-control-input" <?php if( $row['va'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_va_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_va_off" name="va" value="0" class="custom-control-input" <?php if( $row['va'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_va_off">关闭</label>
                        </div>
                    </div>
					<div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_va_new" name="va_type" value="1" class="custom-control-input" <?php if( $row['vanew'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_va_new">最新</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_va_hot" name="va_type" value="0" class="custom-control-input" <?php if( $row['vahot'] == 1 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_va_hot">最热</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  <div class="col-md-3">
				  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">动漫</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_ct_on" name="ct" value="1" class="custom-control-input" <?php if( $row['ct'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_ct_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_ct_off" name="ct" value="0" class="custom-control-input" <?php if( $row['ct'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_ct_off">关闭</label>
                        </div>
                    </div>
					<div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_ct_new" name="ct_type" value="1" class="custom-control-input" <?php if( $row['ctnew'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_ct_new">最新</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_ct_hot" name="ct_type" value="0" class="custom-control-input" <?php if( $row['cthot'] == 1 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_ct_hot">最热</label>
                        </div>
                    </div>
					</div>
                  </div>
				  
				  
				  </div>
				  
				  <div class="row">
				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">推荐分类</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_rec_on" name="recaton" value="1" class="custom-control-input" <?php if( $row['recaton'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_rec_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_rec_off" name="recaton" value="0" class="custom-control-input" <?php if( $row['recaton'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_rec_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">合作伙伴</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_parter_on" name="partner" value="1" class="custom-control-input" <?php if( $row['partner'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_parter_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_parter_off" name="partner" value="0" class="custom-control-input" <?php if( $row['partner'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_parter_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">友情链接</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_links_on" name="links" value="1" class="custom-control-input" <?php if( $row['links'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_links_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_links_off" name="links" value="0" class="custom-control-input" <?php if( $row['links'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_links_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>

				  
				  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
		
		<div class="col-lg-4">
          <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">站点配置</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
				<div class="row">
				
				<div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">网站缓存</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_cache_on" name="cache" value="1" class="custom-control-input" <?php if( $row['cache'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_cache_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_cache_off" name="cache" value="0" class="custom-control-input" <?php if( $row['cache'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_cache_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">伪静态</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_static_on" name="static" value="1" class="custom-control-input" <?php if( $row['static'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_static_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_static_off" name="static" value="0" class="custom-control-input" <?php if( $row['static'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_static_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				    <div class="col-md-3">
				  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">调试模式</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_displayerror_on" name="displayerror" value="1" class="custom-control-input" <?php if( $row['displayerror'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_displayerror_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_displayerror_off" name="displayerror" value="0" class="custom-control-input" <?php if( $row['displayerror'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_displayerror_off">关闭</label>
                        </div>
                    </div>
					</div>
                  </div>
				 
				  
				  
				  </div>
				  <div class="row">
				  <div class="col-md-4">
				  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">通知</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_post_on" name="post" value="1" class="custom-control-input" <?php if( $row['post'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_post_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_post_off" name="post" value="0" class="custom-control-input" <?php if( $row['post'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_post_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				  
				  <div class="col-md-4">
				   <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">域名防红</label>
                    <div id="custom-control-inline-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="custom-control-inline-component-tab">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_security_on" name="security" value="1" class="custom-control-input" <?php if( $row['security'] == 1 ){ echo'checked="checked"' ;}?> >
                            <label class="custom-control-label" for="index_security_on">开启</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="index_security_off" name="security" value="0" class="custom-control-input" <?php if( $row['security'] == 0 ){ echo'checked="checked"' ;}?>>
                            <label class="custom-control-label" for="index_security_off">关闭</label>
                        </div>
                    </div>
                  </div>
				  </div>
				
				  
				  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
		
		<div class="col-lg-3">
		    <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">图片管理</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
				<div class="dropzone dropzone-multiple dz-clickable" data-toggle="dropzone" data-dropzone-multiple="" data-dropzone-url="http://">
                  
                  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush"></ul>
                 <div class="dz-default dz-message"><span>网站LOGO</span></div>
				</div>
				<div class="dropzone dropzone-multiple dz-clickable" data-toggle="dropzone" data-dropzone-multiple="" data-dropzone-url="http://">
                  
                  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush"></ul>
                 <div class="dz-default dz-message"><span>打赏码</span></div>
				</div>
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
			<div class="card-header">
			<h3 class="mb-0">其他设置</h3>
               
            </div>
			<div class="card-body">
			<div class="row">
			

			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="wuduapi">默认接口</label>
                <input type="text" class="form-control" id="wuduapi" name="wuduapi" placeholder="默认接口" value="<?php echo $row['wuduapi'];?>">
              </div>
            </div>
			
			<div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="info">关注提醒</label>
                <input type="text" class="form-control" id="info" name="info" placeholder="关注提醒" value="<?php echo $row['info'];?>">
              </div>
            </div>
			
			

			</div>
			
			<div class="row">
			
			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="playapi">其他接口</label>
                    <textarea class="form-control" id="playapi" name="playapi"  rows="10" resize="none"><?php echo $row['playapi'];?></textarea>
                  </div>

			</div>

			
			<div class="col-lg-3">
			<div class="form-group">
                    <label class="form-control-label" for="offline">侵权下线</label>
                    <textarea class="form-control" id="offline" name="offline" rows="10" resize="none"><?php echo $row['offline'];?></textarea>
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
			</div>
			</div>
			</div>
  <script>
  $(function() {
  $(".save-action").click(function(){
   var form = new FormData(document.getElementById("post-content"));
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/update/sysconfig",
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
	            message:obj.msg
               },{
	           // settings
	           type: 'success'
              });
setTimeout(function() {
	//window.location.href= _wudu_info.domain+'admin/wudu_slideshow.html';
	//location.reload();
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