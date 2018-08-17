<?php
include './lib/check.php';

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$_POST = form_check($mysqli, $_POST);

$query = "SELECT * FROM user WHERE BINARY id='{$_POST['id']}'";
$result = $mysqli->query($query);
if ($result->num_rows == 1) {
  echo "already exist";
  exit();
}

$hashed_pw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$query = "INSERT INTO user (id, pw) VALUES ('{$_POST['id']}', '{$hashed_pw}')";
if ($mysqli->query($query)) {
  echo "sign up success";
  header('Location: index.php');
} else {
  echo "sign up failed";
}
?>
