<?php
session_start();

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$query = "DELETE FROM user_data WHERE no = {$_SESSION['no']}";

if(!$mysqli->query($query)) {
  echo "failed";
  exit();
}

header('Location: sign_out.php');
?>
