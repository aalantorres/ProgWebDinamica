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
}
include_once("../../../Vista/TP2/ejercicio4/resultado.php");
