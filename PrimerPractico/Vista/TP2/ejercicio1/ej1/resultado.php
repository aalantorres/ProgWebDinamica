<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Numero</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero == 0) {
            echo "<h2>El numero es cero</h2>";
        } else if ($numero > 0) {
            echo "<h2>El numero es positivo</h2>";
        } else {
            echo "<h2>El numero es negativo</h2>";
        }
    } else {
        echo "<h2>No se recibio ningun numero </h2>";
    }
    ?>
    <a href="./formulario.php">Volver al formulario</a>
</body>

</html>