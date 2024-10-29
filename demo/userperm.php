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
              	
                <h3 style="float:right;" class="card-title">إدارة المستخدمين</h3>
              </div>
              <div class="card-body">

	<form  method="POST">
      	<div class="row">
                  	
                  
                  	        
	
	<div class="card card-info k-rtl" >
	
              
              <div class="card-body">
<img id="imm" style="width:200px; float:right; height: 200px;  border-radius:0%; margin:10px;">
		<div class="col-md-8">
<div class="card card-info k-rtl" >
	
              
              <div class="card-body">
              	</div>
</div>
</div>
	</div>
	<div class="card-footer">
		<input  style="float:right;width:200px;" id="upimg"type="file" name="imagev" onchange="PreviewImage(1);"  class="btn btn-primary">
                </div>

</div>
                      
                            <div class="col-md-6">
                      <!-- select -->
                              
                           <div class="input-group">
                        
                        <label  class="col-form-label" for="screen_id"><i ></i>  رقم المستخدم</label>
                    <input style="margin:5px;"  type="text" class="col-sm-6  form-control is-valid"  name="screen_id"   id="screen_id" placeholder="رقم المستخدم" disabled>  
                      
	</div>
	
	<div class="input-group">
                        
                        <label  class="col-form-label" for="user_name"><i ></i> إسم المستخدم</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="user_name"   id="user_name" placeholder="إسم المستخدم" enabled>  
                      </div>
                      
                      
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="screennamev"><i ></i>العنوان</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="screennamev"   id="screennamev" placeholder="العنوان" enabled>  
                      </div>
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="screen_namevf"><i ></i>البريد الالكتروني</label>
                    <input style="margin:5px;"  type="text" class="col-sm-12  form-control is-valid"  name="screen_namevf"   id="screen_namevf" placeholder="البريد الإلكتروني " enabled>  
                      </div>
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="screendispp"><i ></i>نوع المستخدم</label>
                   <input placeholder="نوع المستحدم" style="margin:0px;"  id="screendispp" class="form-control" />
    
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
		loaderpermascreen(1);
//loadprofilesl(1);
        //userspermation.php
function jsFunctionnff(sampleData)
{ 
	//alert(sampleData  );
	
	
	var dataSource1 = new kendo.data.DataSource({
                transport: {
                    read: function (e) {
	
	$.ajax({
        url: 'http://'+ippx+':8080/api/rollsetting.php', // <-- point to server-side PHP script 
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
    xhr.setRequestHeader("typgetdata",btoa(unescape(encodeURIComponent(4))));
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
loaderpermascreen(1);
//jsFunctionnf(ddref); 
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){
var nnj=ffdd.data;
//alert(JSON.stringify(nnj));
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
                            id: "tb_user_typ_id",
                            fields: {
                                tb_user_typ_id: { editable: false, nullable: true },
                                tb_user_typ_name: { editable: false, nullable: true },
                               
                               

                               }
                               }
                               }

            });
return  dataSource1;
}


function loaderpermascreen(ddef){
//(".grid-editv").bind('click', function () {alert("ddddd");});


$("#screendispp").kendoMultiColumnComboBox({
                dataTextField: "tb_user_typ_name",
                dataValueField: "tb_user_typ_id",
               clearButton: false, 
                height: 400,
                columns: [
                    
                    { field: "tb_user_typ_id", title: "المعرف",width: "200px"  },
                    { field: "tb_user_typ_name", title: "الشاشة", width: "200px" },
                    
                    
                ],
                
                footerTemplate: '  المجموع  #: instance.dataSource.total() # items found',
                filter: "contains",
                filterFields: ["tb_user_typ_name"],
                dataSource: jsFunctionnff(1),
                
               change: function(e) {
//var multicolumncombobox = $("#customers").data("kendoMultiColumnComboBox");
//var  ff=e.sender.dataItem() ;

 //  var dd= ff.ContactName;
        //    var dataItem = e.dataItem;//($(e.currentTarget));
	
	
//alert(dd);

 }
            });
         var multicolumncomboboxxm = $("#screendispp").data("kendoMultiColumnComboBox");
//$("#customers").val('x');
//multicolumncomboboxxm.dataSource().read();
multicolumncomboboxxm.select(0);   
        


        

	}	
	
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
        url: 'http://'+ippx+':8080/api/userspermation.php', // <-- point to server-side PHP script 
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
//alert(JSON.stringify(nnj));
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




function jsFunctionn(sampleData)
{ 
	//alert(sampleData  );
	
	
	var dataSource1 = new kendo.data.DataSource({
                transport: {
                    read: function (e) {
	
	$.ajax({
        url: 'http://'+ippx+':8080/api/userspermation.php', // <-- point to server-side PHP script 
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
},batch: true, pageSize: 20,cache: false,




            });
return  dataSource1;
}

//registerscreen.php
function loader(ddef){
//(".grid-editv").bind('click', function () {alert("ddddd");});
$("#gridd").kendoGrid({
                dataSource: jsFunctionn(1),
              
 
        
                editable: "incell",
                
pageable: { alwaysVisible: false, pageSizes: [5,5, 10, 20, 100] },
                sortable: true,
                navigatable: true,
                resizable: true,
                reorderable: true,
                groupable: true,
                filterable: true,
                height: 500,
            pageSize: 5, 
            dataBound: onDataBound
  ,
            
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
                    
                         {field: "name",
                    title: "إسم المستخدم",
                    template: "<div class='product-photo' style='background-image: url(#:data.picc#);'></div><div class='product-name'>#: name #</div>",
                    width: 200
                },

                    { field: "tb_user_typ_name", title: "نوع المستخدم", width: "200px" },
   { field: "addressuser", title: "العنوان", width: "200px" },
   
                            
                            { field: "email", title: "البريد الالكتروني ", width: "200px" }
                    
                   
 ,
                     
              { command: [


{name:"updatev",template: "<button    type='button'  onclick='ashowDetails($(this))' class='btn btn-primary lluo1' name='newwuao'  ><span class='   k-icon k-i-info'></span onclick='ashowDetails'> عرض</a></button>"
}
,
{name:"updatevu" ,template: "<button   style='margin:5px 5px 5px 5px; '  type='button'  onclick='deleteaa($(this))' class='btn btn-primary lluo1v' name='newwuao'  ><span  text-wating=' انتظر' class='k-icon k-i-info'></span onclick='deleteaa'><a>gggg</a></button>"
},

{name:"vervication" ,template: "<button   style='margin:5px 5px 5px 5px; '  type='button'  onclick='deleteaaa($(this))' class='btn btn-primary lluo1vl' name='newwuaol'  ><span text-wating=' انتظر'  class='k-icon k-i-info'></span onclick='deleteaaa'><a>okk</a></button>"
},


{name:"updatevdd",template: "<button   style='margin:5px 5px 5px 5px; '  type='button'  onclick='deletea($(this))' class='btn btn-success llu31y' name='newwu4a'  ><span text-wating=' انتظر'icon-button='k-icon k-i-pencil'  class='k-icon k-i-trash'></span onclick='deletea'> الصلاحيات</a></button>"
},
{name:"updatevdd",template: "<button   style='margin:5px 5px 5px 5px; '  type='button'  onclick='deletea($(this))' class='btn btn-danger llu31' name='newwu4a'  ><span text-wating=' انتظر'icon-button='k-icon k-i-pencil'  class='k-icon k-i-trash'></span onclick='deletea'> حذف</a></button>"
}


], title: "حدث",background:"red",width: "600px" }


  ]
,
                editable: "inline"
            });
        

	}	
	
	function onDataBound(e) {
		this.tbody.find(".customClass").kendoSwitch({
              onLabel: "YES",
              offLabel: "NO"
            });
		//alert("ggg");
            var grid = this;
            grid.table.find("tr").each(function () {
                var dataItem = grid.dataItem(this);
             //   var themeColor = dataItem.Discontinued ? 'success' : 'error';
                var text ="";
                var text2 ="";


if( dataItem.vervication=="1") {text2='active'  ;
 $(this).find(".lluo1vl").removeClass("btn-danger");         
   $(this).find(".lluo1vl").removeClass("btn-primary");         
 $(this).find(".lluo1vl").addClass("btn-danger");

}else{text2='unactive';
$(this).find(".lluo1vl").removeClass("btn-danger");         
   $(this).find(".lluo1vl").removeClass("btn-primary");         
 $(this).find(".lluo1vl").addClass("btn-primary");

}

 if( dataItem.userdisap=="1") {text='تنشيط'  ;
 $(this).find(".lluo1v").removeClass("btn-danger");         
   $(this).find(".lluo1v").removeClass("btn-primary");         
 $(this).find(".lluo1v").addClass("btn-danger");

}else{text='توقيف';
$(this).find(".lluo1v").removeClass("btn-danger");         
   $(this).find(".lluo1v").removeClass("btn-primary");         
 $(this).find(".lluo1v").addClass("btn-primary");

}

//var tttr=$(this)[0].getElementsByClassName('lluo1')[2].innerHTML;
//

//$(this).removeClass("btn btn-primary lluo1");
var tttr=$(this)[0].innerHTML;
//alert(tttr);
$(this).find(".lluo1v")[0].getElementsByTagName("a")[0].replaceWith(
    text);
    $(this).find(".lluo1vl")[0].getElementsByTagName("a")[0].replaceWith(
    text2);
//alert($(this)[0].getElementsByClassName("lluo1").html());

                 });   
                }
	function customEditor1(container, options) {
	//alert('ffd');
          
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
		//test(1,0,null);
});
$(".aall3").click( e =>{
	//$('.all3').button('loading');
		insertab(2,0,null);
});
//newfun(0);
//inserta
$("#switch").kendoSwitch();
	function newfun(vv){
		/*var switchInstance = $("#screen_enb").data("kendoSwitch");
        switchInstance.check(true);*/
let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val("");
let screen_iddl= $("input[name*='user_name']");//$("firstname']");
screen_iddl.val("");
let screen_iddll= $("input[name*='screennamev']");//$("firstname']");
screen_iddll.val("");

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
var multicolumncomboboxxm = $("#screendispp").data("kendoMultiColumnComboBox");
//$("#customers").val('x');
//multicolumncomboboxxm.dataSource().read();
multicolumncomboboxxm.select(0);   


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
    
/*var switchInstance = $("#screen_enb").data("kendoSwitch");
if(dataItem.tb_def_permation_enb==1){
	

        switchInstance.check(true);

}else{
switchInstance.check(false);
}*/
multicolumncombobocx = $("#screendispp").data("kendoMultiColumnComboBox");

multicolumncombobocx.select(function(dataItemm) {
    return dataItemm.tb_user_typ_name === dataItem.tb_user_typ_name;
});
let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val(dataItem.id);

let screen_idddf= $("input[name*='user_name']");//$("firstname']");
screen_idddf.val(dataItem.name);
let screen_idddff= $("input[name*='screen_namevf']");//$("firstname']");
screen_idddff.val(dataItem.email);


document.getElementById("imm").src=dataItem.picc;
//idd.val(e.target.dataset.user_id);
let screen_nameme = $("input[name*='screennamev']");//$("firstname']");
screen_nameme.val(dataItem.addressuser);

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
function test(typcurdd,iddelete,rowbtn){

	try{
		
		
		var form_dataa = new FormData();      
//    alert(usernamee);
   // form_data.append('mm', 'تم بحمد لله');    
    form_dataa.append("usernamee", "filefdata");
    form_dataa.append("refreshtoken", "filegdata");
$.ajax({
        url: 'http://192.168.1.102/api/companymedcal/companymedcal',//values/another', // <-- point to server-side PHP script 
         
   
                beforeSend: function (xhr) {
     //   xhr.setRequestHeader("Access-Control-Allow-Origin","*");
        xhr.setRequestHeader ("username", "Bearehhhhhhr ");
xhr.setRequestHeader("refreshtoken","tam tam alhmdolelah");
},
        
             
        
                     
        
             
         
         
        
         
        dataType: 'json',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        
        processData: false,
        
             
         
        type: 'get',
        contentType:false,
        
        
        
        
success: function(php_script_response){
  msggv('info',JSON.stringify(php_script_response));
  },
error: function( jqXhr, textStatus, errorThrown ){
 let screen_idddf= $("input[name*='user_name']");//$("firstname']");
screen_idddf.val(JSON.stringify(jqXhr));
 msggv('error',JSON.stringify(jqXhr));
	}
	});
	
	
	
	}catch(ddd){alert(ddd);
	}
	}
function insertab(typcurdd,iddelete,rowbtn){

var user_ida= $('#screen_id').val();
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('start');
	user_ida="0";
}
if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('start');
	//screen_ida="0";
}
if(typcurdd=="3"){
	user_ida=iddelete;
	$(rowbtn).buttonLoaderr('start');
	
}
if(typcurdd=="4"){
	user_ida=iddelete;
	$(rowbtn).buttonLoaderr('start');
	
}
if(typcurdd=="5"){
	user_ida=iddelete;
	$(rowbtn).buttonLoaderr('start');
	
} 
		var user_namea = $('#user_name').val();

		var user_enba = "0";//$('#screen_enb').val();
var user_addres = $('#screennamev').val();
var user_email = $('#screen_namevf').val();
multicolumncomboboxl = $("#screendispp").data("kendoMultiColumnComboBox");

var ttt=multicolumncomboboxl.dataItem();
var user_type=ttt.tb_user_typ_id;

/*var switchInstance = $("#screen_enb").data("kendoSwitch");

if(switchInstance.check()){
screen_enba = "1";
}*/
    var file_data = $('#upimg').prop('files')[0];   
    var form_data = new FormData();      
//    alert(usernamee);
   // form_data.append('mm', 'تم بحمد لله');    
    form_data.append('sendimage', file_data);
    
   $.ajax({
        url: 'http://'+ippx+':8080/api/usermangers.php', // <-- point to server-side PHP script 
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
xhr.setRequestHeader("userid",btoa(unescape(encodeURIComponent(user_ida))));
xhr.setRequestHeader("username",btoa(unescape(encodeURIComponent(user_namea))));
xhr.setRequestHeader("email",btoa(unescape(encodeURIComponent(user_email))));
xhr.setRequestHeader("address",btoa(unescape(encodeURIComponent(user_addres))));
xhr.setRequestHeader("typeuser",btoa(unescape(encodeURIComponent(user_type))));
//xhr.setRequestHeader("userenb",btoa(unescape(encodeURIComponent(user_type))));

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
if(typcurdd=="4"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
if(typcurdd=="5"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
//l//et screen_iddl= $("input[name*='user_name']");//$("firstname']");
//screen_iddl.val(ffdd.message);
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
if(typcurdd=="4"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
if(typcurdd=="5"){
	
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
if(typcurdd=="4"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
if(typcurdd=="5"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
 // <-- display response from the PHP script, if any
        },
        error: function( jqXhr, textStatus, errorThrown ){
        //alert(errorThrown);
 if(typcurdd=="2"){
	$(".aall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".aall2").buttonLoaderr('stop');
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
if(typcurdd=="4"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}
if(typcurdd=="5"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}

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
function  deletea(e) {
	//var btn = $(this);
        $(e).buttonLoaderr('start');
  	var row = e.select().closest("tr");
                  // or e.parent().parent();
                  var grid = $('#gridd').data('kendoGrid');
              //    console.log(grid.dataItem(row));
                  var dataItem = grid.dataItem(row);
                  ashowDetails(e);
//alert(dataItem.id);

insertab(3,dataItem.id,e);

}
function  deleteaa(e) {
	//var btn = $(this);
        $(e).buttonLoaderr('start');
  	var row = e.select().closest("tr");
                  // or e.parent().parent();
                  var grid = $('#gridd').data('kendoGrid');
              //    console.log(grid.dataItem(row));
                  var dataItem = grid.dataItem(row);
                  ashowDetails(e);
//alert(dataItem.id);

insertab(4,dataItem.id,e);

}

function  deleteaaa(e) {
	//var btn = $(this);
        $(e).buttonLoaderr('start');
  	var row = e.select().closest("tr");
                  // or e.parent().parent();
                  var grid = $('#gridd').data('kendoGrid');
              //    console.log(grid.dataItem(row));
                  var dataItem = grid.dataItem(row);
                  ashowDetails(e);
//alert(dataItem.id);

insertab(5,dataItem.id,e);

}


</script>

<style type="text/css">
        .customer-photo {
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-size: 32px 35px;
            background-position: center center;
            vertical-align: middle;
            line-height: 32px;
            box-shadow: inset 0 0 1px #999, inset 0 0 10px rgba(0,0,0,.2);
            margin-left: 5px;
        }

        .customer-name {
            display: inline-block;
            vertical-align: middle;
            line-height: 32px;
            padding-left: 3px;
        }

        .k-grid tr .checkbox-align {
            text-align: center;
            vertical-align: middle;
        }

        .product-photo {
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-size: 32px 35px;
            background-position: center center;
            vertical-align: middle;
            line-height: 32px;
            box-shadow: inset 0 0 1px #999, inset 0 0 10px rgba(0,0,0,.2);
            margin-right: 5px;
        }

        .product-name {
            display: inline-block;
            vertical-align: middle;
            line-height: 32px;
            padding-left: 3px;
        }

        .k-rating-container .k-rating-item {
            padding: 4px 0;
        }

        .k-rating-container .k-rating-item .k-icon {
            font-size: 16px;
        }

        .dropdown-country-wrap {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            white-space: nowrap;
        }

        .dropdown-country-wrap img {
            margin-right: 10px;
        }

        #grid .k-grid-edit-row > td > .k-rating {
            margin-left: 0;
            width: 100%;
        }
    </style>
    
    
    