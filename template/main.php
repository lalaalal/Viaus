<?php include './lib/check.php'; ?>
<body onload="resize_comment()">
  <div id="whole_wrapper">
    <?php
    if (!isset($_GET['no']) || $_GET['no'] == 0) {
      require("welcome.php");
    } else {
      $post = get_post($_GET['no']);
    }
    ?>
    <main>
      <button class="arrow">&#xf104;</button>
      <article class="post">
        <h1 class="title"><?= $post['title'] ?></h1>
        <div class="txt"><?= $post['body'] ?></div>
      </article>
      <button class="arrow">&#xf105;</button>
    </main>
  </div>
</body>
