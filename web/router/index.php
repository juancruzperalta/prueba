<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>index</title>
  </head>
  <body>
    <h4>
      ¿Para que se utiliza el ruteo en una aplicación web? Para poder moverte
      por las URL más rapido y mejor ¿Qué ventajas tiene la generación de URL’s
      semánticas? Que da un gusto ver una URL más corta y que sea mas sencilla
      verla y recordarla ¿Qué es y que nos permite hacer el archivo .htaccess lo
      que hace es que guarda allí todas las URL que deben ir a PHP a buscar, sin
      eso no se puede hacer URL semantica
    </h4>
    <a href="about.php">About</a>
    <a href="about.php?nombre=juan">About - Juan</a>
    <a href="pi.php">Número PI</a>

    <form action="sumar.php" method="GET">
      <h2>Ingrese los numeros a sumar</h2>
      <label for="a">Primer Componente</label>
      <input type="number" id="a" name="a" />
      <label for="b">Segundo Componente</label>
      <input type="number" id="b" name="b" />
      <button type="submit">Sumar</button>
    </form>
  </body>
</html>