<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.php?accio=afegir">afegir</a>
<table>
        <tr>
            <th>id</th>
            <th>titol</th>
            <th>director</th>
            <th>any</th>
            <th>valoracio</th>
        </tr>

    <?php foreach($LlistaMovies as $movie => $a): ?>

    <td><?= htmlspecialchars($a['id'])?></td>
    <td><?= $a['titol'] ?></td>
    <td><?= $a['director'] ?></td>
    <td><?= $a['any'] ?></td>
    <?php  echo "<td>" .htmlspecialchars($a['valoracio']). "</td>" ?>
    </table>
    <?php endforeach ?>
    
    
</body>
</html>