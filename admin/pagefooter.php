  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2018 <a href="<?php echo $wudu_domain;?>" class="font-weight-bold ml-1" target="_blank">雾都TV</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
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
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="./assets/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
  
  <script src="./assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  
  <!-- JS -->
  <script src="./assets/js/main.js?v=1.0.0"></script>
  <script>
 $(function() {

  $('.login-button').click(function(){
	
    var _login_u_name = $('.u_name').val(),_login_u_pwd = $('.u_password').val();
	if(!_login_u_name||!_login_u_pwd)
	{
	$.notify({
	            // options
				icon: 'ni ni-bell-55',
	            message: 'o(╥﹏╥)o ~ 请输入用户名或密码 ！' 
               },{
	           // settings
	           type: 'danger'
              });
			  
	}else{
	$.ajax({
			type: "POST",
			url: _wudu_info.domain+"Adm/user/login",
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataTpye: 'json',
			data: {u_name:_login_u_name,u_password:_login_u_pwd},
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
	            message: 'O(∩_∩)O ~ 登录成功 ' 
               },{
	           // settings
	           type: 'success'
              });

setTimeout(function() {
	window.location.href= _wudu_info.domain+'admin/wudu_welcome.html';
}, 500);
			}else{
				$.notify({
	            // options
				icon: 'ni ni-bell-55',
	            message: 'o(╥﹏╥)o ~ 登录失败 ！' 
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
</body>
</html>