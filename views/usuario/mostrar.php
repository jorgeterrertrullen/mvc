<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> mostrar los usuarios</h1>
    <?php
         echo $nombre;
         echo "<br>";
         echo $apellido;
         echo "<br>";
         echo $sexo;
         echo "<br>";

         foreach ($aficiones as $aficion ) {
             echo $aficion;
         };
    
    ?>
</body>
</html>