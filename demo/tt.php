<?php
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: access");
//setcookie( "tokken", "", time()- 60, "/","", 0);
//setcookie( "tokken", "", time()- 60, "/","", 0);
 //  setcookie( "tokken", "", time()- 60, "/","", 0);
function  ddd($vv){
	return "Hello World!";
//header('location:login.php');
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
$v="

<div class='k-rtl row'>
          <div class='col-12 col-sm-6'>
            <div class='k-ltr  card card-primary card-outline card-tabs'>
              <div class='k-rtl card-header p-0 pt-1 border-bottom-0'>
                <ul class='nav nav-tabs' id='custom-tabs-three-tab' role='tablist'>
                  <li class='nav-item'>
                    <a  class='nav-link active' id='custom-tabs-three-home-tab' data-toggle='pill' href='#custom-tabs-three-home' role='tab' aria-controls='custom-tabs-three-home' aria-selected='true'>Home</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' id='custom-tabs-three-profile-tab' data-toggle='pill' href='#custom-tabs-three-profile' role='tab' aria-controls='custom-tabs-three-profile' aria-selected='false'>Profile</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' id='custom-tabs-three-messages-tab'  href='index.html' role='tab' aria-controls='custom-tabs-three-messages' aria-selected='false'>Messagessss</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' id='custom-tabs-three-settings-tab' data-toggle='pill' href='#custom-tabs-three-settings' role='tab' aria-controls='custom-tabs-three-settings' aria-selected='false'>Settings</a>
                  </li>
                </ul>
              </div>
             
              <!-- /.card -->
            </div>
          </div>
     
        </div>

";
$mmm= '


   <div  id="vv" class="k-rtl">
 
   
   <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Secondary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

           <div class="k-rtl row">
          <div class="col-12">
            <h4  style="float:right;" >إدارة الاصناف</small></h4>
          </div>
        </div>
        

        <div class="row">
          <div class="col-12 col-sm-12,">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">الاصناف</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">الوحدات</a>
                  </li>
                  <li class="nav-item">
                    <a    class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">المجموعات</a>
                  </li>
                  <li class="nav-item">
                    <a onClick="gg(1);"  class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">تسعير الاصناف</a>
                  </li>
                </ul>
              </div>

</div>

<div class="card-body" style ="padding:0;" >
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                 


     </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                 

    



    </div>
                  <div class=" tab-pane fade" id="customm-tabs-one-messages" role="tabpanel" aria-labelledby="customm-tabs-one-messages-tab">
                     
	
	


  </div>
  
  
  
  
<div class="tab-pane fade"    dir="rtl" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages">
     <div class="row">
     
          <!-- /.col -->
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">'.$_COOKIE["username"].'</h3>
                <h5 class="widget-user-desc">محاسب</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
   
          <!-- /.col -->
        </div>

	
  </div>
  
  
  
  
  
  
                  <div class="tab-pane fade"  dir="rtl" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                       <div class="card card-info">
              <div class="card-header">
                <h3 style="float:right;" class="card-title"> المجموعات</h3>
              </div>
              <div class="card-body">

              	<form  method="POST">
              <div class="input-group mb-3">

                  	<div class="row">
                  	
                  
                  	        <div class="col-sm-12">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="user_id"><i ></i> المعرف :</label>
                    <input style="margin:5px;"  type="text" class="col-sm-3  form-control is-valid"  name="user_id"   id="user_id" placeholder="المعرف" disabled>  
                      </div>
                      </div>
                      
                      
                      
                      
                    <div class="col-sm-6">
                      <!-- select -->
                              <div class="input-group">
                        
                        <label  class="col-form-label" for="firstname"><i></i> الاسم :&nbsp&nbsp&nbsp&nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="firstname"   id="firstname" placeholder="الاسم:">
                 
                        
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="lastname"><i></i> العنوان:&nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="lastname" id="lastname" placeholder="العنوان">
                 
                        
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-sm-6">
                      <div class="input-group">
                        
                        <label  class="col-form-label" for="address"><i></i> العنوان:&nbsp</label>
                    <input style="margin:5px;"  type="text" class="form-control is-valid" name="address"    id="address" placeholder="العنوان">
                 
</div>
</div>
<div class="col-sm-4">
      <div class="input-group">
                        
                   
                        <label  class="col-form-label" for="customers"><i></i> النوع&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>	
		
			
			
			<input placeholder="النوع :" style="margin:0px;"  id="customers" class="form-control" />
			
		
	
                 
	
             
                      </div>
                    </div>
                    <div class="col-sm-2">
      
                        <div class="input-group">
                   
	<input class="km-checkbox" style="margin:10px;" type="checkbox" id="enbbb" />

                    </div>  
                        
                    </div>  
                    
                    
                    
                  </div>
               <div class="row"> 
<button style="margin:5px 5px 5px 5px; "   type="button" class="btn btn-primary ll1" name="newwa"  ><span class="   k-icon k-i-plus-outline"></span> جديد</a>
<button    style="margin :5px 5px 5px 5px; "     type="button" class="btn btn-success ll2" id="save" name="save" data-dismiss="modal"><span class="  k-icon k-i-save"></span> حفظ</button>
  <button  style="margin:5px 5px 5px 5px; "     type="button" class="btn btn-warning ll3" id="updatee"     name="updatee"  ><span class="k-icon k-i-pencil"></span> تعديل</a>
		
	</div>
     

</form>
 
              </div>


         
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
          <div  class="k-ltr" id="grid"></div>
  <br>
	
            </div>
            <!-- /.card -->

          
            
                
              

         
       </div>         
      </div>
         </div>  
        </div>  
';

print $mmm;

?>  




        
<?php
//$uu= $dissv->display(1);

		
require 'api/footer.php';
 function  jjj($nn){
require 'api/footer.php';
}
?>
	<?php

?>
	


	
	<script>

function  rem(gg){
removvv(gg);
}
	
	function  removvv(ffff){
var header = document.getElementById("vv");
var str = `<div id="vv" class="row">
     
          <!-- /.col -->
          <div class="col-md-12" style="padding-right:10px; padding-left:10px;">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?php  echo $_COOKIE["username"];?></h3>
                <h5 class="widget-user-desc">محاسب</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
       
          <!-- /.col -->
   
          <!-- /.col -->
        </div>`; //it can be anything
        
        if(ffff!=1){
var ggh=`<div><?php echo $mmm;
//jjj(1);


?></div>`;
//alert("fff");
str=ggh;
}
$("#control-sidebar").ControlSidebar('toggle');
    var Obj = document.getElementById('vv'); //any element to be fully replaced
    if(Obj.outerHTML) { //if outerHTML is supported
        Obj.outerHTML=str; ///it's simple replacement of whole element with contents of str var
    }


//var btns = header.getElementsById("modal-secondary");
//header.remove();


}

</script>


<script>
 //   document.write("<?php echo  getMessage();?>");
</script>
    <script>
  
    </script>
   <style>

      .km-checkbox {
      	
        border-width: .133rem;
        border-style: solid;
        border-radius: 3px;
        border-color: #db5957;
      }

      .

    </style>
    
    <style>
.k-grid table tr.k-state-selected
{
    background: #22B99F;
}

.k-grid-content>table>tbody>.k-alt
{
   background:#FFB302;   
   filter:Alpha(opacity=50); /* IE8 and earlier */    
}
</style>
<style >
.k-rtl { .k-toolbar { > * { margin-right: 0; margin-left: @toolbar-spacing; } > :last-child { margin-left: 0; } .k-overflow-anchor { border-left-width: 0; border-right-width: @button-border-width; right: auto; left: 0; } } .k-overflow-container { .k-overflow-button { text-align: right; } }}
.k-grid-toolbar name { float:right; }
 </style>
 
 