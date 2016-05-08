<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

		<title><?php echo $title;?></title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
		<!--external css-->
		<link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet" />
	
		<!-- Custom styles for this template -->
		<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet">
	</head>

	<body>

		<section id="container" >
			<!--header start-->
			<header class="header black-bg">
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
				</div>
				<!--logo start-->
				<a href="<?php echo base_url();?>welcome/index" class="logo"><b>DASHGUM</b></a>
				<!--logo end-->
				<div class="top-menu">
					<!--<ul class="nav pull-right top-menu">
						<li><a class="logout" href="login.html">Logout</a></li>
					</ul>-->
				</div>
			</header>
			<div class="black-bg1">
				<!--sdfsf-->
			</div>
			<!--header end-->
      
			<!--sidebar start-->
			<aside>
				<div id="sidebar"  class="nav-collapse ">
					<!-- sidebar menu start-->
					<ul class="sidebar-menu" id="nav-accordion">
						<li>
							<a class="active" href="<?php echo base_url();?>welcome/index">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-desktop"></i>
								<span>UI Elements</span>
							</a>
							<ul class="sub">
								<li><a  href="<?php echo base_url();?>welcome/general">General</a></li>
								<li><a  href="<?php echo base_url();?>welcome/button">Buttons</a></li>
								<li><a  href="<?php echo base_url();?>welcome/panel">Panels</a></li>
							</ul>
						</li>
					</ul>
					<!-- sidebar menu end-->
				</div>
			</aside>
			<!--sidebar end-->
      
			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<div class="row">
						<div class="col-lg-12 main-chart">
							<!-- 1st row-->
							<div class="row">
								<div class="col-lg-9 main-chart">
									<?php echo $maincontent;?>
								</div>
								<div class="col-lg-3 ds">
									<?php if(isset($category)){?>
									<div>
										<!--COMPLETED ACTIONS DONUTS CHART-->
										<center><h4>Category</h4></center>
													
										<!-- First Action -->
										<ul class="sub">
											<li><a  href="<?php echo base_url();?>welcome/category1">category1</a></li>
											<li><a  href="buttons.html">category2</a></li>
											<li><a  href="panels.html">category3</a></li>
										</ul>
									</div>
									<?php 
										}
										if(isset($recent_post)){
									?>
									<div>
										<!--COMPLETED ACTIONS DONUTS CHART-->
										<center><h4>Recent Post</h4></center>
													
										<!-- First Action -->
										<ul class="sub">
											<li><a  href="general.html">recent1</a></li>
											<li><a  href="buttons.html">recent2</a></li>
											<li><a  href="panels.html">recent2</a></li>
										</ul>
									</div>
									<?php 
										}
										if(isset($popular_post)){
									?>
									<div>
										<!--COMPLETED ACTIONS DONUTS CHART-->
										<center><h4>Popular Post</h4></center>
													
										<!-- First Action -->
										<ul class="sub">
											<li><a  href="general.html">popular1</a></li>
											<li><a  href="buttons.html">popular2</a></li>
											<li><a  href="panels.html">popular3</a></li>
										</ul>
									</div>
									<?php 
										}
									?>
								</div>
							</div>
						</div><!-- /col-lg-9 END SECTION MIDDLE -->
					</div><! --/row -->
				</section>
			</section>
		</section>

		<!-- js placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script class="include" type="text/javascript" src="<?php echo base_url();?>js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="<?php echo base_url();?>js/jquery.scrollTo.min.js"></script>
		
		<!--common script for all pages-->
		<script src="<?php echo base_url();?>js/common-scripts.js"></script>
		
	</body>
</html>
