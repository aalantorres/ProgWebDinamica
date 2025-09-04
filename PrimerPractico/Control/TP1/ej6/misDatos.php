<?php
/*
     if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        echo"<h2>Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion</h2>";
     }
     */
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    $sexo = $_GET['sexo'];
    $estudios = $_GET['estudios'];
    if (isset($_GET['deporte'])) {
        $deportes = count($_GET['deporte']);
    } else {
        $deportes = 0;
    }
    $resultado = "<h2>Hola, $nombre $apellido de $edad años y residente en $direccion de sexo $sexo con estudios $estudios y practica $deportes deportes</h2>";
}
include_once("../../../Vista/TP1/ej6/resultado.php")
?>