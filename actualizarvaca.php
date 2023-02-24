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

    $id = $_POST['id_empresa'];
    $nom_emp = $_POST['nombre_empresa'];
    $nom_puest = $_POST['nombre_puesto'];
    $funcion_puest = $_POST['funciones_puesto'];
    $sueldo = $_POST['sueldo'];
    $ubicacion = $_POST['ubicacion'];
    $tp_contrato = $_POST['tipo_contrato'];
    $horario = $_POST['horario'];
    $curricul = $_POST['correo_curriculum'];
    $p_contacto = $_POST['persona_contacto'];
    $tel = $_POST['telefono'];

//if(isser($_REQUEST['id'])) {
    //$idvacantes = $_REQUEST['idvacantes'];

    $query = "update vacantes set nombre_empresa='$nom_emp', nombre_puesto='$nom_puest', funciones_puesto='$funcion_puest', sueldo='$sueldo', ubicacion='$ubicacion', tipo_contrato='$tp_contrato', 
    horario='$horario', correo_curriculum='$curricul', persona_contacto='$p_contacto', telefono='$tel' where idvacantes='$id'";

    mysqli_query($conexionvaca, $query);
    echo 'Se actualizó correctamente'

    ?>

