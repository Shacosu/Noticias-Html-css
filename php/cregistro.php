<?php 

include_once "registro.php";
//aqui se almacenan los datos del formulario y se guardan en variables
$nombre = $_POST['n1'];
$apellido =$_POST['n2'];
$nombre_us = $_POST['n3'];
$correo = $_POST['n4'];
$contraseña = $_POST['n5'];

//se crea la arraylist que contendra los datos
$usuario = new usuario();
//se crean los set de dichas variables
$usuario->setnombre($nombre);
$usuario->setapellido($apellido);
$usuario->setnombre_de_usuario($nombre_us);
$usuario->setcorreo_electronico($correo);
$usuario->setcontraseña($contraseña);

//se ingresa los datos a una nueva arraylist
$insertar = new usuario();
//se realiza la virificacion si los datos se almacenaron correctamente
$estados = $insertar->insertar($usuario);

if ($estados == true){
    echo "hola";
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/Noticias/pages/login.html");
}
else{
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/plantillass/no.html");
    
echo"chao";
}



?>