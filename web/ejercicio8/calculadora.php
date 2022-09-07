<?php

$calculadora = $_GET['operacion'];
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

switch($calculadora){
  case 'sumar': {
    $resultado = $valor1 + $valor2;
    break;
  }
  case 'restar':{
    $resultado = $valor1 - $valor2;
    break;

  }
  case 'multiplicar':{
    $resultado = $valor1 * $valor2;
    break;

  }
  case 'dividir':{
    $resultado = $valor1 / $valor2;
    break;

  }
}
echo ($resultado);
?>
