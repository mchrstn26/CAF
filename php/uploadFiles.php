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
              <i class="fa fa-th"></i>
              <span>Statement Panel</span>
              </a>
            <ul class="sub">
              <li><a href="testsort.php">Most Bet Number</a></li>
               <li><a href="faq.php">Change Diamond Price</a></li>
              <li><a href="faq.php">Content Panel</a></li>
            </ul>
          </li> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Content File Upload</h3>           
          <div id="edit" class="tab-pane">
                    <div class="row">
                      <?php 
                        $conn = mysqli_connect("localhost","id14759530_cafuser","Bk-820201.290399","id14759530_caf");
                        if(isset($_POST['upload']))
                        {
                            $temp = $_FILES['image']['tmp_name'];
                            $name = rand(0,9999).$_FILES['image']['name'];
							$size = $_FILES['image']['size'];
							$type = $_FILES['image']['type'];
                            $keterangan = $_POST['descr'];
                            $judul = $_POST['title'];
                            $folder = "files/";
                            if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
                                move_uploaded_file($temp, $folder . $name);
                                mysqli_query($conn, "INSERT into events (title, descr, image) values ('$judul','$keterangan','$name')");
                                header('location:contentUpload.php');
                            }else{
                                echo "<b>Gagal Upload File</b>";
                            }
                        }
                        ?>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Events Form</h4>
                        <form role="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Image Events</label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos" name="image">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder="Input the Events Title" id="title" class="form-control" name="title">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                              <textarea rows="10" cols="30" class="form-control" id="" name="descr"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-theme start" name="upload">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                                </button>
                              <button type="reset" class="btn btn-theme02 cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                                </button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
              
              <!-- /row -->
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped">
                <tbody class="files">
                </tbody>
              </table>
            
            <br>
            <div class="content-panel">
              <div class="panel-body">
                <h4>Demo Notes</h4>
                <ul>
                  <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                  <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed by default there is no file type restriction).</li>
                  <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (Please as soon as possible to Upload).</li>
                  <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="http://geotag12345.000webhostapp.com/panel/Admin/index.php">Browser support</a>).</li>
                </ul>
                
              </div>
            </div>

        
            <!-- /panel -->
            
          </div>
        </div>
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
  <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
  <script src="lib/file-uploader/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
  <!-- blueimp Gallery script -->
  <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="lib/file-uploader/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload.js"></script>
  <!-- The File Upload processing plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-process.js"></script>
  <!-- The File Upload image preview & resize plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-image.js"></script>
  <!-- The File Upload audio preview plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-audio.js"></script>
  <!-- The File Upload video preview plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-video.js"></script>
  <!-- The File Upload validation plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-validate.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="lib/file-uploader/js/jquery.fileupload-ui.js"></script>
  <!-- The main application script -->
  <script src="lib/file-uploader/js/main.js"></script>
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
    <script src="assets/file-uploader/js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->
  <!-- The template to display files available for upload -->
  <script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
      <td>
        <span class="preview"></span>
      </td>
      <td>
        <p class="name">{%=file.name%}</p>
        <strong class="error text-danger"></strong>
      </td>
      <td>
        <p class="size">Processing...</p>
        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
        </div>
      </td>
      <td>
        {% if (!i && !o.options.autoUpload) { %}
        <button class="btn btn-primary start" disabled>
                  <i class="glyphicon glyphicon-upload"></i>
                  <span>Start</span>
              </button> {% } %} {% if (!i) { %}
        <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button> {% } %}
      </td>
    </tr>
    {% } %}
  </script>
  <!-- The template to display files available for download -->
  <script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
      <td>
        <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
      </td>
      <td>
        <p class="name">
          {% if (file.url) { %}
          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
          <span>{%=file.name%}</span> {% } %}
        </p>
        {% if (file.error) { %}
        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
        {% } %}
      </td>
      <td>
        <span class="size">{%=o.formatFileSize(file.size)%}</span>
      </td>
      <td>
        {% if (file.deleteUrl) { %}
        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
              <i class="glyphicon glyphicon-trash"></i>
              <span>Delete</span>
              </button>
        <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
        <button class="btn btn-warning cancel">
                  <i class="glyphicon glyphicon-ban-circle"></i>
                  <span>Cancel</span>
              </button> {% } %}
      </td>
    </tr>
    {% } %}
  </script>

</body>

</html>
