<?php
//register.php
//include 'api/pureheader.php';
$mykay="no";
$varables='
<div class="card register-page">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>اسطول التقنية</b></a>
    </div>
    <div class="card-body ">
      <p class="login-box-msg">تغير كلمة المرور</p>

      <form action="../../index.html" method="post">
        
        <div class="input-group mb-3">
          <input id="passre" type="password" class="form-control k-rtl" placeholder=" كلمة المرور الجديد">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="repassre" type="password" class="form-control k-rtl" placeholder="إعادة كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
  
          <!-- /.col -->
          <div class="col-12">
            <button id="btnregresend" type="button" class="btn btn-primary btn-block btnregresend">تسجيل</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="login.php" class="text-center">صفحة تسجيل الدخول</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
<!-- /.register-box -->


';
if(isset($_COOKIE["tokken"])  &&  $_COOKIE["tokken"]!='')
{
          //echo "Welcome " . $_COOKIE["tokken"] . "<br />";
         
header('location:tt.php');
}else{
$mykay=$_GET["keydata"];
include 'api/pureheader.php';
//echo $varables;
}


?>
	<body class="hold-transition  <?php echo $bb;?>-mode">



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
        <a class="nav-link" data-widget="navbar-searchh" href="#" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
        
      </li>



 

<li  class="nav-item"> <input type="checkbox" id="notifications-switch" aria-label="Notifications Switch" checked="checked" /></li>
      
    </ul>

</nav>

</div>







<footer class="main-footer">
    <strong>Copyright &copy; 2023<a href="https://astooltech.com">اسطول التقنية</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>الاصدار</b> 1.0
    </div>
  </footer>

<!-- jQuery -->

</body>
</html>

	<?php
	
	
	
require 'api/purefooter.php';


?>
	<script src="dist/custome.js"></script>
	<script src="dist/reg.js"></script>
	
	<script>
checksenderkey("<?php echo $mykay;?>");
(function ($) {
	

$(".btnregresend").click( e =>{
		alert("fffff");
});

})(jQuery)
</script>

	
	