window.onload = function() {
	document.getElementById("instruction1").style.backgroundColor = "rgb(188, 255, 159)";
}

function openForm1() {
	document.getElementById("instruction2").style.backgroundColor = "rgb(188, 255, 159)";
	var formToShow = document.getElementById("form-1");
	var formToHide = document.getElementById("form-2");
	fade(formToShow, formToHide);
	document.getElementById('hr-end').classList.remove("hr-change");
}

function openForm2() {
	document.getElementById("instruction2").style.backgroundColor = "rgb(188, 255, 159)";
	var formToShow = document.getElementById("form-2");
	var formToHide = document.getElementById("form-1");
	fade(formToShow, formToHide);
	document.getElementById('hr-end').classList.add('hr-change');
}

function fade(formToShow, formToHide){
	var opacity = 1;
	var timer1 = setInterval(function() {
		if (opacity <= 0){
			clearInterval(timer1);
		}
		formToHide.style.opacity = opacity;
		opacity -= 0.1;
	}, 50);	
	formToHide.style.display = "none";

	opacity = 0;
	formToShow.style.opacity = 0;
	formToShow.style.display = "block";
	var timer2 = setInterval(function() {
		if (opacity >= 1){
			clearInterval(timer2);
		}
		formToShow.style.opacity = opacity;
		opacity += 0.1;
	}, 50);		
}

document.getElementById("oib").addEventListener("keypress", function (event) {
	var charCode = event.which ? event.which : event.keyCode;
	if (charCode < 48 || charCode > 57) {
		event.preventDefault();
	}
});


var checkFormValidity = function(){
	if ((window.getComputedStyle(document.getElementById("form-1")).display==="block") &&
		document.getElementById("name1").value &&
		document.getElementById("email1").value && 
		document.getElementById("address").value &&
		document.getElementById("oib").value &&
		document.getElementById("note").value &&
		document.getElementById("package").value ||
		(window.getComputedStyle(document.getElementById("form-2")).display==="block") &&
		document.getElementById("name2").value &&
		document.getElementById("email2").value &&
		document.getElementById("question").value){
			document.getElementById("instruction3").style.backgroundColor = "rgb(188, 255, 159)";
		} else {
			document.getElementById("instruction3").style.backgroundColor = "rgb(241, 241, 241)";
	}
};

document.getElementById("name2").addEventListener("keypress", checkFormValidity);
document.getElementById("email2").addEventListener("keypress", checkFormValidity);
document.getElementById("question").addEventListener("keypress", checkFormValidity);

document.getElementById("name1").addEventListener("keypress", checkFormValidity);
document.getElementById("email1").addEventListener("keypress", checkFormValidity);
document.getElementById("address").addEventListener("keypress", checkFormValidity);
document.getElementById("oib").addEventListener("keypress", checkFormValidity);
document.getElementById("note").addEventListener("keypress", checkFormValidity);
document.getElementById("package").addEventListener("change", checkFormValidity);

document.getElementById("button-form-1").addEventListener("click", checkFormValidity);
document.getElementById("button-form-2").addEventListener("click", checkFormValidity);
