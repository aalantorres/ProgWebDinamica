<!-- Inluye el header -->
<?php
    $title = "Crear persona";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <h1>Crear persona</h1>
            <form class="formulario" action="preCrearPersona.php" method="post">
                <label for="dni">Ingrese DNI:
                    <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" required>
                    <div id="error"></div>
                </label>
                    <input type="submit" value="Crear">
            </form>
            <script src="../../JS/dni.js"></script>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 