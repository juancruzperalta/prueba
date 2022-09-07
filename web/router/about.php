<?php
  function about($nombre=''){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>About</title>
    </head>
    <body>';
    if($nombre === 'juan'){
      $html.="<h2>Soy Juan Código</h2>";
    }
    else{
      return "<h1>Soy el gran grupo de desarrolladores</h1>";
    }
  $html.=  '</html>
    </body>';
    return $html;
  }
?>
