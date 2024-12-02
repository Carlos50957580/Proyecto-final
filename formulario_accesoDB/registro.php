<?php
// conexión a MySQL
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

// Verificar si se enviaron datos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Preparar y ejecutar la consulta SQL para insertar datos
    $sql = "INSERT INTO Usuarios (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario registrado correctamente');</script>";
        echo "<script>window.location.href = 'registro.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexion
    $conn->close();
}
?>
