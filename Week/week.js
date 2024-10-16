function thuesday(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/thuesday.php?q="+strr);
    xhttps.send();
  }

  function wed(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/wednesday.php?q="+strr);
    xhttps.send();
  }

  function friday(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/friday.php?q="+strr);
    xhttps.send();
  }

  function thu(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/thursday.php?q="+strr);
    xhttps.send();
  }

  function sun(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/sunday.html?q="+strr);
    xhttps.send();
  }

  function sat(strr) {
    if (strr == "") {
      document.getElementById("message").innerHTML = "";
      return;
    }
    const xhttps = new XMLHttpRequest();
    xhttps.onload = function() {
      document.getElementById("message").innerHTML = this.responseText;
    }
    xhttps.open("GET", "./Week/sat.html?q="+strr);
    xhttps.send();
  }