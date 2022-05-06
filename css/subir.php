<?php
include 'db.php';

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
    $doc_curp = $_POST["doc_curp"];
    $doc_comprobante = $_POST["doc_comprobante"];
    $doc_nss = $_POST["doc_nss"];
    $doc_ine = $_POST["doc_ine"];
    $foto = $_POST["foto"];
    //Preparamos la orden SQL
    $consulta = "INSERT INTO mensajes
    ('nombre','apellido_paterno','apellido_materno','correo','celular','telefono','direccion','codigo_postal','delegacion_o_municipio','estado','fecha_nacimiento','sexo','curp','nss','doc_curp','doc_comprobante','doc_nss','doc_ine','foto') 
    VALUES ('$nombre','$apellido_paterno','$apellido_materno','$correo','$celular','$telefono','$direccion',
    '$codigo_postal','$delegacion_o_municipio','$estado','$fecha_nacimiento','$sexo','$curp','$nss','$doc_curp',
    '$doc_comprobante','$doc_nss','$doc_ine','$foto')
    ";
     
?>