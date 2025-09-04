<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="../../../../Control/TP2/ejercicio1/ej3/misDatos.php" method="get" class="needs-validation p-4 m-5 border w-25" novalidate>

        <label for="nombre">Nombre: <input type="text" required name="nombre" id="nombre" class="form-control" pattern="[A-Za-z\s]+"></label>


        <label for="apellido">Apellido: <input type="text" required name="apellido" id="apellido" class="form-control" pattern="[A-Za-z\s]+"></label>


        <label for="edad">Edad: <input type="number" max="100" min="1" required name="edad" id="edad" class="form-control"></label>


        <label for="direccion">Direccion: <input type="text" required name="direccion" id="direccion" class="form-control"></label>


        <input type="submit" class="btn btn-primary">
    </form>

    <script src="./public/js/script.js">

    </script>
</body>

</html>