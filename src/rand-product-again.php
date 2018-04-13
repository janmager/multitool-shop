<?php

  include "connect-db.php";

  $sql = "SELECT id FROM shop ORDER BY id DESC LIMIT 1";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  $rand = rand(1,$row["id"]);

  $sql = "SELECT * FROM shop WHERE id = $rand";

  $i = 1;

  $result = $conn->query($sql);

  while($result->num_rows <= 0) {
    $sql = "SELECT * FROM shop WHERE id = $rand+$i";
    $result = $conn->query($sql);
    $i++;
  }

  $row = $result->fetch_assoc();

  $product_name = $row["name"];
  $product_price = $row["price"];
  $product_price = number_format($product_price, 2);
  $product_place_1 = $row["stajnia"];
  $product_place_2 = $row["lacznik"];
  $product_place_3 = $row["automat"];
  if($product_place_1==1 && $product_place_2==1 && $product_place_3==1) $product_place = "Stajnia & Łącznik & Automat";
  else if($product_place_1==1 && $product_place_2==1 && $product_place_3==0) $product_place = "Stajnia & Łącznik";
  else if($product_place_1==1 && $product_place_2==0 && $product_place_3==0) $product_place = "Stajnia";
  else if($product_place_1==1 && $product_place_2==0 && $product_place_3==1) $product_place = "Stajnia & Automat";
  else if($product_place_1==0 && $product_place_2==1 && $product_place_3==1) $product_place = "Łącznik & Automat";
  else if($product_place_1==0 && $product_place_2==0 && $product_place_3==1) $product_place = "Automat";
  else if($product_place_1==0 && $product_place_2==1 && $product_place_3==0) $product_place = "Łącznik";

  echo json_encode(array("name" => $product_name, "place" => $product_place, "price" => $product_price));

?>
