<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!-- <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/admin-style.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
   
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b style="font-size: large;">Ale-izba</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!--div class="pull-left">
                      <a href="<?php echo base_url(); ?>admin/dashboard/loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div-->
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>admin/login/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
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
          <ul class="sidebar-menu">
            <li class="header">ADMIN</li>
           
            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/property" >
                <i class="fa fa-pie-chart"></i>
                <span> Property </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/language" >
                <i class="fa fa-language"></i>
                <span> Language </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/status" >
                <i class="fa fa-toggle-on"></i>
                <span> Status </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/type" >
                <i class="fa fa-sitemap"></i>
                <span> Types </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/label" >
                <i class="fa fa-thumb-tack"></i>
                <span> Label </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/feature" >
                <i class="fa fa-paw"></i>
                <span> Feature </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/country" >
                <i class="fa fa-globe"></i>
                <span> Country </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/state" >
                <i class="fa fa-map-marker"></i>
                <span> State </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/city" >
                <i class="fa fa-flag"></i>
                <span> City </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/area" >
                <i class="fa fa-cube"></i>
                <span> Area </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/agency" >
                <i class="fa fa-truck"></i>
                <span> Agency </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/agent" >
                <i class="fa fa-user"></i>
                <span> Agent </span>
              </a>
            </li>

            
			     
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>