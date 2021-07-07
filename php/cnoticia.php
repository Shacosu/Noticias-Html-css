<?php 

include "noticias.php";
//aqui se almacenan los datos del formulario y se guardan en variables
$codigo_noticia = $_POST['cd'];
$fuente =$_POST['cp'];
$mediodifucion = $_POST['md'];
$nombreautor = $_POST['na'];
$estado = $_POST['e'];
$seccion = $_POST['s'];
$descripcion = $_POST['d'];
//se crea la arraylist que contendra los datos
$noticias = new noticias();
//se crean los set de dichas variables
$noticias->setcodnoticia($codigo_noticia);
$noticias->setfuente($fuente);
$noticias->setmediodifucion($mediodifucion);
$noticias->setnombreautor($nombreautor);
$noticias->setestado($estado);
$noticias->setseccion($seccion);
$noticias->setdescripcion($descripcion);
//se ingresa los datos a una nueva arraylist
$insertar = new noticias();
//se realiza la virificacion si los datos se almacenaron correctamente
$estados = $insertar->insertar($noticias);

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