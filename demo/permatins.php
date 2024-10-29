<?php
$spp="fa fa-spinner fa-spin";
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
?>
<?php
	$mmm='
<div class="card card-info k-rtl" >
	
              <div class="card-header">
              	
                <h3 style="float:right;" class="card-title"> إنشاء صلاحيات  النظام</h3>
              </div>
              <div class="card-body">

	<form  method="POST">
      	<div class="row">
                  	
                  
                  	        <div class="col-md-12">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="screen_id"><i ></i> معرف الصلاحية</label>
                    <input style="margin:5px;"  type="text" class="col-sm-6  form-control is-valid"  name="screen_id"   id="screen_id" placeholder="الاسم" disabled>  
                      </div>
                      </div>
                      
                            <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="screen_name"><i ></i> اسم الصلاحية :</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="screen_name"   id="screen_name" placeholder="  اسم الصلاحية" enabled>  
                      </div>
                      </div>
                      
                            <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="user_idccc"><i >توقيف<input id="screen_enb" /></i> </label>
                    
                      </div>
                      </div>
                      
                      <div class="row"> 
<button style="margin:5px 5px 5px 5px; "   type="button" class="btn btn-primary has-spinner  aall1"  name="newwasc"><span text-wating="انتظر"icon-button="k-icon k-i-plus-outline"  class="k-icon k-i-plus-outline"></span> جديد</a>
<button    style="margin :5px 5px 5px 5px; "     type="button" class="btn btn-success has-spinner  aall2" id="savesc" name="savesc" data-dismiss="modal"><span text-wating="انتظر.." icon-button="k-icon k-i-save" class="k-icon k-i-save"></span> حفظ</button>
  <button    style="margin :5px 5px 5px 5px; "     type="button" class="btn  btn-warning has-spinner  aall3" id="savesjc" name="savesjc" data-dismiss="modal"   ><span  text-wating="انتظر.." icon-button="k-icon k-i-pencil"  class="k-icon k-i-pencil"></span> تعديل</button>
  
          </div>
		      
</div>
		
		
	</div>
                      
    
                      </div>



</div>

            

</div>
<div  class="k-rtl" id="gridd"></div>

<div class="card-footer">
	
	           
</div>

</div>

';
print $mmm;

?>  

		


    <style>
        .demo-section ul {
            margin: 0;
            padding: 0;
        }

            .demo-section ul li {
                list-style-type: none;
                margin: 0;
                padding: 10px 10px 10px 20px;
                min-height: 28px;
                line-height: 28px;
                vertical-align: middle;
                border-top: 1px solid rgba(128,128,128,.5);
            }

        .demo-section {
            min-width: 220px;
            margin-top: 50px;
            padding: 0;
        }

            .demo-section ul li .k-switch {
                float: right;
            }

        .settings-head {
            height: 66px;
            background: url('../content/web/switch/settings-title.png') no-repeat 20px 50% #2db245;
        }
    </style>

        <script>
        	
  
        
        
    $(function () {
    	
    
    
    
    
        $("#screen_enb").kendoSwitch();
//$("#screen_enbb").prop("checked")
//var switchInstancee = $("#screen_enbb").kendoSwitch().data("kendoSwitch");
 //switchInstancee.check(false);
        
    });
   

</script>
<?php
//$uu= $dissv->display(1);

		
require 'api/purefooter.php';
 function  jjj($nn){
require 'api/footer.php';
}
?>
	<?php

?>
	<script src="dist/cookiesa.js"></script>
	<script>
		

		loader(1);
		
//loadprofilesl(1);
        

      function loadprofilesl(ddref){
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
        url: 'http://'+ippx+':8080/api/screensetting.php', // <-- point to server-side PHP script 
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
      
   if(isJson(php_script_response)){
var ffdd=JSON.parse(php_script_response);
if(ffdd.success=='25'){
	//alert("سيتم انشاء اكسس توكن جديد");
	
//bookname.val(ffdd.token); 
eeraseCookie("tokken");
//eraseCookie("username");
wwriteCookiee("tokken",ffdd.token,20);
//wwriteCookiee("username",ffdd.username,20);
var rrr=getCookiee("tokken");

loadprofilesl(ddref); 
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){
var nnj=ffdd.data;
jsFunctionn(nnj);

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


function customEditor1(container, options) {
          $('<input type="checkbox" name="' + options.field + '"/>')
            .appendTo(container)
            .kendoSwitch({
            onLabel: "YES",
            offLabel: "NO"
          });
        }

function jsFunctionn(sampleData)
{ 
	//alert(sampleData  );
	
	
	var dataSource1 = new kendo.data.DataSource({
                transport: {
                    read: function (e) {
	
	$.ajax({
        url: 'http://'+ippx+':8080/api/permissionsetting.php', // <-- point to server-side PHP script 
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
      
   if(isJson(php_script_response)){
var ffdd=JSON.parse(php_script_response);
if(ffdd.success=='25'){
	//alert("سيتم انشاء اكسس توكن جديد");
	
//bookname.val(ffdd.token); 
eeraseCookie("tokken");
//eraseCookie("username");
wwriteCookiee("tokken",ffdd.token,20);
//wwriteCookiee("username",ffdd.username,20);
var rrr=getCookiee("tokken");
loader(1);
//jsFunctionn(ddref); 
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){
var nnj=ffdd.data;
e.success(nnj);
//jsFunctionn(nnj);

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
	
	//const obj = JSON.parse(sampleData);
                      // On success.
                        
                       

 // On failure.
                        //e.error("XHR response", "status code", "error message");
                 




   }
},batch: true, pageSize: 10,cache: false,


schema: {
                        model: {
                            id: "tb_def_permation_id",
                            fields: {
                                tb_def_permation_id: { editable: false, nullable: true },
                                tb_def_permation_name: { editable: false, nullable: true },
                               
                               

                               }
                               }
                               }

            });
return  dataSource1;
}

//registerscreen.php
function loader(ddef){
//(".grid-editv").bind('click', function () {alert("ddddd");});
$("#gridd").kendoGrid({
                dataSource: jsFunctionn(1),
              

        
                editable: "incell",
                
pageable: { alwaysVisible: false, pageSizes: [5, 10, 20, 100] },
                sortable: true,
                navigatable: true,
                resizable: true,
                reorderable: true,
                groupable: true,
                filterable: true,
                height: 500,
            pageSize: 5,   
                messages: {
    commands: {
      search: "بحث"
    }
  },
toolbar: [
{name:"updatev6",template: "<button  type='button'  onclick='loader(1)' class='btn btn-primary llu15' name='newwua'  ><span class='   k-icon k-i-refresh'></span onclick='showDetails'></a></button>"
},

{
	name:"search"
}


],
                
                columns: [
                    { field: "tb_def_permation_id", title: "المعرف",width: "200px"  },
                    { field: "tb_def_permation_name", title: "شاشة الصلاحية", width: "200px" },
                    
                    { field: "tb_def_permation_enb", title:"حالة التوقيف",  width: "120px", template: "<input class='customClass' #if (tb_def_permation_enb==1) { # checked='checked' # } # type='checkbox' disabled />",editor: customEditor1 },
                     
              { command: [


{name:"updatev",template: "<button    type='button'  onclick='ashowDetails($(this))' class='btn btn-primary lluo1' name='newwuao'  ><span class='   k-icon k-i-info'></span onclick='ashowDetails'> عرض</a></button>"
}
,

{name:"updatevdd",template: "<button   style='margin:5px 5px 5px 5px; '  type='button'  onclick='deletea($(this))' class='btn btn-danger llu31' name='newwu4a'  ><span text-wating=' انتظر'icon-button='k-icon k-i-pencil'  class='k-icon k-i-trash'></span onclick='deletea'> حذف</a></button>"
}

], title: "حدث",background:"red",width: "200px" }


  ]
,
                editable: "inline",dataBound: function() {
            this.tbody.find(".customClass").kendoSwitch({
              onLabel: "YES",
              offLabel: "NO"
            });
            }
            });
        

	}	
	
	function stopSpinner() {
    // you code to make the spinner stop
    // (i.e., return the button to its original state)
    $("#mmm").prop("disabled", false);
  //  $("#btnFetch").html('Submit');
}
	
	function vvb(nn)
	{
	$("#screen_enbb").prop("checked",  nn);
	}
	$(".aall1").click( e =>{
		
	//$('btn').data('spinner').stop();
		newfun(1);
		//stopSpinner();
		//BtnReset(1);
		//$('.btn').button('loading');
		//$(".my-btn").buttonLoader("start");
});
$(".aall2").click( e =>{
	
		insertab(1,0,null);
});
$(".aall3").click( e =>{
	//$('.all3').button('loading');
		insertab(2,0,null);
});
//newfun(0);
//inserta
$("#switch").kendoSwitch();
	function newfun(vv){
		var switchInstance = $("#screen_enb").data("kendoSwitch");
        switchInstance.check(true);
let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val("");


//idd.val(e.target.dataset.user_id);
let screen_namee = $("input[name*='screen_name']");//$("firstname']");
screen_namee.val("");

//gggcc=document.querySelector("hvhh");
aformButton1 = document.querySelector(".aall1");
aformButton2 = document.querySelector(".aall2");
aformButton3 = document.querySelector(".aall3");
//gggcc=disabled = false;
// the default state is ''
aformButton1.disabled = false; 

aformButton2.disabled = false; 

aformButton3.disabled = true; 



}



//$("#screen_enbb").prop("checked", true);


  function ashowDetails(e) {
  	var row = e.select().closest("tr");
                  // or e.parent().parent();
                  var grid = $('#gridd').data('kendoGrid');
              //    console.log(grid.dataItem(row));
                  var dataItem = grid.dataItem(row);
           // e.preventDefault();
//var dataItem = this.dataItem($(e.currentTarget).closest("tr"));
//alert(dataItem.screen_enb);
//var switchInstance = $("#screen_enbb").kendoSwitch().data("kendoSwitch");
    //get the Switch checked state
 //   console.log("Is Swicth checked?: " + switchInstance.check());

    //set the Switch checked state
    
var switchInstance = $("#screen_enb").data("kendoSwitch");
if(dataItem.tb_def_permation_enb==1){
	

        switchInstance.check(true);

}else{
switchInstance.check(false);
}

let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val(dataItem.tb_def_permation_id);


//idd.val(e.target.dataset.user_id);
let screen_namee = $("input[name*='screen_name']");//$("firstname']");
screen_namee.val(dataItem.tb_def_permation_name);

//gggcc=document.querySelector("hvhh");
aformButton1 = document.querySelector(".aall1");
aformButton2 = document.querySelector(".aall2");
aformButton3 = document.querySelector(".aall3");
//gggcc=disabled = false;
// the default state is ''
aformButton1.disabled = false; 

aformButton2.disabled = true; 

aformButton3.disabled = false; 


}
function msggv(typp,messagg){

Swal.fire({
    toast: false,	
  
  icon: typp,
  title: messagg,
  showConfirmButton: false,
  timer: 1500
});
}

function insertab(typcurdd,iddelete,rowbtn){
var screen_ida= $('#screen_id').val();
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('start');
	screen_ida="0";
}
if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('start');
	//screen_ida="0";
}
if(typcurdd=="3"){
	screen_ida=iddelete;
	$(rowbtn).buttonLoaderr('start');
	
}
		var screen_namea = $('#screen_name').val();

		var screen_enba = "0";//$('#screen_enb').val();


var switchInstance = $("#screen_enb").data("kendoSwitch");

if(switchInstance.check()){
screen_enba = "1";
}
    
    
   $.ajax({
        url: 'http://'+ippx+':8080/api/registerpermatins.php', // <-- point to server-side PHP script 
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
xhr.setRequestHeader("permation_id",btoa(unescape(encodeURIComponent(screen_ida))));
xhr.setRequestHeader("permation_name",btoa(unescape(encodeURIComponent(screen_namea))));
xhr.setRequestHeader("permation_enb",btoa(unescape(encodeURIComponent(screen_enba))));
xhr.setRequestHeader("typcurd", btoa(unescape(encodeURIComponent(typcurdd))));
   //   xhr.setRequestHeader('Content-Type':'application/json');
 
},
        success: function(php_script_response){
        //	setTimeout(function(){ $('.ll2v').button('reset'); }, 0);
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
insertab(typcurdd,iddelete,rowbtn);
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){
if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('stop');
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}

msggv('info',ffdd.message);
loader(1);
//window.location.href="profile.php?pageopen=menu_a&rootopen=menu_ab&enablopen=0";
}else{
	if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('stop');
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
msggv('error',ffdd.message);
}
}

}else

{
	if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('stop');
}
	msggv('error',php_script_response);
//alert(php_script_response);
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
 // <-- display response from the PHP script, if any
        },
        error: function( jqXhr, textStatus, errorThrown ){
         if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('stop');
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
msggv('error',errorThrown);
 //  alert(errorThrown+' hhhhh'); // <-- display response from the PHP script, if any
        }
     });

   
}

function  deletea(e) {
	//var btn = $(this);
        $(e).buttonLoaderr('start');
  	var row = e.select().closest("tr");
                  // or e.parent().parent();
                  var grid = $('#gridd').data('kendoGrid');
              //    console.log(grid.dataItem(row));
                  var dataItem = grid.dataItem(row);
                  

insertab(3,dataItem.tb_def_permation_id,e);

}


</script>

