<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir archivo</title>
</head>

<body>
    <h2>Subir archivo (2MB)</h2>
    <form action="../../../Control/TP3/ej1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <br><br>
        <input type="submit" value="Subir">
    </form>
</body>