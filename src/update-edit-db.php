<?php

  include 'connect-db.php';

  $id = $_GET['id'];
  $name = $_GET['name'];
  $stajnia = $_GET['stajnia'];
  $lacznik = $_GET['lacznik'];
  $automat = $_GET['automat'];
  $price = $_GET['price'];

  $sql = "UPDATE `shop` SET name='$name', stajnia=$stajnia, lacznik=$lacznik, automat=$automat, price=$price WHERE id=$id";

  $conn->query($sql);

?>
