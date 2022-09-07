<!-- Lo que hago básicamente es guardar la contraseña en los nombres de los inputs, por ejemplo aqui guardo en 'EMAIL' y 'PASSWORD', los guardo en una variable, y luego los puedo imprimir. Con $_POST se ocultan los datos y no aparecen en la URL, con el metodo GET cambiando en el html y el php, aparece en la URL los datos que se envian. -->
<!-- // agarro los datos que vienen en el REQUEST del INDEX.HTML
//guardo el post de email en la variable $email -->
<?php
//Lo que haremos es comprobar si existen los datos enviados para evitar confusiones...
//--------------------------------
//Dos validaciones, ISSET, quiere decir, está seteado.
//EMPTY completamente verifica todo.
//si no está algo completo muestra el error.
if(empty($_POST['email']) || empty($_POST['password'])){
  echo "<p>Debe completar todos los campos</p>";
}else{//si esta completo muestra
//--------------------------------
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

echo "Hola, $email ";

echo "contraseña $password";

  define("SALUDO", "<br>El resto de cosas está en el visual code como comentario asi no explota");
  echo SALUDO; 
}
//EL METODO REQUEST ES SIMILAR AL POST, AMBOS ESTAN BIEN UTILIZADOS
//-------------------------------
// $email = $_GET['email'];
// $password = $_GET['password'];

// echo "Hola, $email ";

// echo "contraseña $password";
//-------------------------------
// $email = $_POST['email'];
// $password = $_POST['password'];

// echo "Hola, $email ";

// echo "contraseña $password";
//-------------------------------