<?php include './lib/check.php'; ?>
<body onload="resize_comment()">
  <div id="whole_wrapper">
    <?php
    if (!isset($_GET['no']) || $_GET['no'] == 0) {
      $_GET['no'] = 0;
      require("welcome.php");
    } else {
      $post = get_post($_GET['no']);
      require("post.php");
    }
    ?>
    <div id="arrow_area">
      <button class="arrow" onclick="view_post('prev', <?= $_GET['no'] ?>)">&#xf104;</button>
      <button class="arrow" onclick="view_post('next', <?= $_GET['no'] ?>)">&#xf105;</button>
    </div>
  </div>
</body>
