<?php
include("conexion.php");
$conexion = conexion();
if (isset($_GET["id"])) {
    // Eliminar el tenis
    $id = $_GET["id"];
    $query = "DELETE FROM registro WHERE id='$id'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        $accion = 'Baja';
        $descripcion = 'Se elimino un registro de la base de datos';
    LOGS($accion, $descripcion);
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Error al eliminar tenis: " . mysqli_error($conexion);
    }
} else {
    header("Location: usuarios.php");
    exit();
}

function LOGS($accion, $descripcion)
{
    $conexion = conexion();
    $sql = "INSERT INTO actividades (accion, descripcion, fecha) VALUES ('$accion', '$descripcion', NOW())";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Actividad registrada con éxito.";
    } else {
        echo "Error al registrar la actividad: " . $conexion->error;
    }
    
    $conexion->close();
}

?>