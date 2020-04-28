<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>

    <form action="descuento2.php" method="POST">
        Nombre del producto:
        <input type="text" name="nombre"> <br>

        Precio del producto:
        <input type="number" name="precio"> <br>

        clave:
        <select name="clave">
            <option value="0" selected> Seleccionar</option>
            <option value="1"> clave 1</option>
            <option value="2"> clave 2</option>

        </select> <br>

        <input type="submit" value="Enviar ">

    </form>


</body>

</html>