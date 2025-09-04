<?php
if (isset($_POST)) {
    $datosPelicula = '<h3 class="text-primary"> La pelicula introducida es </h3>';
    $datosPelicula .= '<p><strong>Titulo: </strong>' . $_POST['titulo'] . '</p>';
    $datosPelicula .= '<p><strong>actores: </strong>' . $_POST['actores'] . '</p>';
    $datosPelicula .= '<p><strong>director: </strong>' . $_POST['director'] . '</p>';
    $datosPelicula .= '<p><strong>guion: </strong>' . $_POST['guion'] . '</p>';
    $datosPelicula .= '<p><strong>produccion: </strong>' . $_POST['produccion'] . '</p>';
    $datosPelicula .= '<p><strong>anio: </strong>' . $_POST['anio'] . '</p>';
    $datosPelicula .= '<p><strong>nacionalidad: </strong>' . $_POST['nacionalidad'] . '</p>';
    $datosPelicula .= '<p><strong>duracion: </strong>' . $_POST['duracion'] . '</p>';
    $datosPelicula .= '<p><strong>edad: </strong>' . $_POST['edad'] . '</p>';
    $datosPelicula .= '<p><strong>sinopsis: </strong>' . $_POST['sinopsis'] . '</p>';
    $dir = "../../Vista/TP3/ej1/Archivos";
    $nombre   = basename($_FILES["archivo"]["name"]);
    $rutaWeb = "../../Vista/TP3/ej1/Archivos/" . $nombre;
    if ($_FILES["archivo"]["error"] <= 0) {
        $nombre = $_FILES["archivo"]["name"];
        $tipo = $_FILES["archivo"]["type"];
        $peso = $_FILES["archivo"]["size"];
        //verifica que sea imagen
        if ((str_contains($tipo, "jpg") || str_contains($tipo, "png"))) {

            if (!copy($_FILES['archivo']['tmp_name'], $dir . "/" . $_FILES['archivo']['name'])) {
                $datosPelicula .= "ERROR: no se pudo cargar el archivo ";
            } else {
                $datosPelicula .= '<p><strong>Imagen: </strong><br><img src="' . $rutaWeb . '" alt="Imagen subida" width="500"></p>';
            }
        }
    }
}
include_once("../../Vista/TP3/ej3/resultado.php");
