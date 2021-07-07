<?php

include "enviarnoticias2.php";
//aqui se almacenan los datos del formulario y se guardan en variables
$enviar_noticia = $_POST['en'];

//se crea la arraylist que contendra los datos
$enviar = new enviar();
//se crean los set de dichas variables

$enviar->set_enviarnoti($enviar_noticia);

//se ingresa los datos a una nueva arraylist
$insertar = new enviar();
//se realiza la virificacion si los datos se almacenaron correctamente
$estados = $insertar->insertar($enviar);

if ($estados == true){
  header("Status: 301 Moved Permanently");
  header("Location: http://localhost:80/plantillass/si.html");
  echo "hola";
}
else{
  header("Status: 301 Moved Permanently");
  header("Location: http://localhost:80/plantillass/no.html");
echo"chao";
}



?>
