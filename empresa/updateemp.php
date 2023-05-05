<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresas</title>
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

    <center><h3>Edita la vacante</h3></center>

<?php

include_once 'conexion.php';

$idempresa = $_REQUEST['id'];

$sql = "SELECT * FROM empresa WHERE idempresa=$idempresa;";

$result = mysqli_query($conexion, $sql);
$resultcheck = mysqli_num_rows($result);


if($resultcheck > 0){
    $row = mysqli_fetch_assoc($result);
    $nom_emp = $row['nom_emp'];
    $rnc = $row['rnc'];
    $ident_emp = $row['ident_emp'];
    $dept_formacion = $row['dept_formacion'];
    $alcance_emp = $row['alcance_emp'];
    $actividad_emp = $row['actividad_emp'];
    $industria = $row['industria'];
    $tamano_emp = $row['tamano_emp'];
    $direccion = $row['direccion'];
    $sector = $row['sector'];
    $seccion = $row['seccion'];
    $municipio = $row['municipio'];
    $provincia = $row['provincia'];
    $pais_emp = $row['pais_emp'];
    $tel_principal = $row['tel_principal'];
    $tel_directo = $row['tel_directo'];
    $email = $row['email'];
    $confirmacion_email = $row['confirmacion_email'];
    $contrasena = $row['contrasena'];
    $confirmacion_contrasena = $row['confirmacion_contrasena'];
    $contacto_dentro_emp = $row['contacto_dentro_emp'];
    $tel_contacto = $row['tel_contacto'];
    $email_contacto = $row['email_contacto'];
}
else {
  ?>

    <script>
        Swal.fire({
            icon: 'error',
            title: 'Nombre o ID invalido',
            text: 'Registro no encontrado, Revise los datos introducidos'
        }).then(function () {
            window.location.href = "editaremp.php"
        })
    </script>


  </script>

  <?php
}
?>

<section class="form-egre">

<form action="actualizaremp.php" method="POST">
<input type="text"  class="formu" select class="controls" name="idempresa" placeholder="id" value="<?php echo $idempresa?>"readonly><br><br>
    <input type="text"  class="formu" select class="controls" name="nom_emp" placeholder="Nombre" value="<?php echo $nom_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="rnc" placeholder="RNC" value="<?php echo $rnc?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="ident_emp" placeholder="Identificación" value="<?php echo $ident_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="dept_formacion" placeholder="Departamento de Formación" value="<?php echo $dept_formacion?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="alcance_emp" placeholder="Alcance" value="<?php echo $alcance_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="actividad_emp" placeholder="Actividad" value="<?php echo $actividad_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="industria" placeholder="Industria" value="<?php echo $industria?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="tamano_emp" placeholder="Tamaño de la empresa" value="<?php echo $tamano_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="direccion" placeholder="Dirección" value="<?php echo $direccion?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="sector" placeholder="Sector" value="<?php echo $sector?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="seccion" placeholder="Sección" value="<?php echo $seccion?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="municipio" placeholder="Municipio" value="<?php echo $municipio?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="provincia" placeholder="Provincia" value="<?php echo $provincia?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="pais_emp" placeholder="País" value="<?php echo $pais_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="tel_principal" placeholder="Teléfono Principal" value="<?php echo $tel_principal?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="tel_directo" placeholder="Teléfono directo" value="<?php echo $tel_directo?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="email" placeholder="Email" value="<?php echo $email?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="confirmacion_email" placeholder="Confirmación de Email" value="<?php echo $confirmacion_email?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="contrasena" placeholder="Contraseña" value="<?php echo $contrasena?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="confirmacion_contrasena" placeholder="Confirmación de contraseña" value="<?php echo $confirmacion_contrasena?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="contacto_dentro_emp" placeholder="Contacto dentro de la Empresa" value="<?php echo $contacto_dentro_emp?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="tel_contacto" placeholder="Teléfono del contacto" value="<?php echo $tel_contacto?>"><br><br>
    <input type="text"  class="formu" select class="controls" name="email_contacto" placeholder="Email del contacto" value="<?php echo $email_contacto?>"><br><br>





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