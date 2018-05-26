var signin_toggle = false;
var signup_toggle = false;

function toggle_signin_area() {
  if (signin_toggle == false) {
    if (signup_toggle == true) toggle_signup_area();
    document.getElementsByTagName('form')[0].style.height='77px';
    signin_toggle = true;
  } else {
    document.getElementsByTagName('form')[0].style.height='0';
    signin_toggle = false;
  }
}

function toggle_signup_area() {
  if (signup_toggle == false) {
    if (signin_toggle == true) toggle_signin_area();
    document.getElementsByTagName('form')[1].style.height='77px';
    signup_toggle = true;
  } else {
    document.getElementsByTagName('form')[1].style.height='0';
    signup_toggle = false;
  }
}

function hide_signin_area() {
  document.getElementsByTagName('form')[0].style.height='0';
  document.getElementsByTagName('form')[1].style.height='0';
  signin_toggle = false;
  signup_toggle = false;
}
