<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $direccion = $_POST['direccion'];
    $fecha_publicacion = date('Y-m-d');

    $sql = "INSERT INTO propiedades (titulo, descripcion, precio, direccion, fecha_publicacion)
            VALUES (:titulo, :descripcion, :precio, :direccion, :fecha_publicacion)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titulo' => $titulo, 'descripcion' => $descripcion, 'precio' => $precio, 'direccion' => $direccion, 'fecha_publicacion' => $fecha_publicacion]);

    header("Location: index.php");
}
?>
