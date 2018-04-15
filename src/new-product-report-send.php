<?php

include "connect-db.php";

$name = $_GET['name'];
$stajnia = $_GET['stajnia'];
$lacznik = $_GET['lacznik'];
$automat = $_GET['automat'];
$price = $_GET['price'];


$sql = "INSERT INTO `report-product`(`id`, `name`, `stajnia`, `lacznik`, `automat`, `price`, `added`) VALUES (NULL, '$name', $stajnia, $lacznik, $automat, '$price', NULL)";

mysqli_query($conn, $sql);

?>
