<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $resultado = "";
    if ($numero == 0) {
        $resultado = "<h2>El numero es cero</h2>";
    } else if ($numero > 0) {
        $resultado = "<h2>El numero es positivo</h2>";
    } else {
        $resultado = "<h2>El numero es negativo</h2>";
    }
} else {
    $resultado = "<h2>No se recibio ningun numero </h2>";
}
include_once("../../../../Vista/TP2/ejercicio1/ej1/resultado.php");
