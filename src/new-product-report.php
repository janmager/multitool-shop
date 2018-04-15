<!DOCTYPE html>
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
    <div class="cont-full-view">

    <!-- LOGO
    <a href="index.html">
      <header style="margin-top: 0px">
        <img src="images/logo.png" class="logo logo-not-main">
      </header>
    </a>
  -->

  <a href="update.php" class="home-icon">
    <img src="../images/back-icon.png">
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

    <div class="container-full-view shop" style="flex-direction: column; flex-wrap: wrap;">

      <div class="form-boxx">
        <h1>Zgłoś nowy produkt</h1>

        <form class="report-new-price-form" method="get" id="report-new-price">
          <h2 class="h2-new-price">1. Podaj nazwę produktu:</h2>
          <input type="text" name="product-name" id="product-name-id" placeholder="" required>

          <h2 class="h2-new-price">2. Podaj cenę produktu:</h2>
          <input type="number" name="product-price" id="product-price-id" step="0.01" placeholder="" required style="width: 150px;">

          <h2 class="h2-new-price">3. Gdzie można kupić?:</h2>
          <div class="form-checkbox">
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-stajnia" value="stajnia">Stajnia</label></div>
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-lacznik" value="lacznik">Łącznik</label></div>
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-automat" value="automat">Automat</label></div>
          </div>

          <button id="report-chg-btn" type="submit" style="margin-top: 60px;">Zgłoś nowy produkt</button>
        </form>
      </div>

      <div class="report-price-done">
        <h1>Dziękuję!</h1>
        <h2>Poprawnie wysłano propozycję dodania produktu!</h2>
        <a href="update.php"><div class="report-done">Dalej</div></a>
      </div>

    </div>

  </div>

  <div class="black-bg"></div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/shop-list.js"></script>
    <script>
      $(function(){
        $(".report-price-done").css({"display":"none"});
        $(".form-boxx").css({"display":"block"});

        $("form").submit(function(){
          if($('#product-place-stajnia').is(":checked")) var stajnia = 1;
          else var stajnia = 0;
          if($('#product-place-lacznik').is(":checked")) var lacznik = 1;
          else var lacznik = 0;
          if($('#product-place-automat').is(":checked")) var automat = 1;
          else var automat = 0;

          var data = {
            name : $("#product-name-id").val(),
            stajnia : stajnia,
            lacznik : lacznik,
            automat : automat,
            price : $("#product-price-id").val()
          };

          $.ajax({
            type: "get",
            url: "new-product-report-send.php",
            data: data,
            success: function(){
              $(".form-boxx").css({"display":"none"});
              $(".report-price-done").css({"display":"flex"});
            }
          });
          return false;
        });
      });
    </script>
  </body>
</html>
