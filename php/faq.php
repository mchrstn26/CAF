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
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i> F.A.Q</h3>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-question fa-3x"></i></a>
                </div>
                <h4>1. Knowledge-Base</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-envelope-o fa-3x"></i></a>
                </div>
                <h4>2. Report a Bug</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class="" href="faq.html#"><i class="dm-icon fa fa-random fa-3x"></i></a>
                </div>
                <h4>3. Submit a Ticket</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
              </div>
            </div>
            <!-- end dmbox -->
          </div>
          <!--  /col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row content-panel">
          <h2 class="centered">Most Asked Questions</h2>
          <div class="col-md-10 col-md-offset-1 mt mb">
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to purchase this template?
                    </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How can I install my server?
                    </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to change color schemes?
                    </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How to integrate Revolution Slider?
                    </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>How Can I get Support?
                    </a>
                </div>
                <div id="collapseFive" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end accordion -->
          </div>
          <!-- col-md-10 -->
        </div>
        <!--  /row -->
      </section>
      <!-- /wrapper -->
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

</body>

</html>
