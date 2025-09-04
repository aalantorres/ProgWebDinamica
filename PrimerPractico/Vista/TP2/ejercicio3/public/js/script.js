
    const form = document.getElementById('formLogin');
    form.addEventListener('submit', function(e){
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
      if(correcto){
        this.submit();
      }
      



    })