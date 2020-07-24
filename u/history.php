<?php
require('../init.php');

require("chk.php");

//error_reporting(E_ALL);

//ini_set('display_errors', '1');
mui_head("播放历史",0);
$sql = 'select * from wudu_user where u_name="'.$_SESSION['uid'].'"';                        
$row=$db->getRow($sql);
if($row){?>

<?php 

  require('head.php');

  $sql = 'select * from wudu_play where userid="'.$_SESSION['uid'].'" and display = 1 order by times desc';                        
  $res=$db->getAll($sql);
  $data =  groupVisit($res);
?>
    
<style>
.wdu-list-del{display:none;z-index: 9999;padding: 8px;text-align: -webkit-center;width: 1.8rem;height: 1.8rem;border-radius: 100%;background: #101010;color: #fffdfa;position: absolute;right: 10px;top: 0.3125rem;top: 10;margin-top: 0.375rem;z-index: 9999 important;float: right;right: 10;}
.wdu-list-item:hover .wdu-list-del{display:block;}
  .wdu-list-del :hover span{color:#FF9800}
</style>  
<div class="wdu-main-right wdu-col-xs12 wdu-col-md8 wdu-col-lg9">
  
  
  
  <div class="wdu-part-layout wdu-back-whits">
			<div class="wdu-list-head wdu-part-rows wdu-padding">
				<h2 class="wdu-font-xvi">播放记录</h2>
			</div>
     <hr>
    
    <?php
     $today = date('m月d日');
         
         $dtoday = $data[$today];
  
  if($dtoday){
    ?>
            <div class="wdu-list-head wdu-part-rows wdu-padding">
                <h4 class="wdu-font-xvi">今天</h4>
            </div>
           

			<ul class="wdu-list-info wdu-part-rows">
              <?php
                  
         foreach($dtoday as $k => $v){
                $cover = $v['cover'];
 ?>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload" href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" data-original="<?php echo $cover;?>">
				<span class="wdu-list-play wdu-hide-xs"></span>
				<span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $v['type'];?></span>
				</a>
                <div class="wdu-list-del" data-id = "<?php echo $v['id'];?>" title="删除"> X </div>
				<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone"><?php echo $v['name'];?></a>
                   <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block"><?php echo $v['times'];?></span>
				</li>
              <?php }?>
			</ul>
    <?php }?>
    
    <?php 
    
              $ysetday = date('m月d日',strtotime("-1 day"));
         
              $dysetday = $data[$ysetday];
  
  if($dysetday){
    
    ?>
    
            <div class="wdu-list-head wdu-part-rows wdu-padding">
                <h4 class="wdu-font-xvi">昨天</h4>
            </div>
			<ul class="wdu-list-info wdu-part-rows">
              <?php
         
         
              foreach($dysetday as $k => $v){
               $cover = $v['cover'];?>
				<li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm3 wdu-col-md3">
				<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"   href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" data-original="<?php echo $cover;?>">
				<span class="wdu-list-play wdu-hide-xs"></span>
                  <span class="wdu-list-score wdu-font-xii wdu-back-green"><?php echo $v['type'];?></span>
				</a>
               <div class="wdu-list-del" data-id = "<?php echo $v['id'];?>" title="删除"> X </div>

				<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone"><?php echo $v['name'];?></a>
                <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block"><?php echo $v['times'];?></span>
				</li>
              <?php }?>
			</ul>
    
    <?}?>
            
            <div class="wdu-list-head wdu-part-rows wdu-padding">
                <h4 class="wdu-font-xvi">更早</h4>
            </div>
    <ul class="wdu-list-info wdu-part-rows">
    
      <?php
  
      foreach($data as $date =>$day ){
        
        
        
        
        if($date !==$today&&$date !==$ysetday){
          
          
          foreach($day as $k=>$v){
          
          
          echo '
          
          
          <li class="wdu-list-item wdu-padding wdu-col-xs6 wdu-col-sm4 wdu-col-md3">
				<a class="wdu-list-pics wdu-lazy wdu-part-2by3 wdu-wide lazyload"  href="'.$v['url'].'" title="'.$v['name'].'" data-original="'.$v['cover'].'">
				<span class="wdu-list-play wdu-hide-xs"></span>
                  <span class="wdu-list-score wdu-font-xii wdu-back-green">'.$v['type'].'</span>
				</a>
                <div class="wdu-list-del" data-id = "'.$v['id'].'" title="删除">X</div>

				<a class="wdu-list-title wdu-font-xiv wdu-text-center wdu-text-sm-left wdu-visible wdu-part-eone">'.$v['name'].'</a>
                <span class="wdu-list-desc wdu-font-xii wdu-visible wdu-part-eone wdu-text-muted wdu-hide-xs wdu-show-sm-block">'.$v['times'].'</span>
				</li>
          
          
          
          ';
          
          
          
          }
          
        }
      
      
      
      
      
      
      }
  ?>
      
      
    </ul>
</div>
</div>
</div>
</div>
</div>
<script>
           
   $("body").on("click",".wdu-list-del",function(){ 
     var el = $(this).parent();
     var ids = $(this).data("id");      
    $.ajax({
			type: "POST",
			url: "https://www.5kvideo.cc/api/v1/del/history",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {id:ids,timestamp:"1552630033"},
			success: function(data) {
			var obj;
             if((typeof data=='object')&&data.constructor==Object){
                 obj=data;
             }else{
                 obj  = eval("("+data+")");
             }
              
			//layer.msg(obj.ret.msg);
              
              if(obj.code){
                el.remove();
            
            }

			},
			error: function(request) {
			},
		})       
           
           
  })
</script>
<? }?>
<?php require('footer.php');

