<?php
  include "connect-db.php";

  $id = $_GET['id'];

  $sql1 = "SELECT * FROM `report-product` WHERE `id`=$id";
  $result = $conn->query($sql1);
  while ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $stajnia = $row['stajnia'];
    $lacznik = $row['lacznik'];
    $automat = $row['automat'];
    $price = $row['price'];
  }

  $sql2 = "INSERT INTO `shop`(`id`, `name`, `stajnia`, `lacznik`, `automat`, `price`) VALUES (NULL, '$name', $stajnia, $lacznik, $automat, '$price')";
  $conn->query($sql2);

?>
