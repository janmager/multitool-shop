<?php

  include 'connect-db.php';

  $sql = "SELECT * FROM `report-price`";

  $result = $conn->query($sql);
  $price = 0;
  echo "<tr class='edit-tr'><td>ID</td><td>Produkt</td><td>Nowa cena</td><td>Zatwierdź</td><td>Odrzuć</td></tr>";
  if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $edit = "V";
          $delete = "X";
          $price = $row["price"];
          $price = number_format($price, 2);
          echo "<tr class='edit-tr' id='edit-tr-" . $row["id"] . "'>
          <td>" . $row["id"] . "</td>
          <td class='edit-name'>" . $row["name"] . "</td>
          <td class='edit-price'>" . $price . " PLN</td>
          <td class='edit-button'><span class='edit-product edit-ed' onclick=\"acceptPrice('" . $row['name'] . "')\" id='accept-btn-2-" . $row["id"] . "'>" . $edit . "</span></td>
          <td class='delete-button'><span class='edit-product edit-del' onclick=\"discardPrice('" . $row['name'] . "')\" id='discard-btn-2-" . $row["id"] . "'>" . $delete . "</span></td>
          </tr>";
      }
  }

?>
