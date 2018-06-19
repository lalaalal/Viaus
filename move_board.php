<?php
if (!isset($_GET['move']) || !isset($_GET['curr'])) {
  header('Location: index.php');
  exit();
}

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$query = "SELECT no FROM board";
$list = $mysqli->query($query);

for($i = 1; $i <= $list->num_rows; $i++) {
  $row[$i] = mysqli_fetch_assoc($list);
}

switch ($_GET['move']) {
case 'next':
  if ($_GET['curr'] == $list->num_rows) {
    $_GET['curr'] = 0;
  }
  $index = $_GET['curr'] + 1;
  header('Location: index.php?no='.$row[$index]['no']);
  break;
case 'prev':
  if ($_GET['curr'] == 0) {
    $_GET['curr'] = $list->num_rows + 1;
  }
  $index = $_GET['curr'] - 1;
  header('Location: index.php?no='.$row[$index]['no']);
  break;
default:
  // code...
  break;
}
?>
