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
  </head>
  <body>

    <!-- LOGO
    <a href="index.html">
      <header>
        <img src="images/logo.png" class="logo">
      </header>
    </a>-->

    <a href="admin-panel.php" class="home-icon">
      <img src="../images/back-icon.png">
    </a>

    <div class="container shop" style="flex-direction: column; flex-wrap: nowrap; justify-content: flex-start;">

        <h1>Edycja produktów</h1>

        <div class="updating">Aktualizowanie bazy danych...</div>

        <div id="filtr-shop-list">
          <!-- <div class="filtr-shop-button shopc" id="btn-all" onclick="update('all')">Pokaż wszystko</div> -->
          <!-- <div class="line-break"></div> -->
          <!-- <div class="filtr-shop-button" id="btn-stajnia" onclick="update('stajnia')">Stajnia</div>
          <div class="filtr-shop-button" id="btn-lacznik" onclick="update('lacznik')">Łącznik</div>
          <div class="filtr-shop-button" id="btn-automat" onclick="update('automat')">Automat</div> -->
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

        <div id="" class="table-edit">
          <table>
            <?php
              include "load-db-edit.php";
            ?>
          </table>
        </div>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
      function editProduct(productID){
        var valName = "Name";
        var valStajnia = 2;
        var valLacznik = 2;
        var valAutomat = 2;
        var valPrice = 1.11;
        $.ajax({
          url: 'edit-line.php',
          data: "productID=" + productID,
          dataType: "json",
          success: function(result){
            $("#edit-tr-"+productID+" .edit-name").html("<input type='text' name='edit-product-name-input-'"+productID+"' id='edit-product-name-id-"+productID+"' value='"+result.name+"'>");
            $("#edit-tr-"+productID+" .edit-stajnia").html("<input type='text' style='max-width: 50px;' name='edit-product-stajnia-input-'"+productID+"' id='edit-product-stajnia-id-"+productID+"' value='"+result.stajnia+"'>");
            $("#edit-tr-"+productID+" .edit-lacznik").html("<input type='text' style='max-width: 50px;' name='edit-product-lacznik-input-'"+productID+"' id='edit-product-lacznik-id-"+productID+"' value='"+result.lacznik+"'>");
            $("#edit-tr-"+productID+" .edit-automat").html("<input type='text' style='max-width: 50px;' name='edit-product-automat-input-'"+productID+"' id='edit-product-automat-id-"+productID+"' value='"+result.automat+"'>");
            $("#edit-tr-"+productID+" .edit-price").html("<input type='text' style='max-width: 100px;' name='edit-product-price-input-'"+productID+"' id='edit-product-price-id-"+productID+"' value='"+result.price+"'>");
            $("#edit-tr-"+productID+" .edit-button").html("<span class='edit-product edit-ed' onclick=\"saveProduct('"+productID+"')\" id='edit-btn-"+productID+"'>ZAPISZ</span>");
          }
        });
        return false;
      }
      function saveProduct(productID){
        var data = {
          id : productID,
          name : $("#edit-product-name-id-"+productID).val(),
          stajnia : $("#edit-product-stajnia-id-"+productID).val(),
          lacznik : $("#edit-product-lacznik-id-"+productID).val(),
          automat : $("#edit-product-automat-id-"+productID).val(),
          price : $("#edit-product-price-id-"+productID).val()
        }
        $.ajax({
          url: 'update-edit-db.php',
          data: data,
          success: function(){}
        });
        $(".updating").css({"visibility":"visible"});
        setTimeout(function showUpdated(productID){
          $.ajax({
            url: "load-db-edit.php",
            success: function(result){ $(".updating").css({"visibility":"hidden"}); $("table").html(result) }
          });
          return false;
        },1500);
        return false;
      }
      function deleteProduct(productID){
        var agree = confirm("Naciśnik 'OK' aby potwierdzić usunięcie produktu z bazy danych.");
        if(agree){
          $.ajax({
            url: "delete-db-record.php",
            data: "id=" + productID,
            success: function(){ }
          });
          setTimeout(function showUpdated(productID){
            $.ajax({
              url: "load-db-edit.php",
              success: function(result){ $(".updating").css({"visibility":"hidden"}); $("table").html(result) }
            });
            return false;
          },0);
          return false;
        }
      }
      </script>
  </body>
</html>
