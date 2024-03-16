jQuery(document).ready(function($){

var flag = "up";

$(window).on("scroll", function () {

 if ($(this).scrollTop() > 280) {

    if (flag === "up") {
      $("body").removeClass("header_fixed");
      $("body").removeClass("header_slide_up");
      $("body").addClass("header_slide_down");
      flag = "down";
    }

 } else if($(this).scrollTop() < 280) {

    if (flag === "down") {
      $("body").removeClass("header_slide_down");
      $("body").addClass("header_slide_up");
      flag = "up";
    }

    if ($(this).scrollTop() < 100) {
      $("body").addClass("header_fixed");
      $("body").removeClass("header_slide_up");
      $("body").removeClass("header_slide_down");
    }
 }

});


});