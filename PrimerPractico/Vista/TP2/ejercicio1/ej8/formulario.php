<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Cine Cinem@s</h1>
    <form class="needs-validation" method="post" id="formulario" action="../../../../Control/TP2/ejercicio1/ej8/precioEntrada.php" novalidate>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad: <input type="number" class="form-control" max="100" min="1" required name="edad" id="edad" step="1"></label>
        </div>
        <div class="mb-3">
            <p>seleccione si es estudiante</p>
            <label for="si" class="form-check-label"><input type="radio" class="form-check-input" name="estudiante" value="si" id="si" required>si</label>
            <label for="no" class="form-check-label"><input type="radio" class="form-check-input" name="estudiante" value="no" id="no" required>no</label>
        </div>
        <input type="submit" class="btn btn-primary">
        <input type="reset" class="btn btn-secondary">
    </form>
    <script src="./public/js/script.js">

    </script>
</body>

</html>