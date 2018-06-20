<?php
session_start();
if (!isset($_SESSION['id'])) {
  session_destroy();
  $proc = $css = 'sign';
} else {
  $proc = $css = 'main';
  if (isset($_GET['no']) || $_GET['no'] != 0) {
    $css = 'post';
  }
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>VIAUS</title>
  <link rel="stylesheet" href="./css/master.css" type="text/css">
  <link rel="stylesheet" href="./css/<?= $css ?>.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/script.js"></script>
</head>
  <?php require("./template/$proc.php"); ?>
</html>
