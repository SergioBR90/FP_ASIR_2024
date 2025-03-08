<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form action="" method="post">
        DNI: <input type="text" name="DNI" required><br>
        Nombre: <input type="text" name="Nombre" required><br>
        Apellidos: <input type="text" name="Apellidos"><br>
        Localidad: <input type="text" name="Localidad"><br>
        Centro_estudios:   <input type="text" name="Centro_estudios"><br>
        Usuario: <input type="text" name="Usuario"><br>
        Contraseña: <input type="password" name="Contraseña"><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion";

$conn = new mysqli ($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die ("Error de conexion" . $conn->connect_error) ;
} else {
    echo "Conexion exitosa <br>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $DNI = mysqli_real_escape_string($conn, $_POST['DNI']);
    $Nombre = mysqli_real_escape_string($conn, $_POST['Nombre']);
    $Apellidos = mysqli_real_escape_string($conn, $_POST['Apellidos']);
    $Localidad = mysqli_real_escape_string($conn, $_POST['Localidad']);
    $Centro_estudios = mysqli_real_escape_string($conn, $_POST['Centro_estudios']);
    $Usuario = mysqli_real_escape_string($conn, $_POST['Usuario']);
    $Contraseña = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT); 


    $sql = "INSERT INTO usuarios (DNI, Nombre, Apellidos, Localidad, Centro_Estudios, Usuario, Contrasena) 
                VALUES ('$DNI', '$Nombre', '$Apellidos', '$Localidad', '$Centro_estudios', '$Usuario', '$Contraseña')";


    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente";
    } else {
    echo "Error al crear el usuario" .$conn->error;
    }
}

$conn->close();
?>