<?php
session_start();
session_unset();
$res=session_destroy();
if ($res) {
  sleep(1);
  header ('Location: index.php');
} else {
  echo "session_destroy failed";
  exit();
}
?>
