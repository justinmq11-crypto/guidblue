<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "guidblue_db";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, correo, telefono, mensaje)
        VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje guardado correctamente.";
} else {
    echo "Error al guardar el mensaje: " . $conexion->error;
}

$conexion->close();
?>