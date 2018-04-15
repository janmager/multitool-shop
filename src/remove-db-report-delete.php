<?php
  include "connect-db.php";

  $product = $_GET['product'];

  $sql = "DELETE FROM `report-delete` WHERE `name`='$product'";
  $conn->query($sql);

?>
