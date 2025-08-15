<?php
require_once '../controllers/controllerPelicula.php';

$controller = new peliculaController();
$pelicula = $controller->obtenerPelicula();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
</head>
<body>
    <h1>Películas</h1>
    <form action="../index.php" method="post">
        <input type="submit" value="Inicio">
    </form>

    <form action="directorIndex.php" method="post">
        <input type="submit" value="Directores">
    </form>

    <form action="generoIndex.php" method="post">
        <input type="submit" value="Géneros">
    </form>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Año</th>
            <th>Género</th>
            <th>Director</th>
            <th>Descripción</th>
            <th>ID</th>
        </tr>
        <?php foreach ($pelicula as $p): ?>
        <tr>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['aniopubli'] ?></td>
            <td><?= $p['genero'] ?></td>
            <td><?= $p['director'] ?></td>
            <td><?= $p['descripcion'] ?></td>
            <td><?= $p['id'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>