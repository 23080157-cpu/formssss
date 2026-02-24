<?php

$nombre = $_POST['nombre_usuario'];
$correo = $_POST['correo_usuario'];

echo "<h2>¡Datos recibidos con éxito!</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
?>