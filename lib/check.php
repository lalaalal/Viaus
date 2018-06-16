<?php
function form_check($id, $pw) {
  if ($id == NULL || $pw == NULL) {
    echo "empty forms";
    exit();
  }
  return true;
}

?>
