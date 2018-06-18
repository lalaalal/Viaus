<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/sign.css" type="text/css">
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <?php
  session_start();
  if (!isset($_SESSION['id'])) {
    require('templete/sign.php');
  } else {
    require('templete/main.php');
  }
  ?>
</html>
