<?php
session_start();
if (!isset($_SESSION['id'])) {
  session_destroy();
  header("Location: index.php");
} else {
  // TODO:
  // header("Location: index.php?req=my_page");
}

echo "no: ".$_SESSION['no']."<br>";
echo "id: ".$_SESSION['id']."<br>";
echo "name: ".$_SESSION['name']."<br>";
echo "sex: ".$_SESSION['sex']."<br>";
echo "class: ".$_SESSION['class']."<br>";

echo '<a href="index.php">return</a><br>';
echo '<a href="resign.php">Resign</a>';
?>
