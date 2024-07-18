<?php
$servername = "localhost"; // Cambia esto si tu servidor no es localhost
$username = "ping"; // Tu usuario de MySQL
$password = "78195"; // Tu contraseña de MySQL
$dbname = "projecti"; // El nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$ownerName = $_POST['ownerName'];
$ownerEmail = $_POST['ownerEmail'];
$ownerPhone = $_POST['ownerPhone'];
$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petAge = $_POST['petAge'];
$petGender = $_POST['petGender'];
$comments = $_POST['comments'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO reporte (nombre, tipo, raza, edad, sexo, fecha_registro, eliminado) VALUES (?, ?, ?, ?, ?, CURDATE(), 0)");
$stmt->bind_param("sssiss", $petName, $petType, $petBreed, $petAge, $petGender);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>