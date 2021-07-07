<?php
include_once 'conexion.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakenoticias";

$codigo = $_POST['c1'];
$fuente = $_POST['c2'];
$mediod = $_POST['c3'];
$nombrea = $_POST['c4'];
$estado = $_POST['c5'];
$seccion = $_POST['c6'];
$descripcion = $_POST['c7'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // sql to delete a record
  $sqla = "DELETE FROM noticias WHERE codigo_noticia='".$codigo."'";
  if ($conn->query($sqla) === TRUE) {
    echo "...";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  $sql = "INSERT INTO noticias VALUES ('$codigo', '$fuente', '$mediod', '$nombrea', '$estado', '$seccion', '$descripcion')";

  if ($conn->query($sql) === TRUE) {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/Noticias/pages/success.html");
    echo "hola";
  } else {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/Noticias/pages/failed.html");
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
?>
