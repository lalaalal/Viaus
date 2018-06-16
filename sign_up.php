<?php
$id = $_POST['id'];
$pw = $_POST['pw'];

if ($id == NULL || $pw == NULL) {
  echo "input all forms";
  exit();
}

$mysqli = mysqli_connect("localhost", "root", "qhsxlsEndEl030", "Viaus");
$result = $mysqli->query("SELECT * FROM user_data WHERE id='$id'");

if ($result->num_rows == 1) {
  echo "already exist";
  exit();
}

$signup = $mysqli->query($mysqli, "INSERT INTO user_data (id, pw, date) VALUES ('$id', '$pw', NOW())");
if ($signup) {
  echo "sign up success";
  header('Location: index.html');
} else {
  echo "sign up failed";
}
?>
