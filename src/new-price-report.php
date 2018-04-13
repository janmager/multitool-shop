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
        <h1>Zgłoś nową cenę</h1>

        <form class="report-new-price-form" method="get" id="report-new-price">
          <h2 class="h2-new-price">Wybierz produkt z listy:</h2>
          <select name="report-new-price" form="report-new-price"  class="select-report-new-price" required>
            <?php include "print-select.php" ?>
          </select>

          <h2 class="h2-new-price">Podaj nową cenę:</h2>
          <input type="number" name="product-price" id="product-price-id" step="0.01" placeholder="" required>

          <button id="report-chg-btn" type="submit">Zgłoś zmianę</button>
        </form>
      </div>

      <div class="report-price-done">
        <h1>Dziękuję!</h1>
        <h2>Poprawnie wysłano propozycję zmiany ceny!</h2>
        <a href="update.php"><div class="report-done">Dalej</div></a>
      </div>

    </div>
  </div>

  <div class="black-bg"></div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
      $("form").submit(function(){
        var data = {
          name : $(".select-report-new-price").val(),
          price : $("#product-price-id").val()
        };
        $.ajax({
          data : data,
          type : "get",
          url : "new-price-report-send.php",
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
