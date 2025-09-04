<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinem@s</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinem@as</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-4">
    <form class="border rounded bg-white" action="../../../Control/TP2/ejercicio4/subirPelicula.php" method="post">

      <div class="bg-light p-2 border-bottom">
        <h2 class="m-0 text-primary"> <i class="bi bi-pencil-square"></i>
          Cinem@s</h2>
      </div>

      <div class="p-4">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" required placeholder="Titulo">
          </div>
          <div class="col-md-6">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" class="form-control" name="actores" placeholder="Actores">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" name="director" placeholder="Director">
          </div>
          <div class="col-md-6">
            <label for="guion" class="form-label">Guion</label>
            <input type="text" class="form-control" name="guion" placeholder="Guion">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="produccion" class="form-label">Produccion</label>
            <input type="text" class="form-control" name="produccion" placeholder="Produccion">
          </div>
          <div class="col-md-1">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" name="anio" placeholder="Año">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad">
          </div>
          <div class="col-md-3">
            <label for="duracion" class="form-label">Duración (minutos)</label>
            <input type="number" class="form-control " name="duracion" placeholder="Duracion">
          </div>
        </div>

        <fieldset class="mb-3">
          <legend class="col-form-label pt-0">Restricciones de edad</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="edad" id="todoPublico" value="Todos">
            <label class="form-check-label" for="todoPublico">Todo Público</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="edad" id="mayores7" value="+7">
            <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="edad" id="mayores18" value="+18">
            <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
          </div>
        </fieldset>

        <div class="mb-3">
          <label for="sinopsis" class="form-label">Sinopsis</label>
          <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" placeholder="Sinopsis"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-secondary">Borrar</button>
      </div>
    </form>
  </div>

</body>

</html>