<?php
  include "connect-db.php";

  $product = $_GET['product'];

  $sql = "DELETE FROM `report-price` WHERE `name`='$product'";
  $conn->query($sql);

?>
