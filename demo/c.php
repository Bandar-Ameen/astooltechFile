<?php

include 'api/pureheader.php';
include 'api/purefooter.php';
//echo $t;
//EA983C0D57E04E8D214F63E1228CBF15
//EA983C0D57E04E8D214F63E1228CBF15
?>
	
	
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/md5.js"></script>
     <script src="dist/jquery-1.6.4.min.js"></script>
   <script src="dist/y.js"></script>
<script src="dist/jquery.signalr-2.2.0.js"></script>



 <script>
    	
      


	
	
	
function  vv(){

var u = $('#screen_namevf').val();
var b = $('#screen_namevfv').val();
//wating("ll2v",1);
login("ll2v",u,b);
//alert(memaill);
}
function  vvm(){

var u = $('#A_name').val();
var e= $('#A_email').val();
var b = $('#A_pass').val();
registerA("newcus",u,e,b);
//alert(memaill);
}

function  vvmk(){

var u = $('#AA_name').val();
var e= $('#AA_email').val();
var b = $('#AA_pass').val();
confirm("confirms",u,e,b);
//alert(memaill);
}

function  order(){
var m=sendtalab();
var uuu=JSON.stringify(m);

 sendmyorder(uuu,"ord");
//alert(uuu);
/*var u = $('#AA_name').val();
var e= $('#AA_email').val();
var b = $('#AA_pass').val();
confirm(u,e,b);*/
//alert(memaill);
}

function showwating(){
return "انتظر..";
}
$.fn.button = function(action) {
  if (action === 'loading' && this.data('loading-text')) {
  this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
  }
  if (action === 'reset' && this.data('original-text')) {
  this.html(this.data('original-text')).prop('disabled', false);
  }
}
function  k(){
	/*
لتحميل الانتظار
*/
//$('.ll2v').button('loading');

}
    </script>
</head>
<body>
	
	<div class="hello">
		<h1>تسجيل عميل جديد</h1>
	<div class="input-group">
                        <label  class="col-form-label" for="A_name"><i ></i>الاسم</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="A_name"   id="A_name" placeholder="الاسم " enabled>  
                      </div>
                        <label  class="col-form-label" for="A_email"><i ></i>البريد الالكتروني</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="A_email"   id="A_email" placeholder="البريد الإلكتروني " enabled>  
                      </div>
                    <label  class="col-form-label" for="A_pass"><i ></i>كلمة المرور</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="A_pass"   id="A_pass" placeholder="كلمة المرور " enabled>  
                      </div>  
 
 
       <button  onclick="vvm()" style="margin :5px 5px 5px 5px; "  id="newcus" name="newcus" data-dismiss="modal"  class="btn btn-success newcus"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>   ...انتظر"       type="button">
    <i class="k-icon k-i-save"></i>
تسجيل عضو جديد
</button>
    <div style="text-align:center;">
        Temperature : <span></span> &#x2103;
    </div>
    </div>
    <div class="hello">
		<h1>confirm</h1>
	<div class="input-group">
                        <label  class="col-form-label" for="AA_name"><i ></i>الاسم</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="AA_name"   id="AA_name" placeholder="الاسم " enabled>  
                      </div>
                        <label  class="col-form-label" for="AA_email"><i ></i>البريد الالكتروني</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="AA_email"   id="AA_email" placeholder="البريد الإلكتروني " enabled>  
                      </div>
                    <label  class="col-form-label" for="AA_pass"><i ></i>كلمة المرور</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="AA_pass"   id="AA_pass" placeholder="كلمة المرور " enabled>  
                      </div>  
 
 
       <button  onclick="vvmk()" style="margin :5px 5px 5px 5px; "  id="confirms" name="confirms" data-dismiss="modal"  class="btn btn-success confirms"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>   ...انتظر"       type="button">
    <i class="k-icon k-i-save"></i>
تاكيد
</button>
	
    <div style="text-align:center;">
        Temperature : <span></span> &#x2103;
    </div>
    </div>
    
	
	<div class="hello">
		<h1>دخول</h1>
	<div class="input-group">
                        
                        <label  class="col-form-label" for="screen_namevf"><i ></i>البريد الالbvvvvvvvكتروني</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="screen_namevf"   id="screen_namevf" placeholder="البريد الإلكتروني " enabled>  
                      </div>
                    <label  class="col-form-label" for="screen_namevf"><i ></i>البريد الالكتروني</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="screen_namevfv"   id="screen_namevfv" placeholder="كلمة المرور " enabled>  
                      </div>  
 
 
 <button  onclick=sstop()"style="margin:5px 5px 5px 5px; "   type="button" class="btn btn-primary has-spinner  aall1"  name="newwasc"><span text-wating="انتظر"icon-button="k-icon k-i-plus-outline"  class="k-icon k-i-plus-outline"></span> جديد</a>
<button onclick="ChangeWeather()"    style="margin :5px 5px 5px 5px; "     type="button" class="btn btn-success has-spinner  aall2" id="savesc" name="savesc" data-dismiss="modal"><span text-wating="انتظر.." icon-button="k-icon k-i-save" class="k-icon k-i-save"></span> إرسال</button>
  <button    onclick="Connectv()" style="margin :5px 5px 5px 5px; "     type="button" class="btn  btn-warning has-spinner  aall3" id="savesjc" name="savesjc" data-dismiss="modal"   ><span  text-wating="انتظر.." icon-button="k-icon k-i-pencil"  class="k-icon k-i-pencil"></span> اتggggصال</button>
    <button  onclick="vv()" style="margin :5px 5px 5px 5px; "  id="saves" name="saves" data-dismiss="modal"  class="btn btn-success ll2v"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>   ...انتظر"       type="button">
    <i class="k-icon k-i-save"></i>
دخول
</button>
	
    <div style="text-align:center;">
        Temperature : <span></span> &#x2103;
    </div>
    </div>
    <div class="hello">
		<h1>send order</h1>
	<div class="input-group">
                        
 
 
     
  <button  onclick="order()" style="margin :5px 5px 5px 5px; "  id="ord" name="ord" data-dismiss="modal"  class="btn btn-success ord"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>   ...انتظر"       type="button">
    <i class="k-icon k-i-save"></i>
طلب بضاعة
</button>
	
	
    <div style="text-align:center;">
        Temperature : <span></span> &#x2103;
    </div>
    </div>
    
    
    <div class="hellomm">
		<h1>showmessage</h1>
	<div class="input-group">
                        
 
 
     <button    onclick="MessBoxA('info','mmmmm')" style="margin :5px 5px 5px 5px; "     type="button" class="btn  btn-warning has-spinner  buttonLoaderr" id="buttonLoaderr" name="buttonLoaderr" data-dismiss="modal"   >  <span  text-wating="انتظر.." icon-button="k-icon k-i-pencil"  class="k-icon k-i-pencil"></span> تسجيل</button>
  
	
    <div style="text-align:center;">
        Temperature : <span></span> &#x2103;
    </div>
    </div>
    
</body>
</html>

  
  
  