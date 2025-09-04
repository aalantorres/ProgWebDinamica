<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="../../../../Control/TP2/ejercicio1/ej2/horaCursadas.php" method="get" class="needs-validation p-4 m-5 border w-25" novalidate>
        <div class="mb-3">
            <label for="lunes">Lunes <input type="number" name="lunes" id="lunes" required min="0" class="form-control"></label>
        </div>
        <div class="mb-3">
            <label for="martes">Martes <input type="number" name="martes" id="martes" required min="0" class="form-control"></label>
        </div>
        <div class="mb-3">
            <label for="miercoles">Miercoles <input type="number" name="miercoles" id="miercoles" required min="0" class="form-control"></label>
        </div>
        <div class="mb-3">
            <label for="jueves">Jueves <input type="number" name="jueves" id="jueves" required min="0" class="form-control"></label>
        </div>
        <div class="mb-3">
            <label for="viernes">Viernes <input type="number" name="viernes" id="viernes" required min="0" class="form-control"></label>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary">
    </form>
    <script src="./public/js/script.js">

    </script>
</body>

</html>