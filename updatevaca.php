<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Vacantes</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/estilo.css">

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

  <center>
    <h3>Edita la vacante</h3>
  </center>

  <?php

  include_once 'conexionvaca.php';

  $idvacantes = $_REQUEST['id'];

  $sql = "SELECT * FROM vacantes WHERE idvacantes=$idvacantes;";

  $result = mysqli_query($conexionvaca, $sql);
  $resultcheck = mysqli_num_rows($result);


  if ($resultcheck > 0) {

    $row = mysqli_fetch_assoc($result);
    $nom_emp = $row['nombre_empresa'];
    $nom_puest = $row['nombre_puesto'];
    $funcion_puest = $row['funciones_puesto'];
    $sueldo = $row['sueldo'];
    $ubicacion = $row['ubicacion'];
    $tp_contrato = $row['tipo_contrato'];
    $horario = $row['horario'];
    $curricul = $row['correo_curriculum'];
    $p_contacto = $row['persona_contacto'];
    $tel = $row['telefono'];
  } else {
  ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'ID de la vacante no encontrada',
        text: 'Registro no encontrado, Revise los datos introducidos'
      }).then(function() {
        window.location.href = "editarvaca.php"
      })
    </script>

  <?php
  }
  ?>

  <section class="form-egre">

    <form action="actualizarvaca.php" method="POST">
      <input type="text" class="formu" select class="controls" name="idvacantes" placeholder="Id" value="<?php echo $idvacantes ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="nombre_empresa" placeholder="Nombre" value="<?php echo $nom_emp ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="nombre_puesto" placeholder="Puesto" value="<?php echo $nom_puest ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="funciones_puesto" placeholder="Funcion del puesto" value="<?php echo $funcion_puest ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="sueldo" placeholder="Sueldo" value="<?php echo $sueldo ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="ubicacion" placeholder="Ubicacion" value="<?php echo $ubicacion ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="tipo_contrato" placeholder="Tipo de contrato" value="<?php echo $tp_contrato ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="horario" placeholder="Horario" value="<?php echo $horario ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="correo_curriculum" placeholder="Correo curriculum" value="<?php echo $curricul ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="persona_contacto" placeholder="Persona de contacto" value="<?php echo $p_contacto ?>"><br><br>
      <input type="text" class="formu" select class="controls" name="telefono" placeholder="Telefono" value="<?php echo $tel ?>"><br><br>


      <button type="submit" button class="botons" name="update">Editar</button>
  </section>
  </form>
  <div class="container my-5">

    <footer class="text-center text-lg-start" style="background-color: #1f6fc1;">
      <div class="container d-flex justify-content-center py-5">
        <a href="https://www.facebook.com/IPISASDB/"><button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #1b5d9f;">
            <i class="fa-brands fa-facebook"></i>
          </button></a>
        <a href="https://www.instagram.com/ipisasdb/"><button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #1b5d9f;">
            <i class="fa-brands fa-instagram"></i>
          </button></a>
      </div>

      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="inicio.html">IPISA</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/47066a961f.js" crossorigin="anonymous"></script>
</body>

</html>