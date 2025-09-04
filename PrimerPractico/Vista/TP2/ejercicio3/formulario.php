<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3 login</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./estilos.css">

</head>

<body>
  <div class="d-flex justify-content-center align-items-center">
    <form action="verificaPass.php" method="post" class="needs-validation p-4 border rounded shadow w-25 position-relative" id="formLogin">
      <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; left:94%; top:10px" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
      </svg>
      <h2 style="text-align: center; margin-bottom:30px;">Member Login</h2>
      <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-person"></i>
        </span>
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-lock "></i>
        </span>
        <input type="password" required class="form-control" placeholder="Contraseña" name="clave" id="clave">
      </div>
      <input type="submit" class="btn btn-primary form-control" style="background-color: #2ce673ff; border-color:#2ce673ff" value="Registrar">
      <div id="error">

      </div>
    </form>
  </div>
</body>
<script>
  const form = document.getElementById('formLogin');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const clave = document.getElementById('clave').value;
    const error = document.getElementById('error');
    error.textContent = "";
    const minLetras = 8;
    const contNumero = /\d/;
    const contMayus = /[A-Z]/;
    const contMinus = /[a-z]/;
    const contCarEsp = /[!@#$%&*]/;
    const correcto = true;

    if (clave.length < minLetras) {
      error.textContent = "No se admiten contraseñas con menos de 8 caracteres"
      correcto = false;
    }

    if (!contNumero.test(clave)) {
      error.textContent = "No se admiten contraseñas sin al menos un numero"
      correcto = false;
    }

    if (!contMayus.test(clave)) {
      error.textContent = "No se admiten contraseñas sin al menos una mayuscula"
      correcto = false;
    }

    if (!contMinus.test(clave)) {
      error.textContent = "No se admiten contraseñas sin al menos una minuscula"
      correcto = false;
    }

    if (!contCarEsp.test(clave)) {
      error.textContent = "No se admiten contraseñas sin al menos un caracter especial"
      correcto = false;
    }
    if (correcto) {
      this.submit();
    }




  })
</script>

</html>