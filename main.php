<?php
session_start();
if (!isset($_SESSION['userid'])) {
  header ('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
  </head>
  <body>
    <header>
      <h1 class="title" onclick="hide_signin_area()">VIAUS</h1>
      <nav>
        <input type="button" class="link" value="About" onclick="toggle_signin_area()">
        <input type="button" class="link" value="Sign Out" onclick="location.href='index.html';">
      </nav>
    </header>
  </body>
  <script src="./js/script.js"></script>
</html>
