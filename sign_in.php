<?php
$id = $_POST['id'];
$pw = $_POST['pw'];

if (strcmp($id, "lalaalal") != 0)
{
  echo "wrong id<br>";
} else if (strcmp($pw, "0101") != 0)
{
  echo "wrong pw<br>";
} else {
  echo "welcome";
}
 ?>
