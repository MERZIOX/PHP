<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>

<body>

    <?php
    $sb = 450000;
    $nomb = $_POST['nombre'];
    $cant = $_POST['cantidad'];
    $total = $_POST['total'];

    $comision = $cant * $sb;
    $por = ($total * 0.05);
    $res = $comision +  $por;

    echo  "El pago de este mes del empleado $nomb es igual a $res de pesos";


    ?>

    <br>
    <hr>
    <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>