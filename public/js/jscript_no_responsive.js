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

  $("html").addClass("pc");

  $(".menu_button").css("display","none");

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

});