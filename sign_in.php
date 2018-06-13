<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];

$mysqli = mysqli_connect("localhost", "root", "qhsxlsEndEl030", "user");
$check = "SELECT * FROM account WHERE id='$id' AND pw='$pw'";
$result = $mysqli->query($check);

if ($result->num_rows==1) {
  // $row = $result->fetch_array(MYSQLI_BOTH);
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
