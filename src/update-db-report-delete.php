<?php
  include "connect-db.php";

  $product = $_GET['product'];

  $sql = "DELETE FROM `shop` WHERE `name`='$product'";
  $conn->query($sql);

?>
