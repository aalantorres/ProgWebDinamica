<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <form action="../../../Control/TP1/ej6/misDatos.php" method="get">
        <label for="nombre">Nombre: <input type="text" required name="nombre" id="nombre"></label>
        <label for="apellido">Apellido: <input type="text" required name="apellido" id="apellido"></label>
        <label for="edad">Edad: <input type="number" max="100" min="1" required name="edad" id="edad"></label>
        <label for="direccion">Direccion: <input type="text" required name="direccion" id="direccion"></label>
        <p style="font-size: 20px">Nivel de estudio</p>

        <div class="radios">
            <label for="secundario"><input type="radio" name="estudios" value="secundario" id="secundario">
                Estudios Secundarios</label>
            <label for="primario"><input type="radio" name="estudios" value="primario" id="primario">
                Estudios Primarios</label>
            <label for="incompleto"><input type="radio" name="estudios" value="sin estudios" id="incompleto">
                No tiene estudios</label>
        </div>
        <p style="font-size: 20px">Seleccione su sexo</p>
        <div class="radios">
            <label for="masculino"><input type="radio" name="sexo" value="masculino" id="masculino">
                Masculino</label>
            <label for="femenino"><input type="radio" name="sexo" value="femenino" id="femenino">
                Femenino</label>
            <label for="noDicho"><input type="radio" name="sexo" value="no especificado" id="noDicho">
                Prefiero no decirlo</label>
        </div>
        <p style="font-size: 20px">Seleccione los deportes que practica</p>
        <div class="radios checkbox">
            <label for="futbol" required><input type="checkbox" id="futbol" value="futbol" name="deporte[]">Futbol</label>
            <label for="tennis" required><input type="checkbox" id="tennis" value="tennis" name="deporte[]">Tennis</label>
            <label for="basket" required><input type="checkbox" id="basket" value="basket" name="deporte[]">Basket</label>
            <label for="voley" required><input type="checkbox" id="voley" value="voley" name="deporte[]">Voley</label>
        </div>
        <input type="submit" class="subir">
    </form>
</body>

</html>