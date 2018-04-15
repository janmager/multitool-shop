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

    <a href="admin-panel.php" class="home-icon">
      <img src="../images/back-icon.png">
    </a>

    <div class="container shop" style="flex-direction: column; flex-wrap: nowrap; justify-content: flex-start;">

        <h1>Lista zgłoszeń</h1>

        <?php
          $sql1 = "SELECT * FROM `report-price`";
          $result1 = $conn->query($sql1);

          if($result1->num_rows > 0) {
        ?>
        <div id="" class="table-edit-price table-report">
          <h2>Nowa cena:</h2>
          <table class="tab1">
            <?php
              include "load-db-report-price.php";
            ?>
          </table>
        </div>
        <?php
        }
        else{
        ?>
        <div id="" class="table-edit-price table-report">
          <h2>Brak zgłoszeń o zmienę ceny</h2>
        </div>
        <?php
        }
        ?>

        <?php
          $sql2 = "SELECT * FROM `report-product`";
          $result2 = $conn->query($sql2);

          if($result2->num_rows > 0) {
        ?>
        <div id="" class="table-edit-product table-report">
          <h2>Nowy produkt:</h2>
          <table class="tab2">
            <?php
              include "load-db-report-product.php";
            ?>
          </table>
        </div>
        <?php
        }
        else{
        ?>
        <div id="" class="table-edit-product table-report">
          <h2>Brak zgłoszeń o dodanie produktu</h2>
        </div>
        <?php
        }
        ?>

        <?php
          $sql3 = "SELECT * FROM `report-delete`";
          $result3 = $conn->query($sql3);

          if($result3->num_rows > 0) {
        ?>
        <div id="" class="table-edit-delete table-report">
          <h2>Nieaktualny produkt:</h2>
          <table class="tab3">
            <?php
              include "load-db-report-delete.php";
            ?>
          </table>
        </div>
        <?php
        }
        else{
        ?>
        <div id="" class="table-edit-delete table-report">
          <h2>Brak zgłoszeń o nieaktualnym produkcie</h2>
        </div>
        <?php
        }
        ?>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
      function acceptPrice(product){
        var agree = confirm("Naciśnik 'OK' aby potwierdzić zmienę ceny.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'update-db-report-price.php',
          data: { product : product },
          success: function(){
            $.ajax({
              type: 'get',
              url: 'remove-db-report-price.php',
              data: { product : product },
              success: function(){
                alert("Aktualizowanie...");
                $.ajax({
                  url: "load-db-report-price.php",
                  success: function(result){ $(".tab1").html(result) }
                });
              }
            });
          }
        });
        return false;
        }
      }

      function discardPrice(product){
        var agree = confirm("Naciśnik 'OK' aby anulować zmienę ceny.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'remove-db-report-price.php',
          data: { product : product },
          success: function(){
            alert("Aktualizowanie...");
            $.ajax({
              url: "load-db-report-price.php",
              success: function(result){ $(".tab1").html(result) }
            });
          }
        });
        return false;
        }
      };

      function acceptProduct(id){
        var agree = confirm("Naciśnik 'OK' aby potwierdzić dodanie nowego produktu.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'update-db-report-product.php',
          data: { id : id },
          success: function(){
            $.ajax({
              type: 'get',
              url: 'remove-db-report-product.php',
              data: { id : id },
              success: function(){
                alert("Aktualizowanie...");
                $.ajax({
                  url: "load-db-report-product.php",
                  success: function(result){ $(".tab2").html(result) }
                });
              }
            });
          }
        });
        return false;
        }
      }

      function discardProduct(id){
        var agree = confirm("Naciśnik 'OK' aby odrzucić dodanie nowego produktu.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'remove-db-report-product.php',
          data: { id : id },
          success: function(){
            alert("Aktualizowanie...");
            $.ajax({
              url: "load-db-report-product.php",
              success: function(result){ $(".tab2").html(result) }
            });
          }
        });
        return false;
        }
      };

      function acceptDelete(product){
        var agree = confirm("Naciśnik 'OK' aby potwierdzić usunięcie produktu.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'update-db-report-delete.php',
          data: { product : product },
          success: function(){
            $.ajax({
              type: 'get',
              url: 'remove-db-report-delete.php',
              data: { product : product },
              success: function(){
                alert("Aktualizowanie...");
                $.ajax({
                  url: "load-db-report-delete.php",
                  success: function(result){ $(".tab3").html(result) }
                });
              }
            });
          }
        });
        return false;
        }
      }

      function discardDelete(product){
        var agree = confirm("Naciśnik 'OK' aby odrzucić usunięcie produktu.");
        if(agree){
        $.ajax({
          type: 'get',
          url: 'remove-db-report-delete.php',
          data: { product : product },
          success: function(){
            alert("Aktualizowanie...");
            $.ajax({
              url: "load-db-report-delete.php",
              success: function(result){ $(".tab3").html(result) }
            });
          }
        });
        return false;
        }
      };
    </script>
  </body>
</html>
