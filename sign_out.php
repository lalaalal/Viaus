<?php
session_start();
$res=session_destroy();
if ($res) {
  header ('Location: index.html');
} else {
  echo "session_destroy failed";
}
?>
