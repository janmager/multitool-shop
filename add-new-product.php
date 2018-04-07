<?php

include "connect-db.php";

$name = $_POST['name'];
$stajnia = $_POST['stajnia'];
$lacznik = $_POST['lacznik'];
$automat = $_POST['automat'];
$price = $_POST['price'];


$sql = "INSERT INTO `shop`(`id`, `name`, `stajnia`, `lacznik`, `automat`, `price`) VALUES (NULL, '$name', $stajnia, $lacznik, $automat, '$price')";

mysqli_query($conn, $sql);

?>
