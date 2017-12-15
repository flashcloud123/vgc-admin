<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
  	<link href="<?php echo base_url('assets/'); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('assets/'); ?>css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="<?php echo base_url(); ?>"> Admin Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                         
	                          <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
	                          <li><a href="<?php echo base_url('dashboard/change_password'); ?>">Change password</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo base_url('dashboard'); ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                   
                   
					<li><a href="<?php echo base_url('dashboard/menu'); ?>"> Menu</a></li>
					<li><a href="<?php echo base_url('dashboard/logo'); ?>"> Logo</a></li>
					<li><a href="<?php echo base_url('dashboard/banner_section'); ?>"> home section</a></li>
					<li><a href="<?php echo base_url('dashboard/paper'); ?>"> White paper</a></li>
					<li><a href="<?php echo base_url('dashboard/terms'); ?>"> Terms</a></li>
					<li><a href="<?php echo base_url('dashboard/token_info'); ?>"> Token info</a></li>
					<li><a href="<?php echo base_url('dashboard/contribute'); ?>"> contribute</a></li>
					<li><a href="<?php echo base_url('dashboard/contribute_mew'); ?>"> How to MEW</a></li>
					<li><a href="<?php echo base_url('dashboard/contribute_metamask'); ?>">How to Metamask</a></li>
					<li><a href="<?php echo base_url('dashboard/note'); ?>">Note</a></li>
					
					</ul>
             </div>
		  </div>
