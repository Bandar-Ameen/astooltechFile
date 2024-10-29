<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<!DOCTYPE html>

<?php

$vv=2;
$darkk="control-sidebar-light";
$bb="light";
$cc="def.css";
if (isset($_COOKIE["kkm"])) 
{
$vv= $_COOKIE["kkm"]; 

}
//require_once ("component.php");

if($vv==1){
	$darkk="control-sidebar-dark";
	
	$bb="dark";
$cc="Classic_202211080018.css";
	}
//:
?>
<html  lang="ar"data-bs-set-darkmode-onload="true">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>اسطول التقنية</title>

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernothe -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
		 <link     rel="stylesheet" href="dist/telerik/<?php echo $cc; ?>"  />
		<link rel="stylesheet" href="dist/css/custom.css"/>
	  <script src="dist/telerik/jquery.min.js"></script>
    
    
    <script src="dist/telerik/kendo.all.min.js"><</script>
  
 <script type="text/javascript">

	
 $(document).ready(function () {
	// $('body').addClass('dark-mode');
	//alert("ffff");
 $(document.body).addClass("k-content");


	});


	
	function jsFunction(sampleData)
{ 
	//alert("ffffff");
	var dataSource = new kendo.data.DataSource({
                transport: {
                    read: function (e) {
	
	
	const obj = JSON.parse(sampleData);
                      // On success.
                        e.success(obj);
                        // On failure.
                        //e.error("XHR response", "status code", "error message");
                    }
}
            });



$("#grid").kendoGrid({
                dataSource: dataSource,
              

         height: 680, 
                editable: "incell",
                pageable: true,
                sortable: true,
                navigatable: true,
                resizable: true,
                reorderable: true,
                groupable: true,
                filterable: true,
            pageSize: 5,   
                toolbar: [
{name:"search"},
/*{name:"hvhh" ,text:"تعديل",  iconClass: "k-icon k-i-pencil"}
,
{name:"hhh" ,text:"حذف",  iconClass: "k-icon k-i-trash"}
,
{name:"hvhh" ,text:"حفظ",  iconClass: "k-icon k-i-save"}
,
{name:"hhh" ,text:"جديد",  iconClass: "k-icon k-i-plus-outline"}
*/
],

                
                columns: [
                    { field: "user_id", title: "Mobile Phone",width: "200px"  },
                    { field: "firstname", title: "Introduced", width: "200px" },
                    { field: "lastname", title: "Price", width: "120px" },
                    { field: "address", title:"Units In Stock", width: "120px" },
                 
                    { command: [

{name:"updatev" ,text:"تعديل",iconClass: "k-icon k-i-info"}
,
{name:"seltes"     ,
                 text:"حذف",iconClass: "k-icon k-i-trash"}

], title: "&nbsp;",background:"red",width: "200px" }
                ],
                editable: "inline"
            });
        

	}	</script>
	<script src="dist/them.js"></script>

	

</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<nav class="main-header   navbar navbar-expand navbar-<?php echo $bb; ?>">
<ul class="navbar-nav">
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">اسطول التقنية</a>

      </li>
    </ul>

   <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>



   <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
<li  class="nav-item"> <input type="checkbox" id="notifications-switch" aria-label="Notifications Switch" checked="checked" /></li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>

</nav>



</div>

   

	<div  class="k-ltr" id="grid"></div>
	
	<div class=" k-rtl card card-danger">
              <div class=" k-rtl card-header">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
	<div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                
                
                   <!-- general form elements disabled -->
            <div class=" k-rtl card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                      success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                      warning</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                      error</label>
                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Radio</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Radio checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <label class="form-check-label">Radio disabled</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Disabled</label>
                        <select class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Select Multiple</label>
                        <select multiple class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Multiple Disabled</label>
                        <select multiple class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->        
                
<footer class="main-footer">
    <strong>Copyright &copy; hhhhhhhhh href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar  <?php echo $darkk; ?>">
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">بندر المحمدي</a>
        </div>
      </div>
</div>

   <!-- Control sidebar content goes here -->
  </aside>
<?php

require 'conn.php';
						
						
						
						
			//	echo "hhhhhh";		
						
						$sql = $conn->prepare("SELECT * FROM `usera`");
						$sql->execute();
						$fetch=$sql->fetchAll();//PDO::FETCH_OBJ);
			
						$fetchh=$sql->fetch(PDO::FETCH_OBJ);
			$emparray = array();
//		echo $fetchh;
		
			//	echo $uu;
					//echo'"<script type"'text/javascrip"'>jsFunction');</script'";
						$ee;
						for( $bb =0;$bb<count($fetch);$bb++)//= $sql->fetch()){
				{
			//		echo "ggg";
									$emparray[] = $fetch[$bb];

}

$uu=json_encode($emparray);
			//		echo $uu;
					echo "<script type='text/javascript'>jsFunction('$uu');</script>";  


?>
<script src="dist/dem2.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jjquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->



<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script type="text/javascript">

	
 $(document).ready(function () {
	// $('body').addClass('dark-mode');
	//alert("ffff");
// $(document.body).addClass("kt-ltr");


	});
	</script>

</body>
</html>