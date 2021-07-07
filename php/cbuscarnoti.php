<?php

include_once 'conexion.php';

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "fakenoticias";

  $codigonoti="";
  $fuente="";
  $medio="";
  $nombre="";
  $estado="";
  $seccion="";
  $descripcion="";

  $busqueda = $_POST['cajab'];


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
 

 // $sql = "SELECT * FROM noticias WHERE codigo_noticia='$busqueda' ";
  $sql = "SELECT * FROM noticias WHERE codigo_noticia='$busqueda'"; 

 //$sql = mysqli_query($link,$query);
 //$roww = mysqli_fetch_array($query);
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
   
  while($row = $result->fetch_assoc()) {
    
  
 $codigonoti=$row["codigo_noticia"];
 $fuente=$row["fuente"];
 $medio=$row["medio_difucion"];
 $nombre=$row["nombre_autor"];
 $estado=$row["estado"];
 $seccion=$row["seccion"];
 $descripcion=$row["descripcion"];
 echo "1 results";
    
  
   }
   }
   
   else 
   {
    echo "0 results";
   }
  
   $conn->close();
?>