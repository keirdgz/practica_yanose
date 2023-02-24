<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar egresados</title>
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

include_once 'conexionvaca.php';

$id = $_REQUEST['idegresados'];

//if(isser($_REQUEST['id'])) {
    //$idvacantes = $_REQUEST['idvacantes'];

    $query = "update egresados set ano_graduacion='$_REQUEST[ano_graduacion]', inst_pertenece='$_REQUEST[inst_pertenece]', curso='$_REQUEST[curso]', matricula='$_REQUEST[matricula]', cedula='$_REQUEST[cedula]', carrera_tec='$_REQUEST[carrera_tec]', 
    tec_basico='$_REQUEST[tec_basico]', nombre='$_REQUEST[nombre]', apellido='$_REQUEST[apellido]', fecha_nac='$_REQUEST[fecha_nac]', sexo='$_REQUEST[sexo]', direccion='$_REQUEST[direccion]', sector='$_REQUEST[sector]', seccion='$_REQUEST[seccion]',
    municipio='$_REQUEST[municipio]', provincia='$_REQUEST[provincia]', pais_nacionalidad='$_REQUEST[pais_nacionalidad]', telefonoR='$_REQUEST[telefonoR]', telefonoM='$_REQUEST[telefonoM]', licencia_cd='$_REQUEST[licencia_cd]', vehiculo='$_REQUEST[vehiculo]', email='$_REQUEST[email]',
    confirmacion_em='$_REQUEST[confirmacion_em]', contrasena='$_REQUEST[contrasena]', confirmacion_contra='$_REQUEST[confirmacion_contra]', curriculum='$_REQUEST[curriculum]', area_trabajo='$_REQUEST[area_trabajo]', anos_xp='$_REQUEST[anos_xp]', where idegresados='$_REQUEST[idegresados]'";

    mysqli_query($conexionvaca, $query);


?>