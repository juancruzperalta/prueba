<?php
if(!is_numeric($_GET['valor1']) || 
!is_numeric($_GET['valor2']) || 
empty($_GET['operacion'])){
  echo("Esto es incorrecto");
  die();
}
$operador1 = $_GET['valor1'];
$operador2 = $_GET['valor2'];
$operacion = $_GET['operacion'];

switch($operacion){
  case 'sumar': {
    $resultado = $operador1 + $operador2; 
    break;
    }
  case 'restar':{
    $resultado = $operador1 - $operador2; 
    break;    
  }
  case 'multiplicar':{
    $resultado = $operador1 * $operador2; 
    break;
  }
  case 'dividir':{
    $resultado = $operador1 / $operador2; 
    break;
  }    
  default: {
    echo('No has ingresado ningun valor');
    break;
  }
}
echo ($resultado);
?>