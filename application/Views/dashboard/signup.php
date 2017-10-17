
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
<style>

    label.btn span {
      font-size: 1.0em ;
    }

    label input[type="radio"] ~ i.fa.fa-circle-o{
        color: #c8c8c8;    display: inline;
    }
    label input[type="radio"] ~ i.fa.fa-dot-circle-o{
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-circle-o{
        display: none;
    }
    label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
        color: #7AA3CC;    display: inline;
    }
    label:hover input[type="radio"] ~ i.fa {
    color: #7AA3CC;
    }

    label input[type="checkbox"] ~ i.fa.fa-square-o{
        color: #c8c8c8;    display: inline;
    }
    label input[type="checkbox"] ~ i.fa.fa-check-square-o{
        display: none;
    }
    label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
        display: none;
    }
    label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
        color: #7AA3CC;    display: inline;
    }
    label:hover input[type="checkbox"] ~ i.fa {
    color: #7AA3CC;
    }

    div[data-toggle="buttons"] label.active{
        color: #7AA3CC;
    }

    div[data-toggle="buttons"] label {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 2em;
    text-align: left;
    white-space: nowrap;
    vertical-align: top;
    cursor: pointer;
    background-color: none;
    border: 0px solid 
    #c8c8c8;
    border-radius: 3px;
    color: #c8c8c8;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    }

    div[data-toggle="buttons"] label:hover {
    color: #7AA3CC;
    }

    div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
    -webkit-box-shadow: none;
    box-shadow: none;
    }



</style>
    
</head>
<body>
	<div class="login">
		<h1><a href="index.html">Admin Panel </a></h1>
                <form action="<?php echo base_url('index.php/admin/signup/add_user');?>" method="post" >
		<div class="login-bottom">
			<h2>Register</h2>
			<div class="col-md-6">
                                <div class="login-mail">                                    
                                    <div class="col-10">
                                        <input class="form-control" placeholder="First Name" type="text" name="first_name">
                                    </div>
				</div>
                                <div class="login-mail">                                    
                                    <div class="col-10">
                                        <input class="form-control" placeholder="Last Name" type="text" name="last_name">
                                    </div>
				</div>
				<div class="login-mail">
					<input type="text" name="email_address" placeholder="Email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="radio" name='user_sex' value="Male" checked><i class="fa fa-circle-o fa-0xs"></i><i class="fa fa-check-circle-o fa-0xs"></i><span> Male</span>
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name='user_sex' value="Female"><i class="fa fa-circle-o fa-0xs"></i><i class="fa fa-check-circle-o fa-0xs"></i><span> Female</span>
                                        </label>
                                    </div>
				</div>
				<div class="login-mail">
					<input type="password" name="user_password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Repeated password" required="">
					<i class="fa fa-lock"></i>
				</div>
				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>I agree with the terms</label>
					   </a>
	
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Submit">
					</label>
					<p>Already register</p>
				<a href="login" class="hvr-shutter-in-horizontal">Login</a>
			</div>
			<div class="clearfix"> </div>
		</div>
                </form>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2017 Minimal. All Rights Reserved | Design by <a href="" target="_blank">Vishal Mistry</a> </p>	    </div>
	  
<!---->
<!--scrolling js-->
	<script src="<?php // echo base_url('js/jquery.nicescroll.js');?>"></script>
	<script src="<?php echo base_url('js/scripts.js');?>"></script>
	<!--//scrolling js-->
</body>
</html>

