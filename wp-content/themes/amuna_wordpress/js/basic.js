

/** $(window).scroll(function(){
    $(".intro-container").css("opacity", 1 - $(window).scrollTop() / 300);
  }); **/


$( window ).load(function() {
	$('#preload').fadeOut(900);
	
	function blinker() {
    $('.loading').fadeOut(500);
    $('.loading').fadeIn(500);
	$('#preload p').removeClass('loading');

}

setInterval(blinker, 800);

});

$( window ).load(function() {
	$('#preload-sub').delay(1000).fadeOut(900);
	
	function blinker() {
    $('.loading').fadeOut(500);
    $('.loading').fadeIn(500);
	$('#preload-sub p').removeClass('loading');

}

setInterval(blinker, 800);

});

$(document).ready(function() {
		
$(".scrollTop").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
	});
	
});



// LINE BUTTON

var anchor = document.querySelectorAll('#navOpen');

[].forEach.call(anchor, function(anchor){
  var open = false;
  anchor.onclick = function(event){
	event.preventDefault();
	if(!open){
	  this.classList.add('close');
	  open = true;
	}
	else{
	  this.classList.remove('close');
	  open = false;
	}
  }
}); 
	


$(function() {

	$('#navOpen').click(function() {
		$("#in-visible").fadeToggle(600);
	});
});



$(function() {
    //caches a jQuery object containing the header element
    var header = $("#nav-outter");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 30) {
            header.removeClass('site-header').addClass("mobileHeader");
        } else {
            header.removeClass("mobileHeader").addClass('site-header');
        }
    });
});

$(function() {
    //caches a jQuery object containing the header element
    var header = $("#btt-btn");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
            header.removeClass('bbt-wrap').addClass("btt-show");
        } else {
            header.removeClass("btt-show").addClass('bbt-wrap');
        }
    });
});

	$(".scroll").click(function(event){		
		var modHeight = 98;

		event.preventDefault();
		$('html,body').animate({scrollTop: ($(this.hash).offset().top - modHeight ) },2000);
	});
	
