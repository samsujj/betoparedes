$(function () { 
	// Stack initialize
	var openspeed = 300;
	var closespeed = 300;
	$('.stack2>img').toggle(function(){
		var vertical = 0;
		var horizontal = 0;
		var $el=$(this);
		$el.next().children().each(function(){
			$(this).animate({top: vertical + 'px', left: horizontal + 'px'}, openspeed);
			vertical = vertical + 25;
			horizontal = (horizontal+.14)*2;
		});
		$el.next().animate({top: '40px', left: '10px'}, openspeed).addClass('openStack')
		   .find('li a>img').animate({width: '16px', marginLeft: '9px'}, openspeed);
		$el.animate({paddingBottom: '0'});
	}, function(){
		//reverse above
		var $el=$(this);
		$el.next().removeClass('openStack').children('li').animate({top: '-33px', left: '-10px'}, closespeed);
		$el.next().find('li a>img').animate({width: '16px', marginLeft: '0'}, closespeed);
		$el.animate({paddingBottom: '35px'});
	});
	
	// Stacks additional animation
	$('.stack2 li a').hover(function(){
		$("img",this).animate({width: '16px'}, 100);
		$("span",this).animate({marginRight: '30px'});
	},function(){
		$("img",this).animate({width: '16px'}, 100);
		$("span",this).animate({marginRight: '0'});
	});
});