$(function () {
    "use strict";
    $("button").on("click", function () {
        var html = "";
      
        $.ajax({
            type: "get",
            url: "http://localhost/learningPHP/api/messages",
            datatype: "json",
            success: function (result) {  
                var obj = JSON.parse(result);
                
                for (var _msg of obj) {
                   html += "<p>" + _msg.id + " " + _msg.value + "</p>";
               }
                
               $("#msg-container").html(html);
           },
           error: function (jqXHR, status, error) {
               alert("error: "+jqXHR.responseText+status+error);
           }
       });
    });
});