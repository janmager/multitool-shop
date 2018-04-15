<?php
  session_start();

  if(ISSET($_SESSION["newmember"])){
    header("Location: admin-panel.php");
    exit();
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST["login"];
    $password = $_POST["password"];
      if($login == "admin" && $password == "admin"){
        $_SESSION["newmember"] = $login;
        header("Location: admin-panel.php");
        exit();
      }
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

    <!-- LOGO
    <a href='index.html'>
      <header style='margin-top: 0px'>
        <img src='images/logo.png' class='logo logo-not-main'>
      </header>
    </a>
  -->

    <a href='index.php' class='home-icon'>
      <img src='../images/back-icon.png'>
    </a>

    <div class='container-full-view random'>

      <div class='admin-login-box'>
        <span>Panel administratora</span>
        <form name='input' action='admin.php' method='POST' id='login-admin-main'>
          <div><input type='text' placeholder='LOGIN' id='username' name='login' autofocus></div>
          <div><input type='password' placeholder='HASŁO' id='password' name='password'></div>
          <input type='submit' value='ZALOGUJ' name='submit' id='admin-log-on'/>
        </form>
      </div>

    </div>
  </div>

    <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../js/shop-list.js'></script>
    <script src='../js/search-product.js'></script>
    <script src='../js/random-product.js'></script>
  </body>
</html>
