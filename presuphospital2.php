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

    $pres = $_POST['presupuesto'];


    $ginec = ($pres * 0.40);
    $trauma = ($pres * 0.30);
    $pedi = ($pres * 0.30);

    ?>

    <?php echo "El dinero dirigido a Ginecologia es: $ginec pesos"; ?> <br>

    <?php echo "El dinero dirigido a Traumatologia es: $trauma pesos"; ?> <br>

    <?php echo "El dinero dirigido a Pediatria es: $pedi pesos"; ?> <br>


    <br>
    <hr>
    <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>