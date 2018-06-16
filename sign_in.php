<?php
include 'lib/check.php';
form_check($_POST['id'], $_POST['pw']);

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$query = "SELECT * FROM user_data WHERE id='{$_POST['id']}' AND pw='{$_POST['pw']}'";
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
