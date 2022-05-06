<?php
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<title>Administración de Empleados CMT</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" type="image/png" href="images/estadialogo.png" />

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />

  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" type="text/css" href="css/util.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="db.php">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="robots" content="noindex, follow" />
</head>

<body style="background-color:#c4d3f6;">
  <a class="boton_personalizado" href="logout.php">Cerrar Sesión</a>
  <div align="center">
    <img src="images/estadialogo.png" alt="CMT" />
  </div>
  <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table-responsive" aling="center">
          <table class="table">
            <thead class="thead-dark">
              <tr>
              <th scope="col" style="text-align: center;">ID</th>
                <th scope="col" style="text-align: center;">Nombre del Trabajador</th>
                <th scope="col" style="text-align: center;">CURP</th>
                <th scope="col" style="text-align: center;">Comprobante de Domicilio</th>
                <th scope="col" style="text-align: center;">NSS</th>
                <th scope="col" style="text-align: center;">INE</th>
                <th scope="col" style="text-align: center;">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT id, nombre, apellido_paterno, apellido_materno, doc_curp, doc_comprobante, doc_nss, doc_ine from empleados";
              $result = mysqli_query($conexion, $sql);
              while ($mostrar = mysqli_fetch_array($result)) {
              ?>

                <?php
                foreach ($result as $row)
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nombre'] . ' ' . $row['apellido_paterno'] . ' ' . $row['apellido_materno']; ?></td>
                  <td><embed src="data:application/pdf;base64,<?php echo base64_encode($row['doc_curp']); ?>" /></td>
                  <td><embed src="data:application/pdf;base64,<?php echo base64_encode($row['doc_comprobante']); ?>" /></td>
                  <td><embed src="data:application/pdf;base64,<?php echo base64_encode($row['doc_nss']); ?>" /></td>
                  <td><embed src="data:application/pdf;base64,<?php echo base64_encode($row['doc_ine']); ?>" /></td>
                  <td>
                    <a href="borrar.php?id=<?php echo $row['id']; ?>" class="table--item--link">Eliminar</a>
                  <script src="confirmacion.js"></script></td>
                </tr>
                
              <?php
              }
              ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<footer>
  <div align="center">
    <p class="copyright-agileinfo"> &copy; 2022 Elaboro Ing Saúl Galván Alvarado</p>
  </div>

</footer>

</html>