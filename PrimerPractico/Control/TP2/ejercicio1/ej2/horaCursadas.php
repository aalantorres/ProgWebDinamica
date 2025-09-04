<?php
$dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
$diasHoras = [];
$horasCursada = 0;
$resultado = "";
//recorre los dias y suma las horas de clases
foreach ($dias as $dia) {
    if (isset($_GET[$dia])) {
        $diasHoras[$dia] = $_GET[$dia];
        $horasCursada += $diasHoras[$dia];
    }
}
foreach ($diasHoras as $dia => $hora) {
    $resultado .= "<h3>El dia $dia se cursan: $hora horas</h3>";
}
$resultado .= "<h1>Total de horas de Cursada: $horasCursada</h1>";
include_once("../../../../Vista/TP2/ejercicio1/ej2/resultado.php");
