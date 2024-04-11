<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "user1987";
$password = "";
$database = "reservas_foto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$tipo_evento = $_POST['tipo_evento'];

// Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO reservas_fotografo (nombre, email, telefono, fecha, tipo_evento) VALUES ('$nombre', '$email', '$telefono', '$fecha', '$tipo_evento')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito<br>";
    echo "<a href='formulario.html'>Volver al formulario</a>"; // Enlace para volver al formulario
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>