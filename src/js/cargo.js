/*var senAddressError = document.getElementById('sen-address-error');
var senEmailError = document.getElementById('sen-email-error');
var recAddressError = document.getElementById('rec-address-error');
var recEmailError = document.getElementById('rec-email-error');

function validateaddress(){
	var name = document.getElementById('address').value;
	
	if(name.length == 0 ){
		senAddressError.innerHTML = 'Name is Required';
		return false;
	}
	
}*/

/*var response = confirm ("You Reloaded the Page");*/

function myFunction() {
	var txt;
	if (confirm ("Press a Button!")){
		txt = "You confirm Details";
	}	else {
		txt = "Canceled..!";
	}

document.getElementById("demo").innerHTML = txt;
}