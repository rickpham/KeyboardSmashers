<?php 
require "connect.inc";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pinelands Music School</title>
  <link rel="shortcut icon" type="image/x-icon" href="image/logo.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link href="css/mycss.css" rel="stylesheet" type="text/css" >
  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="portal/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="portal/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="portal/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="portal/plugins/iCheck/square/blue.css">

</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="home.php" class="navbar-brand"><b>Pinelands</b>MusicSchool</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="Enrolments.php">Enrolment</a></li>
			<li><a href="About us.php">About Us</a></li>
			<li><a href="career.php">Careers</a></li>
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Login</span>
              </a>
              <?php
              if (isset($_SESSION['UserID'])){
                echo '<ul width: 370px; class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">';
              if ($_SESSION["Roll"]=="teacher"){
                echo '<img src="image/teachers/'.$_SESSION['Name'].'.png " class="img-circle" alt="User Image">';
              }
              if ($_SESSION["Roll"]=="student"){
                echo '<img src="image/profile.png" class="img-circle" alt="User Image">';
              }
              if ($_SESSION["Roll"]=="manager"){
                echo '<img src="image/profile.png" class="img-circle" alt="User Image">';
              }


              echo'
                <p>
                 '.$_SESSION["UserName"].'
                  <small>'.$_SESSION["Roll"].'</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">';
                if ($_SESSION["Roll"]=="teacher"){
                  echo '<a href="portal/teacherportal/index.php" class="btn btn-default btn-flat">Teacher Portal</a>';
                }
                if ($_SESSION["Roll"]=="student"){
                  echo '<a href="portal/index.php" class="btn btn-default btn-flat">Student Portal</a>';
                }
                if ($_SESSION["Roll"]=="manager"){
                  echo '<a href="manager/main.php" class="btn btn-default btn-flat">manager Portal</a>';
                }
                echo '</div>
                <div class="pull-right">
                  <a href="home.php?logout=true" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>';
              }
              else echo'
              <ul style="width: 370px;"class="dropdown-menu">
                <div class="login-box">
  
                   <div class="login-box-body">
                       <p class="login-box-msg">Sign in to start your session</p>
                        <!-- login form -->
                       <form action="login.php" method="post">
                           <div class="form-group has-feedback">
                               <input type="text" class="form-control" placeholder="Username"
                               name="username" required>

                               <span class="glyphicon fa fa-user form-control-feedback"></span>
                           </div>
                           <div class="form-group has-feedback">
                               <input type="password" class="form-control" placeholder="Password"
                               name="password" required>
                               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                           </div>
                           <div class="row">
                               <div class="col-xs-8">
                                   <div class="checkbox icheck">
                                       <label>
                                           <input type="checkbox"> Remember Me
                                       </label>
                                   </div>
                               </div>
                               <!-- /.col -->
                               <div class="col-xs-4">
                                    <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
                                <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" value ="Sign In">
                               </div>
                               <!-- /.col -->
                           </div>
                       </form>
                       <a href="settings/passwordchange.php">I forgot my password</a><br>
                   </div>
                   <!-- /.login-box-body -->
                </div>
         
              </ul>';
              ?>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div style="background:url('image/backk.png') no-repeat;background-size:100%;"class="content-wrapper">
    <div id ="wrap">
		
		<div class ="slider_caption">
		<h2>Music Qualifications Delivered via e-learning / Distance Education </h2>
		<p style = "color:rgb(221,75,57)"><b>IT'S AMAZING WHAT CAN HAPPEN WHEN YOU START FOR THE FUN OF IT</b></P>
		</div>

</div>
	<div id ="content">
  <!-- Couser Details, need to be modify with in the future -->
		<div id ="page-heading">
			<b>OUR COURSE</b><br>
		</div>
		<div class= "school-description_home">
		Want to study music in your spare time? Are you in a remote location? Are traditional "on campus" study options just not for you? Our music courses begin at the Cert. II level and are designed to be delivered online, without the need for external attendance at a campus. If you can play a musical instrument, or sing, and have access to a high speed internet connection, as well as a recent PC or Mac computer, then you have everything you need to begin studying towards a qualification in music.
		</div>
		<div class = "coursetype">
			<div class= "coursename">
			<b>Children Course<b/>
			</div>
			<div class= "courselink">
			&#9734;
			</div>
			<div class= "coursedescription">
			Pinelands music programs
			designed for children aged
			between 3 to 12
			</div>
		</div>

		<div class = "coursetype">
			<div class= "coursename">
			<b>Certificate Course</b>
			</div>
			<div class= "courselink">
			 &#9825;
			</div>
			<div class= "coursedescription">
			Pinelands music programs
			designed for children aged
			between 3 to 12
			</div>

		</div>
			<div class = "coursetype">
			<div class= "coursename">
			<b>Adult Course</b>
			</div>
			<div class= "courselink">
			&#9813;
			</div>
			<div class= "coursedescription">
			Pinelands music programs
			designed for children aged
			between 3 to 12
			</div>

		</div>
		   <div style="background:#083860  no-repeat;background-size:100%;"id="content2">
	 
              <div class="col-lg-3 col-md-3 col-sm-6">
                <i class="fa fa-phone"></i>
                <p style = "color:white">Call Us</p>
                <p style = "color:white">1-265-596-580</p>                
              </div>
           
            <!-- BEGAIN CALL US FEATURE -->
           
               <div class="col-lg-3 col-md-3 col-sm-6">
                <i class="fa fa-envelope-o"></i>
                <p style = "color:white">Email Address</p>
                <p style = "color:white">pineland@gmail.com</p>
          </div>
            <!-- BEGAIN CALL US FEATURE -->
         <div class="col-lg-3 col-md-3 col-sm-6">
                <i class="fa fa-map-marker"></i>
                <p style = "color:white">Office Location</p>
                <p style = "color:white">Sunnybank QLD4109</p>
           </div>
            <!-- BEGAIN CALL US FEATURE -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                <i class="fa fa-clock-o"></i>
                <p style = "color:white">Working Hours</p>
                <p style = "color:white">Monday-Friday 9.00-21.00</p>
              </div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      
      <strong>Copyright &copy; 2016 KeyboardSmashers.</strong> All rights
    reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="portal/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="portal/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="portal/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="portal/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="portal/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="portal/dist/js/demo.js"></script>
<script src="portal/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
