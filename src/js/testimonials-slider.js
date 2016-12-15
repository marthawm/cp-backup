var testimonialsSlider = (function() {
	var slider = document.querySelector('.testimonials-slider'),
		sliderItems = document.querySelectorAll('.testimonials-slider-item'),
		sliderItemsImage = document.querySelectorAll('.testimonials-slider-img'),
		sliderWrapper = document.querySelector('.slider-wrapper'),
		leftButton = document.querySelector('.prev-testimonial'),
		rightButton = document.querySelector('.next-testimonial'),
		quotes = document.querySelectorAll('.testimonials-quote'),
		left = (sliderWrapper.offsetWidth) / 3,
		quotesWrap = document.querySelector('.quotes-wrap'),
		autoSlideInterval = 6000,
		//set slide count to 1, because the second slide is active
		slideCount = 1,
		myObject = {};

	leftButton.addEventListener("click", function(){
		slideLeft();
	})

	rightButton.addEventListener("click", function(){
		slideRight();
	})

	myObject.setImage = function() {
		for (var i = 0; i < sliderItemsImage.length; i++) {
			var backgroundImage = sliderItemsImage[i].getAttribute("data-image");
			sliderItemsImage[i].style.backgroundImage = "url('" + backgroundImage + "')";
			if (!backgroundImage) {
				var backgroundImage = sliderItemsImage[i].getAttribute("data-default");
				sliderItemsImage[i].style.backgroundImage = "url('" + backgroundImage + "')";
			}
		}
	};

	var displayQuote = function(index) {
		// Get latest order of quotes
		quotes = document.querySelectorAll('.testimonials-quote');
		
		if (index !== 1){
			// Display quote of hovered slide
			quotes[1].style.display = "none";
			quotes[index].style.display = "block";

		} else if (index === 1) {

			for (var i = 0; i < quotes.length; i++){
				// Show default css styling (showing only second quote)
				quotes[i].style.display = "";
			}
		}
	}
	
	window.addEventListener("resize", function(){
		myObject.responsiveSlide();
	})

	myObject.responsiveSlide = function() {
		if (window.innerWidth >= 901) {
			left = (sliderWrapper.offsetWidth) / 3;
			myObject.setLeftPositions();
		} else if (window.innerWidth >= 500 && window.innerWidth <= 900) {
			 left = (sliderWrapper.offsetWidth) / 2;
			 myObject.setLeftPositions();
		} else {
			 left = (sliderWrapper.offsetWidth) / 1;
			 myObject.setLeftPositions();
		};

	};


	myObject.setLeftPositions = function() {
		// Get latest order of slides
		var sliderItemsLength = sliderItems.length;
		sliderItems = document.querySelectorAll('.testimonials-slider-item');
		
		// Set left for first slide
		sliderItems[0].style.left = "0px";
		
		// Calculate left position for other slides
		for (var i = 1; i < sliderItemsLength; i++) {
			sliderItems[i].style.left = parseFloat(sliderItems[i - 1].style.left) + left + "px";
		}
	}

	var slideRight = function() {
		// Stop autoslider
		clearInterval(autoSlide);

		// Get latest order of slides
		var sliderItemsLength = sliderItems.length;
		sliderItems = document.querySelectorAll('.testimonials-slider-item');
		
		// Calculate new left position
		for (var i = 0; i < sliderItemsLength; i++){
			sliderItems[i].style.left = parseFloat(sliderItems[i].style.left) - left + "px";
		}

		// Update slide positions
		setTimeout(setFirstSlideToEnd, 1000);
		setTimeout(myObject.setLeftPositions, 1000);

		// // display right quote
		// displayQuote(1);

		// Reset autoslide timer and start it up again
		autoSlide = setInterval(slideRight, autoSlideInterval);
	}

	var slideLeft = function() {
		// Stop autoslider
		clearInterval(autoSlide);

		// Get latest order of slides
		var sliderItems = document.querySelectorAll('.testimonials-slider-item'), 
			sliderItemsLength = sliderItems.length,
			lastSlide = sliderItems[sliderItemsLength - 1];

		// Calculate new left position
		for (var i = 0; i < sliderItemsLength; i++){
			sliderItems[i].style.left = parseFloat(sliderItems[i].style.left) + left + "px";
		}

		// Update slide positions
		setTimeout(setLastSlideToStart, 500);
		setTimeout(myObject.setLeftPositions, 1000);

		// reset autoslide timer and start it up again
		autoSlide = setInterval(slideRight, autoSlideInterval);
	}

	var setFirstSlideToEnd = function() {
		sliderItems = document.querySelectorAll('.testimonials-slider-item');
		var firstSlide = sliderItems[0];
		slider.removeChild(firstSlide);
		slider.appendChild(firstSlide);
		
		// Update quotes
		setFirstQuoteToEnd();
	}

	var setLastSlideToStart = function() {
		sliderItems = document.querySelectorAll('.testimonials-slider-item');
		var sliderItemsLength = sliderItems.length,
			lastSlide = sliderItems[sliderItemsLength - 1],
			firstSlide = sliderItems[0];

		// Give last slide transition time to slide nicely and set new left position
		lastSlide.style.transition = '1s';
		lastSlide.style.left = "-" + left + 'px';
		
		slider.removeChild(lastSlide);
		slider.insertBefore(lastSlide, firstSlide);
		
		// This is a fix to only execute this function after first is complete, TODO: callback function??
		setTimeout(function(){
			lastSlide.style.left = '0px';
		}, 5);

		// Update quote
		setLastQuoteToStart();
	}

	var setFirstQuoteToEnd = function() {
		quotes = document.querySelectorAll('.testimonials-quote');
		var firstQuote = quotes[0];
		quotesWrap.removeChild(firstQuote);
		quotesWrap.appendChild(firstQuote);
	}

	var setLastQuoteToStart = function() {
		quotes = document.querySelectorAll('.testimonials-quote');
		var quotesLength = quotes.length,
			lastQuote = quotes[quotesLength - 1],
			firstQuote = quotes[0];

		quotesWrap.removeChild(lastQuote);
		quotesWrap.insertBefore(lastQuote, firstQuote);
	}

	myObject.clickSlide = function() {
		var sliderItemsLength = sliderItems.length;
		for (var i = 0; i < sliderItemsLength; i++){
			sliderItems[i].addEventListener("click", function() {
				var clickedSlide = this,
					activeSlide = sliderItems[slideCount],
					indexClickedSlide = Array.prototype.indexOf.call(slider.children, clickedSlide);
				
				if (indexClickedSlide < 1){
					// If the left slide is clicked, slide left
					slideLeft();
				} else if (indexClickedSlide > 1){
					//If the right slide is clicked, slide right
					slideRight();
				} else {
					// If the middle and active slide is clicked, stop autoslider
					clearInterval(autoSlide);
					// Start Timer again
					autoSlide = setInterval(slideRight, autoSlideInterval);
				}
			})
		}
	};

	myObject.hoverSlide = function() {
		var sliderItemsLength = sliderItems.length;
		for (var i = 0; i < sliderItemsLength; i++){
			sliderItems[i].addEventListener("mouseover", function() {
				var hoveredSlide = this,
					indexHoveredSlide = Array.prototype.indexOf.call(slider.children, hoveredSlide);

				// Show corresponding quote
				displayQuote(indexHoveredSlide);

				// When mouse leaves slide, display only second quote and restart autoslider
				hoveredSlide.addEventListener("mouseleave", function() {
					displayQuote(1);
				})
			});
		}
	};

	var autoSlide = setInterval(slideRight, autoSlideInterval);

	return myObject;
})();

// Calculate left positions when site is first loaded
testimonialsSlider.setImage();

testimonialsSlider.responsiveSlide();

testimonialsSlider.setLeftPositions();

testimonialsSlider.clickSlide();

testimonialsSlider.hoverSlide();
