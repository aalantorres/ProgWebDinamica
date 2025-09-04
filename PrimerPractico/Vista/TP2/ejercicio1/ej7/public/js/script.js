const form = document.getElementById('formulario');
        form.addEventListener('submit', function(e){
            e.preventDefault();
            let esCorrecto = false;
            const inputs = form.querySelectorAll('input[type="text"]');
            inputs.forEach(input =>{
                input.classList.remove('is-valid', 'is-invalid');   
                if(input.checkValidity()){
                    esCorrecto = true;
                    input.classList.add('is-valid');
                }
                if(isNaN(input.value)){
                    input.classList.add('is-invalid');
                    esCorrecto = false;
                } else {
                    input.classList.add('is-valid');
                }
            })
            
            if (esCorrecto) {
                form.submit();
            }
        })