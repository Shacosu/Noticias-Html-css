<?php

include "seccion.php";
//aqui se almacenan los datos del formulario y se guardan en variables
$idseccion = $_POST['ids'];
$nombre =$_POST['ns'];
$tiponoticia = $_POST['tns'];

//se crea la arraylist que contendra los datos
$seccion = new seccion();
//se crean los set de dichas variables
$seccion->setid_seccion($idseccion);
$seccion->setnombre($nombre);
$seccion->settipodenoticia($tiponoticia);

//se ingresa los datos a una nueva arraylist
$insertar = new seccion();
//se realiza la virificacion si los datos se almacenaron correctamente
$estados = $insertar->insertar($seccion);

if ($estados == true){
  header("Status: 301 Moved Permanently");
  header("Location: http://localhost:80/Noticias/pages/success.html");
  echo "hola";
}
else{
  header("Status: 301 Moved Permanently");
  header("Location: http://localhost:80/Noticias/pages/failed.html");
echo"chao";
}



?>
