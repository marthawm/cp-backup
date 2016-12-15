var photos = document.getElementsByClassName("photo");

for (var i = 0; i < photos.length; i++) {
	photos[i].addEventListener("click", function (event) {
		var photo = event.target;

		document.getElementsByClassName("photo-impression")[0].style.display = "block";

		var popupImg = document.getElementById("photo-impression-popup");
		popupImg.src = photo.src;

		caption();

		toggleDarkness(1);
		applyColour(popupImg);
	});
}





function caption() {
	$(".photo").click( function() {
    	var txt = $(this).next('p').attr('id');

		var div = document.getElementById("pic1");
		var field1 = div.textContent;

		var div2 = document.getElementById("pic2");
		var field2 = div2.textContent;

		var div3 = document.getElementById("pic3");
		var field3 = div3.textContent;

		var div4 = document.getElementById("pic4");
		var field4 = div4.textContent;

		var div5 = document.getElementById("pic5");
		var field5 = div5.textContent;

		var div6 = document.getElementById("pic6");
		var field6 = div6.textContent;

		var div7 = document.getElementById("pic7");
		var field7 = div7.textContent;

		var div8 = document.getElementById("pic8");
		var field8 = div8.textContent;

		var div9 = document.getElementById("pic9");
		var field9 = div9.textContent;

		var div10 = document.getElementById("pic10");
		var field10 = div10.textContent;

		var div11 = document.getElementById("pic11");
		var field11 = div11.textContent;

		var div12 = document.getElementById("pic12");
		var field12 = div12.textContent;


		

	    switch(txt)
	    {
	        case "pic1": $("#caption").html(field1);	        		
	            break;

	        case "pic2": $("#caption").html(field2);
	            break;

	        case "pic3": $("#caption").html(field3);
	            break;

	        case "pic4": $("#caption").html(field4);
	            break;

	        case "pic5": $("#caption").html(field5);
	            break;

	        case "pic6": $("#caption").html(field6);
	            break;

	        case "pic7": $("#caption").html(field7);
	            break;

	        case "pic8": $("#caption").html(field8);
	            break;

	        case "pic9": $("#caption").html(field9);
	            break;

	        case "pic10": $("#caption").html(field10);
	            break;

	        case "pic11": $("#caption").html(field11);
	            break;

	        case "pic12": $("#caption").html(field12);
	            break;

	        default: $("#caption").html('Codepamoja');
	            break;
	    }
	});
}











function closePhoto() {
	document.getElementsByClassName("photo-impression")[0].style.display = "none";
	toggleDarkness(0);
}

function applyColour(element) {
	var colour = "grayscale(0)",
		style = element.style;

	style.filter = colour;
	style.webkitFilter = colour;
	style.mozFilter = colour;
	style.oFilter = colour;
}

function toggleDarkness(openState) {
	var style = document.getElementById("cover").style;
	style.zIndex = openState ? "1000" : "-1000";
	style.display = openState ? "block" : "none";
	style.height = getDimensions().y;
	style.width = getDimensions().x;
}

function getDimensions() {
	return {
		x: Math.max(
			document.body.scrollWidth,
			document.body.offsetWidth,
			document.documentElement.clientWidth,
			document.documentElement.offsetWidth
		) + "px",
		y: Math.max(
			document.body.scrollHeight,
			document.body.offsetHeight,
			document.documentElement.clientHeight,
			document.documentElement.offsetHeight
		) + "px"
	};
}

