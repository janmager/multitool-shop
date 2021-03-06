<?php
  session_start();
  if(!ISSET($_SESSION["newmember"])){
    header("Location: admin.php");
    exit();
  }
?>

<html>
<head>
  <meta charset='utf-8'>
  <link rel='stylesheet' type='text/css' href='style.css?v=100'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet'>
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
  <div class='cont-full-view'>

    <a href='admin-panel.php' class='home-icon'>
      <img src='../images/back-icon.png'>
    </a>

    <div class='container-full-view random admin-panel-box'>
      <form method="POST" class="add-form" id="form1">
        <div class="form-box">
          <label for="product-name">1. Nazwa produktu</label>
          <input type="text" name="product-name" id="product-name-id" placeholder="...................." required>
        </div>
        <div class="form-box">
          <label for="product-place" required>2. Gdzie można kupić?</label>
          <div class="form-checkbox">
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-stajnia" value="stajnia">Stajnia</label></div>
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-lacznik" value="lacznik">Łącznik</label></div>
            <div class="input"><label class="label-other"><input type="checkbox" name="product-place" id="product-place-automat" value="automat">Automat</label></div>
          </div>
        </div>
        <div class="form-box">
          <label for="product-price">3. Cena produktu</label>
          <input type="number" name="product-price" id="product-price-id" step="0.01" placeholder="...................." required>
        </div>
        <div class="form-box form-submit">
          <button id="add-btn" type="submit">4. Dodaj</button>
        </div>
      </form>
      <div class="form-box form-submit" id="add-more-box">
        <button id="add-more">Dodaj kolejny produkt</button>
      </div>
    </div>
  </div>


  <script src="../js/jquery-3.2.1.min.js"></script>
  <script>
  $(function(){
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
        type: "POST",
        url: "add-new-product.php",
        data: data,
        success: function(){
          $("form").css({"display":"none"});
          $("#add-more-box").css({"display":"block"});
        }
      });
      return false;
    });
  });
  $("#add-more-box").click(function(){
    $("#add-more-box").css({"display":"none"});
    $("form").css({"display":"block"});
    $("#product-name-id").val("");
    $("#product-price-id").val("");
  });
  </script>
</body>
</html>
