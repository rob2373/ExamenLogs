<?php
include("conexion.php");
$con = conexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de editar usuario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $usuario = $_POST["username"];
    $fecha_na = $_POST["nacimiento"];
    $Edad = $_POST["edad"];
    $Telefono = $_POST["telefono"];
    
    // Modifica la consulta para no incluir la contraseña
    $update = "UPDATE registro SET nombre='$nombre',  apellido='$apellido', email='$email', usuario='$usuario', fecha_na='$fecha_na', Edad='$Edad', Telefono='$Telefono' WHERE id='$id'";
    $result = mysqli_query($con, $update);
    
    if ($result) {
        $accion = 'Cambio';
        $ip=$_SERVER['REMOTE_ADDR'];
        $descripcion = 'Se actualizo un registro de la base de datos';
    LOGS($accion, $ip, $descripcion);
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Error al editar tenis: " . mysqli_error($con);
    }
} elseif (isset($_GET["id"])) {
    // Obtener datos del tenis a editar
    $id = $_GET["id"];
    $query = "SELECT * FROM registro WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $id = $row["id"];
        $nombre = $row["nombre"];
        $apellido = $row["apellido"];
        $email = $row["email"];
        $usuario = $row["usuario"];
        $fecha_na = $row["fecha_na"];   
        $Edad = $row["Edad"];
        $Telefono = $row["Telefono"];
        
    } else {
        echo "Error al obtener datos del tenis: " . mysqli_error($con);
        exit();
    }
} else {
    header("Location: usuarios.php");
    exit();
}
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
<?php
include("update_Envio.php");
?>
