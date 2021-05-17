<?php
SESSION_START();
if(isset($_SESSION['admin'])){
  $admin = $_SESSION['admin'];
}
else{
  header('Location:au.php');
}
  date_default_timezone_set("ASIA/JAKARTA");
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
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />

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
          <li>
            <a class="logout" href="login.php">Logout</a>
          </li>
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
      <section class="wrapper">
        <div class="container">
              <h3><i class="fa fa-angle-right"></i> History Bet Number</h3>
  <div class="row mb"> </div>
    <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>E-Mail</th>
            <th class="hidden-phone">Diamond</th>
            <th class="hidden-phone">Number</th>
            <th class="hidden-phone">Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = mysqli_connect("localhost","id14759530_cafuser","Bk-820201.290399","id14759530_caf");
          

          $sql = 'SELECT * FROM LogLuckyNumber';
    
          $query = mysqli_query($conn, $sql);
          
          $no   = 1;
          while ($row = mysqli_fetch_array($query))
            {
              echo '<tr>
              <td>'.$no.'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['diamond'].'</td>
              <td>'.$row['number'].'</td>
              <td>'.$row['betDate'].'</td>
              </tr>';
            
            $no++;
            }   
        ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
</section>
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
  <!--Boostrap -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
   <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
   <!--DataTables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
   <!--DateRangePicker -->
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  
  <script type="text/javascript"> 
   //fungsi untuk filtering data berdasarkan tanggal 
   var start_date;
   var end_date;
   var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
      var dateStart = parseDateValue(start_date);
      var dateEnd = parseDateValue(end_date);
      //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
      //nama depan = 0
      //nama belakang = 1
      //tanggal terdaftar =2
      var evalDate= parseDateValue(aData[4]);
        if ( ( isNaN( dateStart ) && isNaN( dateEnd ) ) ||
             ( isNaN( dateStart ) && evalDate <= dateEnd ) ||
             ( dateStart <= evalDate && isNaN( dateEnd ) ) ||
             ( dateStart <= evalDate && evalDate <= dateEnd ) )
        {
            return true;
        }
        return false;
  });

  // fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
  function parseDateValue(rawDate) {
      var dateArray= rawDate.split("-");
      var parsedDate= new Date(dateArray[0], parseInt(dateArray[1])-1, dateArray[2]);  // -1 because months are from 0 to 11   
      return parsedDate;
  }    

  $( document ).ready(function() {
  //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
   var $dTable = $('#example').DataTable({
    "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>"
   });

   //menambahkan daterangepicker di dalam datatables
   $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="glyphicon glyphicon-calendar"></i> </div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Search by date range.."> </div>');

   document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

   //konfigurasi daterangepicker pada input dengan id datesearch
   $('#datesearch').daterangepicker({
      autoUpdateInput: false
    });

   //menangani proses saat apply date range
    $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
       $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
       start_date=picker.startDate.format('YYYY-MM-DD');
       end_date=picker.endDate.format('YYYY-MM-DD');
       $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
       $dTable.draw();
    });

    $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
      start_date='';
      end_date='';
      $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
      $dTable.draw();
    });
  });
</script>
</body>
</html>