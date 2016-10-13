
<?php
require "../../connect.inc";
teacherportal_ckeck();



$id=$_SESSION["UserID"];
$action="";
$sql = "SELECT * FROM `instruments`";
$rs = $conn->prepare($sql);
$rs -> execute();
$record = $rs->FetchALL(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pinelands Music School | Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../home.php" class="logo">
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
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <?php echo '<img src="../../image/teachers/'.$_SESSION["Name"].
              '.png" class="user-image" alt="User Image">';?>
              <span class="hidden-xs"><?php echo $_SESSION["Name"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php echo '<img src="../../image/teachers/'.$_SESSION["Name"].
              '.png" class="img-circle" alt="User Image">';?>

                <p>
                  <?php echo $_SESSION["UserName"]; ?>
                  <small>Teacher</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../home.php?logout=true" class="btn btn-default btn-flat">Sign out</a>
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
            <i class="fa fa-dashboard"></i> <span>Teacher Portal Home</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Teacher Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="timetable.php"><i class="fa fa-calendar-o"></i> My Timetable</a></li>
           
            
          </ul>
        </li>
        <li class="active">
          <a href="materials.php">
            <i class="fa fa-file-text"></i> <span>Learning Materials</span>
            
          </a>
        </li>
		<li>
          <a href="studentcontact.php">
            <i class="fa fa-phone"></i> <span>Student Contacts</span>
            
          </a>
        </li>
		<li>
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
        Class Management
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
	    <div class="row">
            <div class="col-md-12">
			    <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li><a href="#tab_1-1" data-toggle="tab">Class 103</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Class 102</a></li>
              <li class="active"><a href="#tab_3-2" data-toggle="tab">Class 101</a></li>
              
              <li class="pull-left header"><i class="fa  fa-file-text"></i> My Classes</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1-1">
                Twinkle, twinkle, little star,
                      How I wonder what you are!
                      Up above the world so high,
                      Like a diamond in the sky.

                      When the blazing sun is gone,
                      When he nothing shines upon,
                      Then you show your little light,
                      Twinkle, twinkle, all the night.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                Twinkle, twinkle, little star,
                      How I wonder what you are!
                      Up above the world so high,
                      Like a diamond in the sky.

                      When the blazing sun is gone,
                      When he nothing shines upon,
                      Then you show your little light,
                      Twinkle, twinkle, all the night.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_3-2">
                  <div class="box box-success">
                     <div class="box-header with-border">
                        <h3 class="box-title">Student Materials</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
					    <p><b>Attached Files:<b><p>
						<p>
						<a href="#">MSC101_Lession1 - How to Read Sheet Music.pdf</a><br>
						<a href="#">MSC101_Lession1 - Your First Lesson on the Piano.pdf</a><br>
						<a href="#">MSC101_Lession2 - How to Read Music Notes for Piano.pdf</a><br>
						<a href="#">MSC101_Lession2 - Reading Music Notes on Treble Clef and Bass Clef.pdf</a><br>
						<a href="#">MSC101_Lession3 - How to Read Sheet Music.pdf</a>
					    </p>
						<p><b>Upload File:<b><p>
						<p>
						    <form role="form">
							    <input type="file" id="example">
								<button style="margin-top:10px"type="submit" class="btn btn-primary">Submit</button>
							</form>
						</p>
                
                     </div>
                     <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
				  
				  <div class="box box-primary">
                     <div class="box-header with-border">
                        <h3 class="box-title">Make an Annoucement</h3>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
					    <form role="form">
							    <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                </div>
								<div class="form-group">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
								<div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Students can view
                                    </label>
                                </div>
								<button type="submit" class="btn btn-primary">Submit</button>
								
							</form>
                
                     </div>
                     <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
				  
				  
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
			
		</div>
		
		<div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Music Instruments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
      
        <!-- table for available instruments -->
              <table class="table">
                <tr>
                  <th style="width:150px">Instrument</th>
                  <th>Description</th>
                  <th>Rental Cost (per month)</th>
                  <th style="width: 300px">Availablility</th>
                </tr>
                <?php 
                foreach($record as $data)
                 { 
                  $instrumentID=$data['instrumentID'];     
                  $type=$data['instrumentType'];
                  $description=$data['conditionQuality'];
                  $cost=$data['hireCost'];
                  $quantity=$data['Quantity'];
                  if($quantity>0)
                  {
                     $status="success";
                     $value="Available";
                  }
                  else {
                    $status="danger";
                    $value="Unavailable";
                    $action="";
                  }
                echo '
                <tr>
                  <td><img src="../dist/img/'.$type.'.png" alt="" style="width:100px;height:100px"></td>
                  <td>'.$description.'</td>
                  <td>
                    <span class="badge bg-yellow">'.$cost.'</span>
                  </td>
                  <td><span style="width:100px" class="btn btn-'.$status.' btn-xs">'.$value.'</span></td>
                </tr>';
                }
                ?>
               
              </table>    
              </div>
            </div>
            <!-- /.box-body -->
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
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>