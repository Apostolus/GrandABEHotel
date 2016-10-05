<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>GrandABE Hotel</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

		<script   src="http://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/list.min.js"></script>
	</head>

	<style>
		.navbar-nav h4
		{
			font-family: 'Roboto', sans-serif !important;
			font-weight: 400 !important;
		}

		.dropdown-menu li a
		{
			font-family: 'Roboto', sans-serif !important;
			font-weight: 300 !important;
		}

		body
		{
			font-family: 'Roboto', sans-serif !important;
		}
	</style>

	<body> 

	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ABENavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs" href="#">GrandABE Hotel</a>
			</div>
			<div class="collapse navbar-collapse" id="ABENavbar">
				<ul class="nav navbar-nav col-sm-5">
					<li class="leftNav"><a href="<?php echo site_url();?>rooms"><h4>Rooms</h4></a></li>
					<li class="dropdown leftNav">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4><img src="<?php echo base_url(); ?>assets/img/ui/arrow.png" class="dropdown-img">The Hotel</h4></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo site_url();?>about">About GrandABE</a></li>
							<li><a href="<?php echo site_url();?>philosophy">Our Philosophy</a></li>
						</ul>
					</li>
				</ul>
				<div class="nav navbar-nav col-sm-2 topbar-brand-logo hidden-xs" style="padding-left: 15px;">
					<a href="<?php echo site_url(); ?>" style="padding:0"><center><img src="<?php echo base_url(); ?>assets/img/top_logo_small.png"></center></a>
				</div>
				<ul class="nav navbar-nav col-sm-5 ">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4><img src="<?php echo base_url(); ?>assets/img/ui/arrow.png" class="dropdown-img">Services</h4></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo site_url() ?>businessandmeeting">Business & Meeting</a></li>
							<li><a href="<?php echo site_url() ?>facilities">Facilities</a></li>
							<li><a href="<?php echo site_url() ?>packages">Packages</a></li>
						</ul>
					</li>
					<li><a href="#"><h4>Contact</h4></a></li> 
				</ul>
			</div>
		</div>
	</nav>

	<div style="height:3vh; width: 100%"></div> <!-- CHANGE HEIGHT -->