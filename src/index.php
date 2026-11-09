<?php
require_once 'conexion.php';

echo "<h1>¡Servidor PHP funcionando en Render!</h1>";

if ($pdo) {
    echo "<p style='color: green;'> Conexión a la base de datos PostgreSQL exitosa.</p>";
} else {
    echo "<p style='color: red;'> Error en la conexión a la base de datos.</p>";
}
?>
