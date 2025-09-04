<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <form action="../../../Control/TP1/ej7/operacion.php" method="post" id="formulario">
        <input type="text" name="num1" id="num1">
        <input type="text" name="num2" id="num2">
        <select name="operacion" id="">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select>
        <input type="submit">
    </form>




    <script>
        const form = document.getElementById('formulario');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let esCorrecto = true;
            const inputs = form.querySelectorAll('input[type="text"]');
            inputs.forEach(input => {
                if (isNaN(input.value)) {
                    esCorrecto = false;
                    input.style.border = "2px solid red";
                } else {
                    input.style.border = "";
                }
            })
            if (esCorrecto) {
                form.submit();
            }
        })
    </script>
</body>

</html>