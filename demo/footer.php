</body>




<!-- Jquery script -->
<script src="./assets/jquery/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>

<script src="./assets/jquery.dataTables.min.js"></script>
<script src="./assets/dataTables.bootstrap4.min.js"></script>

<script src="./assets/ado/cute-alert.js"></script>

<script src="./assets/twast/notifications.js"></script>

<script src="./assets/twast/dataTables.responsive.js"></script>
<script>
  $(document).ready(function() {
    $("#flash-msg").delay(7000).fadeOut("slow");
  });
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>




<script>
  function ggf() {
    cuteAlert({
      type: "warning",
      title: "Warning Title",
      message: "Warning Message",
      buttonText: "Okay"
    });

  }

  function apiloginget(vv) {

    try {






      var dt = JSON.stringify({
        "username": "بندر المحمدي",
        "password": "123456789",
        "grant_type": "password",
        "email": "sdfsdf",
        "devicename": "asdasdssssssssssssswewe"
      });


      $.ajax({
        url: 'http://localhost:80/api/Astoolacount/login',
        dataType: 'text',
        type: 'get',
        contentType: 'application/json',
        data: dt,
        processData: false,
        beforeSend: function(xhr) {
          xhr.setRequestHeader('Authorization', 'Basicc ' + vv);
          xhr.setRequestHeader('devicenames', 'sssssssssssssssssssdsdsdww');
          xhr.setRequestHeader('grant_type', 'password');


        },
        success: function(data, textStatus, jQxhr) {

          alert(data);
        },
        error: function(jqXhr, textStatus, errorThrown) {
          alert(JSON.stringify(jqXhr) + "ghghghghg");
        }
      });

    } catch (ddd) {
      alert(ddd);

    }
  }

  function apilogin(vv) {

    try {








      var dt = JSON.stringify({
        "username": "بندر المحمدي",
        "password": "123456789",
        "grant_type": "password",
        "email": "sdfsdf",
        "devicename": "asdasdssssssssssssswewe"
      });


      $.ajax({
        url: 'http://localhost:80/api/Astoolacount/login',
        dataType: 'text',
        type: 'get',
        contentType: 'application/x-www-form-urlencoded',
        data: dt,
        processData: false,
        success: function(data, textStatus, jQxhr) {
          /* if (isJson(data)) {
             var ffdd = JSON.parse(data);
             let bookname = $("input[name*='firstname']"); //$("firstname']");
             bookname.val(data);

           }*/
          alert(data);
        },
        error: function(jqXhr, textStatus, errorThrown) {
          alert(errorThrown);
        }
      });

    } catch (ddd) {
      alert(ddd);

    }
  }

  const myNotification = window.createNotification({
    theme: 'error',
    positionClass: 'nfc-buttom-left',
    showDuration: '300000',
    displayCloseButton: '1'

  });

  const myNotification1 = window.createNotification({
    theme: 'info',
    positionClass: 'nfc-top-left',

    displayCloseButton: '1'

  });



  function readMeta(user, pass) {
    try {
      var dd = btoa(unescape(encodeURIComponent(user + ":" + pass)));
      apiloginget(dd);
      /*
      var settings = {
        "url": "http://localhost:80/api/Astoolacount/login",
        "method": "GET",
        "timeout": 30000,
        "headers": {
          "devicenames": "sssssssssssssssssssdsdsdww",
          "Authorization": "Basic 2KjZhtiv2LEg2KfZhNmF2K3Zhdiv2Yo6MTIzNDU2Nzg5",
          "Content-Type": "application/x-www-form-urlencoded"
        },
        "data": {
          "username": "بندر المحمدي",
          "password": "123456789",
          "grant_type": "password",
          "email": "sdfsdf",
          "devicename": "asdasdssssssssssssswewe"
        }
      };
      /*  $.ajax({
          url: 'http://localhost:80/api/Astoolacount/login',
          headers: {
            "devicenames": "sssssssssssssssssssdsdsdww",
            "Authorization": "Basic 2KjZhtiv2LEg2KfZhNmF2K3Zhdiv2Yo6MTIzNDU2Nzg5",
            "Content-Type": "application/x-www-form-urlencoded"
          },
          type: "GET",
          dataType: 'json',
          data: {
            "username": "بندر المحمدي",
            "password": "123456789",
            "grant_type": "password",
            "email": "sdfsdf",
            "devicename": "asdasdssssssssssssswewe"
          },
          success: function(data) {
            alert('Data received! ' + data);
          },
          error: function(xhr, staus, error) {
            //   var rr = eval("(" + error + ")");
            alert('Data receivedggdfgd! ' +  JSON.stringify(xhr));
          }

        });
      $.ajax(settings).error(function(response) {
        alert(JSON.stringify(response));
      }).done(function(response) {
        alert("ww");
      });
      */
      /* $.ajax({
        type: "GET",
        url: "http://localhost:80/api/Astoolacount/login",
        dataType: 'json',


        beforeSend: function(xhr) {
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhr.setRequestHeader('devicenames', 'fffffffff');
          xhr.setRequestHeader('Authorization', dd);
        },
        success: function(data) {
          alert('Data received! ' + data.object.label);
        },
        error: function(error) {
          // var rr = eval("(" + xhr.responseText + ")");
          alert('Data receivedggdfgd! ' + error);
        }
      });*/
      /* alert(dd);
       $.ajax({
         url: 'http://localhost:80/api/Astoolacount/login',
         type: 'GET',
         dataType: "json",
         data: {
           identifier: "A12345",
           password: "112233"
         },
         beforeSend: function(xhr) {
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
           xhr.setRequestHeader('devicenames', 'fffffffff');
           xhr.setRequestHeader('Authorization', dd);
         },
         success: function(data) {
           alert('Data received! ' + data);
         },
         error: function(data) {
           alert('Data recerererived! ' + data.message);

         }
       });
       */
    } catch (err) {

      alert(err);
    }

  }



  function ggc(ty, ahh) {
    if (ty == 1) {
      myNotification({
        title: 'الرسالة',
        message: ahh,

      });
    }

    if (ty == 2) {
      myNotification1({
        title: 'الرسالة',
        message: ahh,

      });
    }


  }
</script>


</html>