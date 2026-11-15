<?php
$conexion = new mysqli(
     "localhost",
     "web_bba",
     "CAMBIAR_CONTRASEÑA.",
     "bbainformatica"
);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos");
}

$resultado = $conexion->query(
    "SELECT descripcion, precio FROM servicios"
);

if ($resultado === false) {
    die("Error al consultar servicios");
}

echo "<h1>Servicios de BBA Informática</h1>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<p>";
    echo htmlspecialchars($fila["descripcion"], ENT_QUOTES, 'UTF-8');
    echo " - ";
    echo htmlspecialchars($fila["precio"], ENT_QUOTES, 'UTF-8');
    echo " euros</p>";
}

$conexion->close();
?>
