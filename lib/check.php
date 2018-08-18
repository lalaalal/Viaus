<?php
function form_check($mysqli, $form) {
  if ($form['id'] == NULL || $form['pw'] == NULL) {
    echo "empty forms"."<br>";
    echo '<a href="index.php">return</a>';
    exit();
  }
  $form['id'] = mysqli_real_escape_string($mysqli, $form['id']);
  $form['pw'] = mysqli_real_escape_string($mysqli, $form['pw']);
  return $form;
}
