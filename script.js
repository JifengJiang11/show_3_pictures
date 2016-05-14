window.onload = function () {
	var oDivSign = document.getElementById('sign');
	oInputUsername = document.getElementById('signin-username');
	oInputPassword = document.getElementById('signin-password');
	oInputSignin = document.getElementById('signin-signin');
	oDivSign = document.getElementById('sign');
	oDivIncorrect = document.getElementById('signin-incorrect');
	
	oInputSignin.onclick = function () {
		if (oInputUsername.value == "test" && oInputPassword.value == "1234"){
			window.location.href = "pic.html";
		}
		else {
			oDivIncorrect.style.display = "block";
		}
	};
};