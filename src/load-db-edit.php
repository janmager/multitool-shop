<?php

  include 'connect-db.php';

  $sql = "SELECT * FROM shop";

  $result = $conn->query($sql);
  $price = 0;
  echo "<tr class='edit-tr'><td>ID</td><td>Product</td><td>Stajnia</td><td>Łącznik</td><td>Automat</td></td><td>Cena</td><td>Zmień</td><td>Usuń</td></tr>";
  if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $edit = "EDYTUJ";
          $delete = "X";
          $price = $row["price"];
          $price = number_format($price, 2);
          echo "<tr class='edit-tr' id='edit-tr-" . $row["id"] . "'>
          <td>" . $row["id"] . "</td>
          <td class='edit-name'>" . $row["name"] . "</td>
          <td class='edit-stajnia'>" . $row["stajnia"] . "</td>
          <td class='edit-lacznik'>" . $row["lacznik"] . "</td>
          <td class='edit-automat'>" . $row["automat"] . "</td>
          <td class='edit-price'>" . $price . " PLN</td>
          <td class='edit-button'><span class='edit-product edit-ed' onclick=\"editProduct('" . $row['id'] . "')\" id='edit-btn-" . $row["id"] . "'>" . $edit . "</span></td>
          <td class='delete-button'><span class='edit-product edit-del' onclick=\"deleteProduct('" . $row['id'] . "')\" id='delete-btn-" . $row["id"] . "'>" . $delete . "</span></td>
          </tr>";
      }
  }

?>
