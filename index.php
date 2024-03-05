<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/user-male-circle.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./css/size.css">
  
</head>
<body class=" align-items-center vh-100">
    <?php include('includes/nav.php') ?>
    
        <div class="container ">
            
            <div class="row">
                <div class="col-3"></div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="card  bg-light  mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded" >
                     <!-- INICIO DE LA CARTA  -->
                            <div class="card-body ">
                            <div class="container">
                                <div class="row text-center">
                                
                                    <h4 class="card-title ">Login</h4>
                                </div>
                                <div class="row align-items-xl-center">
                                   <div class="col-12 align-items-xl-center"> 
                                        <img class="rounded mx-auto d-block" width="100" height="100" src="https://img.icons8.com/ios-filled/100/user-male-circle.png" alt="user-male-circle"/>
                    
                                </div>
                            </div>   
                        
                                    <div class="container justify-content-center">
                                        <!-- inicio del formulario login-->
                                        <form>
                                          <div class="form-group">
                                            <label for="username"> <h6>Nombre de usuario</h6> </label>
                                            <!-- Input nombre del usuario -->
                                            <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario">
                                          </div>
                                          <div class="form-group">
                                            <label for="password"> <h6> Contraseña </h6></label>
                                            <!-- Input contraseña -->
                                            <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                                          </div>
                                          <div class="col-12 align-items-xl-center"> 
                                            <!-- boton de envio -->
                                          <button  type="submit" class=" btn btn-primary mt-3 rounded mx-auto d-block"><h5>Iniciar sesión </h5></button> 
                                          <a href="registro.php"> <button type="button" class=" btn btn-primary mt-3 rounded mx-auto d-block"> <h5>Registrar</h5></button> </a>
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
