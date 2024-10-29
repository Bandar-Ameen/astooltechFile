<?php
if(isset($_COOKIE["tokken"])  &&  $_COOKIE["tokken"]!='')
{
          //echo "Welcome " . $_COOKIE["tokken"] . "<br />";
         
header('location:tt.php');
}else{

include 'api/pureheader.php';
}




?>
	
	<body class="hold-transition  <?php echo $bb;?>-mode">



<div class="wrapper">


<nav style="margin-left:0;" class="main-header   navbar navbar-expand navbar-<?php echo $bb; ?>">
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








<div class="card login-page">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary ">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>اسطول التقنية</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">تسجيل الدخول الي النظام</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input id="memail" type="email" class="form-control k-rtl" placeholder="البريد الإلكتروني ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div    class="input-group mb-3">
          <input id="mpass" type="password" class="form-control k-rtl" placeholder="كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
              	تذكر كلمة المرور
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button id="btnlogin" type="button" class="btn btn-primary btn-block btnlogin">دخول</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="restpass.php">نسيت كلمة المرور </a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">إنشاء حساب جديد</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  </div>
  <!-- /.card -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023<a href="https://astooltech.com">اسطول التقنية</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>الاصدار</b> 1.0
    </div>
  </footer>

<!-- /.login-box -->

<!-- jQuery -->

</body>
</html>
	

<?php
include 'api/purefooter.php';


?>
	
	<script src="dist/custome.js"></script>
	<script src="dist/reg.js"></script>
	