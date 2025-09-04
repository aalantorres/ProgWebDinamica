  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        $esEstudiante = $_POST['estudiante'];
        $precio = 0;
        $mensaje = "";
        if ($edad <= 12 || ($edad <= 12 && $esEstudiante == "si")) {
            $precio = 160;
        } else if ($edad >= 12 && $esEstudiante == "si") {
            $precio = 180;
        } else {
            $precio = 300;
        }
        $mensaje = "<h1>El precio de su entrada es de:$$precio</h1>";
    }
    include_once("../../../../Vista/TP2/ejercicio1/ej8/resultado.php")
    ?>