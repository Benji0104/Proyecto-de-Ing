<?php
// Incluir el archivo de conexión
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reporterName = $_POST['reporterName'];
    $contactNumber = $_POST['contactNumber'];
    $reportDate = $_POST['reportDate'];
    $animalType = $_POST['animalType'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO reporte (nombre_reportero, telefono, fecha_reporte, tipo_animal, descripcion_animal, ubicacion, comentarios_adicionales) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $reporterName, $contactNumber, $reportDate, $animalType, $description, $location, $comment);

    if ($stmt->execute()) {
        echo "Nuevo informe creado exitosamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método no soportado";
}