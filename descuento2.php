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


    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $clave = $_POST['clave'];

    $desc1 = ($precio * 0.10);
    $preciodesc1 = $precio - $desc1;

    $desc2 = ($precio * 0.20);
    $preciodesc2 = $precio - $desc2;

    if ($clave == 1) {


        echo "Nombre del producto: $nombre. 

    Precio original del producto: $precio
    
    Precio del producto con descuento del 10%: $preciodesc1.
    
    Adquirido descuento con la clave: $clave ";
    } else {
        if ($clave == 2) {

            echo "Nombre del producto: $nombre, precio original del producto: $precio, precio del producto con descuento del 20%: $preciodesc2, con la clave: $clave";
        }
    }


    ?>




    <br>
    <hr>
    <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>