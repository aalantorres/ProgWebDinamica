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
    <form action="../../../../Control/TP2/ejercicio1/ej5/misDatos.php" method="get" class="needs-validation p-4 m-5 border w-25" novalidate>
        <label for="nombre">Nombre: <input type="text" required name="nombre" id="nombre" pattern="[A-Za-z\s]+" class="form-control" required></label>

        <label for="apellido">Apellido: <input type="text" required name="apellido" id="apellido" pattern="[A-Za-z\s]+" class="form-control" required></label>

        <label for="edad">Edad: <input type="number" max="100" min="1" required name="edad" id="edad" class="form-control" required></label>

        <label for="direccion">Direccion: <input type="text" required name="direccion" id="direccion" class="form-control" required></label>

        <p style="font-size: 20px">Nivel de estudio</p>

        <label for="secundario" class="form-check-label"><input type="radio" name="estudios" value="secundario" id="secundario" class="form-check-input" required>
            Estudios Secundarios</label>

        <label for="primario" class="form-check-label"><input type="radio" name="estudios" value="primario" id="primario" class="form-check-input" required>
            Estudios Primarios</label>

        <label for="incompleto" class="form-check-label"><input type="radio" name="estudios" value="sin estudios" id="incompleto" class="form-check-input" required>
            No tiene estudios</label>

        <p style="font-size: 20px">Seleccione su sexo</p>
        <label for="masculino" class="form-check-label"><input type="radio" name="sexo" value="masculino" id="masculino" class="form-check-input" required>
            Masculino</label>
        <label for="femenino" class="form-check-label"><input type="radio" name="sexo" value="femenino" id="femenino" class="form-check-input" required>
            Femenino</label>
        <label for="noDicho" class="form-check-label"><input type="radio" name="sexo" value="no especificado" id="noDicho" class="form-check-input" required>
            Prefiero no decirlo</label>
        <input type="submit" class="btn btn-primary mt-3">
    </form>
    <script src="./public/js/script.js">
    </script>
</body>

</html>