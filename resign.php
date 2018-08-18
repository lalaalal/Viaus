<?php
session_start();

if (!isset($_SESSION['id'])) {
  session_destroy();
  header('Location: index.php');
  exit();
}

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$query = "DELETE FROM user WHERE no = {$_SESSION['no']}";

if(!$mysqli->query($query)) {
  echo "failed";
  exit();
}

header('Location: sign_out.php');
?>
