<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?v=100">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>* ZSŁ MULTITOOL *</title>
  </head>
  <body>
    <div class="cont-full-view">

    <!-- LOGO
    <a href="index.html">
      <header style="margin-top: 0px">
        <img src="images/logo.png" class="logo logo-not-main">
      </header>
    </a>
  -->

    <a href="../index.html" class="home-icon">
      <img src="images/home-icon.png">
    </a>

    <a href="admin.php" class="admin-icon">
      <img src="images/admin-icon.png">
    </a>

    <div class="pop-up">
      <div class="close-pop-up">
        <img src="images/close.png">
      </div>
      <div class="list-pop-up-items">

      </div>
      <div class="nav-pop-up">
        <div class="prev-pop-up">
          <img src="images/prev-btn.png">
        </div>
        <div class="counter-pop-up"></div>
        <div class="next-pop-up">
          <img src="images/next-btn.png">
        </div>
      </div>
    </div>

    <div class="container-full-view shop" style="flex-direction: row; flex-wrap: wrap;">

        <h1>Stajnia<span class="versus"> vs. </span>Łącznik<span class="versus"> vs. </span>Automaty</h1>

        <div class="shop-search">
          <span class="shop-list-icon"><a href="shop-list.php"><img src="images/list.png"></a></span>
          <form method="get" action="shop-list.php">
            <input type="text" name="name" placeholder="WPISZ PRODUKT" id="name" spellcheck="false" autofocus required />
            <button type="submit" id="search-button"><img src="images/loop.png"></button>
          </form>
        </div>

        <div class="shop-base">
          <div class="box">
            <a href="random-shop.html">
            <div class="box-border" id="box7">
              <img src="images/box-option-7.png" class="in-box-img">
            </div>
            </a>
          </div>

          <div class="box">
            <a href="shop-list.php">
            <div class="box-border" id="box8">
              <img src="images/box-option-8.png" class="in-box-img">
            </div>
            </a>
          </div>

          <div class="box">
            <a href="#">
            <div class="box-border" id="box9">
              <img src="images/box-option-9.png" class="in-box-img">
            </div>
            </a>
          </div>
        </div>

    </div>

    <!-- STOPKA
    <footer style="margin-bottom: 0px; padding-bottom: 25px;">
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="changelog.html">Changelog</a>
      </span>
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="error.html">Zgłoś błąd</a>
      </span>
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="http://www.zsl.poznan.pl/">Strona szkoły</a>
      </span>
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="https://zslpoznan.mobidziennik.pl/dziennik/">Mobi dziennik</a>
      </span>
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="http://moodle.zsl.poznan.pl/moodle/">Moodle</a>
      </span>
      <div class="footer-dot"></div>
      <span class="footer-text">
        <a href="authors.html">Autorzy</a>
      </span>
      <div class="footer-dot"></div>
    </footer> -->
  </div>

  <div class="black-bg"></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/shop-list.js"></script>
    <!-- <script src="../js/search-product.js"></script> -->
  </body>
</html>
