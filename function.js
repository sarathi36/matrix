
     function sunday(strr) {
          if (strr == "") {
            document.getElementById("message").innerHTML = "";
            return;
          }
          const xhttps = new XMLHttpRequest();
          xhttps.onload = function() {
            document.getElementById("message").innerHTML = this.responseText;
          }
          xhttps.open("GET", "week.php?q="+strr);
          xhttps.send();
        }


        function mondayemp(strr){
            if (strr == "") {
                document.getElementById("message").innerHTML = "";
                return;
              }
              const xhttps = new XMLHttpRequest();
              xhttps.onload = function() {
                document.getElementById("message").innerHTML = this.responseText;
              }
              xhttps.open("GET", "employee.php?q="+strr);
              xhttps.send();
        }



        function mondaywork(strr){
            if (strr == "") {
                document.getElementById("message").innerHTML = "";
                return;
              }
              const xhttps = new XMLHttpRequest();
              xhttps.onload = function() {
                document.getElementById("message").innerHTML = this.responseText;
              }
              xhttps.open("GET", "workhour.php?q="+strr);
              xhttps.send();
        }

        function total(strr){
            if (strr == "") {
                document.getElementById("message").innerHTML = "";
                return;
              }
              const xhttps = new XMLHttpRequest();
              xhttps.onload = function() {
                document.getElementById("message").innerHTML = this.responseText;
              }
              xhttps.open("GET", "total.php?q="+strr);
              xhttps.send();
        }