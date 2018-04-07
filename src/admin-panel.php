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
</head>
<body>
  <div class='cont-full-view'>

    <a href='logout.php' class='home-icon'>
      <img src='images/back-icon.png'>
    </a>

    <div class='container-full-view random admin-panel-box'>
      <a href="#" id="admin-1"><div class="admin-option-box">
        <img src="images/notification-icon.png">
        <span>Lista zgłoszeń (0)</span>
      </div></a>
      <a href="add-product.php" id="admin-2"><div class="admin-option-box">
        <img src="images/add-icon.png">
        <span>Dodaj produkt</span>
      </div></a>
      <div style="width: 100%"></div>
      <a href="edit-product.php" id="admin-3"><div class="admin-option-box">
        <img src="images/edit-icon.png">
        <span>Edytuj produkt</span>
      </div></a>
      <a href="db-stats.php" id="admin-4"><div class="admin-option-box">
        <img src="images/db-stats-icon.png">
        <span>Informacje o bazie danych</span>
      </div></a>
    </div>
  </div>

</body>
</html>
