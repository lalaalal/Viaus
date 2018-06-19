<body onload="resize_comment()">
  <div id="whole_wrapper">
    <header>
      <div class="title_area">
        <h1 class="title">VIAUS</h1>
        <p class="comment">Welcome - <?= htmlspecialchars($_SESSION['id']) ?></p>
      </div>
      <nav>
        <a class="link" href="list.php" onclick="resize_comment()">ReSign</a>
        <a class="link" href="sign_out.php" onclick="resize_comment()">Sign Out</a>
      </nav>
    </header>
    <!-- <main>
      <button class="arrow">&#xf104;</button>
      <article class="">

      </article>
      <button class="arrow">&#xf105;</button>
    </main> -->
  </div>
</body>
