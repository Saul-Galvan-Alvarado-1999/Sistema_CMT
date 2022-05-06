<?php
include 'db.php';
$id=$_GET['id'];
$eliminar = "DELETE  FROM empleados WHERE id = '$id'";
$result_eliminar = mysqli_query($conexion, $eliminar);

if ($result_eliminar) {
    header("Location: Admin.php");
} else {
    echo"<script>alert('No se pudo eliminar el registro, intente de nuevo'); window.history.go(-1)</script>";
}

?>


