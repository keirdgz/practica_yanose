<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar empresa</title>
</head>
<body>
    
<header>

        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
              <a class="navbar-brand">IPISA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Saber Más
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="pasantia.php">Pasantia</a></li>
                      <li><a class="dropdown-item" href="colaboraciones.php">Colaboraciones</a></li>
                      <li><a class="dropdown-item" href="familia.php">Familia</a></li>
                    </ul>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Registrarse
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="egresados.php">Estudiantes y egresados</a></li>
                        <li><a class="dropdown-item" href="formpasantia.php">Empresas</a></li>
                        <li><a class="dropdown-item" href="vacantes1.php">Vacantes</a></li>
                      </ul>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Edición de formularios
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="editaregre.php">Estudiantes y egresados</a></li>
                        <li><a class="dropdown-item" href="editaremp.php">Empresas</a></li>
                        <li><a class="dropdown-item" href="editarvaca.php">Vacantes</a></li>
                      </ul>
                </ul>
              </div>
            </div>
          </nav>

    </header>


</body>
</html>

<?php

include_once 'conexion.php';


$id = $_REQUEST['idempresa'];

    $query = "update empresa set nom_emp='$_REQUEST[nom_emp]', rnc='$_REQUEST[rnc]', ident_emp='$_REQUEST[ident_emp]', dept_formacion='$_REQUEST[dept_formacion]', alcance_emp='$_REQUEST[alcance_emp]', actividad_emp='$_REQUEST[actividad_emp]', 
    industria='$_REQUEST[industria]', tamano_emp='$_REQUEST[tamano_emp]', direccion='$_REQUEST[direccion]', sector='$_REQUEST[sector]', seccion='$_REQUEST[seccion]', municipio='$_REQUEST[municipio]', provincia='$_REQUEST[provincia]', pais_emp='$_REQUEST[pais_emp]', tel_principal='$_REQUEST[tel_principal]',
    tel_directo='$_REQUEST[tel_directo]', email='$_REQUEST[email]', confirmacion_email='$_REQUEST[confirmacion_email]', contrasena='$_REQUEST[contrasena]', confirmacion_contrasena='$_REQUEST[confirmacion_contrasena]', contacto_dentro_emp='$_REQUEST[contacto_dentro_emp]', tel_contacto='$_REQUEST[tel_contacto]', email_contacto='$_REQUEST[email_contacto]' where idempresa='$_REQUEST[idempresa]'";

    mysqli_query($conexion, $query);
 


?>

