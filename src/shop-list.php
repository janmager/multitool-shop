<?php
  include 'connect-db.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?v=100">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>* ZSŁ MULTITOOL *</title>
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
  </head>
  <body>

    <!-- LOGO
    <a href="index.html">
      <header>
        <img src="images/logo.png" class="logo">
      </header>
    </a>-->

    <a href="index.php" class="home-icon">
      <img src="../images/back-icon.png">
    </a>

    <div class="container shop" style="flex-direction: column; flex-wrap: nowrap; justify-content: flex-start;">

        <h1>Lista wszystkich produktów</h1>

        <div id="filtr-shop-list">
          <div class="filtr-shop-button shopc" id="btn-all" onclick="update('all')">Pokaż wszystko</div>
          <!-- <div class="line-break"></div> -->
          <div class="filtr-shop-button" id="btn-stajnia" onclick="update('stajnia')">Stajnia</div>
          <div class="filtr-shop-button" id="btn-lacznik" onclick="update('lacznik')">Łącznik</div>
          <div class="filtr-shop-button" id="btn-automat" onclick="update('automat')">Automat</div>
          <!-- <div class="filtr-shop-button" id="btn-przekaski" onclick="filterShop(3)">Słodycze</div>
          <div class="filtr-shop-button" id="btn-napoje" onclick="filterShop(4)">Napoje</div>
          <div class="filtr-shop-button" id="btn-cieple" onclick="filterShop(5)">Dania ciepłe</div>
          <div class="filtr-shop-button" id="btn-bulki" onclick="filterShop(6)">Bułki</div>
          <div class="filtr-shop-button" id="btn-fit" onclick="filterShop(7)">Zdrowe jedzenie</div> -->
          <!-- <div class="line-break" style="height: 50px;"></div> -->
          <!-- <div class="filtr-shop-button filtr-button-img" id="btn-bulki"  onclick="update('a')"><img src="../images/abc-down.png"></div>
          <div class="filtr-shop-button filtr-button-img" id="btn-bulki"  onclick="update('z')"><img src="../images/abc-up.png"></div>
          <div class="filtr-shop-button filtr-button-img" id="btn-bulki" onclick="update('1')"><img src="../images/money-up.png"></div>
          <div class="filtr-shop-button filtr-button-img" id="btn-bulki" onclick="update('9')"><img src="../images/money-down.png"></div> -->
        </div>

        <div id="shop-list-js">
          <table>
            <?php
              if(isset($_GET['name'])) include "search-product.php";
              else include "load-db.php";
            ?>
          </table>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
      function update(place){
          $(".filtr-shop-button").addClass("shopu");
          $("#btn-"+place).removeClass("shopu");
          $("#btn-"+place).addClass("shopc");
          $.ajax({
              url: "custom.php",
              type:"get",
              data:{ place : place },
              success: function(result){ $("table").html(result); }
          });
      }
      </script>
  </body>
</html>
