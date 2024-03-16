jQuery(document).ready(function($){

  $("a").bind("focus",function(){if(this.blur)this.blur();});
  $("a.target_blank").attr("target","_blank");

	var topBtn = $('#return_top');	
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
  topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000, 'easeOutExpo');
		return false;
  });


  // footer bar
  var footerbar = $('.footer-bar02');  
  footerbar.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
     footerbar.fadeIn("slow");
    } else {
      footerbar.fadeOut();
    }
  });

  // collapse category list widget
  $(".collapse_category_list .parent_category > a").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $(this).next().hide();
       return false;
     } else {
       $(this).addClass("active");
       $(this).next().show();
       return false;
     };
  });

  $(".collapse_category_list .menu-item-has-children > a").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $(this).next().hide();
       return false;
     } else {
       $(this).addClass("active");
       $(this).next().show();
       return false;
     };
  });

  $("#comment_area ol > li:even").addClass("even_comment");
  $("#comment_area ol > li:odd").addClass("odd_comment");
  $(".even_comment > .children > li").addClass("even_comment_children");
  $(".odd_comment > .children > li").addClass("odd_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");

  $("#trackback_switch").click(function(){
    $("#comment_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#comment_area").animate({opacity: 'hide'}, 0);
    $("#trackback_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $("#comment_switch").click(function(){
    $("#trackback_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#trackback_area").animate({opacity: 'hide'}, 0);
    $("#comment_area").animate({opacity: 'show'}, 1000);
    return false;
  });


function mediaQueryClass(width) {

 if (width >= 1025) { //PC

   $("html").removeClass("mobile");
   $("html").addClass("pc");

   $(".menu_button").css("display","none");
   // $("#global_menu").show();
   // $("#global_menu ul ul").hide();

   // $("#global_menu li").hover(function(){
   //   $(">ul:not(:animated)",this).slideDown("fast");
   //   $(this).addClass("active");
   // }, function(){
   //   $(">ul",this).slideUp("fast");
   //   $(this).removeClass("active");
   // });

   $(".category_menu_button").css("display","none");
   $("#archive_product_cateogry_menu").show();
   $("#archive_product_cateogry_menu li ul").hide();

   $("#archive_product_cateogry_menu li").hover(function(){
     $(">ul:not(:animated)",this).slideDown("fast");
     $(this).addClass("active");
   }, function(){
     $(">ul",this).slideUp("fast");
     $(this).removeClass("active");
   });


 } else { //smartphone

   $("html").removeClass("pc");
   $("html").addClass("mobile");

   $("#global_menu li").off('hover');
   $("#global_menu ul ul").removeAttr('style');

   $(".menu_button").css("display", "block");
   $('.menu_button').off('click');

   $(".menu_button").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $('#global_menu').slideUp('slow', 'easeOutExpo');
       return false;
     } else {
       $(this).addClass("active");
       $('#global_menu').slideDown('slow', 'easeOutExpo');
       return false;
     };
   });

   $(".child_menu_button").remove();
   $('#global_menu li > ul').parent().prepend("<span class='child_menu_button'><span class='icon'></span></span>");
   $("#global_menu .child_menu_button").on('click',function() {
     if($(this).parent().hasClass("open")) {
       $(this).parent().removeClass("open");
       return false;
     } else {
       $(this).parent().addClass("open");
       return false;
     };
   });

   $("#global_menu li.menu-item-has-children a").hover(function(){
     $(this).prev().addClass("active");
   }, function(){
     $(this).prev().removeClass("active");
   });

   $("#archive_product_cateogry_menu li").off('hover');
   $("#archive_product_cateogry_menu li ul").show();

   $(".category_menu_button").css("display", "block");
   $('.category_menu_button').off('click');

   if($(".category_menu_button").hasClass("active")) {
     $(".category_menu_button").removeClass("active")
   };

   $(".category_menu_button").on('click',function() {
     if($(this).hasClass("active")) {
       $(this).removeClass("active");
       $('#archive_product_cateogry_menu').hide();
       return false;
     } else {
       $(this).addClass("active");
       $('#archive_product_cateogry_menu').show();
       return false;
     };
   });

 };
};

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

var ww = viewport().width;
var timer = false;

mediaQueryClass(ww);

$(window).bind("resize orientationchange", function() {

  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function() {
    var ww = viewport().width;
    mediaQueryClass(ww);
  }, 200);

})

  /* フッター固定型バー */
  if ( $(".footer-bar02-share").length ) {
    $(".footer-bar02-share").on("click", function() {
      $("#modal-content, #modal-overlay").toggleClass("hide");      
      return false;
    }); 
    $("#modal-overlay").on("click", function() {
      $("#modal-content, #modal-overlay").toggleClass("hide");      
    });
    $("#modal-overlay, #modal-content").on("touchmove", function(e) {
      e.preventDefault();
    });
  }
  if ( $(".footer-bar02").length ) {
    $("#pagetop").css({
      "bottom": $(".footer-bar02").height() + "px"
    });
    $(".footer-bar01").css({
      "padding-bottom": $(".footer-bar02").height() + "px"
    });
  }
  

});