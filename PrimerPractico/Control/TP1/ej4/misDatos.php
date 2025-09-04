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
if (isset($_GET['edad'])) {
   if ($_GET['edad'] > 18) {
      $resultado = "<h2>Sos mayor de edad</h2>";
   } else {
      $resultado = "<h2>Sos menor de edad</h2>";
   }
}
include_once("../../../Vista/TP1/ej4/resultado.php")
?>