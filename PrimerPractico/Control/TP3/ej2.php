<?php
$mensaje = "";
$dir = "../../Vista/TP3/ej1/Archivos";
if ($_FILES["archivo"]["error"] <= 0) {
    $tipo = $_FILES["archivo"]["type"];
    //verifica que el archivo sea tipo texto
    if ((str_contains($tipo, "text/plain"))) {
        if (!copy($_FILES['archivo']['tmp_name'], $dir . "/" . $_FILES['archivo']['name'])) {
            $mensaje = "ERROR: no se pudo cargar el archivo ";
        } else {
            $mensaje =  "El archivo ' " . $_FILES["archivo"]["name"] . " ' se ha copiado con Éxito <br />";
            $textoArchivo =  file_get_contents($dir . "/" . $_FILES["archivo"]["name"]);
            $mensaje .= '<textarea name="textarea_datosingresados" id="textarea_datosingresados" disabled cols="50" rows="10">' . $textoArchivo . '</textarea>';
        }
    } else {
        $mensaje = "Solo se pueden subir archivos de tipo TXT";
    }
} else {
    $mensaje = "ERROR: No se pudo cargar el archivos";
}
include_once('../../Vista/TP3/ej2/resultado.php');
