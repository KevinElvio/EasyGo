$(document).ready(function(){
    event.preventDefault();
    $.ajax({
        url: "",
        method: "",
        data: $('').serialize(),
        dataType: "text",
        success: function(strmassage){
            console.log("suces");
        }
        })
})