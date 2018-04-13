<?php
  include "connect-db.php";

  $name = $_GET['name'];
  $price = $_GET['price'];

  $sql = "INSERT INTO `report-price` (`id`, `name`, `price`, `added`) VALUES (NULL,'$name','$price',0)";

  $result = $conn->query($sql);
?>
