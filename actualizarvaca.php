<?php

include_once 'conexionvaca.php';

$id = $_REQUEST['idvacantes'];

//if(isser($_REQUEST['id'])) {
    //$idvacantes = $_REQUEST['idvacantes'];

    $query = "update vacantes set nombre_empresa='$_REQUEST[nombre_empresa]', nombre_puesto='$_REQUEST[nombre_puesto]', funciones_puesto='$_REQUEST[funciones_puesto]', sueldo='$_REQUEST[sueldo]', ubicacion='$_REQUEST[ubicacion]', tipo_contrato='$_REQUEST[tipo_contrato]', 
    horario='$_REQUEST[horario]', correo_curriculum='$_REQUEST[correo_curriculum]', persona_contacto='$_REQUEST[persona_contacto]', telefono='$_REQUEST[telefono]' where idvacantes='$_REQUEST[idvacantes]'";

    mysqli_query($conexionvaca, $query);


?>
