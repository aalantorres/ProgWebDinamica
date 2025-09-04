<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <form action="../../../Control/TP1/ej3/misDatos.php" method="get">
        <label for="nombre">Nombre: <input type="text" required name="nombre" id="nombre"></label>
        <label for="apellido">Apellido: <input type="text" required name="apellido" id="apellido"></label>
        <label for="edad">Edad: <input type="number" max="100" min="1" required name="edad" id="edad"></label>
        <label for="direccion">Direccion: <input type="text" required name="direccion" id="direccion"></label>
        <input type="submit" class="subir">
    </form>
</body>

</html>