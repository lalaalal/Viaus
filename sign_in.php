<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];
$mysqli = mysqli_connect("localhost", "root", "qhsxlsEndEl030", "user");

$check = "SELECT * FROM account WHERE id='$id' AND pw='$pw'";
$result = $mysqli->query($check);
if ($result->num_rows==1)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);
  $_SESSION['userid']=$id;
  if (isset($_SESSION['userid'])) {
    header('Location: main.php');
  } else {
    echo "session failed";
  }
}

header('Location: main.php');
?>
