<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes de Animales en Peligro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://wallpaperaccess.com/full/2886021.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            margin-top: 20px;
            overflow-y: auto;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: 600;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            background-color: #28a745;
            border: none;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reportes de Animales en Peligro</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre del Reportero</th>
                    <th>Teléfono</th>
                    <th>Fecha del Reporte</th>
                    <th>Tipo de Animal</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Comentarios</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se insertarán las filas de la tabla con PHP -->
                <?php
                // Incluir el archivo de conexión
                include '../php/conexion.php';

                // Consultar la base de datos para obtener los reportes
                $sql = "SELECT * FROM reporte";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Recorrer los resultados y generar las filas de la tabla
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nombre_reportero']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['telefono']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['fecha_reporte']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tipo_animal']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['descripcion_animal']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['ubicacion']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['comentarios_adicionales']) . "</td>";
                        echo "<td>";
                        if ($row['media']) {
                            $mediaFiles = explode(',', $row['media']);
                            foreach ($mediaFiles as $file) {
                                echo "<a href='" . htmlspecialchars($file) . "' target='_blank'>Ver Archivo</a><br>";
                            }
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>No se encontraron reportes</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="btn" onclick="window.location.href='index.html'">Regresar al Menú Principal</button>
    </div>
</body>
</html>
