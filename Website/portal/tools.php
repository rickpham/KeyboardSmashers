<?php
require "../connect.inc";
portal_ckeck();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pinelands Music School | Portal</title>
  <link rel="shortcut icon" type="image/x-icon" href="../image/logo.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pinelands</b>MusicSchool</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../image/profile.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["Name"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../image/profile.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION["UserName"]; ?>
                  <small>Student</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../home.php?logout=true" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Student Portal Home</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Student Study</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="timetable.php"><i class="fa fa-calendar-o"></i> My Timetable</a></li>
            <li><a href="enrolment.php"><i class="fa fa-bookmark"></i> My Enrolment</a></li>
            
          </ul>
        </li>
        <li>
          <a href="materials.php">
            <i class="fa fa-file-text"></i> <span>Learning Materials</span>
            
          </a>
        </li>
		<li class="">
          <a href="teachercontact.php">
            <i class="fa fa-phone"></i> <span>Teacher Contacts</span>
            
          </a>
        </li>
		<li class="active">
          <a href="tools.php">
            <i class="fa fa-lightbulb-o"></i> <span>Tools</span>
            
          </a>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tools
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
	    <div class="row">
		    <div class="col-md-12">
			    <div class="box box-danger">
                    <div class="box-header with-border">
                       <h3 class="box-title">Piano</h3>

                       <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                         </button>
                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                       </div>
                    </div>
                    <div class="box-body">
                        <!-- Piano -->
  <ul class="piano">
    <li class="key">
      <span class="white-key" data-key="20" data-note="1C"></span>
      <span class="black-key" data-key="81" data-note="1Cs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="65" data-note="1D"></span>
      <span class="black-key" data-key="87" data-note="1Ds"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="83" data-note="1E"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="68" data-note="1F"></span>
      <span class="black-key" data-key="82" data-note="1Fs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="70" data-note="1G"></span>
      <span class="black-key" data-key="84" data-note="1Gs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="71" data-note="2A"></span>
      <span class="black-key" data-key="89" data-note="2As"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="72" data-note="2B"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="74" data-note="2C"></span>
      <span class="black-key" data-key="73" data-note="2Cs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="75" data-note="2D"></span>
      <span class="black-key" data-key="79" data-note="2Ds"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="76" data-note="2E"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="186" data-note="2F"></span>
      <span class="black-key" data-key="219" data-note="2Fs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="222" data-note="2G"></span>
      <span class="black-key" data-key="221" data-note="2Gs"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="220" data-note="3A"></span>
      <span class="black-key" data-key="13" data-note="3As"></span>
    </li>
    <li class="key">
      <span class="white-key" data-key="37" data-note="3B"></span>
    </li>
  </ul>
  <!-- End Piano -->
    
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
			
			</div>
			<div class="col-md-6">
			    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Online Tutorials</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <iframe width="560" height="315" 
				src="https://www.youtube.com/embed/QHs_2-pB_6c?list=PLUyDmNalB0rjP2anw_332rs8-oJMapOMU" 
				frameborder="0" allowfullscreen></iframe>
				
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			</div>
        
        </div>

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    
    <strong>Copyright &copy; 2016 KeyboardSmashers.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Scripts -->
  <script type="text/javascript" src="assets/js/scripts.min.js"></script>
  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-45159592-1', 'felipefialho.com');
  ga('send', 'pageview');
  </script>


</body>
</html>
