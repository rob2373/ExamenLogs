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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/user-male-circle.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/size.css">
    <?php include('includes/nav.php') ?>
</head>
<body id="body" class="align-items-center vh-100">
    
    
        <div class="container mt-2 ">
            
            <div class="row">
                <div class="col-3"></div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="card  bg-light  mt-3 mb-1 shadow-lg p-3 mb-5 bg-body-tertiary rounded" >
                     <!-- INICIO DE LA CARTA  -->
                            <div class="card-body ">
                            <div class="container">
                                <div class="row text-center">
                                
                                    <h4 class="card-title ">Editar Registro</h4>
                                </div>
                                <div class="row align-items-xl-center">
                                   <div class="col-12 align-items-xl-center"> 
                                       
                    
                                </div>
                            </div>   
                        
                                    <div class="container mt justify-content-center">
                                        <!-- inicio del formulario login-->
                                        <form action="update.php" method="post">
                                        <div class="col-lg-6 ">
                                                    <div class="form-group">

                                                        <!-- Input nombre del edad -->
                                                        <input type="hidden" class="form-control" id="id" name="id"   value="<?php echo $id; ?>" >
                                                    </div>                                            
                                                </div>
                                        <div class="form-group"> 

                                            <label for="nombre"> <h6>Nombre</h6> </label>
                                            <!-- Input nombre del usuario -->
                                            <input type="text" class="form-control" id="nombre"   name="nombre"  value="<?php echo $nombre; ?>" required>
                                         
                                            <label for="apellido"> <h6>Apellido/s</h6> </label>
                                            <!-- Input nombre del apellido -->
                                            <input type="text" class="form-control" id="apellido"  name="apellido"  value="<?php echo $apellido; ?>"  required>
                                      
                                            <label for="email"> <h6>Correo electrónico</h6> </label>
                                            <!-- Input nombre del correo -->
                                            <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email; ?>" required>
                                          
                                            <label for="username"> <h6>Nombre de usuario</h6> </label>
                                            <!-- Input nombre del  username-->
                                            <input type="text" class="form-control" id="username" name="username"   value="<?php echo $usuario; ?>" required>
                                          
                                          </div>
                                        <div class="container">
                                            <div class="row">
                                             <div class="col-lg-6 ">
                                                <div class="form-group">
                                                    <label for="nacimiento"> <h6>Fecha de nacimiento</h6> </label>
                                                    <!-- Input nombre del nacimiento -->
                                                    <input type="date" class="form-control" id="nacimiento" name="nacimiento"  value="<?php echo $fecha_na; ?>">
                                                </div>
                                             </div>
                                        
                                                <div class="col-lg-6 ">
                                                    <div class="form-group">

                                                        <label for="edad"> <h6>Edad</h6> </label>
                                                        <!-- Input nombre del edad -->
                                                        <input type="number" class="form-control" id="edad" name="edad"   value="<?php echo $Edad; ?>" required>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="telefono"> <h6> Teléfono </h6></label>
                                            <!-- Input numTel -->
                                            <input type="number" class="form-control" id="telefono" name="telefono"  value="<?php echo $Telefono; ?>"required>
                                          </div>
                                          <div class="col-12 align-items-xl-center">
                                          <!-- boton de Registros -->
                                            <button type="submit" class="btn btn-warning mt-3 rounded mx-auto d-block"><h5> Guardar Cambios</h5></button>
                                            <a href="usuarios.php" > <button type="button" class=" btn btn-primary mt-3 rounded mx-auto d-block"> <h5> Volver</h5></button> </a>                    
                                        </div>
                                      
                                        </form>
                                        <!-- fin del login  -->
                                      </div>
                                
                                
                             </div>
                         </div>
                       </div>
            </div>
           
            <div class="col-3"></div>

         </div>
                
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
