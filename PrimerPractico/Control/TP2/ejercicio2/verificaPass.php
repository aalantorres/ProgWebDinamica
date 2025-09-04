    <?php
    $resultado = "";
    $user = array(
      "usuario" => "Alan",
      "clave" => "contrasenia"
    );
    if (isset($_POST['usuario']) && isset($_POST['clave'])) {
      //verifica que el usuario y contraseña ingresado coincida con el guardado en el array
      if ($_POST['usuario'] == $user['usuario'] && $_POST['clave'] == $user['clave']) {
        $resultado = '<div class="container mt-5">
  <div class="alert alert-success" role="alert">
    ¡Bienvenido!
  </div>
</div>';
      } else
        $resultado = '<div class="container mt-5">
  <div class="alert alert-warning" role="alert">
    ¡Error de acceso!
  </div>
</div>';
    }
    include_once("../../../Vista/TP2/ejercicio2/resultado.php");
    ?>