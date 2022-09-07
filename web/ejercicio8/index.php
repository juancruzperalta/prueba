<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 8</title>
  </head>
  <body>
    <h4>
      Cree un programa que dado dos números leídos mediante un input, permita
      calcular operaciones básicas entre ellos. Ademas, desde la barra de
      navegación deben existir un link para mostrarnos el numero pi y otro para
      mostrar una sección about que indique los creadores de la calculadora.
    </h4>
    <nav id="main-nav">
      <ul>
        <li><a href="ejercicio6.html">Calculadora</a></li>
        <li><a href="../ejercicio8/numeropi.php">Numero PI</a></li>
        <li><a href="../ejercicio8/about.php">Acerca de los autores</a></li>
      </ul>
    </nav>
    <h1>calculadora</h1>
    <form method="GET" action="calculadora.php">
      <label>Operador 1</label><input type="text" name="valor1" />
      <label>Operador 2</label><input type="text" name="valor2" />
      <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="dividir">Dividir</option>
        <option value="multiplicar">Multiplicar</option>
      </select>
      <input type="submit" />
    </form>
  </body>
</html>
