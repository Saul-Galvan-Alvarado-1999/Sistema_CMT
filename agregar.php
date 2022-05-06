<?php
include 'db.php';
//$id=$_POST['id'];
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $codigo_postal = $_POST["codigo_postal"];
    $delegacion_o_municipio = $_POST["delegacion_o_municipio"];
    $estado = $_POST["estado"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $sexo = $_POST["sexo"];
    $curp = $_POST["curp"];
    $nss = $_POST["nss"];
    $doc_curp = addslashes(file_get_contents($_FILES['doc_curp']['tmp_name']));
    $doc_comprobante = addslashes(file_get_contents($_FILES["doc_comprobante"]['tmp_name']));
    $doc_nss = addslashes(file_get_contents($_FILES["doc_nss"]['tmp_name']));
    $doc_ine = addslashes(file_get_contents($_FILES["doc_ine"]['tmp_name']));
    $foto = addslashes(file_get_contents($_FILES["foto"]['tmp_name']));
    //Preparamos la orden SQL
    $consulta = "INSERT INTO empleados
    (nombre, apellido_paterno, apellido_materno, correo, celular, telefono, direccion, codigo_postal,
     delegacion_o_municipio, estado, fecha_nacimiento, sexo, curp, nss, doc_curp, doc_comprobante, doc_nss, doc_ine, foto) 
    VALUES ('$nombre','$apellido_paterno','$apellido_materno','$correo','$celular','$telefono','$direccion',
    '$codigo_postal','$delegacion_o_municipio','$estado','$fecha_nacimiento','$sexo','$curp','$nss','$doc_curp',
    '$doc_comprobante','$doc_nss','$doc_ine','$foto')";

    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado){
        header("Location: credencial.php");
        ?>
        
        <?php
    }else{
        ?>
        <h3>Error</h3>
        <?php
    }
?>