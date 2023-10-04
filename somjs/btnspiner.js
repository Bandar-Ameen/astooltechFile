/*A jQuery plugin which add loading indicators into buttons
* By Minoli Perera
* MIT Licensed.
*/
(function ($) {
   // $('.has-spinner').attr("disabled", false);
    $.fn.buttonLoaderr = function (action) {
        var self = $(this);
        if (action == 'start') {
            if ($(self).attr("disabled") == "disabled") {
                return false;
            }
          $(self).attr("disabled", true);
            $(self).attr('data-btn-text', $(self).text());
            var text = 'يتم الان التحميل';
          //  console.log($(self).attr('data-load-text'));
            if($(self).attr('data-load-text') != undefined && $(self).attr('data-load-text') != ""){
                var text = $(self).attr('data-load-text');
            }
            var textwating=$(self)[0].getElementsByTagName("span")[0].getAttribute("text-wating");
            //data-loading-textt
            var withicons=$(self)[0].getElementsByTagName("span")[0].getAttribute("icon-button");
//alert(withicons);
            $(self).html('<span  text-wating="'+textwating+'" icon-button="'+withicons+'" class="spinner"><i class="fa fa-spinner fa-spin " title="button-loader"></i></span> '+textwating);
         // var withiconsl=$(self)[0].getElementsByTagName("span")[0].getAttribute("icon-button");
//alert(withiconsl);
$(self).addClass('active');
        }
        if (action == 'stop') {
        //	alert("hhh");
        	var ssddf=$(self).attr('data-btn-text');
   var withiconsicon=$(self)[0].getElementsByTagName("span")[0].getAttribute("icon-button");
var textwatingg=$(self)[0].getElementsByTagName("span")[0].getAttribute("text-wating");
// var withicons=$(self)[0].innerHTML;//getElementsByTagName("span")[0].className;
//alert(withiconsicon);
$(self).html('<span text-wating="'+textwatingg+'"  icon-button="'+withiconsicon+'" class="'+withiconsicon+'"></span>'+ssddf+'</a>');

 
            $(self).removeClass('active');
          $(self).attr("disabled", false);
        }
    }
    
  /*  $('.all1').click(function () {
        var btn = $(this);
        $(btn).buttonLoaderr('start');
        setTimeout(function () {
            $(btn).buttonLoaderr('stop');
        }, 3000);
    });*/
    
})(jQuery);
