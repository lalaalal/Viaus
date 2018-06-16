<?php
include 'lib/check.php';
form_check($_POST['id'], $_POST['pw']);

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$result = $mysqli->query("SELECT * FROM user_data WHERE id='{$_POST['id']}'");

if ($result->num_rows == 1) {
  echo "already exist";
  exit();
}

$query = "INSERT INTO user_data (id, pw, date) VALUES ('{$_POST['id']}', '{$_POST['pw']}', NOW())";
if ($mysqli->query($query)) {
  echo "sign up success";
  header('Location: index.html');
} else {
  echo "sign up failed";
}
?>
