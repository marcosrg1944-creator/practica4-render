<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT') ?: '5432'; // Puerto por defecto de PostgreSQL

try {
    // Cambiado 'mysql:' por 'pgsql:' para conectar con PostgreSQL
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Opcional: Descomenta la siguiente línea para comprobar visualmente que conecta
    // echo "✅ ¡Conexión exitosa a PostgreSQL!";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
