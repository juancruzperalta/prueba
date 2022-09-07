<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practica web 2</title>
</head>
  <body>
    <h1>Hola, comienzo de PHP</h1>
    <h4>crear una lista en base a un arreglo con php</h4>
    <?php
    $arregloNombres = array("Ricardo", "Franco", "Alberto");
    foreach($arregloNombres as $nombre){
      echo "<li>$nombre</li>";
    }
    ?>
<br>
<h4>Carpeta-1 - Envio de datos de un formulario al servidor
  </h4>
  <a href="formularios-envia-datos/index.html">Ir a formularios</a>
  <h4>Carpeta Practico 01</h4>
  <a href="practico01/practico01.html">Ir a carpeta Practico 1</a>
  </body >
</html>
