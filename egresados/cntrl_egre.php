<?php
    $conexionE = mysqli_connect('localhost', 'root', 'HPalmer12', 'ipisa')or die(mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class = "tabla">

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

    <div class = "container">
    <div class="table-responsive">
    <table class = "table">
        <caption>Control Egresados</caption>
        <tr>
            <th>Id</th>
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
        <?php
        require("conexionvaca.php");

        $sql = "SELECT * from egresados";
        $result = mysqli_query($conexionvaca, $sql);

        while($mostrar=mysqli_fetch_array($result)){

        ?>
        <tr>
            <td data-label = "egres"><?php echo $mostrar ['idegresados']?></td>
            <td data-label = "egres"><?php echo $mostrar ['ano_graduacion']?></td>
            <td data-label = "egres"><?php echo $mostrar ['inst_pertenece']?></td>
            <td data-label = "egres"><?php echo $mostrar ['curso']?></td>
            <td data-label = "egres"><?php echo $mostrar ['matricula']?></td>
            <td data-label = "egres"><?php echo $mostrar ['cedula']?></td>
            <td data-label = "egres"><?php echo $mostrar ['carrera_tec']?></td>
            <td data-label = "egres"><?php echo $mostrar ['tec_basico']?></td>
            <td data-label = "egres"><?php echo $mostrar ['nombre']?></td>
            <td data-label = "egres"><?php echo $mostrar ['apellido']?></td>
            <td data-label = "egres"><?php echo $mostrar ['fecha_nac']?></td>
            <td data-label = "egres"><?php echo $mostrar ['sexo']?></td>
            <td data-label = "egres"><?php echo $mostrar ['direccion']?></td>
            <td data-label = "egres"><?php echo $mostrar ['sector']?></td>
            <td data-label = "egres"><?php echo $mostrar ['seccion']?></td>
            <td data-label = "egres"><?php echo $mostrar ['municipio']?></td>
            <td data-label = "egres"><?php echo $mostrar ['provincia']?></td>
            <td data-label = "egres"><?php echo $mostrar ['pais_nacionalidad']?></td>
            <td data-label = "egres"><?php echo $mostrar ['telefonoR']?></td>
            <td data-label = "egres"><?php echo $mostrar ['telefonoM']?></td>
            <td data-label = "egres"><?php echo $mostrar ['licencia_cd']?></td>
            <td data-label = "egres"><?php echo $mostrar ['vehiculo']?></td>
            <td data-label = "egres"><?php echo $mostrar ['email']?></td>
            <td data-label = "egres"><?php echo $mostrar ['confirmacion_em']?></td>
            <td data-label = "egres"><?php echo $mostrar ['contrasena']?></td>
            <td data-label = "egres"><?php echo $mostrar ['confirmacion_contra']?></td>
            <td data-label = "egres"><?php echo $mostrar ['curriculum']?></td>
            <td data-label = "egres"><?php echo $mostrar ['area_trabajo']?></td>
            <td data-label = "egres"><?php echo $mostrar ['anos_xp']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
    </div>

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
</body>
</html>