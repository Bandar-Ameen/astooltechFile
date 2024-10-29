<?php
include  'api/pureheader.php';

/*if(isset($_COOKIE["tokken"])  &&  $_COOKIE["tokken"]!='')
{
          //echo "Welcome " . $_COOKIE["tokken"] . "<br />";
         
header('location:tt.php');
}else{
*/

//include './conn.php';
//include  '../conn.php';

//}




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








<div class="card login-page" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary ">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>اسطول التقنية</b></a>
    </div>
    <div class="card-body" >
      <p class="login-box-msg">تسجيل الدخول</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input id="as_email" type="email" class="form-control k-rtl" placeholder="اسم المستخدم او البريد الاكتروني ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div    class="input-group mb-3">
          <input id="as_pass"  type="password" class="form-control k-rtl" placeholder="كلمة المرور"  required  >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        
              <div class="input-group">
                        
                        <label  class="col-form-label" for="screendispp"><i ></i></label>
                   <input style="margin:0px;"  id="screendispp" class="form-control" />
    
 </div>
        
        
        <div class="row">

          <!-- /.col -->
          
            
            
                      <div class="col-12">
                      	
                      <button  onclick="mylog('as_enter')" style="margin :5px 5px 5px 5px;float:right;"  id="as_enter" name="as_enter" data-dismiss="modal"  class="btn btn-primary as_enter"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>   ...انتظر"       type="button">
    <i class="k-icon k-i-user"></i>
دخول
</button>
                      
         
          </div>
            
          </div>
      
              <p class="mb-1">
        <a href="restpass.php">نسيت كلمة المرور </a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">إنشاء حساب جديد</a>
      </p>
          
        </div>
             
        
      </form>
 
     
         

      
      <!-- /.social-auth-links -->

 
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
	<script>


//(".grid-editv").bind('click', function () {alert("ddddd");});
var data = [
  { text: "موظف", value: "0" },
  { text: "عميل", value: "1" }
];
$("#screendispp").kendoDropDownList({
  dataSource: data,
  dataTextField: "text",
  dataValueField: "value",
  index:1
  
});


function mylog(jk){
       /* var multicolumncomboboxxm = $("#screendispp").data("kendoDropDownList");
//$("#customers").val('x');
//multicolumncomboboxxm.dataSource().read();
multicolumncomboboxxm.select(1);   
        */
      //  alert(jk);
var dropdownlist = $('#screendispp').data('kendoDropDownList');
var ui=dropdownlist.value();

a_login('as_enter',ui);

//alert(ui);
}
</script>


<?php
include 'api/purefooter.php';




?>
	
	   
	     
	<script src="dist/custome.js"></script>
	<script src="dist/reg.js"></script>
	
	

