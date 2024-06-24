<?php
$host = 'localhost';
$db = 'inmobiliaria';
$user = 'tu_usuario';
$pass = 'tu_contraseña';
$dsn = "pgsql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo 'Conexión fallida: ' . $e->getMessage();
}
?>
