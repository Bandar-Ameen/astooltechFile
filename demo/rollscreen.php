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
                  	
                  
                  	        <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="screen_id"><i ></i> معرف الصلاحية</label>
                    <input style="margin:5px;"  type="text" class="col-sm-6  form-control is-valid"  name="screen_id"   id="screen_id" placeholder="الاسم" disabled>  
                      </div>
                      </div>
                      
                      <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="user_idccc"><i >توقيف<input id="screen_enb" /></i> </label>
                    
                      </div>
                      </div>
                      
                            <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="screendisp"><i ></i> اسم الصلاحية :</label>
                   <input placeholder="النوع :" style="margin:0px;"  id="screendisp" class="form-control" />

                      </div>
                      </div>
                      
                      <div class="col-md-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="screendispp"><i ></i>الشاشة :</label>
                   <input placeholder="النوع :" style="margin:0px;"  id="screendispp" class="form-control" />

                      </div>
                      </div>
                      
                            
                      
                      
                      <div class="row"> 
<button style="margin:5px 5px 5px 5px; "   type="button" class="btn btn-primary has-spinner  baall1"  name="newwasc"><span text-wating="انتظر"icon-button="k-icon k-i-plus-outline"  class="k-icon k-i-plus-outline"></span> جديد</a>
<button    style="margin :5px 5px 5px 5px; "     type="button" class="btn btn-success has-spinner  baall2" id="savesc" name="savesc" data-dismiss="modal"><span text-wating="انتظر.." icon-button="k-icon k-i-save" class="k-icon k-i-save"></span> حفظ</button>
  <button    style="margin :5px 5px 5px 5px; "     type="button" class="btn  btn-warning has-spinner  baall3" id="savesjc" name="savesjc" data-dismiss="modal"   ><span  text-wating="انتظر.." icon-button="k-icon k-i-pencil"  class="k-icon k-i-pencil"></span> تعديل</button>
  
          </div>
		      
</div>
		
		
	</div>
                      
    
                      </div>



</div>

            

</div>
<div  class="k-rtl" id="gridd"></div>
<div style="float:right;" class="jstree-default-dark " id="folder_jstree"></div>
<button class="k-button">Expand</button>
<div id="treeview"></div>
<div id="example">

    <div class="demo-section k-content">
        <div>
            <div id="treeview-left"></div>
        </div>
    </div>
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
$datt='[{"id":"1","text":"main screen","parent":null,"items":[{"id":"50","text":"save","parent":"1","items":[]},{"id":"50","text":"Edit","parent":"1","items":[]}]},{"id":"19","text":"second screen","parent":null,"items":[{"id":"50","text":"save","parent":"19","items":[]},{"id":"50","text":"Edit","parent":"19","items":[]}]},{"id":"20","text":"Hhhhhh","parent":null,"items":[]},{"id":"21","text":"lovescreens","parent":null,"items":[{"id":"50","text":"save","parent":"21","items":[]},{"id":"50","text":"Edit","parent":"21","items":[]}]}]';

//[{"id":"1","text":"main screen","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"1","data":{},"items":[]},{"id":"50","text":"Edit","parent":"1","data":{},"items":[]}]},{"id":"19","text":"second screen","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"19","data":{},"items":[]},{"id":"50","text":"Edit","parent":"19","data":{},"items":[]}]},{"id":"20","text":"Hhhhhh","parent":null,"data":{},"items":[]},{"id":"21","text":"lovescreens","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"21","data":{},"items":[]},{"id":"50","text":"Edit","parent":"21","data":{},"items":[]}]}]';

//[{"text":"main screen","items":[{"text":"save","items":[],"parent":"1","id":"50"},{"text":"Edit","items":[],"parent":"1","id":"50"}],"parent":null,"id":"1"},{"text":"second screen","items":[{"text":"save","items":[],"parent":"19","id":"50"},{"text":"Edit","items":[],"parent":"19","id":"50"}],"parent":null,"id":"19"},{"text":"Hhhhhh","items":[],"parent":null,"id":"20"},{"text":"lovescreens","items":[{"text":"save","items":[],"parent":"21","id":"50"},{"text":"Edit","items":[],"parent":"21","id":"50"}],"parent":null,"id":"21"}]';

//[{"id":"1","text":"main screen","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"1","data":{},"items":[]},{"id":"50","text":"Edit","parent":"1","data":{},"items":[]}]},{"id":"19","text":"second screen","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"19","data":{},"items":[]},{"id":"50","text":"Edit","parent":"19","data":{},"items":[]}]},{"id":"20","text":"Hhhhhh","parent":null,"data":{},"items":[]},{"id":"21","text":"lovescreens","parent":null,"data":{},"items":[{"id":"50","text":"save","parent":"21","data":{},"items":[]},{"id":"50","text":"Edit","parent":"21","data":{},"items":[]}]}]';

//[{"id":1,"text":"lorem ipsum","state":{"selected":true,"opened":false},"parent":null,"data":{},"items":[{"id":2,"text":"lorem ipsum1","state":{"selected":false,"opened":false},"parent":1,"data":{},"items":[{"id":4,"text":"lorem ipsum3","state":{"selected":false,"opened":false},"parent":2,"data":{},"items":[]}]},{"id":3,"text":"lorem ipsum2","state":{"selected":false,"opened":false},"parent":1,"data":{},"items":[{"id":5,"text":"lorem ipsum4","state":{"selected":false,"opened":false},"parent":3,"data":{},"items":[]}]}]},{"id":6,"text":"lorem ipsum5","state":{"selected":false,"opened":false},"parent":null,"data":{},"items":[]}]';
//[{"id":1,"text":"lorem ipsum","state":{"selected":true,"opened":false},"parent":"#","data":{},"children":[{"id":2,"text":"lorem ipsum1","state":{"selected":false,"opened":false},"parent":1,"data":{},"children":[{"id":4,"text":"lorem ipsum3","state":{"selected":false,"opened":false},"parent":2,"data":{},"children":[]}]},{"id":3,"text":"lorem ipsum2","state":{"selected":false,"opened":false},"parent":1,"data":{},"children":[{"id":5,"text":"lorem ipsum4","state":{"selected":false,"opened":false},"parent":3,"data":{},"children":[]}]}]},{"id":6,"text":"lorem ipsum5","state":{"selected":false,"opened":false},"parent":"#","data":{},"children":[]}]';
//[{"id":"1","parent":"#","text":"Folder1","state":{"selected":true,"opened":false}},{"id":"1","parent":"#","text":"Folder1","state":{"selected":true,"opened":false}},{"id":"2","parent":"#","text":"Folder2","state":{"selected":false,"opened":false}},{"id":"3","parent":"1","text":"Folder 1 sub1","state":{"selected":false,"opened":false}},{"id":"4","parent":"3","text":"Folder 1 sub1.1","state":{"selected":false,"opened":false}},{"id":"5","parent":"3","text":"Folder 1 sub1.2","state":{"selected":false,"opened":false}},{"id":"6","parent":"4","text":"Folder 1 sub1.1.1","state":{"selected":false,"opened":false}},{"id":"7","parent":"1","text":"Folder 1 sub2","state":{"selected":false,"opened":false}},{"id":"8","parent":"1","text":"Folder 1 sub3","state":{"selected":false,"opened":false}},{"id":"9","parent":"8","text":"Folder 1 sub3.1","state":{"selected":false,"opened":false}},{"id":"10","parent":"2","text":"Folder 2 sub1","state":{"selected":false,"opened":false}},{"id":"11","parent":"10","text":"Folder 2 sub1.1","state":{"selected":false,"opened":false}},{"id":"12","parent":"10","text":"Folder 2 sub1.2","state":{"selected":false,"opened":false}},{"id":"13","parent":"2","text":"Folder 2 sub2","state":{"selected":false,"opened":false}},{"id":"14","parent":"#","text":"Folder 3","state":{"selected":false,"opened":false}}]';
?>
	<?php

?>
	<script src="dist/cookiesa.js"></script>
	<script>
		
		function vvvv(vvb){
			


var tb;

    //var file_data = $('#upimg').prop('files')[0];   
//    var form_data = new FormData();      
//    alert(usernamee);
   // form_data.append('mm', 'تم بحمد لله');    
    //form_data.append('sendimage', file_data);
  // var dt=JSON.stringify( { "mm":"fffffffff", "email": email,"password":file_data} ); 
// alert(form_data);                             
   $.ajax({
        url: 'http://'+ippx+':8080/cr/res.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        
        processData: false,
        
         
                                
        type: 'post',
        contentType:false,
        
        
        beforeSend: function (xhr) {
    	var rrr=getCookiee("tokken");

//xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
    xhr.setRequestHeader ("Authorization", "Bearer " + rrr);
},
        success: function(php_script_response){
    var folder_jsondatav = JSON.parse(php_script_response);

$("#treeview").kendoTreeView({
  dataTextField: "text",
  dataSource: folder_jsondatav
});
//alert(folder_jsondatav);
  tb=php_script_response;
   
 // <-- display response from the PHP script, if any
        },
        error: function( jqXhr, textStatus, errorThrownm){
         msggv('error',JSON.stringify(jqXhr));
 //  alert(errorThrown+' hhhhh'); // <-- display response from the PHP script, if any
        }
     });
return  tb;
}
		var folder_jsondata = JSON.parse('<?php echo $datt;?>');
function llodx(ffg){
	var iiiu=vvvv(1);
	//alert(iiiu);
        
		}

llodx(1);



                
            
//lllload(1);

        
		var folder_jsondatav = JSON.parse('<?php echo $datt;?>');
		
var items = [
  { ProductName: "Tea", items: [
    { ProductName: "Green Tea", items: [
    { ProductName: "Green Tea" },
    { ProductName: "Black Tea" }
  ] },
    { ProductName: "Black Tea" }
  ] },
  { ProductName: "Coffee" }
];

		loader(1);
		loaderperma(1);
		loaderpermascreen(1);
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
function jsFunctionnff(sampleData)
{ 
	//alert(sampleData  );
	
	
	var dataSource1 = new kendo.data.DataSource({
                transport: {
                    read: function (e) {
	
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
loaderpermascreen(1);
//jsFunctionnf(ddref); 
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
function jsFunctionnf(sampleData)
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
loaderperma(1);
//jsFunctionnf(ddref); 
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

function loaderpermascreen(ddef){
//(".grid-editv").bind('click', function () {alert("ddddd");});


$("#screendispp").kendoMultiColumnComboBox({
                dataTextField: "screen_name",
                dataValueField: "screen_id",
               clearButton: false, 
                height: 400,
                columns: [
                    
                    { field: "screen_id", title: "المعرف",width: "200px"  },
                    { field: "screen_name", title: "الشاشة", width: "200px" },
                    
                    { field: "screen_enb", title:"حالة التوقيف",  width: "120px", template: "<input class='customClass' #if (screen_enb==1) { # checked='checked' # } # type='checkbox' disabled />",editor: customEditor1 },
                     
                ],
                
                footerTemplate: '  المجموع  #: instance.dataSource.total() # items found',
                filter: "contains",
                filterFields: ["screen_name"],
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
	function loaderperma(ddef){
//(".grid-editv").bind('click', function () {alert("ddddd");});


$("#screendisp").kendoMultiColumnComboBox({
                dataTextField: "tb_def_permation_name",
                dataValueField: "tb_def_permation_id",
               clearButton: false, 
                height: 400,
                columns: [
                    
                    { field: "tb_def_permation_id", title: "المعرف",width: "200px"  },
                    { field: "tb_def_permation_name", title: "شاشة الصلاحية", width: "200px" },
                    
                    { field: "tb_def_permation_enb", title:"حالة التوقيف",  width: "120px", template: "<input class='customClass' #if (tb_def_permation_enb==1) { # checked='checked' # } # type='checkbox' disabled />",editor: customEditor1 },
                     
                ],
                
                footerTemplate: '  المجموع  #: instance.dataSource.total() # items found',
                filter: "contains",
                filterFields: ["tb_def_permation_name"],
                dataSource: jsFunctionnf(1),
                
               change: function(e) {
//var multicolumncombobox = $("#customers").data("kendoMultiColumnComboBox");
//var  ff=e.sender.dataItem() ;

 //  var dd= ff.ContactName;
        //    var dataItem = e.dataItem;//($(e.currentTarget));
	
	
//alert(dd);

 }
            });
         var multicolumncomboboxxm = $("#screendisp").data("kendoMultiColumnComboBox");
//$("#customers").val('x');
//multicolumncomboboxxm.dataSource().read();
multicolumncomboboxxm.select(0);   
        


        

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
xhr.setRequestHeader("typgetdata",btoa(unescape(encodeURIComponent("1"))));
  
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
                            id: "roll_id",
                            fields: {
                            	roll_id: { editable: false, nullable: true },
                                tb_def_permation_id: { editable: false, nullable: true },
                                tb_def_permation_name: { editable: false, nullable: true },
                               idscreen: { editable: false, nullable: true },
                               screen_name: { editable: false, nullable: true },
                               per_id: { editable: false, nullable: true },
                               roll_enb: { editable: false, nullable: true }

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
                { field: "roll_id", title: "المعرف",width: "200px"  },
                    { field: "tb_def_permation_id", title: "tالمعرف",width: "200px"  },
                    { field: "tb_def_permation_name", title: "شاشة الصلاحية", width: "200px" },
                    { field: "idscreen", title: "معرف الشاشة",width: "200px"  },
                    { field:"screen_name",title: "إسم الشاشة", width: "200px"  },
               { field: "per_id", title: "معرف الصلاحية",width: "200px"  },
   { field: "roll_enb", title:"حالة التوقيف",  width: "120px", template: "<input class='customClass' #if (roll_enb==1) { # checked='checked' # } # type='checkbox' disabled />",editor: customEditor1 },
                     
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
	$(".baall1").click( e =>{
		
	//$('btn').data('spinner').stop();
		newfun(1);
		//stopSpinner();
		//BtnReset(1);
		//$('.btn').button('loading');
		//$(".my-btn").buttonLoader("start");
});
$(".baall2").click( e =>{
	
		insertabc(1,0,null);
});
$(".baall3").click( e =>{
	//$('.all3').button('loading');
		insertabc(2,0,null);
});
newfun(0);
//inserta
$("#switch").kendoSwitch();
	function newfun(vv){
		var switchInstance = $("#screen_enb").data("kendoSwitch");
        switchInstance.check(true);
let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val("");


//idd.val(e.target.dataset.user_id);
//let screen_namee = $("input[name*='screendisp']");//$("firstname']");
//screen_namee.val("");

//gggcc=document.querySelector("hvhh");
aformButton1 = document.querySelector(".baall1");
aformButton2 = document.querySelector(".baall2");
aformButton3 = document.querySelector(".baall3");
//gggcc=disabled = false;
// the default state is ''
aformButton1.disabled = false; 

aformButton2.disabled = false; 

aformButton3.disabled = true; 
multicolumncombobox = $("#screendispp").data("kendoMultiColumnComboBox");

multicolumncombobox.select(0);
multicolumncomboboxl = $("#screendisp").data("kendoMultiColumnComboBox");

multicolumncomboboxl.select(0);


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
if(dataItem.roll_enb==1){
	

        switchInstance.check(true);

}else{
switchInstance.check(false);
}

let screen_idd= $("input[name*='screen_id']");//$("firstname']");
screen_idd.val(dataItem.roll_id);

multicolumncombobox = $("#screendispp").data("kendoMultiColumnComboBox");

multicolumncombobox.select(function(dataItemm) {
    return dataItemm.screen_name === dataItem.screen_name;
});
multicolumncombobocx = $("#screendisp").data("kendoMultiColumnComboBox");

multicolumncombobocx.select(function(dataItemm) {
    return dataItemm.tb_def_permation_name === dataItem.tb_def_permation_name;
});

//idd.val(e.target.dataset.user_id);
//let screen_namee = $("input[name*='screen_name']");//$("firstname']");
//screen_namee.val(dataItem.tb_def_permation_name);

//gggcc=document.querySelector("hvhh");
aformButton1 = document.querySelector(".baall1");
aformButton2 = document.querySelector(".baall2");
aformButton3 = document.querySelector(".baall3");
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

function insertabc(typcurdd,iddelete,rowbtn){
var screen_ida= $('#screen_id').val();
if(typcurdd=="1"){
	$(".baall2").buttonLoaderr('start');
	screen_ida="0";
}
if(typcurdd=="2"){
	$(".baall3").buttonLoaderr('start');
	//screen_ida="0";
}
if(typcurdd=="3"){
	screen_ida=iddelete;
	$(rowbtn).buttonLoaderr('start');
	
}
		//var screen_ida =""; //$('#screen_name').val();
multicolumncombobox = $("#screendispp").data("kendoMultiColumnComboBox");

var ttt=multicolumncombobox.dataItem();
var screen_idaa=ttt.screen_id;
multicolumncomboboxk = $("#screendisp").data("kendoMultiColumnComboBox");
var tttm=multicolumncomboboxk.dataItem();
var pper_id=tttm.tb_def_permation_id;
		var screen_enba = "0";//$('#screen_enb').val();


var switchInstance = $("#screen_enb").data("kendoSwitch");

if(switchInstance.check()){
screen_enba = "1";
}
    
    
   $.ajax({
        url: 'http://'+ippx+':8080/api/rollregister.php', // <-- point to server-side PHP script 
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
xhr.setRequestHeader("roll_id",btoa(unescape(encodeURIComponent(screen_ida))));
xhr.setRequestHeader("screen_id",btoa(unescape(encodeURIComponent(screen_idaa))));
xhr.setRequestHeader("per_id",btoa(unescape(encodeURIComponent(pper_id))));
xhr.setRequestHeader("roll_enb",btoa(unescape(encodeURIComponent(screen_enba))));
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
insertabc(typcurdd,iddelete,rowbtn);
} else {
//eraseCookie("tokken");
if(ffdd.success=='1'){
if(typcurdd=="2"){
	$(".baall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".baall2").buttonLoaderr('stop');
}
if(typcurdd=="3"){
	
	$(rowbtn).buttonLoaderr('stop');
	
}

msggv('info',ffdd.message);
loader(1);
vvvv(1);
//window.location.href="profile.php?pageopen=menu_a&rootopen=menu_ab&enablopen=0";
}else{
	if(typcurdd=="2"){
	$(".baall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".baall2").buttonLoaderr('stop');
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
	$(".baall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".baall2").buttonLoaderr('stop');
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
	$(".baall3").buttonLoaderr('stop');
}
if(typcurdd=="1"){
	$(".baall2").buttonLoaderr('stop');
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
                  

insertabc(3,dataItem.roll_id,e);

}


</script>

<style>
      body {
        font-size: 12px;
      }

      .k-treeview .k-treeview-top,
      .k-treeview .k-treeview-mid,
      .k-treeview .k-treeview-bot {
        background-image: url('https://d35islomi5rx1v.cloudfront.net/mvc/2012.2.607/Default/treeview-nodes.png');
        background-repeat: no-repeat;
        margin-left: -16px;
        padding-left: 16px;
      }

      .k-treeview .k-treeview-item { background-image: url('https://d35islomi5rx1v.cloudfront.net/mvc/2012.2.607/Default/treeview-line.png'); }
      .k-treeview .k-treeview-last { background-image: none; }


      .k-treeview .k-treeview-top { background-position: -91px 0; }
      .k-treeview .k-treeview-bot { background-position: -69px -22px; }
      .k-treeview .k-treeview-mid { background-position: -47px -44px; }
      .k-treeview .k-treeview-last .k-treeview-top { background-position: -25px -66px; }
      .k-treeview .k-treeview-group .k-treeview-last .k-treeview-bot { background-position: -69px -22px; }

      .k-treeview .k-treeview-item {
        background-repeat: no-repeat;
      }

      .k-treeview .k-treeview-first {
        background-repeat: no-repeat;
        background-position: 0 16px;
      }

    </style>