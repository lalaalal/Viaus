<?php
include './lib/check.php';

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$F_POST = form_check($mysqli, $_POST);

$query = "SELECT * FROM user WHERE BINARY id='{$F_POST['id']}'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
  $row = mysqli_fetch_assoc($result);
  if (password_verify($F_POST['pw'], $row['pw'])) {
    session_start();
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['no'] = $row['no'];
    header('Location: index.php');
  } else {
    echo "no match";
  }
} else {
  header('Location: index.php');
}
?>
