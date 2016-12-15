(function PitchYourProject() {
	var element = document.getElementById("pitch-your-project");
	var mobileClose = document.getElementsByClassName("close-pitch")[0];

	document.getElementsByClassName("side-form")[0].addEventListener('click', toggleBox);
	
	var sumbitProjectBtn = document.getElementsByClassName("submit-project-btn")[0];
	if (sumbitProjectBtn !== undefined){
		sumbitProjectBtn.addEventListener('click', toggleBox);
	}

	function toggleBox(){
		if (element.style.display === "" || element.style.display === "none") {
				openBox(element);
			}
			else if (element.style.display === "block") {
				closeBox(element);
			}
	}

	document.getElementById("pitch-your-project").addEventListener('mouseleave', function () {
		closeBox(element);
	});

	mobileClose.addEventListener('click', function () {
		closeMobile(element);
	});

	function openBox(element) {
		element.setAttribute("class", "pitch-your-project-section");
		element.style.display = "block";
		if(document.getElementsByClassName("mobile-home-slider-image")[0]!==undefined){
			window.scrollTo(0, 0);
		}
	}

	function closeBox(element) {
		element.setAttribute("class", "pitch-your-project-hidden");
		setTimeout(function () {
			element.style.display = "none";
		}, 1000);
	}

	function closeMobile(element){
		element.style.display = "none";
	}
})();

