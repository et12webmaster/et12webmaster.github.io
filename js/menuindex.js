$(document).ready(function () {
  var trigger = $('.hamburger'),
    overlay = $('.overlay'),
    isClosed = false;

  trigger.click(function () {
    hamburger_cross();
  });

  function hamburger_cross() {

    if (isClosed == true) {
      overlay.hide();
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
    } else {
      overlay.show();
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isClosed = true;
    }
  }

  var click = 0;
  $("button").click(function () {
    if (click == 0) {
      click = 1;
      $(this).addClass("button-to-arrow");
      $(".linea#uno").addClass("before-to-arrow");
      $(".linea#tres").addClass("after-to-arrow");
    }
    else {
      click = 0;
      $(this).removeClass("button-to-arrow");
      $(".linea#uno").removeClass("before-to-arrow");
      $(".linea#tres").removeClass("after-to-arrow");
    }
  });

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });
});
