<?php
  include 'connect-db.php';

  $sql = "SELECT * FROM shop";
  $result = $conn->query($sql);
  $dbstatsIDS = mysqli_num_rows($result);

  $sql = "SELECT name from shop ORDER BY price DESC LIMIT 1";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $richestName = $row['name'];
  $sql = "SELECT MAX(price) AS largest FROM shop";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $richest = number_format($row['largest'],2);

  $sql = "SELECT name from shop ORDER BY price ASC LIMIT 1";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $cheapestName = $row['name'];
  $sql = "SELECT MIN(price) AS lowest FROM shop";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $cheapest = number_format($row['lowest'],2);
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

    <div class="container shop db-stats-container" style="flex-direction: column; flex-wrap: nowrap; justify-content: flex-start;">

        <h1>Statystyki bazy<br>danych produktów</h1>

        <div class="db-stats-box">
          <h2>Liczba produktów: <span class="stats-result"><?php echo $dbstatsIDS ?></span></h2>
          <h2>Najdroższy produkt: <span class="stats-result"><?php echo $richest ?> PLN - <?php echo $richestName ?></span></h2>
          <h2>Najtańszy produkt: <span class="stats-result"><?php echo $cheapest ?> PLN - <?php echo $cheapestName ?></span></h2>
        </div>

    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
  </body>
</html>
