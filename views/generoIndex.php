<?php
require_once '../controllers/controllerGenero.php';

$controller = new generoController();
$genero = $controller->obtenerGenero();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Géneros</title>
</head>
<body>
    <h1>Géneros</h1>
    <form action="../index.php" method="post">
        <input type="submit" value="Inicio">
    </form>

    <form action="peliculaIndex.php" method="post">
        <input type="submit" value="Películas">
    </form>

    <form action="directorIndex.php" method="post">
        <input type="submit" value="Directores">
    </form>
    <table border="1">
        <tr>
            <th>Categorias</th>
            <th>ID</th>
        </tr>
        <?php foreach ($genero as $p): ?>
        <tr>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['id_genero'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>