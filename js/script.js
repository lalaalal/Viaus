var signin_toggle = signup_toggle = false;

function toggle_signin_area() {
  if (signin_toggle == false) {
    if (signup_toggle == true) toggle_signup_area();
    $('form')[0].style.height = '77px';
    signin_toggle = true;
    setTimeout(function() { $('input[name=id]')[0].focus(); }, 700);
  } else {
    $('form')[0].style.height = '0';
    signin_toggle = false;
  }
}

function toggle_signup_area() {
  if (signup_toggle == false) {
    if (signin_toggle == true) toggle_signin_area();
    $('form')[1].style.height = '77px';
    signup_toggle = true;
    setTimeout(function() { $('input[name=id]')[1].focus(); }, 700);
  } else {
    $('form')[1].style.height = '0';
    signup_toggle = false;
  }
}

function hide_sign_area() {
  $('form').css('height', '0');
  signin_toggle = signup_toggle = false;
}

function resize_comment() {
  if ($('.comment')[0].style.height == 0) {
    $('.comment').css("height", "28px");
    onload_fade();
  } else {
    $('.comment').css("height", "0");
    submit_fade();
  }
}

function submit_fade() {
  if ($('form').length != 0) {
    hide_sign_area();
  }
  if ($('main').length != 0) {
    $('main').css('opacity', '0');
  }
  $('nav').css('opacity', '0');

  $('.headline').css('fontSize', '100px');
}

function onload_fade() {
  $('.link').css('opacity', '0.4');
}

function view_post(move, no) {
  location.href = "./move_board.php?move=" + move + "&no=" + no;
}
