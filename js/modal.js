var modal = document.getElementById("modal");
var btn = document.getElementById("signupbtn");
var span = document.getElementsByClassName("close")[0];
var getuser = document.getElementById("loginbtn");

function getuserfunction(){
    var x = document.getElementById("username").value;
    console.log(x);
}



btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}

