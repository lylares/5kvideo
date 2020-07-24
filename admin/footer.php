
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2018 <a href="<?php echo $wudu_domain;?>" class="font-weight-bold ml-1" target="_blank">雾都TV</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.lylares.com" class="nav-link" target="_blank">LYLARES'S BLOG</a>
              </li>
              <li class="nav-item">
                <a href="https://www.berryapi.net" class="nav-link" target="_blank">BERRYAPI</a>
              </li>
              <li class="nav-item">
                <a href="https://mv.lylares.com" class="nav-link" target="_blank">音悦台</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="./assets/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
  <!-- Optional JS -->
  <?php if($pscript)
  {
   addScript($pscript);
   }?>
  <script src="./assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  <!-- JS -->
  <script src="./assets/js/main.js?v=1.0.0"></script>
  <script>
  $(function() {
  var username = '<?php echo $_SESSION['user_name']; ?>';
  $(".login-out").click(function(){
$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/user/loginout",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {u_name:username},
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

 var notify = $.notify({
	            // options
				icon: 'alert-icon ni ni-bell-55',
	            message: 'O(∩_∩)O ~ 你已退出登录 ！' 
               },{
	           // settings
	           type: 'success'
              });

setTimeout(function() {
	window.location.href= _wudu_info.domain+'admin/';
},500);
			}
			},
			error: function(request) {
			},
		});
  })
  })
  </script>
</body>
</html>