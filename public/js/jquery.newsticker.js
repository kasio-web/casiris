$(function(){
	var $setElm = $('ul li a');
	var cutFigure = '60'; // カットする文字数
	var afterTxt = ' …'; // 文字カット後に表示するテキスト

	$setElm.each(function(){
		var textLength = $(this).text().length;
		var textTrim = $(this).text().substr(0,(cutFigure))

		if(cutFigure < textLength) {
			$(this).html(textTrim + afterTxt).css({visibility:'visible'});
		} else if(cutFigure >= textLength) {
			$(this).css({visibility:'visible'});
		}
	});

	$(window).load(function(){
		var $setElm = $('.ticker');
		var effectSpeed = 3000;
		var switchDelay = 6000;
		var easing = 'easeOutBack';

		$setElm.each(function(){
			var effectFilter = $(this).attr('rel'); // 'fade' or 'roll' or 'slide'

			var $targetObj = $(this);
			var $targetUl = $targetObj.children('ul');
			var $targetLi = $targetObj.find('li');
			var $setList = $targetObj.find('li:first');

			var ulWidth = $targetUl.width();
			var listHeight = $targetLi.height();
			$targetObj.css({height:(listHeight)});
			$targetLi.css({top:'0',left:'0',position:'absolute'});

            var liCont = $targetLi.length;
 
			if(effectFilter == 'fade') {
				$setList.css({display:'block',opacity:'0',zIndex:'98'}).stop().animate({opacity:'1'},effectSpeed,easing).addClass('showlist');
                if(liCont > 1) {
				setInterval(function(){
					var $activeShow = $targetObj.find('.showlist');
					$activeShow.animate({opacity:'0'},effectSpeed,easing,function(){
						$(this).next().css({display:'block',opacity:'0',zIndex:'99'}).animate({opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({display:'none',zIndex:'98'}).removeClass('showlist');
					});
				},switchDelay);
                }
			} else if(effectFilter == 'roll') {
				$setList.css({top:'3em',display:'block',opacity:'0',zIndex:'98'}).stop().animate({top:'0',opacity:'1'},effectSpeed,easing).addClass('showlist');
                if(liCont > 1) {
				setInterval(function(){
					var $activeShow = $targetObj.find('.showlist');
					$activeShow.animate({top:'-3em',opacity:'0'},effectSpeed,easing).next().css({top:'3em',display:'block',opacity:'0',zIndex:'99'}).animate({top:'0',opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({zIndex:'98'}).removeClass('showlist');
				},switchDelay);
                }
			} else if(effectFilter == 'slide') {
				$setList.css({left:(ulWidth),display:'block',opacity:'0',zIndex:'98'}).stop().animate({left:'0',opacity:'1'},effectSpeed,easing).addClass('showlist');
                if(liCont > 1) {
				setInterval(function(){
					var $activeShow = $targetObj.find('.showlist');
					$activeShow.animate({left:(-(ulWidth)),opacity:'0'},effectSpeed,easing).next().css({left:(ulWidth),display:'block',opacity:'0',zIndex:'99'}).animate({left:'0',opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({zIndex:'98'}).removeClass('showlist');
				},switchDelay);
			}
            }
		});
	});
});
