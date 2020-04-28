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

   $valor1 = $_POST['nota1'];

   $valor2 = $_POST['nota2'];

   $valor3 = $_POST['nota3'];

   $valor4 = $_POST['nota4'];

   $valor5 = $_POST['nota5'];

   $prompar = ($valor1 + $valor2 + $valor3 / 3);

   $parte1 = ($prompar * 0.35);
   $parte2 = ($valor4 * 0.35);
   $parte3 = ($valor5 * 0.30);

   $notafinal = ($parte1 + $parte2 + $parte3) / 3;

   if ($notafinal >= 3.0) {
      echo "tu nota final es: $notafinal, aprobaste";
   } else {
      echo "tu nota final es: $notafinal, no aprobaste";
   };

   ?>
   <br>
   <hr>
   <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>