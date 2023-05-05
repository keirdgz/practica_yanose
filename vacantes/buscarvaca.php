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
                <li><a class="dropdown-item" href="egresados.php">Estudiantes y egresados</a></li>
                <li><a class="dropdown-item" href="formpasantia.php">Empresas</a></li>
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
      <th name="ID">ID</th>
      <th>Empresa</th>
      <th>Puesto</th>
      <th>FuncionP</th>
      <th>Sueldo</th>
      <th>Ubicacion</th>
      <th>Contrato</th>
      <th>Horario</th>
      <th>Correo</th>
      <th>Contacto</th>
      <th>Telefono</th>
      <th>Borrar</th>

    </tr>
  </thead>

  <?php
require("conexionvaca.php");

$nombre_empresa= $_REQUEST["nombre"];

$query= "SELECT * FROM vacantes WHERE nombre_empresa LIKE '%$nombre_empresa%' or idvacantes='$nombre_empresa'";
$data = mysqli_query($conexionvaca, $query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {

        echo
   
        "<tr>
        <td>" . $row['idvacantes'] . "</td>
        <td>" . $row['nombre_empresa'] . "</td>
        <td>" . $row['nombre_puesto'] . "</td>
        <td>" . $row['funciones_puesto'] . "</td>
        <td>" . $row['sueldo'] . "</td>
        <td>" . $row['ubicacion'] . "</td>
        <td>" . $row['tipo_contrato'] . "</td>
        <td>" . $row['horario'] . "</td>
        <td>" . $row['correo_curriculum'] . "</td>
        <td>" . $row['persona_contacto'] . "</td>
        <td>" . $row['telefono'] . "</td>
        <td> <a href='eliminarvaca.php?id=$row[idvacantes]'>Borrar</td>
        </tr>";;

    }
}   else{
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Nombre o ID invalido',
            text: 'Registro no encontrado, Revise los datos introducidos'
        }).then(function () {
            window.location.href = "editarvaca.php"
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
      <a class="text-white" href="inicio.html">IPISA</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/47066a961f.js" crossorigin="anonymous"></script>
</body>
</html>