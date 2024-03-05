<?php
include("conexion.php");
$conexion = conexion();
if (isset($_GET["id"])) {
    // Eliminar el tenis
    $id = $_GET["id"];
    $query = "DELETE FROM registro WHERE id='$id'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Error al eliminar tenis: " . mysqli_error($conexion);
    }
} else {
    header("Location: usuarios.php");
    exit();
}
?>