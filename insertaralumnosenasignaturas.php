<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar alumnos en las asignaturas</title>
</head>
<body>
    <h1>Gestión de Matrículas</h1>

    <!-- Formulario para insertar un nuevo alumno -->
    <h2>Insertar Alumno</h2>
    <form action="" method="post">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" required><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos"><br>

        <label for="localidad">Localidad:</label>
        <input type="text" name="localidad"><br>

        <label for="ano_inicio">Año inicio estudios:</label>
        <input type="number" name="ano_inicio"><br>

        <label for="modo_acceso">Modo de acceso:</label>
        <input type="text" name="modo_acceso"><br>

        <input type="submit" name="insertar_alumno" value="Insertar Alumno">
    </form>

    <!-- Formulario para matricular un alumno en una asignatura -->
    <h2>Matricular Alumno en una Asignatura</h2>
    <form action="" method="post">
        <label for="dni_matricula">DNI Alumno:</label>
        <input type="text" name="dni_matricula" required><br>

        <label for="codigo_asignatura">Código Asignatura:</label>
        <input type="text" name="codigo_asignatura" required><br>

        <input type="submit" name="matricular_alumno" value="Matricular Alumno">
    </form>

    <!-- Formulario para consultar alumnos, asignaturas y matrículas -->
    <h2>Consultas</h2>
    <form action="" method="post">
        <input type="submit" name="consultar_asignaturas" value="Ver Asignaturas">
        <input type="submit" name="consultar_alumnos" value="Ver Alumnos">
        <input type="submit" name="consultar_matriculas" value="Ver Matrículas">
    </form>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdasignatura";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar un alumno evitando duplicados
if (isset($_POST['insertar_alumno'])) {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $localidad = $_POST['localidad'];
    $ano_inicio = $_POST['ano_inicio'];
    $modo_acceso = $_POST['modo_acceso'];

    $sql = "INSERT INTO alumnos (dni, nombre, apellidos, localidad, ano_inicio, modo_acceso)
            VALUES ('$dni', '$nombre', '$apellidos', '$localidad', '$ano_inicio', '$modo_acceso')
            ON DUPLICATE KEY UPDATE 
            nombre = VALUES(nombre), 
            apellidos = VALUES(apellidos), 
            localidad = VALUES(localidad), 
            ano_inicio = VALUES(ano_inicio), 
            modo_acceso = VALUES(modo_acceso)";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno insertado correctamente.<br>";
    } else {
        echo "Error al insertar alumno: " . $conn->error . "<br>";
    }
}

// Matricular un alumno en una asignatura evitando duplicados
if (isset($_POST['matricular_alumno'])) {
    $dni_matricula = $_POST['dni_matricula'];
    $codigo_asignatura = $_POST['codigo_asignatura'];

    $sql = "INSERT INTO matriculas (alumno_dni, asignatura_codigo)
            VALUES ('$dni_matricula', '$codigo_asignatura')
            ON DUPLICATE KEY UPDATE alumno_dni = alumno_dni";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno matriculado correctamente.<br>";
    } else {
        echo "Error al matricular alumno: " . $conn->error . "<br>";
    }
}

// Consultar todas las asignaturas
if (isset($_POST['consultar_asignaturas'])) {
    $sql = "SELECT * FROM asignaturas";
    $result = $conn->query($sql);

    echo "<h2>Asignaturas</h2>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Código: " . $row["codigo"] . " | Nombre: " . $row["nombre"] . " | Créditos: " . $row["numero_creditos"] . "<br>";
        }
    } else {
        echo "No hay asignaturas registradas.<br>";
    }
}

// Consultar todos los alumnos
if (isset($_POST['consultar_alumnos'])) {
    $sql = "SELECT * FROM alumnos";
    $result = $conn->query($sql);

    echo "<h2>Alumnos</h2>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "DNI: " . $row["dni"] . " | Nombre: " . $row["nombre"] . " " . $row["apellidos"] . " | Localidad: " . $row["localidad"] . " | Año inicio: " . $row["ano_inicio"] . " | Modo acceso: " . $row["modo_acceso"] . "<br>";
        }
    } else {
        echo "No hay alumnos registrados.<br>";
    }
}

// Consultar todas las matrículas
if (isset($_POST['consultar_matriculas'])) {
    $sql = "SELECT m.alumno_dni, a.nombre AS alumno_nombre, a.apellidos, m.asignatura_codigo, s.nombre AS asignatura_nombre
            FROM matriculas m
            INNER JOIN alumnos a ON m.alumno_dni = a.dni
            INNER JOIN asignaturas s ON m.asignatura_codigo = s.codigo";

    $result = $conn->query($sql);

    echo "<h2>Matrículas</h2>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Alumno: " . $row["alumno_nombre"] . " " . $row["apellidos"] . " | Asignatura: " . $row["asignatura_nombre"] . "<br>";
        }
    } else {
        echo "No hay matrículas registradas.<br>";
    }
}

// Cerrar la conexión
$conn->close();
?>
