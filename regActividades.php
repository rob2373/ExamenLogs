<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/user-male-circle.png" type="image/x-icon">
     <title>Document</title>
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./css/size.css">
 
 </head>
 <body>
 <?php include('includes/nav.php') ?>


   <div class="container mb-3">
    <div class="row ">
        <div class="col-12 text-center">
            <h1 class="text-light">Registro de actividades</h1>
        </div>
    </div>
   </div>

   
   <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="table-responsive">
                    <table id="tabla" class="table">
  <thead >
    <tr>
      <th class="bg-dark text-light" scope="col">#Id</th>
      <th class="bg-dark text-light" scope="col">Acción</th>
      <th class="bg-dark text-light" scope="col">Descripcion</th>
      <th class="bg-dark text-light" scope="col">Ip</th>
      <th class="bg-dark text-light" scope="col">Fecha</th>
      

    </tr>
  </thead>
  <tbody>

  <?php
  include('conexion.php');
  $con = conexion();
  $consulta = "SELECT * FROM actividades order by id desc";
  $respuesta = mysqli_query($con, $consulta);
    while ($row = mysqli_fetch_array($respuesta)) {?>
    <tr>
      
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['accion'];?></td>
      <td><?php echo $row['descripcion'];?></td>
      <td><?php echo $row['Ip'];?></td>
      <td><?php echo $row['fecha'];?></td>

      </tr>

    <?php } ?>
   
  </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
 </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </html>