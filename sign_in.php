<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];

$mysqli = mysqli_connect("localhost", "root", "qhsxlsEndEl030", "Viaus");
$check = "SELECT * FROM user_data WHERE id='$id' AND pw='$pw'";
$result = $mysqli->query($check);

if ($result->num_rows==1) {
  $_SESSION['userid']=$id;
  if (isset($_SESSION['userid'])) {
    header('Location: main.php');
  } else {
    echo "session failed";
    exit();
  }
} else {
  header('Location: index.html');
}
?>
