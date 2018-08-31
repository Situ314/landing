<?php
// Conectarse a y seleccionar una base de datos de MySQL llamada landing
// Nombre de host: 127.0.0.1, nombre de usuario: tu_usuario, contraseña: tu_contraseña, bd: landing
$mysqli = new mysqli('localhost', 'root', '', 'landing');

if ($mysqli->connect_errno) {
    echo "Error: Fallo al conectarse a MySQL: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

$id = $_POST['id'];
$sql = "SELECT Cont_Boton FROM landings WHERE id = $id";
if (!$resultado = $mysqli->query($sql)) {
    echo "Error: La ejecución de la consulta falló: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

if ($resultado->num_rows === 0) {
    echo "No se pudo encontrar el ID $id.";
    exit;
}

$sql = "UPDATE landings SET Cont_Boton=ifnull(Cont_Boton,0)+1 WHERE id = $id";
$mysqli->query($sql);

$fila = $resultado->fetch_assoc();
echo $fila['Cont_Boton'];


