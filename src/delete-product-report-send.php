<?php

include "connect-db.php";

$name = $_GET['name'];


$sql = "INSERT INTO `report-delete`(`id`, `name`, `added`) VALUES (NULL, '$name', NULL)";

mysqli_query($conn, $sql);

?>
