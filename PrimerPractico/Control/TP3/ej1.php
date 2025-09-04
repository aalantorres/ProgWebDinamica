<?php
$mensaje = "";

$dir = "../../Vista/TP3/ej1/Archivos";
if ($_FILES["archivo"]["error"] <= 0) {
    $nombre = $_FILES["archivo"]["name"];
    $tipo = $_FILES["archivo"]["type"];
    $peso = $_FILES["archivo"]["size"];
    //verifica el tipo de archivo
    if ((str_contains($tipo, "pdf") || str_contains($tipo, "doc"))) {
        //peso del archivo maximo
        if ($peso <= 2099000) {
            if (!copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
                $mensaje = "ERROR: no se pudo cargar el archivo ";
            } else {
                $mensaje = "El archivo " . $_FILES["archivo"]["name"] . " se copio con Éxito <br />" . "<a href='../Archivos/$nombre'>Descargar Archivo</a>";
            }
        } else {
            $mensaje = "Porfavor ingrese un archivo de peso maximo 2 MB";
        }
    } else {
        $mensaje = "Solo se pueden subir archivos PDF o Documento!";
    }
} else {
    $mensaje = "ERROR: No se pudo cargar el archivo a la base de datos";
}
include_once('../../Vista/TP3/ej1/resultado.php');
