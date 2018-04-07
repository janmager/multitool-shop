<?php

  include "connect-db.php";

  $place = $_GET['place'];

  if($place!='all') {
    if($place=="a") $sql = "SELECT * FROM shop ORDER BY name";
    else if($place=="z") $sql = "SELECT * FROM shop ORDER BY name desc";
    else if($place=="1") $sql = "SELECT * FROM shop ORDER BY price";
    else if($place=="9") $sql = "SELECT * FROM shop ORDER BY price desc";
    else $sql = "SELECT * FROM shop WHERE $place = 1";
  }
  else $sql = "SELECT * FROM shop";

  $result = $conn->query($sql);
  $price = 0;
  echo "<tr><td class='nav-table'>Produkt</td><td class='nav-table'>Gdzie można kupić?</td><td class='nav-table'>Cena</td></tr>";
  if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $price = $row["price"];
          $where = "";
          $price = number_format($price, 2);
          if($row["stajnia"]==1) $where = "Stajnia";
          if($row["lacznik"]==1) $where = "Łącznik";
          if($row["automat"]==1) $where = "Automat";
          if($row["automat"]==1 && $row["lacznik"]==1) $where = "Łącznik & Automat";
          if($row["stajnia"]==1 && $row["lacznik"]==1) $where = "Stajnia & Łącznik";
          if($row["stajnia"]==1 && $row["automat"]==1) $where = "Stajnia & Automat";
          if($row["stajnia"]==1 && $row["lacznik"]==1 && $row["automat"]==1) $where = "Stajnia & Łącznik & Automat";
          echo "<tr><td>" . $row["name"] . "</td><td>" . $where . "</td><td>" . $price . " PLN</td></tr>";
      }
  }

?>
