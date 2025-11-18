<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarLibros</title>
</head>

<body>

    <a href="index.php?request=Agregar">Agregar</a>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Paginas</th>
            <th>Editorial</th>
        </tr>

        <?php foreach ($CollectLibros as $libro): ?>

            <tr>
                <td><?= htmlspecialchars($libro['id']) ?></td>
                <td><?= htmlspecialchars($libro['nombre']) ?></td>
                <td><?= htmlspecialchars($libro['autor']) ?></td>
                <td><?= htmlspecialchars($libro['paginas']) ?></td>
                <td><?= htmlspecialchars($libro['editorial']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>


</body>

</html>