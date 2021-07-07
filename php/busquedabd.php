
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "fakenoticias";
  $mm = "";

  $busqueda = $_POST['cajab'];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM noticias WHERE codigo_noticia='$busqueda'"; 
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo '<body style="background-color:lightgreen">';
    echo '<a href="../iniciogeneral.html"> <img src="../imagenes/fake.png" style="height: 200px; width: 200px;" ></a>';
    echo '<table 
          border=2px
          style="border: solid 5px blue;
          font-size: 30px;
          margin-top: 10%;
          margin-left: 10%;
          ">';
    
    echo '<tr>
    <th align="left"><font color=#EA2E06>codigo_noticia</th>
    <th align="left"><font color=#EA2E06 >fuente</th>
    <th align="left"><font color=#EA2E06>medio_difucion</th>
    <th align="left"><font color=#EA2E06>nombre_autor</th>
    <th align="left"><font color=#EA2E06>estado</th>
    <th align="left"><font color=#EA2E06>seccion</th>
    <th align="left"><font color=#EA2E06>descripcion</th>
      </tr>';
      
    
  
    while($row = $result->fetch_assoc()) {
     
      echo "<tr>
              <td>".$row["codigo_noticia"]."</td>
              <td>".$row["fuente"]."</td>
              <td>".$row["medio_difucion"]."</td>
              <td>".$row["nombre_autor"]."</td>
              <td>".$row["estado"]."</td>
              <td>".$row["seccion"]."</td>
              <td>".$row["descripcion"]."</td>
          </tr>";
    }
    echo "</table>";

  } else {
    header("Status: 301 Moved Permanently");
    header("Location: http://localhost:80/plantillass/no.html");
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
  $conn->close();
?>

  








