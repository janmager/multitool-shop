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
        <h1>Zgłoś nieaktualny produkt</h1>

        <form class="report-new-price-form" method="get" id="report-new-price">
          <h2 class="h2-new-price">Wybierz produkt z listy:</h2>
          <select name="report-new-price" form="report-new-price"  class="select-report-new-price" required>
            <?php include "print-select.php" ?>
          </select>

          <button id="report-chg-btn" type="submit" style="margin-top: 100px;">Zgłoś nieaktualny produkt</button>
        </form>
      </div>

      <div class="report-price-done">
        <h1>Dziękuję!</h1>
        <h2>Poprawnie wysłano propozycję usunięcia produktu!</h2>
        <a href="update.php"><div class="report-done">Dalej</div></a>
      </div>

    </div>

  </div>

  <div class="black-bg"></div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/shop-list.js"></script>
    <script>
      $(".report-price-done").css({"display":"none"});
      $(".form-boxx").css({"display":"block"});

      $("form").submit(function(){
        var data = {
          name : $(".select-report-new-price").val()
        };
        $.ajax({
          data : data,
          type : "get",
          url : "delete-product-report-send.php",
          success : function(result){
            $(".form-boxx").css({"display":"none"});
            $(".report-price-done").css({"display":"flex"});
          }
        });
        return false;
      });
      $
    </script>
  </body>
</html>
