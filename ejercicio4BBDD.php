<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdasignatura";

// Crear la conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión 
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

// Seleccionar la base de datos
$conn->select_db($dbname);

// Crear la tabla alumno si no existe
$sql = "CREATE TABLE IF NOT EXISTS alumno (
    dni VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    localidad VARCHAR(50),
    anoinicio INT,
    modoacceso VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla alumno creada correctamente.<br>";
} else {
    echo "Error al crear la tabla alumno: " . $conn->error . "<br>";
}

// Crear la tabla matricula para relacionar alumnos y asignaturas
// Nota: La tabla 'asignatura' debe existir previamente en la BD.
$sql = "CREATE TABLE IF NOT EXISTS matricula (
    alumno_dni VARCHAR(20),
    asignatura_codigo VARCHAR(10),
    PRIMARY KEY (alumno_dni, asignatura_codigo),
    FOREIGN KEY (alumno_dni) REFERENCES alumno(dni),
    FOREIGN KEY (asignatura_codigo) REFERENCES asignatura(codigo)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla matricula creada correctamente.<br>";
} else {
    echo "Error al crear la tabla matricula: " . $conn->error . "<br>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicacion BD Asignatura y Alumnos</title>
</head>
<body>
    <h1>Aplicacion BD Asignatura y Alumnos</h1>

    <h2>Insertar Alumno</h2>
    <form method="post">
        <input type="hidden" name="action" value="insertAlumno">
        DNI: <input type="text" name="dni" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Apellidos: <input type="text" name="apellidos" required><br>
        Localidad: <input type="text" name="localidad"><br>
        Año inicio estudios: <input type="number" name="anoinicio" required><br>
        Modo de acceso: <input type="text" name="modoacceso"><br>
        <input type="submit" value="Insertar Alumno">
    </form>

    <h2>Matricular Alumno en Asignatura</h2>
    <form method="post">
        <input type="hidden" name="action" value="matricula">
        DNI Alumno: <input type="text" name="dni" required><br>
        Código Asignatura: <input type="text" name="codigo" required><br>
        <input type="submit" value="Matricular">
    </form>

    <h2>Consultar Alumnos</h2>
    <form method="post">
        <input type="hidden" name="action" value="consultarAlumnos">
        <input type="submit" value="Consultar Alumnos">
    </form>

    <h2>Consultar Matrículas</h2>
    <form method="post">
        <input type="hidden" name="action" value="consultarMatriculas">
        <input type="submit" value="Consultar Matrículas">
    </form>

<?php
// Procesar las acciones enviadas por los formularios
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "insertAlumno") {
        // Recoger los datos del formulario
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $localidad = $_POST["localidad"];
        $anoinicio = $_POST["anoinicio"];
        $modoacceso = $_POST["modoacceso"];

        // Preparar e insertar el alumno, evitando duplicados
        $sql = "INSERT IGNORE INTO alumno (dni, nombre, apellidos, localidad, anoinicio, modoacceso) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $dni, $nombre, $apellidos, $localidad, $anoinicio, $modoacceso);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "<p>Alumno insertado correctamente.</p>";
            } else {
                echo "<p>El alumno con DNI $dni ya existe.</p>";
            }
        } else {
            echo "<p>Error al insertar alumno: " . $conn->error . "</p>";
        }
        $stmt->close();

    } elseif ($action == "matricula") {
        // Matricular un alumno en una asignatura
        $dni = $_POST["dni"];
        $codigo = $_POST["codigo"];
        
        // Verificar que el alumno exista
        $sql_check = "SELECT * FROM alumno WHERE dni = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $dni);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();
        
        if ($result_check->num_rows == 0) {
            echo "<p>Error: No existe un alumno con DNI $dni.</p>";
        } else {
            // Insertar la matrícula usando INSERT IGNORE para evitar duplicados
            $sql_mat = "INSERT IGNORE INTO matricula (alumno_dni, asignatura_codigo) VALUES (?, ?)";
            $stmt_mat = $conn->prepare($sql_mat);
            $stmt_mat->bind_param("ss", $dni, $codigo);
            
            if ($stmt_mat->execute()) {
                if ($stmt_mat->affected_rows > 0) {
                    echo "<p>Alumno matriculado en la asignatura correctamente.</p>";
                } else {
                    echo "<p>El alumno ya estaba matriculado en la asignatura $codigo.</p>";
                }
            } else {
                echo "<p>Error al matricular alumno: " . $conn->error . "</p>";
            }
            $stmt_mat->close();
        }
        $stmt_check->close();

    } elseif ($action == "consultarAlumnos") {
        // Consultar alumnos
        $sql = "SELECT * FROM alumno";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<h3>Alumnos</h3>";
            echo "<table border='1'>";
            echo "<tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Localidad</th>
                    <th>Año inicio</th>
                    <th>Modo de acceso</th>
                  </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["dni"]."</td>
                        <td>".$row["nombre"]."</td>
                        <td>".$row["apellidos"]."</td>
                        <td>".$row["localidad"]."</td>
                        <td>".$row["anoinicio"]."</td>
                        <td>".$row["modoacceso"]."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay alumnos registrados.</p>";
        }

    } elseif ($action == "consultarMatriculas") {
        // Consultar matrículas (se asume que la tabla asignatura existe)
        $sql = "SELECT m.alumno_dni, a.nombre AS alumno_nombre, a.apellidos, 
                       m.asignatura_codigo, s.nombre AS asignatura_nombre
                FROM matricula m
                INNER JOIN alumno a ON m.alumno_dni = a.dni
                INNER JOIN asignatura s ON m.asignatura_codigo = s.codigo";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<h3>Matrículas</h3>";
            echo "<table border='1'>";
            echo "<tr>
                    <th>DNI Alumno</th>
                    <th>Nombre Alumno</th>
                    <th>Apellidos</th>
                    <th>Código Asignatura</th>
                    <th>Nombre Asignatura</th>
                  </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["alumno_dni"]."</td>
                        <td>".$row["alumno_nombre"]."</td>
                        <td>".$row["apellidos"]."</td>
                        <td>".$row["asignatura_codigo"]."</td>
                        <td>".$row["asignatura_nombre"]."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay matrículas registradas.</p>";
        }
    }
}

// Cerrar la conexión
$conn->close();
?>
</body>
</html>
