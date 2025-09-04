<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
</head>

<body>
  <?php
  $user = array(
    "usuario" => "Alan",
    "clave" => "contrasenia"
  );
  if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    if ($_POST['usuario'] == $user['usuario'] && $_POST['clave'] == $user['clave']) {
      echo '<div class="container mt-5">
  <div class="alert alert-success" role="alert">
    ¡Bienvenido!
  </div>
</div>';
    } else
      echo '<div class="container mt-5">
  <div class="alert alert-warning" role="alert">
    ¡Error de acceso!
  </div>
</div>';
  }

  ?>
</body>

</html>