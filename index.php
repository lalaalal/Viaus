<?php
session_start();
if (!isset($_SESSION['id'])) {
  session_destroy();
  $req = 'sign';
} else {
  if (!isset($_GET['req'])) {
    $req = 'main';
  } else {
    $req = $_GET['req'];
  }
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="./css/master.css" type="text/css">
    <link rel="stylesheet" href="./css/<?= $req ?>.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="./js/script.js"></script>
  </head>
<?php require("./body/$req.php"); ?>
</html>
