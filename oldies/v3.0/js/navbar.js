$(window).scroll(function() {
    if ($("#menu").offset().top >= $("#cambio").offset().top) {
      $("#menu").removeClass("sombras");

      //  $("#menu").addClass("sombras");
    } else {
      $("#menu").addClass("sombras");
       //$("#menu").removeClass("sombras");
    }

    if ($("#menu").offset().top>= $("#titulo").offset().top) {
        $("#titlenav").removeClass("notitle");
        $("#titlenav").addClass("title");
    }else {
          $("#titlenav").removeClass("title");
          $("#titlenav").addClass("notitle");
    }


  });
