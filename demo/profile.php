<?php
//header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: access");
//setcookie( "tokken", "", time()- 60, "/","", 0);
//setcookie( "tokken", "", time()- 60, "/","", 0);
 //  setcookie( "tokken", "", time()- 60, "/","", 0);
function  ddd($vv){
	return "Hello World!";
//header('location:login.php');
}

if($_SERVER["REQUEST_METHOD"] != "GET"){
//echo "error";
}else{
	
	$rrrr=$_GET["name"];
//echo $rrrr;
}
if( isset($_COOKIE["tokken"])  &&  $_COOKIE["tokken"]!='')
{
       //   echo "Welcome " . $_COOKIE["tokken"] . "<br />";
         
include 'api/header.php';
include 'api/getdata.php';

$dissv =new getdataa();
}else{

header('location:login.php');
}
  $desingdynimic='
          <div class="row">
     
          <!-- /.col -->
          <div class="col-md-12" style="padding-right:10px; padding-left:10px;">    

   <div class="card">
  <div class="card card-outline card-primary">
    
    <div class="card-body k-rtl">
      <p class="login-box-msg">تغير كلمة السر</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input id="usernamev" type="text" class="form-control k-rtl" placeholder="كلمة المرور  القديم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="emaill" type="email" class="form-control k-rtl" placeholder="كلمة المرور الجديد ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control k-rtl" placeholder="إعادة إدخال كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
 
          <!-- /.col -->
          <div class="col-4">
            <button id="btnreg" type="button" class="btn btn-primary btn-block btnreg">تغير </button>
          </div>
          <!-- /.col -->
        
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
<!-- /.register-box -->
</div>
</div>
</div>
</div>

';
?>
	
	<div class="k-rtl row">
          <div class="col-12">
            <h4  style="float:right;" >الملف الشخصي</small></h4>
          </div>
        
	
	            <!-- /////////////// -->
	
	      <div class="col-md-12" style="padding-right:10px; padding-left:10px;">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?php echo $_COOKIE["username"];?></h3>
                <h5 class="widget-user-desc">محاسب</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?php  echo $_COOKIE["imageurl"];?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  
	
        <!-- ./row -->
        
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1 dd">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tabm" data-toggle="pill" href="#custom-tabs-one-homem" role="tab" aria-controls="custom-tabs-one-homem" aria-selected="true">الملف الشخصي</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tabm" data-toggle="pill" href="#custom-tabs-one-profilem" role="tab" aria-controls="custom-tabs-one-profilem" aria-selected="false">تغير كلمة السر</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tabm" data-toggle="pill" href="#custom-tabs-one-messagesm" role="tab" aria-controls="custom-tabs-one-messagesm" aria-selected="false">الاعدادات</a>
                  </li>
                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-homem" role="tabpanel" aria-labelledby="custom-tabs-one-home-tabm">
                     

              	<form  method="POST">
              <div class="input-group mb-3">

                  	<div class="row">
                  <div class="col-sm-12">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="user_idoo"><i ></i> رقم المستخدم :</label>
                    <input style="margin:5px;"  type="text" class="col-sm-3  form-control is-valid"  name="user_idoo"   id="user_idoo" placeholder="المعرف" disabled>  
                      </div>
                      </div>	
                  
                  	<div class="form-group">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 text-center">
		<img id="imm" src="<?php  echo $_COOKIE["imageurl"];?>" style="width:200px;  height: 200px;  border-radius:0%; margin:10px;">
		<input id="upimg"type="file" name="imagev" onchange="PreviewImage(1);"  class="btn btn-primary">
		
	</div>
	<div class="col-sm-4">
	</div>
</div>
                  
                  	        
                      
                      
                      
                      
                    <div class="col-sm-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="firstnamex"><i></i>إسم المستخدم:&nbsp&nbsp&nbsp&nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="firstnamex"   id="firstnamex" placeholder="إسم المستخدم ">
                 
                        
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="lastnamex"><i></i> العنوان:&nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="lastnamex" id="lastnamex" placeholder="العنوان">
                 
                        
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-sm-6">
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="emailx"><i></i> البريد الإلكتروني &nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="emailx"    id="emailx" placeholder="البريد الإلكتروني ">
                 
</div>
</div>

                    
                    
                  </div>
               <div class="row"> 
<button   style="margin :5px 5px 5px 5px; "  id="saves" name="saves" data-dismiss="modal"  class="btn btn-success ll2v"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>wating" type="button">
    <i class="k-icon k-i-save"></i>
    حفظ
</button>


	</div>
     

</form>
 
              </div>


         
                <!-- /input-group -->
              </div>
                  <div>   




</div>
                  <div class="tab-pane fade" id="custom-tabs-one-profilem" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tabm">
                   <div class="row">
     
          <!-- /.col -->
          <div class="col-md-12" style="padding-right:10px; padding-left:10px;">    

   <div class="card">
  <div class="card card-outline card-primary">
    
    <div class="card-body k-rtl">
      <p class="login-box-msg">تغير كلمة السر</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input id="usernamev" type="text" class="form-control k-rtl" placeholder="كلمة المرور  القديم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="emaill" type="email" class="form-control k-rtl" placeholder="كلمة المرور الجديد ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control k-rtl" placeholder="إعادة إدخال كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
 
          <!-- /.col -->
          <div class="col-4">
            <button id="btnreg" type="button" class="btn btn-primary btn-block btnreg">تغير </button>
          </div>
          <!-- /.col -->
        
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
<!-- /.register-box -->
</div>
</div>
</div>
</div>



                  <div class="tab-pane fade" id="custom-tabs-one-messagesm" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tabm">
                     
<?php  echo $desingdynimic;?>   

</div>
    
                </div>
              </div>
              
              
              
              
              
              
              <!-- /.card -->
            </div>
          </div>
          
	
            <!-- /////////////// -->
          </div>
          <!-- /.col -->
   
          <!-- /.col -->
        
	<script>
   var res = "success";
</script>
	
	<?php
//$uu= $dissv->display(1);

require 'api/footer.php';
 function  jjj($nn){
 	
//return setcookie( 'username', '', time()- 60, '/','', 0);
}
?>
	<script src="dist/custome.js"></script>
	<script src="dist/cookiesa.js"></script>
	<script >
		
function msggv(typp,messagg){

Swal.fire({
    toast: false,	
  
  icon: typp,
  title: messagg,
  showConfirmButton: false,
  timer: 1500
});
}
loadprofiles();

function loadprofiles(ddref){
	//alert("ffffffg");
var usernamee= $('#firstnamex').val();

		var email = $('#emailx').val();

		var address = $('#lastnamex').val();
var useridd=$('#user_idoo').val();



    //var file_data = $('#upimg').prop('files')[0];   
//    var form_data = new FormData();      
//    alert(usernamee);
   // form_data.append('mm', 'تم بحمد لله');    
    //form_data.append('sendimage', file_data);
  // var dt=JSON.stringify( { "mm":"fffffffff", "email": email,"password":file_data} ); 
// alert(form_data);                             
   $.ajax({
        url: 'http://'+ippx+':8080/api/loadprofile.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        
        processData: false,
        
         
                                
        type: 'post',
        contentType:false,
        
        
        beforeSend: function (xhr) {
    	var rrr=getCookiee("tokken");
 // alert(rrr);
//xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
    xhr.setRequestHeader ("Authorization", "Bearer " + rrr);
},
        success: function(php_script_response){
      //  alert("gggggg");
   if(isJson(php_script_response)){
var ffdd=JSON.parse(php_script_response);
//let bookname = $("input[name*='firstname']");//$("firstname']");
if(ffdd.success=='25'){
	//alert("سيتم انشاء اكسس توكن جديد");
	
//bookname.val(ffdd.token); 
eeraseCookie("tokken");
//eraseCookie("username");
wwriteCookiee("tokken",ffdd.token,20);
//wwriteCookiee("username",ffdd.username,20);
//var rrr=getCookiee("username");
//alert("اكسستوكن");
loadprofiles(ddref);
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){

eeraseCookie("imageurl");
eeraseCookie("emaill");
eeraseCookie("addressuser");
eeraseCookie("userrid");
eeraseCookie("username");
//wwriteCookiee("tokken",ffdd.token,20);
wwriteCookiee("userrid",ffdd.id,20);
wwriteCookiee("imageurl",ffdd.imageurl,20);
wwriteCookiee("emaill",ffdd.emaill,20);
wwriteCookiee("username",ffdd.username,20);
wwriteCookiee("addressuser",ffdd.addressuser,20);
//deleteCookiess();
//msggv('info',ffdd.message);
//window.location.href="profile.php";
document.getElementById("imm").src = ffdd.imageurl;
}
}

}else

{
	msggv('error',php_script_response);
//alert(php_script_response);
}

 // <-- display response from the PHP script, if any
        },
        error: function( jqXhr, textStatus, errorThrownm){
         msggv('error',JSON.stringify(jqXhr));
 //  alert(errorThrown+' hhhhh'); // <-- display response from the PHP script, if any
        }
     });

}




$.fn.button = function(action) {
  if (action === 'loading' && this.data('loading-text')) {
  this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
  }
  if (action === 'reset' && this.data('original-text')) {
  this.html(this.data('original-text')).prop('disabled', false);
  }
}






function saveprofiles(ddref){
var usernamee= $('#firstnamex').val();

		var email = $('#emailx').val();

		var address = $('#lastnamex').val();
var useridd=$('#user_idoo').val();



    var file_data = $('#upimg').prop('files')[0];   
    var form_data = new FormData();      
//    alert(usernamee);
   // form_data.append('mm', 'تم بحمد لله');    
    form_data.append('sendimage', file_data);
  // var dt=JSON.stringify( { "mm":"fffffffff", "email": email,"password":file_data} ); 
// alert(form_data);                             
   $.ajax({
        url: 'http://'+ippx+':8080/api/regprofile.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        
        processData: false,
        
         
        data: form_data,                         
        type: 'post',
        contentType:false,
        
        
        beforeSend: function (xhr) {
    	var rrr=getCookiee("tokken");
 // alert(rrr);
//xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
    xhr.setRequestHeader ("Authorization", "Bearer " + rrr);
xhr.setRequestHeader("username",btoa(unescape(encodeURIComponent(usernamee))));
xhr.setRequestHeader("address",btoa(unescape(encodeURIComponent(address))));
xhr.setRequestHeader("email",btoa(unescape(encodeURIComponent(email))));
xhr.setRequestHeader("userid", btoa(unescape(encodeURIComponent(useridd))));
   //   xhr.setRequestHeader('Content-Type':'application/json');

},
        success: function(php_script_response){
        	setTimeout(function(){ $('.ll2v').button('reset'); }, 0);
           if(isJson(php_script_response)){
var ffdd=JSON.parse(php_script_response);
//let bookname = $("input[name*='firstname']");//$("firstname']");
if(ffdd.success=='25'){
	//alert("سيتم انشاء اكسس توكن جديد");
	
//bookname.val(ffdd.token); 
eeraseCookie("tokken");
//eraseCookie("username");
wwriteCookiee("tokken",ffdd.token,20);
//wwriteCookiee("username",ffdd.username,20);
//var rrr=getCookiee("username");
//alert("اكسستوكن");
saveprofiles(ddref);
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){

eeraseCookie("imageurl");
eeraseCookie("emaill");
eeraseCookie("addressuser");
eeraseCookie("userrid");
eeraseCookie("username");
//wwriteCookiee("tokken",ffdd.token,20);
wwriteCookiee("userrid",ffdd.id,20);
wwriteCookiee("imageurl",ffdd.imageurl,20);
wwriteCookiee("emaill",ffdd.emaill,20);
wwriteCookiee("username",ffdd.username,20);
wwriteCookiee("addressuser",ffdd.addressuser,20);
//deleteCookiess();
msggv('info',ffdd.message);
window.location.href="profile.php?pageopen=menu_a&rootopen=menu_ab&enablopen=0";
}else{
msggv('error',ffdd.message);
}
}

}else

{
	msggv('error',php_script_response);
//alert(php_script_response);
}

 // <-- display response from the PHP script, if any
        },
        error: function( jqXhr, textStatus, errorThrown ){
         setTimeout(function(){ $('.ll2v').button('reset'); }, 0);
msggv('error',errorThrown);
 //  alert(errorThrown+' hhhhh'); // <-- display response from the PHP script, if any
        }
     });

}



    function PreviewImage(ddd) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("upimg").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("imm").src = oFREvent.target.result;
        };
    }; 
    let uu =$("input[name*='user_idoo']");
    let uuem =$("input[name*='emailx']");
  let uuemt =$("input[name*='lastnamex']");  
    var rrrv="<?php echo $_COOKIE['userrid'];?>";//("userrid");
    var emaillx= "<?php echo $_COOKIE['emaill'];?>";// ;  getCookiee("emaill");
 var    addressuser= "<?php echo $_COOKIE['addressuser'];?>";//getCookiee("addressuser");
 uuemt.val(addressuser);
 
    uuem.val(emaillx);
uu.val(rrrv);
let uvu =$("input[name*='firstnamex']");
    var rrrvv="<?php echo $_COOKIE['username'];?>";//getCookiee("username");
uvu.val(rrrvv);



$('#saves').on('click', function() {
	$('.ll2v').button('loading');
	saveprofiles(0);
});

</script>
<?php 
//setcookie( "username", "", time()- 60, "/","", 0);


?>


