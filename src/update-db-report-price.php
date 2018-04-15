<?php
  include "connect-db.php";

  $product = $_GET['product'];

  $sql1 = "SELECT `price` FROM `report-price` WHERE `name`='$product'";
  $result = $conn->query($sql1);
  while ($row = $result->fetch_assoc()) {
    $new_price = $row['price'];
  }

  $sql2 = "UPDATE `shop` SET price='$new_price' WHERE `name`='$product'";
  $conn->query($sql2);

?>
