<?php
include("conexion.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "No se encontraron usuarios";
}

$conn->close();
?>