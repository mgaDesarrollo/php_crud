<?php
$host = "localhost";
$user = "eloy";
$pass = 1234;
$db = "crud_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>