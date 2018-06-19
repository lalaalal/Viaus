<header>
  <div class="title_area">
    <h1 class="title">VIAUS</h1>
    <p class="comment">Welcome - <?= htmlspecialchars($_SESSION['id']) ?></p>
  </div>
  <nav>
    <a class="link" href="my_page.php" onclick="resize_comment()">My Page</a>
    <a class="link" href="sign_out.php" onclick="resize_comment()">Sign Out</a>
  </nav>
</header>
