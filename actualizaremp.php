
<?php

include_once 'conexion.php';


$id = $_REQUEST['idempresa'];

    $query = "update empresa set nom_emp='$_REQUEST[nom_emp]', rnc='$_REQUEST[rnc]', ident_emp='$_REQUEST[ident_emp]', dept_formacion='$_REQUEST[dept_formacion]', alcance_emp='$_REQUEST[alcance_emp]', actividad_emp='$_REQUEST[actividad_emp]', 
    industria='$_REQUEST[industria]', tamano_emp='$_REQUEST[tamano_emp]', direccion='$_REQUEST[direccion]', sector='$_REQUEST[sector]', seccion='$_REQUEST[seccion]', municipio='$_REQUEST[municipio]', provincia='$_REQUEST[provincia]', pais_emp='$_REQUEST[pais_emp]', tel_principal='$_REQUEST[tel_principal]',
    tel_directo='$_REQUEST[tel_directo]', email='$_REQUEST[email]', confirmacion_email='$_REQUEST[confirmacion_email]', contrasena='$_REQUEST[contrasena]', confirmacion_contrasena='$_REQUEST[confirmacion_contrasena]', contacto_dentro_emp='$_REQUEST[contacto_dentro_emp]', tel_contacto='$_REQUEST[tel_contacto]', email_contacto='$_REQUEST[email_contacto]' where idempresa='$_REQUEST[idempresa]'";

    mysqli_query($conexion, $query);
 


?>

