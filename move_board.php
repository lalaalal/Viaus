<?php
if (!isset($_GET['move']) || !isset($_GET['no'])) {
  header('Location: index.php');
  exit();
}

$mysqli = mysqli_connect("localhost", "viaus", "isdj_viaus", "viaus");
$query = "SELECT no FROM board";
$list = $mysqli->query($query);

$row[0]['no'] = $curr = 0;
for ($i = 1; $i <= $list->num_rows; $i++) {
  $row[$i] = mysqli_fetch_assoc($list);
  if ($row[$i]['no'] == $_GET['no']) {
    $curr = $i;
  }
}

switch ($_GET['move']) {
case 'next':
  $index = $curr + 1;
  if ($curr == $list->num_rows) {
    $index = 0;
  }
  header('Location: index.php?no='.$row[$index]['no']);
  break;
case 'prev':
  $index = $curr - 1;
  if ($curr == 0) {
    $index = $list->num_rows;
  }
  header('Location: index.php?no='.$row[$index]['no']);
  break;
default:
  // code...
  break;
}
?>
