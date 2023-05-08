<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Buscar</title>



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

  <br>
  <br>

  <main class="container o-container">

    <table class="table">
      <thead>
        <tr>
          <th name="Id">Id</th>
          <th>año graduacion</th>
          <th>Institución a la que pertenece</th>
          <th>Curso</th>
          <th>Matricula</th>
          <th>Cedula</th>
          <th>carrera tecnica</th>
          <th>Tecnico basico</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Fecha de Nacimiento</th>
          <th>Sexo</th>
          <th>Direccion</th>
          <th>Sector</th>
          <th>Seccion</th>
          <th>Municipio</th>
          <th>Provincia</th>
          <th>Pais de Nacionalidad</th>
          <th>TelefonoR</th>
          <th>TelefonoM</th>
          <th>Licencia de Conducir</th>
          <th>Tiene Vehiculo</th>
          <th>Correo</th>
          <th>Confirmacion de Correo</th>
          <th>Contraseña</th>
          <th>Confirmacion de Contraseña</th>
          <th>Curriculum</th>
          <th>Area de Trabajo</th>
          <th>Años de Experiencia</th>

        </tr>
      </thead>
      <?php
      require("conexionvaca.php");

      $Nombre = $_REQUEST["nombre"] ?? null;

      $query = "SELECT * FROM egresados WHERE nombre LIKE '%$Nombre%' or idegresados='$Nombre'";
      $data = mysqli_query($conexionvaca, $query);
      $total = mysqli_num_rows($data);

      if ($total != 0) {
        while ($row = mysqli_fetch_assoc($data)) {

          echo

          "<tr>
            <td>" . $row['idegresados'] . "</td>
            <td>" . $row['ano_graduacion'] . "</td>
            <td>" . $row['inst_pertenece'] . "</td>
            <td>" . $row['curso'] . "</td>
            <td>" . $row['matricula'] . "</td>
            <td>" . $row['cedula'] . "</td>
            <td>" . $row['carrera_tec'] . "</td>
            <td>" . $row['tec_basico'] . "</td>
            <td>" . $row['nombre'] . "</td>
            <td>" . $row['apellido'] . "</td>
            <td>" . $row['fecha_nac'] . "</td>
            <td>" . $row['sexo'] . "</td>
            <td>" . $row['direccion'] . "</td>
            <td>" . $row['sector'] . "</td>
            <td>" . $row['seccion'] . "</td>
            <td>" . $row['municipio'] . "</td>
            <td>" . $row['provincia'] . "</td>
            <td>" . $row['pais_nacionalidad'] . "</td>
            <td>" . $row['telefono'] . "</td>
            <td>" . $row['licencia_cd'] . "</td>
            <td>" . $row['vehiculo'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['confirmacion_em'] . "</td>
            <td>" . $row['contrasena'] . "</td>
            <td>" . $row['confirmacion_contra'] . "</td>
            <td>" . $row['anos_xp'] . "</td>
            <td>" . $row['curriculum'] . "</td>
            <td>" . $row['area_trabajo'] . "</td>
        <td> <a href='eliminaregre.php?id=$row[idegresados]'>Borrar</td>
        </tr>";;
        }
      } else {
      ?>
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Nombre o ID invalido',
            text: 'Registro no encontrado, Revise los datos introducidos'
          }).then(function() {
            window.location.href = "editaregre.php"
          })
        </script>

      <?php
      }
      ?>

    </table>
  </main>
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
        <a class="text-white" href="inicio.php">IPISA</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/47066a961f.js" crossorigin="anonymous"></script>
</body>

</html>