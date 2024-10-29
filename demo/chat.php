<?php
//$ds = DIRECTORY_SEPARATOR;
//$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;

//require_once("{$base_dir}api{$ds}pureheader.php");
//echo $base_dir;
include "api/pureheader.php";

function  cc($mm){


return  "ddddd";

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








<div id="chat"></div>

<script>
  $(document).ready(function () {
    // The post event handler.
    function onPost(args) {
      var chat = args.sender;
//alert(args.text);
      // Initiate an AJAX request and pass the args.text value.
      $.ajax("te.php", {
        type: "POST",
        data: {
          message: args.text,
          take: 1
        }
      }).then(function(response) {
        alert(response);
// Retrieve the needed data from the received response.
        var userName = response;//[0].ProductName;
        var text = "Response from " + userName;

        // Render a the returned text in the Chat.
        // Pass also the user (remote) info as a second parameter.
        chat.renderMessage({
          type: "text",
          text:  text,
          timestamp: new Date()
        }, {
          name: userName
        });
      }).fail(function(error) {
        // Handle failed AJAX.
      })
    }

    // Initialize the Chat widget.
    var chat = $("#chat").kendoChat({
      post: onPost
    }).data("kendoChat");

    // Initially render a hint message to the user.
    chat.renderMessage({
      type: "text",
      text:  "Type a number from 1 to 70",
      timestamp: new Date()
    }, {
      name: "Botyo"
    });
  });
</script>

      
      <!-- /.social-auth-links -->

      
    <!-- /.card-body -->
  </div>
  </div>
  <div id="pdfviewer"></div>
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
//require_once("{$base_dir}api{$ds}purefooter.php");
include 'api/purefooter.php';


?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.js"></script>
<script>
    window.pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.worker.js';
</script>
	
	