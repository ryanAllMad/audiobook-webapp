<?php include 'header.php'; ?>

<body>
  <div class="container">
    <!--landmark banner area-->
    <header class="search-box" onclick="showThis(`.search-form`)" ondblclick="hideThis(`.search-form`)">
      <div class="icon">
        <a href="http://audiobook/search.php" title="search"><span><img src="http://audiobook/assets/search-solid.svg" alt="to search" /></span></a>
        
      </div>
      <h2><a href="http://audiobook/search.php" title="to search">Search</a></h2>
      <div class="search-form hide">
        <input id="searchInput" class="searchInput" type="search" aria-label="search text" name="search" />
        <button type="submit" value="Search">Search<span class="small icon"><img
          src="http://audiobook/assets/search-solid.svg" /></span></button>
      </div>

    </header>
    <!--main content area landmark-->
    <main>
      <div class="new-release-box">
        <div class="icon">
          <a href="http://audiobook/new-releases.php" title="new releases"><span><img
                src="http://audiobook/assets/glasses-solid.svg" alt="to new releases"/></span></a>
        </div>
        <h2><a href="http://audiobook/new-releases.php" title="new releases">New Releases</a></h2>
      </div>
      <div class="favorites-box">
        <div class="icon">
          <a href="http://audiobook/favorites.php" title="favorites">
            <span><img src="http://audiobook/assets/heart-regular.svg" alt="to favorites"/></span></a>
        </div>
        <h2><a href="http://audiobook/favorites.php" title="favorites">Favorites</a></h2>
      </div>
      <div class="account-box">
        <div class="icon">
          <a href="http://audiobook/account.php" title="account">
            <span><img src="http://audiobook/assets/user-regular.svg" alt="to account profile" /></span></a>
        </div>
        <h2><a href="http://audiobook/account.php" title="account">Account</a></h2>
      </div>
    </main>
    <?php include 'footer.php'; ?>