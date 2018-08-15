<?php
session_start();
if (!isset($_SESSION['id'])) {
  session_destroy();
  $proc = 'sign';
} else {
  $proc = 'main';
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link rel="stylesheet" href="./css/master.css" type="text/css">
    <link rel="stylesheet" href="./css/<?= $proc ?>.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="./js/script.js"></script>
  </head>
<?php require("./body/$proc.php"); ?>
</html>
