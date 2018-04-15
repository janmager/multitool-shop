<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?v=100">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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
          <span class="shop-list-icon"><a href="shop-list.php"><img src="../images/list.png"></a></span>
          <form method="get" action="shop-list.php">
            <input type="text" name="name" placeholder="WPISZ PRODUKT" id="name" spellcheck="false" autofocus required />
            <button type="submit" id="search-button"><img src="../images/loop.png"></button>
          </form>
        </div>

        <div class="shop-base">
          <div class="box">
            <a href="rand-product.php">
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
            <a href="update.php">
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

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/shop-list.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51521950-11"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-51521950-11');
    </script>

  </body>
</html>
