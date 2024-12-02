<?php
//  conexion a MySQL
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "usuarios";

// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexion
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos de la tabla Usuarios
$sql = "SELECT id, username, email, created_at FROM Usuarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table border="4">
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Correo Electrónico</th>
            <th>Fecha de Registro</th>
        </tr>
        <?php
        // Mostrar cada fila de resultados en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.html">Volver al registro</a>

    <style>

a {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    text-decoration : none;
}
    </style>
</body>
</html>

<?php
// Cerrar la conexion
$conn->close();
?>
