<?php
define('ACTION', 0);
define('VALOR1', 1);
define('VALOR2', 2);
include_once 'config/ConfigApp.php';
include_once 'sumar.php';
include_once 'about.php';
include_once 'pi.php';

function parseURL($url){
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded, 1) : null;
  
  return $arrayReturn;
}
if(isset($_GET['action'])){
  $urlData = parseUrl($_GET['action']);
  $action = $urlData[ConfigApp::$ACTION];
  if(array_key_exists($action, ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    echo 'Existe la accion'.$action;
    echo 'Tengo que llamar al método'.ConfigApp::$ACTIONS[$action];
    echo 'Los parametros son ';
    print_r($params);
  }
  // if($actions[ACTION] === 'sumar'){
  //   echo sumar($actions[VALOR1], $actions[VALOR2]);
  // }
  // else{
  //   if($actions[ACTION] === 'about'){
  //     if(isset($actions[VALOR1])){
  //       echo about($actions[VALOR1]);
  //     }
  //     else{
  //       echo about();
  //     }
  //   }
  //   else{
  //     if($actions[ACTION] === 'pi'){
  //       echo piNumber();
  //     }
  //   }
  // }
}
?>