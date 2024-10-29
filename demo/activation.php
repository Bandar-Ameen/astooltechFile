<?php
include ('api/pureheader.php');
$username="سعيد";
//$datab="";
if($_SERVER["REQUEST_METHOD"] != "POST"){


if($_GET['key'] && $_GET['token'])
{
	$emm=$_GET['key'];
	$tokkenn=$_GET['token'];
	//echo $emm;
	
//$tt='<h3><i class="text-info"></i>'.$username.'     </h3>';


	$success=' <section class="content">
      <div class="error-page">
        <h1 class="headline text-info">تم</h1>

        <div class="error-content">
     <h3><i class="text-info"></i> مرحبا :'.$username.'     </h3>
          <h3><i class="fas fa-exclamation-triangle text-info"></i> تم تأكيد الحساب بنجاح </h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">تسجيل دخول</a> or try using the search form.
          </p>

          
              <button type="submit" name="submit" class="btn btn-info">دخول
                </button>
       
            <!-- /.input-group -->
          
        </div>
      </div>
      <!-- /.error-page -->

    </section>';
    
    
    
  //  echo $success;
    }else{
$error='
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">خطأ</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> حدث خطاء يرجي المحاولة</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
';
//echo $error;
}
    }else{

$error='
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
';
//echo $error;
}
	?>
	<?php
	include ('api/purefooter.php');
	
	?>
		
		<script>
			
			
//var ddc="<php echo 'gggg';?>" ;
//document.body.write(ddc);
/*

*/


function sucesss(datat){
const boxx = `
<section class="content">
      <div class="error-page">
        <h1 class="headline text-info">تم</h1>

        <div class="error-content">
     <h3><i class="text-info"></i>  </h3>
          <h3 id="vv" ><i class="fas fa-exclamation-triangle text-info"></i> تم تأكيد الحساب بنجاح </h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">تسجيل دخول</a> or try using the search form.
          </p>

          
              <button type="submit" name="submit" class="btn btn-info">دخول
                </button>
       
            <!-- /.input-group -->
          
        </div>
      </div>
      <!-- /.error-page -->

    </section>`;

document.body.innerHTML = boxx;
document.getElementById("vv").innerHTML = datat;
}

function errorr(datat){
const box = `
<section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">خطأ</h2>

        <div class="error-content">
          <h3 id="vv"><i  class="fas fa-exclamation-triangle text-danger"></i> حدث خطاء يرجي المحاولة</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>

               <button type="submit" name="submit" class="btn btn-danger">خروج
                </button>
        </div>
      </div>
      <!-- /.error-page -->

    </section>

`;

document.body.innerHTML = box;
document.getElementById("vv").innerHTML = datat;
}

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

 function  jsfunction(keyy,tokeen){

//alert("ffffd");
var javaScriptVar = '<?php echo $emm; ?>';
var tokennn = '<?php echo $tokkenn; ?>';
var dt=JSON.stringify( { "key":  javaScriptVar, "token": tokennn} );

				
				
				$.ajax({
    url: 'http://0.0.0.0:8080/api/verify-email.php',
    dataType: 'text',
    type: 'post',
    contentType: 'application/json',
    data: dt,
    processData: false,
    success: function(data, textStatus, jQxhr ){
    	if(isJson(data)){
var ffdd=JSON.parse(data); 
if(ffdd.success=='1'){
	sucesss(ffdd.message);
//msgg('info', ffdd.message);
}else{
errorr(ffdd.message);
}
}else{
errorr(ffdd.message);
}
// alert("fffff");
  

 
    },
    error: function( jqXhr, textStatus, errorThrown ){
    alert(errorThrown);
errorr(errorThrown);
   // msgg('error',errorThrown );
    }
});
				
						//}catch(ddd){alert(ddd);

//}
				
				
				


}


</script>

<?php 
echo '<script type="text/javascript">',

     'jsfunction(2,1);',
     '</script>'
;

?>