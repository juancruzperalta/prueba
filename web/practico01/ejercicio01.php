<!-- Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. -->
<h3>Lista generada a través de un arreglo.</h3>
<?php
  echo('<ul>');
  for($i=1; $i<10; $i++){
    echo('<li>');
    echo($i);
    echo('</li>');
  }
  echo('</ul>');
?>