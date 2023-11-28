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

$sql = "SELECT * FROM sealmo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Edad</th><th>Estilo</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["estilo"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();

?>
