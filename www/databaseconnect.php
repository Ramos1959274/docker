<?php
$database = "ejemplo";
$username = "root";
$password = "enriquezra15";
$servername = "mysql";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$conn->query("CREATE TABLE IF NOT EXISTS alumnos (nombre varchar(50))");
$conn->query("insert into alumnos(nombre) values('Pedro')");
$resultado = $conn->query("SELECT * FROM alumnos");
for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo " <br> Nombre = " . $fila['nombre'] . "\n";
}

mysqli_close($conn);
?>