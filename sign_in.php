<?php
include 'lib/check.php';
$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$F_POST = form_check($mysqli, $_POST);
$query = "SELECT * FROM user_data WHERE id='{$F_POST['id']}' AND pw='{$F_POST['pw']}'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
  $row = mysqli_fetch_assoc($result);

  session_start();
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['no'] = $row['no'];
  header('Location: main.php');
} else {
  header('Location: index.html');
}
?>
