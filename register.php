<?php
include ('conexion.php');
$conexion = conexion();



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email']; 
$usuario = $_POST['username'];
$pass = sha1($_POST['password']);
$fn = $_POST['nacimiento'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
   
$query= "INSERT INTO registro(nombre, apellido, email, usuario, password, fecha_na, Edad, Telefono) VALUES ('$nombre', '$apellido', '$email', '$usuario', '$pass', '$fn', '$edad', '$telefono')";
$resultado = mysqli_query($conexion, $query);
if($resultado){
    echo "<h1>Datos insertados correctamente.</h1>";
    header('Location:./usuarios.php');
} else {
    echo "<h1>Error al insertar datos: " . mysqli_error($conexion) . "</h1>";
}
echo($query);

/* echo($nombre . $apellido . $email . $usuario . $pass . $fn . $edad . $telefono); */



?>
