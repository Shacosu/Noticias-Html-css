<?php 
include_once 'conexion.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakenoticias";
$eliminar = $_POST['b1'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // sql to delete a record
  $sql = "DELETE FROM seccion WHERE id_seccion='".$eliminar."'";

  if ($conn->query($sql) === TRUE) {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/Noticias/pages/success.html");
    
  } else {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/Noticias/pages/failed.html");
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
?>
