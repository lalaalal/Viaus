  <body onload="resize_comment()">
    <div id="whole_wrapper">
      <header>
        <div id="title_area">
          <h1 class="headline">VIAUS</h1>
          <p class="comment">Welcome - <?= htmlspecialchars($_SESSION['id']) ?></p>
        </div>
        <nav>
          <input type="button" class="link" value="My Page" onclick="resize_comment('my_page.php')">
          <input type="button" class="link" value="Sign Out" onclick="resize_comment('sign_out.php')">
        </nav>
      </header>
    </div>
  </body>
