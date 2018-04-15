<?php
  include "connect-db.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `report-product` WHERE `id`='$id'";
  $conn->query($sql);

?>
