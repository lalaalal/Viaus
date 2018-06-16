<?php
session_start();
if (!isset($_SESSION['id'])) {
  header ('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="./js/script.js"></script>
  </head>
  <body onload="resize_comment()">
    <header>
      <div class="title_area">
        <h1 class="title">VIAUS</h1>
        <p class="comment">Welcome - <?=$_SESSION['id']?></p>
      </div>
      <nav>
        <a class="link" href="resign.php" onclick="resize_comment()">ReSign</a>
        <a class="link" href="sign_out.php" onclick="resize_comment()">Sign Out</a>
      </nav>
    </header>
  </body>
</html>
