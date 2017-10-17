
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php // echo view('dashboard/head/index');?>
<body>
<div id="wrapper">
      <!----->
      
      <script src="<?php echo base_url('assests/jquery/jquery-1.9.1.min.js');?>"></script>
      <script src="<?php echo base_url('assests/profile/jquery.mockjax.js');?>"></script>
      
       <!-- bootstrap -->
        <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assests/bootstrap/css/bootstrap-responsive.css')?>" rel="stylesheet">  
        <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.js')?>"></script>
      
        <link href="<?php echo base_url('assests/bootstrap-editable/bootstrap-editable.css');?>" rel="stylesheet">
        <script src="<?php echo base_url('assests/bootstrap-editable/bootstrap-editable.js');?>"></script>
      
        <!-- momentjs --> 
        <script src="<?php echo base_url('assests/profile/moment.min.js');?>"></script> 
       
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
                            <img src="<?php echo base_url('images/pr.jpg');?>" alt="">
			</div>
			<div class="col-md-8 profile-text">
                            <h6>
                                <a href="" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"><?= strtoupper($first_name.' '.$last_name)?></a>
                            </h6>
				<table>
				<tr><td>Department</td>  
				<td>:</td>  
				<td>Web Designer</td></tr>
				
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><a href="info@gmail.com"><?= $email_address ?></a></td>
				</tr>
				<tr>
				<td>Skills</td>
				<td> :</td>
				<td> HTML, CSS,Jqury, Bootstrap</td>
				</tr>
				<tr>
				<td>Country </td>
				<td>:</td>
				<td> United Arab Emirates</td>
				</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Followers</p>
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>348</h4>
				<p>Following</p>
				<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Snippets</p>
				<a href="#"><i class="fa fa-cog"></i>Options</a>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--//gallery-->
		<!---->
                <?php echo view('dashboard/footer/index'); ?>
</div>
</div>
<div class="clearfix"> </div>
</div>
    
    <script src="<?php echo base_url('assests/profile/demo-mock.js');?>"></script> 
    <script src="<?php echo base_url('assests/profile/demo.js');?>"></script>      
    
<!---->

<!--scrolling js-->
	<!--<script src="js/jquery.nicescroll.js"></script>-->
	<!--<script src="js/scripts.js"></script>-->
	<!--//scrolling js-->

</body>
</html>



