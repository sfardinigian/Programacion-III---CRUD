<?php
require_once '../controllers/controllerDirector.php';

$controller = new directorController();
$director = $controller->obtenerDirector();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Directores</title>
</head>
<body>
    <h1>Directores</h1>
    <form action="../index.php" method="post">
        <input type="submit" value="Inicio">
    </form>

    <form action="peliculaIndex.php" method="post">
        <input type="submit" value="Películas">
    </form>

    <form action="generoIndex.php" method="post">
        <input type="submit" value="Géneros">
    </form>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Nacionalidad</th>
            <th>ID</th>
        </tr>
        <?php foreach ($director as $p): ?>
        <tr>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['apellido'] ?></td>
            <td><?= $p['fecnac'] ?></td>
            <td><?= $p['nacionalidad'] ?></td>
            <td><?= $p['id_director'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>