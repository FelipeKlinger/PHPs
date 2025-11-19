<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
</head>

<body>

    <?php if (!empty($messege)): ?>
        <div style="color: red"> <?= $messege ?> </div>
    <?php endif; ?>

    <form method="POST" action="index.php?request=Agregar">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? ""); ?>" <br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?= htmlspecialchars($_POST['autor'] ?? ""); ?>" <br>

        <label for="paginas">Paginas:</label>
        <input type="number" name="paginas" id="paginas" value="<?= htmlspecialchars($_POST['paginas'] ?? ""); ?>" <br>

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" value="<?= htmlspecialchars($_POST['editorial'] ?? ""); ?>"
            <br>

        <button type="submit">Agregar</button>

    </form>

</body>

</html>