<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$mysqli = mysqli_connect("localhost", "root", "qhsxlsEndEl030", "user");

$check = "SELECT * FROM account WHERE id='$id'";
$result = $mysqli->query($check);

if ($id == NULL || $pw == NULL) {
  echo "input all forms";
  exit();
}

if ($result->num_rows == 1) {
  echo "already exist";
  exit();
}

$signup = mysqli_query($mysqli, "INSERT INTO account (id, pw) VALUES ('$id', '$pw')");
if ($signup) {
  echo "sign up success";
}
?>
