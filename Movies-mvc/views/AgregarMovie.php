<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<iframe src="" frameborder="0"></iframe>
<?php if(!empty($messege)): ?>
<div style="color: red"> <?= htmlspecialchars($messege) ?> </div>
<?php endif; ?>

<form  method="POST" action="index.php?request=agregar">

<label for="titol">Titol:</label>
    <input type="text" name="titol" id="titol" value="<?= htmlspecialchars($_POST['titol'] ?? "" );?>">
<label for="director">Director:</label>
    <input type="text" name="director" id="director" value="<?= htmlspecialchars($_POST['director'] ?? "" );?>">
<label for="any">Any:</label>
    <input type="number" name="any" id="any" value="<?= htmlspecialchars($_POST['any'] ?? "" );?>">
<label for="puntuacio">puntuacio</label>
    <input type="number" name="puntuacio" id="puntuacio" value="<?= htmlspecialchars($_POST['puntuacio'] ?? "" );?>"> <br>

<button type="submit">Enviar</button>

</form>
    
</body>
</html>