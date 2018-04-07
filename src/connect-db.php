<?php
$servername = '192.168.101.134';
$username = 'jancziii';
$password = 'lolxd123';
$dbname = 'jancziii_nauczyciele';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
