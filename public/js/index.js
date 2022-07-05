var i = 0;
var welcomeText = 'Welcome to sunainatexglobal.com'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

var motoText = 'All about Fashion';



function welcome() {
    if (i < welcomeText.length) {
      document.getElementById("welcome").innerHTML += welcomeText.charAt(i);
      i++;
      setTimeout(welcome, speed);
    };
  
  };


 