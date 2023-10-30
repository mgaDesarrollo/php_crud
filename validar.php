<?php
include("conexion.php");

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: principal.php"); // Redirige a la página principal después de iniciar sesión
} else {
    echo "Usuario o contraseña incorrectos. Vuelve a intentarlo.";
}

$conn->close();
?>