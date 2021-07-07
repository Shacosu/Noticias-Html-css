<?php
include_once 'conexion.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakenoticias";

$id = $_POST['d1'];
$nombree = $_POST['d2'];
$tipo = $_POST['d3'];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // sql to delete a record

  $sqla = "DELETE FROM seccion WHERE id_seccion='".$id."'";
  if ($conn->query($sqla) === TRUE) {
    echo "...";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  $sql = "INSERT INTO seccion VALUES ('$id', '$nombree', '$tipo')";

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
