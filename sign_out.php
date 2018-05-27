<?php
session_start();
$res=session_destroy();
if ($res) {
  sleep(1);
  header ('Location: index.html');
} else {
  echo "session_destroy failed";
}
?>
