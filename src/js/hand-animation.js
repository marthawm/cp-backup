function isElementInViewport(elem) {
	var el = $(elem);

	// Get the scroll position of the page.
	var scrollElem = $("body");
	var viewportTop = $(scrollElem).scrollTop();
	var viewportBottom = viewportTop + $(window).height();

	// Get the position of the element on the page.
	var elemTop = Math.round( el.offset().top )+450;
	var elemBottom = elemTop + el.height();

	return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

// Check if it's time to start the animation.
function checkAnimation() {
	var el = $(".scrum-board");
	if (isElementInViewport(el) && window.matchMedia("(min-width: 1025px)").matches ) {
		// Start the animation
		$(".hand").animate({left:'-350px'});
	}
	else if (isElementInViewport(el) && window.matchMedia("(max-width: 1024px)").matches ){
		$(".hand").animate({right:'-210px'});
	}
}

// Capture scroll events
$(window).scroll(function(){
	checkAnimation();
});