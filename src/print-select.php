<?php
  include "connect-db.php";

  $sql = "SELECT * FROM shop ORDER BY name ASC";

  echo "<option value=''>Wybierz produkt</option><br>";

  $result = $conn->query($sql);
  if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<option value='".$row['name']."'>".$row['name']."</option><br>";
      }
  }

?>
