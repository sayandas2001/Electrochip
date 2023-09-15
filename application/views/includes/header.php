<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "icon" href = "<?php echo assets_url();?>assets/images/sachet-back-png.png" type = "image/x-icon">
    <title>SKMAT - Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo assets_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo assets_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/summernote/summernote.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/default/inilabs.css'); ?>" rel="stylesheet">
    <!-- <link href="<?php echo base_url('assets/default/style.css'); ?>" rel="stylesheet"> -->
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
      .tox-notification { display: none !important; }
    </style>
    <script src="<?php echo assets_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo assets_url(); ?>";
    </script>
    
    <!-- 
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo" target="_blank">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="fa fa-home"></i></span>
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i class="fa fa-home"></i><b> Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li> -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo assets_url();?>assets/images/sachet-back-png.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php //echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="<?php echo assets_url();?>assets/images/sachet-back-png.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php //echo $name; ?>
                      <small><?php //echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <!-- <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a> -->
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><center>> N A V B A R <</center></li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <?php
            //if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            //{
            ?>
            <?php
            //}
            //if($role == ROLE_ADMIN)
            //{
            ?>
            <li>
              <a href="<?php echo base_url(); ?>contact/1" >
                <i class="fa fa-question-circle"></i>
                <span>Contact Us</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>cms/cms_listing">
                <i class="fa fa-shield"></i>
                <span>CMS</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>banner/banner_listing">
                <i class="fa fa-flag"></i>
                <span>Banner Management</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>service/service_listing">
                <i class="fa fa-flag"></i>
                <span>Service Management</span>
              </a>
            </li>
            <!-- <li>
              <a href="<?php echo base_url(); ?>About/about_listing">
                <i class="fa fa-flag"></i>
                <span>About Us Management</span>
              </a>
            </li> -->
            <li>
              <a href="<?php echo base_url(); ?>About/fixed_content/1">
                <i class="fa fa-flag"></i>
                <span>About Us</span>
              </a>
            </li>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Blog/blog_listing">
                <i class="fa fa-flag"></i>
                <span>Our Blog</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Contact_listing">
                <i class="fa fa-flag"></i>
                <span>contact queries</span>
              </a>
            </li>
            <?php
            //}
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>