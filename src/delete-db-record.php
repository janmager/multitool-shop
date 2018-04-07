<?php

  include 'connect-db.php';

  $id = $_GET['id'];

  $sql = "DELETE FROM shop WHERE id=$id";

  $result = $conn->query($sql);


?>
