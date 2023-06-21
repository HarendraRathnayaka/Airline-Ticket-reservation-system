function checkPassword(){
    var pass = document.getElementById("password").value;
    var repass = document.getElementById("rePassword").value;
    if(pass != repass){
        alert("password missmatched");
        return false;
    }
}

function enabtn(){
    var enableButton = document.getElementById("chcbtn");
    var button = document.getElementById("subBtn");
    if(enableButton.checked == false)
        button.disabled = true;
    else
        button.disabled = false;
}

