function emp2(strr){
    if (strr == "") {
        document.getElementById("message").innerHTML = "";
        return;
      }
      const xhttps = new XMLHttpRequest();
      xhttps.onload = function() {
        document.getElementById("message").innerHTML = this.responseText;
      }
      xhttps.open("GET", "./Hour/emp2.php?q="+strr);
      xhttps.send();
}

function emp3(strr){
    if (strr == "") {
        document.getElementById("message").innerHTML = "";
        return;
      }
      const xhttps = new XMLHttpRequest();
      xhttps.onload = function() {
        document.getElementById("message").innerHTML = this.responseText;
      }
      xhttps.open("GET", "./Hour/emp3.php?q="+strr);
      xhttps.send();
}

function emp4(strr){
    if (strr == "") {
        document.getElementById("message").innerHTML = "";
        return;
      }
      const xhttps = new XMLHttpRequest();
      xhttps.onload = function() {
        document.getElementById("message").innerHTML = this.responseText;
      }
      xhttps.open("GET", "./Hour/emp4.php?q="+strr);
      xhttps.send();
}

function later(strr){
    if (strr == "") {
        document.getElementById("message").innerHTML = "";
        return;
      }
      const xhttps = new XMLHttpRequest();
      xhttps.onload = function() {
        document.getElementById("message").innerHTML = this.responseText;
      }
      xhttps.open("GET", "./Hour/emp5.php?q="+strr);
      xhttps.send();
}