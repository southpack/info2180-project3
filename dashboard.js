window.onload= function(){
    postDoc1();
    postDoc();
};

function postDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("applied").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dashboard.php", true);
  xhttp.send();
}
function postDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("available").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dashboard2.php", true);
  xhttp.send();
}
function postjob(){
    window.location.href = "newjob.html";
}