<?php
include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM propiedades WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $propiedad = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $direccion = $_POST['direccion'];

    $sql = 'UPDATE propiedades SET titulo = :titulo, descripcion = :descripcion, precio = :precio, direccion = :direccion WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titulo' => $titulo, 'descripcion' => $descripcion, 'precio' => $precio, 'direccion' => $direccion, 'id' => $id]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Propiedad</title>
</head>
<body>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?= $propiedad['id']; ?>">
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?= $propiedad['titulo']; ?>" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required><?= $propiedad['descripcion']; ?></textarea>
        
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="<?= $propiedad['precio']; ?>" required>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?= $propiedad['direccion']; ?>" required>
        
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
