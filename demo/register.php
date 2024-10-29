<?php
//register.php
//include 'api/pureheader.php';
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








<div class="card register-page">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>اسطول التقنية</b></a>
    </div>
    <div class="card-body ">
      <p class="login-box-msg">إنشاء حساب</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input id="usernamev" type="text" class="form-control k-rtl" placeholder="إسم المستخدم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="emaill" type="email" class="form-control k-rtl" placeholder="البريد الإلكتروني ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control k-rtl" placeholder="كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="repass" type="password" class="form-control k-rtl" placeholder="إعادة كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="termok" name="terms" value="agree">
              <label for="agreeTerms">
اوافق على  <a href="#">الشروط</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          	
          <button     id="btnreg" name="btnreg" data-dismiss="modal"  class="btn btn-primary button-loader btn-block btnreg"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>wating" type="button">
    <i class="k-icon k-i-lock"></i>
 تسجيل

          
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="login.php" class="text-center">يوجد لدي حساب </a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
<!-- /.register-box -->
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
	
	
	
  <script src="dist/regg.js"></script>
	<script>
		$('.btnu').on('click', function(){
  //$('.button-loader').button('loading');
 //setTimeout(function(){ $('.button-loader').button('reset'); }, 5000);

}); 

		
  $('.btnreg').on('click', function(){  $('.btnreg').button('loading');
  //setTimeout(function(){ $('.btnreg').button('reset'); }, 5000);

})
//setTimeout(function(){ $('.btnreg').button('reset'); }, 2000);



</script>
	
	
	