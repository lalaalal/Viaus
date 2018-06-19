<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>VIAUS</title>
  <link rel="stylesheet" href="./css/master.css" type="text/css">
  <link rel="stylesheet" href="./css/fontello.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/index_ani.js"></script>
</head>
  <?php
  session_start();
  if (!isset($_SESSION['id'])) {
    session_destroy();
    require('templete/sign.php');
  } else {
    if ($_GET['page'] == 'board') {
      require('template/board.php');
    }
    require('templete/main.php');
  }
  ?>
</html>
