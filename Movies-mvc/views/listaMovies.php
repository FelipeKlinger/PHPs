<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        table {
            border-collapse: collapse;
            border: solid 1px ;
        }

        th, td {
            border: solid 1px ;
            padding: 5px;
        }
    </style>

    <a href="index.php?request=agregar">Agregar</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Titol</th>
            <th>Director</th>
            <th>Any</th>
            <th>Puntuació</th>
        </tr>
    
        <?php foreach ($listaMovies as $movie): ?>

            <tr>
                <td><?= htmlspecialchars($movie['id']) ?></td>
                <td><?= htmlspecialchars($movie['titol']) ?></td>
                <td><?= htmlspecialchars($movie['director']) ?></td>
                <td><?= htmlspecialchars($movie['any']) ?></td>
                <td><?= htmlspecialchars($movie['puntuacio']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>