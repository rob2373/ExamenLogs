<?php
include('conexion.php');
$conexion = conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['username'];
$pass = sha1($_POST['password']);
$fn = $_POST['nacimiento'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO registro(nombre, apellido, email, usuario, password, fecha_na, Edad, Telefono) VALUES ('$nombre', '$apellido', '$email', '$usuario', '$pass', '$fn', '$edad', '$telefono')";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    // Registro de actividad después de la inserción exitosa
    $accion = 'Alta';
    $ip=$_SERVER['REMOTE_ADDR'];
    $descripcion = 'Se agregó un nuevo registro a la base de datos ';
    LOGS($accion, $ip, $descripcion);

    echo "<h1>Datos insertados correctamente.</h1>";
    header('Location:./usuarios.php');
} else {
    echo "<h1>Error al insertar datos: " . mysqli_error($conexion) . "</h1>";
}
echo ($query);



// Función para registrar una actividad en la base de datos
function LOGS($accion, $ip, $descripcion)
{
    $conexion = conexion();
    $sql = "INSERT INTO actividades (accion, descripcion, Ip, fecha) VALUES ('$accion', '$descripcion','$ip', NOW())";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Actividad registrada con éxito.";
    } else {
        echo "Error al registrar la actividad: " . $conexion->error;
    }
    
    $conexion->close();
}
?>
