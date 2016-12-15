(function registerProject() {
	var openRegister = document.getElementsByClassName("open-register");
	var closeRegister = document.getElementsByClassName("close-register");
	
	var startBlock = document.getElementsByClassName("open-register-project")[0];
	var registerForm = document.getElementsByClassName("register-project")[0];
	registerForm.style.display = "none";
	
	openRegister[0].addEventListener('click', openRegisterForm);

	function openRegisterForm(){
		if (registerForm.style.display == "none"){
			registerForm.style.display = "block";
			startBlock.style.display = "none";
		} 
	}

	closeRegister[0].addEventListener('click', closeRegisterForm);
	
	function closeRegisterForm(){
		if (registerForm.style.display == "block"){
			registerForm.style.display = "none";
			startBlock.style.display = "block";
		};
	}
})();