  <body onload="onload_fade()">
    <div id="whole_wrapper">
      <header>
        <h1 class="headline" onclick="hide_sign_area()">VIAUS</h1>
        <form class="sign" action="sign_in.php" method="post">
          <div class="input_area">
            <input type="text" name="id" placeholder="Your ID" autocomplete="off">
            <input type="password" name="pw" placeholder="Your PW" autocomplete="off">
          </div>
          <input type="submit" value="SIGN IN" onclick="submit_fade()">
        </form>
        <form class="sign" action="sign_up.php" method="post">
          <div class="input_area">
            <input type="text" name="id" placeholder="Your ID" autocomplete="off">
            <input type="password" name="pw" placeholder="Your PW" autocomplete="off">
          </div>
          <input type="submit" value="SIGN UP" onclick="submit_fade()">
        </form>
        <nav>
          <input type="button" class="link" value="Sign In" onclick="toggle_signin_area()">
          <input type="button" class="link" value="Sign Up" onclick="toggle_signup_area()">
        </nav>
      </header>
    </div>
  </body>
