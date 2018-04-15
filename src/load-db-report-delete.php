<?php

  include 'connect-db.php';

  $sql = "SELECT * FROM `report-delete`";

  $result = $conn->query($sql);
  echo "<tr class='edit-tr'><td>ID</td><td>Produkt</td><td>Zatwierdź</td><td>Odrzuć</td></tr>";
  if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $edit = "V";
          $delete = "X";
          echo "<tr class='edit-tr' id='edit-tr-" . $row["id"] . "'>
          <td>" . $row["id"] . "</td>
          <td class='edit-name'>" . $row["name"] . "</td>
          <td class='edit-button'><span class='edit-product edit-ed' onclick=\"acceptDelete('" . $row['name'] . "')\" id='accept-btn-2-" . $row["id"] . "'>" . $edit . "</span></td>
          <td class='delete-button'><span class='edit-product edit-del' onclick=\"discardDelete('" . $row['name'] . "')\" id='discard-btn-2-" . $row["id"] . "'>" . $delete . "</span></td>
          </tr>";
      }
  }

?>
