<?php
SESSION_START();
if(isset($_SESSION['admin'])){
  $admin = $_SESSION['admin'];
}
else{
  header('Location:au.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>CAF Technology</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>CAF<span>Technology</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
     <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $admin ?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Admin Profile</span>
              </a>
            <ul class="sub">
              <li><a href="profile.php">General Profile</a></li>
              <li><a href="calendar.php">Calendar</a></li>
              <li><a href="faq.php">FaQ</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Client Data</span>
              </a>
            <ul class="sub">
              <li><a href="client_info.php">Client Information</a></li>
               <li><a href="bet_log.php">Diamond Bet Log</a></li>
              <li><a href="payment_log.php">Payment Log</a></li>
            </ul>
          </li> 

           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Statement Panel</span>
              </a>
            <ul class="sub">
              <li><a href="mostNumber.php">Most Bet Number</a></li>
               <li><a href="priceList.php">Change Diamond Price</a></li>
              <li><a href="contentUpload.php">Content Panel</a></li>
            </ul>
          </li> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
      
      *********************************************************************************************************************************************************** -->
     <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Events CAF Technology</h3>
        <div class="row">
    <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Current Events</h4>
                <hr>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> ID Events</th>
                    <th><i class="fa fa-bookmark"></i> Title</th>
                    <th><i class=" fa fa-edit"></i> Description</th>
                    <th><i class="fa fa-bookmark"></i> Images</th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $conn = mysqli_connect("localhost","id14759530_cafuser","Bk-820201.290399","id14759530_caf");
          

                      $sql = 'SELECT * FROM events';
    
                      $query = mysqli_query($conn, $sql);
          
                      $no   = 1;
                        while ($row = mysqli_fetch_array($query))
                          {
                            echo '<tr>
                            <td>'.$no.'</td>
                            <td>'.$row['idEvents'].'</td>
                            <td>'.$row['title'].'</td>
                            <td>'.$row['descr'].'</td>
                            <td>
                            <button class="btn btn-primary btn-xs"><a href="editPrice.php"><i class="fa fa-pencil" style="color:#FFFF00;">Edit</i></a></button>
                            <button class="btn btn-danger btn-xs"><a href="action.php"><i class="fa fa-trash-o" style="color:#FFFF00;">Delete</i></a></button>
                            </td>
                            </tr>';
            
                            $no++;
                          }   
                      ?>
                      <button class="btn btn-success btn-xs"><a href="uploadFiles.php"><i class="fa fa-check" style="color:#FFFFFF;">Tambah</i></a></button>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
        </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>CAF Technology</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with CAF Technology</a>
        </div>
        <a href="index.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
   <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
   <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>

</body>

</html>
