<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Musica";

// Conexión a la BD
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Instrumento</title>
</head>
<body>
    <h1>Insertar Instrumento</h1>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Tipo: 
        <select name="tipo" required>
            <option value="viento">Viento</option>
            <option value="cuerda">Cuerda</option>
            <option value="percusión">Percusión</option>
            <option value="eléctricos">Eléctricos</option>
        </select><br>
        Origen: 
        <select name="origen" required>
            <option value="aborigen">Aborigen</option>
            <option value="cubano">Cubano</option>
            <option value="europeo">Europeo</option>
            <option value="mexicano">Mexicano</option>
            <option value="guatemalteco">Guatemalteco</option>
        </select><br>
        Modelo: <input type="text" name="modelo" required><br>
        <input type="submit" name="submit" value="Insertar Instrumento">
    </form>

    <p><a href="index.php">Volver a la página principal</a></p>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $origen = $_POST['origen'];
    $modelo = $_POST['modelo'];

    // Comprobar que el instrumento no existe
    $sql_check = "SELECT * FROM Instrumento WHERE nombre = ? AND tipo = ? AND origen = ? AND modelo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("ssss", $nombre, $tipo, $origen, $modelo);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    
    if ($result_check->num_rows > 0) {
        echo "<p>El instrumento ya existe.</p>";
    } else {
        $sql_insert = "INSERT INTO Instrumento (nombre, tipo, origen, modelo) VALUES (?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssss", $nombre, $tipo, $origen, $modelo);
        if ($stmt_insert->execute()) {
            echo "<p>Instrumento insertado correctamente.</p>";
        } else {
            echo "<p>Error al insertar instrumento: " . $conn->error . "</p>";
        }
        $stmt_insert->close();
    }
    $stmt_check->close();
}

$conn->close();
?>
