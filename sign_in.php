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
    header ('Location: main.php');
  } else {
    echo "session failed";
  }
}
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VIAUS</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <header>
      <h1 class="title" onclick="hide_signin_area()">VIAUS</h1>
      <form class="sign" action="sign_in.php" method="post">
        <div class="input_area">
          <input type="text" name="id" placeholder="Wrong ID or PW" autocomplete="off">
          <input type="password" name="pw" placeholder="Your PW" autocomplete="off">
        </div>
        <input type="submit" class="submit" value="SIGN IN">
      </form>
      <form class="sign" action="sign_up.php" method="post">
        <div class="input_area">
          <input type="text" name="id" placeholder="Your ID" autocomplete="off">
          <input type="password" name="pw" placeholder="Your PW" autocomplete="off">
        </div>
        <input type="submit" class="submit" value="SIGN UP">
      </form>
      <nav>
        <input type="button" class="link" value="Sign In" onclick="toggle_signin_area()">
        <input type="button" class="link" value="Sign Up" onclick="toggle_signup_area()">
      </nav>
    </header>
  </body>
  <script src="js/script.js"></script>
</html>
