<?php
SESSION_START();
if(isset($_SESSION['admin'])){
  $admin = $_SESSION['admin'];
}
else{
  header('Location:au.php');
}

include('library.php');
$lib = new Library();
if(isset($_GET['kode'])){
    $kode = $_GET['kode']; 
    $data_harga = $lib->get_by_id($kode);
}
else
{
    header('Location: priceList.php');
}

if(isset($_POST['tombol_update'])){
    $kode = $_POST['kode'];
    $nominal = $_POST['nominal'];
    $harga = $_POST['harga'];
    $status_update = $lib->update($kode,$nominal,$harga);
    if($status_update)
    {
        header('Location:priceList.php');
    }
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
              <li><a href="faq.php">Content Panel</a></li>
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
        <h3><i class="fa fa-angle-right"></i> Price Diamond</h3>
    <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
                     
                <h4><i class="fa fa-angle-right"></i>Current Price</h4>
                <hr>
                    <form method="post" action="">
                    <input type="hidden" name="kode" value="<?php echo $data_harga['kode']; ?>"/>
                    <div class="form-group row">
                        <label for="nominal" class="col-sm-2 col-form-label">Diamond Total</label>
                        <div class="col-sm-10">
                        <input type="text" value="<?php echo $data_harga['nominal']; ?>" name="nominal" class="form-control" id="nominal" placeholder="Input Diamond" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                        <input type="text" value="<?php echo $data_harga['harga']; ?>" name="harga" placeholder="Input Price" class="form-control" id="harga">
                        </div>
                    </div>
                    
                        <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                        
                </form>
                        <!--form action="" method="POST">  
                            <div class="form-group ">
                              <label class="control-label col-lg-2">Diamond Value</label>
                              <input type="text" name="nominal" value="<?php echo $data['nominal']; ?>" class="form-control" placeholder="Input Diamond" />
                            </div>

                            <div class="form-group ">
                              <label class="control-label col-lg-2">Price</label>
                              <input type="text" name="harga" value="<?php echo $data['harga']; ?>" class="form-control" placeholder="Input Price" />
                            </div>

                            <input type="hidden" name="kode" value="<?php echo $kode; ?>"/>
                            <button type="submit" class="btn btn-theme">Save</button>
                         
                        </form-->

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
