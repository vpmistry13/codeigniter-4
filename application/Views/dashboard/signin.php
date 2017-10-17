
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('css/style.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet"> 
<script src="<?php echo base_url('js/jquery.min.js');?>"> </script>
<script src="<?php echo base_url('js/bootstrap.min.js');?>"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="login">Admin Access </a></h1>
		<div class="login-bottom">
                   
			<h2>Login</h2>
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                        }
                            ?>
                        <form action="<?php echo base_url('index.php/admin/authenticate'); ?>" method="post">
			<div class="col-md-6">
				<div class="login-mail">
                                    <input name="email_address" type="text" placeholder="Email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
                                    <input name="user_password" type="password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>Do not have an account?</p>
				<a href="signup" class="hvr-shutter-in-horizontal">Signup</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2017 Admin. All Rights Reserved | Design by <a href="" target="_blank">Vishal Mistry</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('js/jquery.nicescroll.js');?>"></script>
	<script src="<?php echo base_url('js/scripts.js');?>"></script>
	<!--//scrolling js-->
</body>
</html>

