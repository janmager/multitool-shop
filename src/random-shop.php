<!DOCTYPE html>
<?php
  include "connect-db.php";

  $id = $_GET['id'];
  $length = $_GET['length'];

  $sql = "SELECT * FROM shop WHERE id = $id";

  $i = 1;

  $result = $conn->query($sql);

  while($result->num_rows <= 0) {
    $sql = "SELECT * FROM shop WHERE id = $id+$i";
    $result = $conn->query($sql);
    $i++;
  }

  $row = $result->fetch_assoc();

  $product_name = $row["name"];
  $product_price = $row["price"];
  $product_price = number_format($product_price, 2);
  $product_place_1 = $row["stajnia"];
  $product_place_2 = $row["lacznik"];
  $product_place_3 = $row["automat"];
  if($product_place_1==1 && $product_place_2==1 && $product_place_3==1) $product_place = "Stajnia & Łącznik & Automat";
  else if($product_place_1==1 && $product_place_2==1 && $product_place_3==0) $product_place = "Stajnia & Łącznik";
  else if($product_place_1==1 && $product_place_2==0 && $product_place_3==0) $product_place = "Stajnia";
  else if($product_place_1==1 && $product_place_2==0 && $product_place_3==1) $product_place = "Stajnia & Automat";
  else if($product_place_1==0 && $product_place_2==1 && $product_place_3==1) $product_place = "Łącznik & Automat";
  else if($product_place_1==0 && $product_place_2==0 && $product_place_3==1) $product_place = "Automat";
  else if($product_place_1==0 && $product_place_2==1 && $product_place_3==0) $product_place = "Łącznik";
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css?v=75">
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

    <a href="index.php" class="home-icon">
      <img src="images/back-icon.png">
    </a>

    <div class="container-full-view shop">

      <h1>Losowy produkt</h1>
      <div class="rand-box">
        <h2 id="name-random"><?php echo $product_name ?></h2>
        <h2 id="place-random"><?php echo $product_place ?></h2>
        <h2 id="price-random"><?php echo $product_price ?> PLN</h2>
      </div>

      <div class="rand-again">Losuj ponownie</div>

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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
      $(".rand-again").click(function(){
          $.ajax({
              url: "rand-product-again.php",
              dataType:"json",
              success: function(result){
                $("#name-random").html(result.name);
                $("#place-random").html(result.place);
                $("#price-random").html(result.price + " PLN");
              }
          });
      });
      </script>
  </body>
</html>
