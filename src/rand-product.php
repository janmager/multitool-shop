<?php

  include "connect-db.php";

  $sql = "SELECT id FROM shop ORDER BY id DESC LIMIT 1";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  $rand = rand(1,$row["id"]);
  $highest = $row["id"];

  header("Location: random-shop.php?id=" . $rand . "&length=" . $highest);

?>
