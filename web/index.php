<!-- web/index.php -->
<?php
$servername = "database";
$username = "sealmo";
$password = "321cic7,H";
$dbname = "sealmo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión a la base de datos exitosa.";

$conn->close();
?>
