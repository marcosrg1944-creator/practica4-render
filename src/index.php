<?php
// Incluimos el archivo de conexión que define $pdo (o $conn)
require_once 'conexion.php';

echo "<h1>¡Servidor PHP funcionando en Render!</h1>";

// Comprobamos si la variable de conexión ($pdo o $conn) existe y está activa
if (isset($pdo) && $pdo) {
    echo "<p style='color: green;'> Conexión a la base de datos PostgreSQL exitosa.</p>";
} elseif (isset($conn) && $conn) {
    // Por si en tu conexion.php usaste $conn en lugar de $pdo
    $pdo = $conn;
    echo "<p style='color: green;'> Conexión a la base de datos PostgreSQL exitosa.</p>";
} else {
    echo "<p style='color: red;'> Error en la conexión a la base de datos.</p>";
}
?>
