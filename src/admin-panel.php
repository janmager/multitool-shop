<?php
  include "connect-db.php";

  $sql1 = "SELECT COUNT(*) FROM `report-price`";
  $sql2 = "SELECT COUNT(*) FROM `report-product`";
  $sql3 = "SELECT COUNT(*) FROM `report-delete`";
  $result1 = $conn->query($sql1);
  $result2 = $conn->query($sql2);
  $result3 = $conn->query($sql3);
  $report_count1 = mysqli_fetch_array($result1);
  $report_count2 = mysqli_fetch_array($result2);
  $report_count3 = mysqli_fetch_array($result3);

  $report_count = $report_count1[0] + $report_count2[0] + $report_count3[0];

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

    <a href='logout.php' class='home-icon'>
      <img src='../images/back-icon.png'>
    </a>

    <div class='container-full-view random admin-panel-box'>
      <a href="report-list.php" id="admin-1"><div class="admin-option-box">
        <img src="../images/notification-icon.png">
        <span>Lista zgłoszeń (<?php echo $report_count ?>)</span>
      </div></a>
      <a href="add-product.php" id="admin-2"><div class="admin-option-box">
        <img src="../images/add-icon.png">
        <span>Dodaj produkt</span>
      </div></a>
      <div style="width: 100%"></div>
      <a href="edit-product.php" id="admin-3"><div class="admin-option-box">
        <img src="../images/edit-icon.png">
        <span>Edytuj produkt</span>
      </div></a>
      <a href="db-stats.php" id="admin-4"><div class="admin-option-box">
        <img src="../images/db-stats-icon.png">
        <span>Informacje o bazie danych</span>
      </div></a>
    </div>
  </div>

</body>
</html>
