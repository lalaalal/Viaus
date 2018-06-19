<?php
function form_check($mysqli, $form) {
  if ($form['id'] == NULL || $form['pw'] == NULL) {
    echo "empty forms";
    exit();
  }
  $form['id'] = mysqli_real_escape_string($mysqli, $form['id']);
  $form['pw'] = mysqli_real_escape_string($mysqli, $form['pw']);
  return $form;
}

function get_post($no) {
  $mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
  $query = "SELECT board.no, title, body, id, name, board.date
            FROM board LEFT JOIN user_data
            ON board.user_no = user_data.no
            WHERE board.no = ".$no;
  $list = $mysqli->query($query);
  return mysqli_fetch_assoc($list);
}
?>
