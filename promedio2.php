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

   $parcial1 = $_POST['nota1'];
   $parcial2 = $_POST['nota2'];
   $parcial3 = $_POST['nota3'];
   $ExamenFinal = $_POST['nota4'];
   $TrabajoFinal = $_POST['nota5'];

   $promedioParciales = ($parcial1 + $parcial2 + $parcial3) / 3; 


   $porcentajeParciales= $promedioParciales*0.35;
   $porcentajeExamen=$ExamenFinal*0.35;
   $porcentajeTrabajo=$TrabajoFinal*0.30;
   $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;

  
   if ($notaFinal >= 3.0) {
      echo "tu nota final es: $notaFinal, aprobaste";
   } else {
      echo "tu nota final es: $notaFinal, no aprobaste";
   };

   ?>
   <br>
   <hr>
   <button><a href="index.php"> Regresar a inicio</a></button>

</body>

</html>

