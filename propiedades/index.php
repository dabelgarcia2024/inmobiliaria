<?php
include 'includes/db.php';

$sql = 'SELECT * FROM propiedades';
$stmt = $pdo->query($sql);
$propiedades = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Propiedades</title>
</head>
<body>
    <h1>Listado de Propiedades</h1>
    <a href="crear.php">Agregar Propiedad</a>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Dirección</th>
                <th>Fecha Publicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propiedades as $propiedad): ?>
            <tr>
                <td><?= $propiedad['titulo']; ?></td>
                <td><?= $propiedad['descripcion']; ?></td>
                <td><?= $propiedad['precio']; ?></td>
                <td><?= $propiedad['direccion']; ?></td>
                <td><?= $propiedad['fecha_publicacion']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $propiedad['id']; ?>">Editar</a>
                    <a href="eliminar.php?id=<?= $propiedad['id']; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
