var hamburger = document.getElementsByClassName("nav-icon")[0];
var hamburgerMobile = document.getElementsByClassName("mobile-nav-icon")[0];
var navigation = document.getElementsByClassName("nav-collapse")[0];
console.log(hamburgerMobile);


if(hamburger!==undefined){
	hamburger.addEventListener("mouseover", function(){
		if(navigation.style.display === "none" || navigation.style.display === ""){
			openMenu();	
		} else if(navigation.style.display === "block"){
			closeMenu();
		}
	});
}

if(hamburgerMobile!==undefined){
	hamburgerMobile.addEventListener("click", function(){
		if(navigation.style.display === "none" || navigation.style.display === ""){
			openMenu();	
		} else if(navigation.style.display === "block"){
			closeMenu();
		}
	});
}

function openMenu(){
	navigation.style.display = "block";
	navigation.addEventListener("mouseleave", closeMenu);
}

function closeMenu(){
	document.getElementsByClassName("nav-collapse")[0].style.display = "none";
}