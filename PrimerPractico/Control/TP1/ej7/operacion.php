<?php
$resultado = "";
if ($_POST['operacion'] == "suma") {
    $resultado .= "<h2>suma</h2>";
    $operacion = $_POST['num1'] + $_POST['num2'];
    $resultado .= "<h1>$operacion</h1>";
} elseif ($_POST['operacion'] == "resta") {
    $resultado .= "<h2>resta</h2>";
    $operacion = $_POST['num1'] - $_POST['num2'];
    $resultado .= "<h1>$operacion</h1>";
} else {
    $resultado .= "<h2>multiplicacion</h2>";
    $operacion = $_POST['num1'] * $_POST['num2'];
    $resultado .= "<h1>$operacion</h1>";
}
include_once("../../../Vista/TP1/ej7/resultado.php")
?>