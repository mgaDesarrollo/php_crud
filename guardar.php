<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$sql = "INSERT INTO usuarios (nombre, email, usuario, contrasena) VALUES ('$nombre', '$email', '$usuario', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario creado con éxito";
} else {
    echo "Error al crear usuario: " . $conn->error;
}

$conn->close();
?>