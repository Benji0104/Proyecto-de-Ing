<?php
$servername = "localhost"; // Cambia esto si tu servidor no es localhost
$username = "ping"; // Tu usuario de MySQL
$password = "78195"; // Tu contraseña de MySQL
$dbname = "projecti"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$ownerName = $_POST['ownerName'];
$ownerEmail = $_POST['ownerEmail'];
$ownerPhone = $_POST['ownerPhone'];
$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petAge = $_POST['petAge'];
$petGender = $_POST['petGender'];
$comments = $_POST['comments'];

// Insertar datos en la tabla reporte
$sql = "INSERT INTO mascota (nombre, tipo, raza, edad, sexo, fecha_registro)
VALUES ('$petName', '$petType', '$petBreed', '$petAge', '$petGender', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro exitoso'); window.location.href = 'registro de mascota.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
