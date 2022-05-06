<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion = mysqli_connect("localhost","root","","cmt","3307");

$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['id_rol'] == 1) {
    header("location:Admin.php");
} else
    if ($filas['id_rol'] == 2) {
    header("location:Empleados.html");
} else {
?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">Error de Autentificación</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
