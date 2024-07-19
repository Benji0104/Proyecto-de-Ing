<?php
// Configuración de la base de datos
$host = 'localhost';
$user = 'ping'; // Usuario por defecto de MySQL en XAMPP
$pass = '78195'; // Contraseña por defecto de MySQL en XAMPP
$db = 'proyecti'; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
