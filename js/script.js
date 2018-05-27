var signin_toggle = false;
var signup_toggle = false;

function toggle_signin_area() {
  if (signin_toggle == false) {
    if (signup_toggle == true) toggle_signup_area();
    document.getElementsByTagName('form')[0].style.height='77px';
    signin_toggle = true;
    setTimeout(function() {document.getElementsByName('id')[0].focus();}, 700);
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
    setTimeout(function() {document.getElementsByName('id')[1].focus();}, 700);
  } else {
    document.getElementsByTagName('form')[1].style.height='0';
    signup_toggle = false;
  }
}

function hide_sign_area() {
  document.getElementsByTagName('form')[0].style.height='0';
  document.getElementsByTagName('form')[1].style.height='0';
  signin_toggle = false;
  signup_toggle = false;
}

function resize_comment() {
  if (document.getElementsByClassName('comment')[0].style.height == 0) {
    document.getElementsByClassName('comment')[0].style.height='28px';
    onload_fade();
  } else {
    document.getElementsByClassName('comment')[0].style.height='0';
    submit_fade();
  }
}

function submit_fade() {
  if (document.getElementsByTagName('form').length != 0) {
    hide_sign_area();
  }
  document.getElementsByTagName('nav')[0].style.opacity='0';
}

function onload_fade() {
  document.getElementsByClassName('link')[0].style.opacity='0.4';
  document.getElementsByClassName('link')[1].style.opacity='0.4';
}
