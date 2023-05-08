<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empresas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/form.css">
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

  <section class="form-egre">

    <center>
      <h1>Empresa</h1>
    </center>

    <form action=formpasantia.php method="POST">


      <p>Nombre de la empresa:<br>
        <input type="text" class="formu" name="nom_emp" size="50">
      </p>

      <p>RNC:<br>
        <input type="text" class="formu" name="rnc" size="50">
      </p>

      <p>¿Desea que se conozca la identidad de su empresa?<br>
        <input type="radio" class="formu" name="ident_emp" value="Si">Si
        <input type="radio" class="formu" name="ident_emp" value="No">No
      </p>

      <p>¿Dispone su empresa de un Departamento de Formación dentro de la empresa?<br>
        <input type="radio" class="formu" name="dept_formacion" value="Si">Si
        <input type="radio" class="formu" name="dept_formacion" value="No">No
      </p>

      <p>Alcance de la empresa:<br>
        <input type="radio" class="formu" name="alcance_emp" value="Nacional/Local">Nacional/Local
        <input type="radio" class="formu" name="alcance_emp" value="Multinacional">Multinacional
      </p>

      <p>Actividad económica a la que se dedica la empresa:<br>
        <textarea class="formu" name="actividad_emp"></textarea>
      </p>

      <p>Industria: <br>
        <SELECT NAME="industria" class="formu">
          <OPTION VALUE="agricola">Agrícola</option>
          <OPTION VALUE="comercio">Comercio</option>
          <OPTION VALUE="ganaderia">Ganadería</option>
          <OPTION VALUE="extraccion">Industria de Extracción</option>
          <OPTION VALUE="manufactura">Industria de Manufactura</option>
          <OPTION VALUE="servicio">Servicio</option>
          <OPTION VALUE="otra">Otra</option>
        </SELECT>
      </p>

      <p>Tamaño de la empresa:<br>
        <SELECT NAME="tamano_emp" class="formu">
          <OPTION VALUE="micro">Micro</option>
          <OPTION VALUE="pequeña">Pequeña</option>
          <OPTION VALUE="mediana">Mediana</option>
          <OPTION VALUE="grande">Grande</option>
        </SELECT>
      </p>

      <p>Dirección:<br>
        <input type="text" class="formu" name="direccion" size="50">
      </p>

      <p>Sector:<br>
        <input type="text" class="formu" name="sector" size="50">
      </p>

      <p>Sección:
        <input type="text" class="formu" name="seccion" size="50">
      </p>

      <p>Municipio:<br>
        <input type="text" class="formu" name="municipio" size="50">
      </p>

      <p>Provincia:<br>
        <SELECT NAME="provincia" class="formu">
          <OPTION VALUE="Azua">Azua</option>
          <OPTION VALUE="bahoruco">Bahoruco</option>
          <OPTION VALUE="barahona">Barahona</option>
          <OPTION VALUE="dajabon">Dajabón</option>
          <OPTION VALUE="distrito">Distrito Nacional</option>
          <OPTION VALUE="duarte">Duarte</option>
          <OPTION VALUE="eliaspiña">Elias Piña</option>
          <OPTION VALUE="el seibo">El Seibo</option>
          <OPTION VALUE="espaillat">Espaillat</option>
          <OPTION VALUE="hatomayor">Hato Mayor</option>
          <OPTION VALUE="independencia">Independencia</option>
          <OPTION VALUE="laaltagracia">La Altagracia</option>
          <OPTION VALUE="laromana">La Romana</option>
          <OPTION VALUE="lavega">La Vega</option>
          <OPTION VALUE="mariatri">María Trinidad Sánchez</option>
          <OPTION VALUE="monseñornouel">Monseñor Nouel</option>
          <OPTION VALUE="montecristi">Monte Cristi</option>
          <OPTION VALUE="monteplata">Monte Plata</option>
          <OPTION VALUE="pedernales">Pedernales</option>
          <OPTION VALUE="peravia">Peravia</option>
          <OPTION VALUE="puertoplata">Puerto Plata</option>
          <OPTION VALUE="salcedo">Salcedo</option>
          <OPTION VALUE="samana">Samaná</option>
          <OPTION VALUE="sanchezramirez">Sánchez Ramírez</option>
          <OPTION VALUE="sancristobal">San Cristobal</option>
          <OPTION VALUE="sanjosedeocoa">San José de Ocoa</option>
          <OPTION VALUE="sanjuan">San Juan</option>
          <OPTION VALUE="sanpedro">San Pedro de Macorís</option>
          <OPTION VALUE="santiago">Santiago</option>
          <OPTION VALUE="santiagorodriguez">Santiago Rodríguez</option>
          <OPTION VALUE="santodomingo">Santo Domingo</option>
          <OPTION VALUE="valverde">Valverde</option>
        </SELECT>
      </p>


      <p>País donde opera la empresa:<br>
        <SELECT NAME="pais_emp" class="formu">
          <OPTION VALUE="Repdom">República Dominicana</option>
        </SELECT>
      </p>

      <p>Teléfono Principal:<br>
        <input type="text" class="formu" name="tel_principal" size="50">
      </p>

      <p>Teléfono Directo:<br>
        <input type="text" class="formu" name="tel_directo" size="50">
      </p>

      <p>Email:<br>
        <input type="email" class="formu" name="email" size="50">
      </p>

      <p>Confirme su Email:<br>
        <input type="text" class="formu" name="confirmacion_email" size="50">
      </p>

      <p>Escribe una contraseña:<br>
        <input type="password" class="formu" name="contrasena" size="50">
      </p>

      <p>Confirme su Contraseña:<br>
        <input type="password" class="formu" name="confirmacion_contrasena" size="50">
      </p>

      <p>Contacto dentro de la empresa:<br>
        <input type="text" class="formu" name="contacto_dentro_emp" size="50">
      </p>

      <p>Teléfono y Extensión:<br>
        <input type="text" class="formu" name="tel_contacto">
      </p>

      <p>Correo:<br>
        <input type="text" class="formu" name="email_contacto" id=correo required data-error="Por favor, ingrese su email.">
      </p>

      <input class="botons" type="submit" value="Enviar">

    </form>

    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/47066a961f.js" crossorigin="anonymous"></script>

</body>

<br>

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


</html>

<?php
require "conexionvaca.php";
insertar($conexionvaca);
function insertar($conexionvaca)
{

  $nom_emp = $_POST['nom_emp'];
  $rnc = $_POST['rnc'];
  $ident_emp = $_POST['ident_emp'];
  $dept_formacion = $_POST['dept_formacion'];
  $alcance_emp = $_POST['alcance_emp'];
  $actividad_emp = $_POST['actividad_emp'];
  $industria = $_POST['industria'];
  $tamano_emp = $_POST['tamano_emp'];
  $direccion = $_POST['direccion'];
  $sector = $_POST['sector'];
  $seccion = $_POST['seccion'];
  $municipio = $_POST['municipio'];
  $provincia = $_POST['provincia'];
  $pais_emp = $_POST['pais_emp'];
  $tel_principal = $_POST['tel_principal'];
  $tel_directo = $_POST['tel_directo'];
  $email = $_POST['email'];
  $confirmacion_email = $_POST['confirmacion_email'];
  $contrasena = $_POST['contrasena'];
  $confirmacion_contrasena = $_POST['confirmacion_contrasena'];
  $contacto_dentro_emp = $_POST['contacto_dentro_emp'];
  $tel_contacto = $_POST['tel_contacto'];
  $email_contacto = $_POST['email_contacto'];


  $consulta = "INSERT INTO empresa(nom_emp, rnc, ident_emp, dept_formacion, alcance_emp, actividad_emp, industria,
    tamano_emp, direccion, sector, seccion, municipio, provincia, pais_emp, tel_principal, tel_directo,
    email, confirmacion_email, contrasena, confirmacion_contrasena, contacto_dentro_emp, tel_contacto, email_contacto) 
    VALUES ('$nom_emp','$rnc','$ident_emp','$dept_formacion','$alcance_emp','$actividad_emp','$industria','$tamano_emp','$direccion','$sector','$seccion',
    '$municipio','$provincia','$pais_emp','$tel_principal','$tel_directo','$email','$confirmacion_email','$contrasena', '$confirmacion_contrasena', '$contacto_dentro_emp','$tel_contacto','$email_contacto')";



  mysqli_query($conexionvaca, $consulta);
  mysqli_close($conexionvaca);
}

?>