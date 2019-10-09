$(window).scroll(function() {
    if ($("#menu").offset().top >= $("#as").offset().top) {
        $("#volver").removeClass("novolver");
        $("#volver").addClass("volver");
     }else{
        $("#volver").removeClass("volver");
        $("#volver").addClass("novolver");
  
       
     }
    });