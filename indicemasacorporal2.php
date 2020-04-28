<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>

<body>

    <?php

    $nomb = $_POST['nombre'];
    $kg = $_POST['peso'];
    $m = $_POST['estatura'];

    $m2 = $m * $m;
    $calc = ($kg / $m2);
    if ($calc < 18.5) {
        echo "$nomb, estas por debajo del peso recomendado";
    } else {
        if ($calc > 18.5 & $calc < 24.9) {
            echo " $nomb, tienes un peso saludable";
        } else {
            if ($calc > 25.0 & $calc < 29.9) {
                echo " $nomb, tienes sobrepeso";
            } else {
                if ($calc > 30.0 & $calc < 39.9) {
                    echo " $nomb, tienes obesidad";
                } else {
                    if ($calc > 40.0) {
                        echo " $nomb, tienes obesidad morbica";
                    }
                }
            }
        }
    }


    ?>

    <br>
    <hr>
    <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>