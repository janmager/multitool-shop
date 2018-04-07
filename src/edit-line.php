<?php

  include 'connect-db.php';

  $productID = $_GET['productID'];

  $sql = "SELECT * FROM `shop` WHERE id = $productID";
  $result = $conn->query($sql);
  $price = 0;
  $row = $result->fetch_assoc();

  echo json_encode(array("name" => $row['name'], "stajnia" => $row['stajnia'], "lacznik" => $row['lacznik'], "automat" => $row['automat'], "price" => $row['price']));

?>
