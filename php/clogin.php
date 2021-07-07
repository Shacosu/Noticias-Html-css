<?php

include_once 'conexion.php'; //importo la clase conexion
include_once '../pages/login.html';
//aqui se almacenan los datos del formulario y se guardan en variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakenoticias";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$login = $_POST['a1'];
$passwd =$_POST['a2'];

if($login!=''&& $passwd!='')
{
 $query="select * from registrou where nombre_de_usuario='".$login."' and contraseña='".$passwd."'";

 $result=mysqli_query($conn,$query); 

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['username']=$login;
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost:80/Noticias/pages/admin.html");
     }
    else
    {
      echo'<script type="text/javascript">
      alert("Usuario y/o contraseña incorrectos!");
      window.location.href="http://localhost:80/Noticias/pages/login.html";
      </script>';
     }
 }
}



$conn->close();

?>