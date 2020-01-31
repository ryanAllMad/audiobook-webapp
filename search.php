<?php include 'header.php'; ?>
<body class="search-page">
  <div class="container">
    <!--landmark banner area-->
    <header class="search-box">
      <form role="search">
        <!--Search Aria Role-->
        <input type="search" aria-label="search text" name="search" />
        <button type="submit" value="Search">Search<span class="small icon"><img
              src="http://audiobook/assets/search-solid.svg" /></span></button>
      </form>
    </header>
    <div class="filter">
      <div class="filt small icon"><img src="http://audiobook/assets/filter-solid.svg" alt="filter results" /><br>Filter</div>
      <div class="sort small icon"><img src="http://audiobook/assets/sort-alpha-down-solid.svg" alt="sort results" /><br>Sort</div>
    </div>
    <main class="content">

    </main>
<?php include 'footer.php'; ?>