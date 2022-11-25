<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de formulario con conexión php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="empresa.css">
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
                <li><a class="dropdown-item" href="">Estudiantes y egresados</a></li>
                <li><a class="dropdown-item" href="">Empresas</a></li>
                <li><a class="dropdown-item" href="vacantes1.php">Vacantes</a></li>
              </ul>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Edición de formularios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">Estudiantes y egresados</a></li>
                <li><a class="dropdown-item" href="">Empresas</a></li>
                <li><a class="dropdown-item" href="editarvaca.php">Vacantes</a></li>
              </ul>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="iniciosesion.php">Inicia Sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>

<section class="form-egre">
    <h1>Empresa</h1>
<form enctype="multipart/form-data" method="POST" action=formpasantia.php>


<label>Nombre de la empresa:</label>
<input type="text" select class="controls" name="nom_emp">
<br>
<br>

<label>RNC:</label>
<input type="text" select class="controls" name="rnc">
<br>
<br>


<label>¿Desea que se conozca la identidad de su empresa?</label><br>
<INPUT TYPE="radio" select class="controls" NAME="ident_emp" VALUE="si">Si

<INPUT TYPE="radio"  select class="controls" NAME="ident_emp" VALUE="no">No
<br>
<br>
<br>

<label>¿Dispone su empresa de un Departamento de Formación dentro de la empresa?</label><br>
<INPUT TYPE="radio" select class="controls" NAME="dept_formacion" VALUE="si">Si

<INPUT TYPE="radio" select class="controls" NAME="dept_formacion" VALUE="no">No
<br>
<br>

<label>Alcance de la empresa:</label><br>
<INPUT TYPE="radio" select class="controls" NAME="alcance_emp" VALUE="nacional/local">Nacional/Local

<INPUT TYPE="radio" select class="controls" NAME="alcance_emp" VALUE="multinacional">Multinacional
<br>
<br>
<br>

<label>Actividad económica a la que se dedica la empresa:</label><br><br>
<textarea class="formu" select class="controls" name="actividad_emp"></textarea>
<br>
<br>
<br>

<label>Industria</label>
<br><br>
<SELECT NAME="industria" select class="controls">
<OPTION VALUE="agricola">Agrícola</option>
<OPTION VALUE="comercio">Comercio</option>
<OPTION VALUE="ganaderia">Ganadería</option>
<OPTION VALUE="extraccion">Industria de Extracción</option>
<OPTION VALUE="manufactura">Industria de Manufactura</option>
<OPTION VALUE="servicio">Servicio</option>
<OPTION VALUE="otra">Otra</option>
</SELECT>
<br>
<br>

<label>Tamaño de la empresa:</label>
<br><br>
<SELECT NAME="tamano_emp" select class="controls">
<OPTION VALUE="micro">Micro</option>
<OPTION VALUE="pequeña">Pequeña</option>
<OPTION VALUE="mediana">Mediana</option>
<OPTION VALUE="grande">Grande</option>
</SELECT>
<br>
<br>

<label>Dirección:</label>
<input type="text" select class="controls" name="direccion">
<br>
<br>

<label>Sector:</label>
<input type="text" select class="controls" name="sector">
<br>
<br>

<label>Sección:</label>
<input type="text" select class="controls" name="seccion">
<br>
<br>

<label>Municipio:</label>
<input type="text" select class="controls" name="municipio">
<br>
<br>

<label>Provincia:</label>
<br><br>
<SELECT NAME="provincia" select class="controls">
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
<br>
<br>

<label>País donde opera la empresa:</label>
<br><br>

<SELECT NAME="pais_emp" select class="controls">
<OPTION VALUE="Repdom">República Dominicana</option>

</SELECT>
<br>
<br>

<label>Teléfono Principal:</label>
<input type="text" select class="controls" name="tel_principal">
<br>
<br>

<label>Teléfono Directo:</label>
<input type="text" select class="controls" name="tel_directo">
<br>
<br>

<label>Email:</label>
<input type="email" select class="controls" name="email">
<br>
<br>

<label>Confirme su Email:</label>
<input type="text" select class="controls" name="confirmacion_email">
<br>
<br>

<label>Escribe una contraseña:</label>
<input type="password" select class="controls" name="contrasena">
<br>
<br>

<label>Confirme su Contraseña:</label>
<input type="password" select class="controls" name="confirmacion_contrasena">
<br>
<br>

<label>Contacto dentro de la empresa:</label>
<input type="text" select class="controls" name="contacto_dentro_emp">
<br>
<br>

<label>Teléfono y Extensión:</label>
<input type="text" select class="controls" name="tel_contacto">
<br>
<br>

<label>Correo:</label>
<input type="text" select class="controls" name="email_contacto" id=correo required data-error="Por favor, ingrese su email." placeholder class="form-control" >
<br>
<br>

<input class="botons" type="submit" value="Aceptar">

<br>
<br>

</form>

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

<?php
 require "conexion.php";
 
 function insertar ($conexion) {
    
    $nom_emp = $_POST['nom_emp']?? null;
    $rnc = $_POST['rnc']?? null;
    $ident_emp = $_POST['ident_emp']?? null;
    $dept_formacion = $_POST['dept_formacion']?? null;
    $alcance_emp = $_POST['alcance_emp']?? null;
    $actividad_emp = $_POST['actividad_emp']?? null;
    $industria = $_POST['industria']?? null;
    $tamano_emp = $_POST['tamano_emp']?? null;
    $direccion = $_POST['direccion']?? null;
    $sector = $_POST['sector']?? null;
    $seccion = $_POST['seccion']?? null;
    $municipio = $_POST['municipio']?? null;
    $provincia = $_POST['provincia']?? null;
    $pais_emp = $_POST['pais_emp']?? null;
    $tel_principal = $_POST['tel_principal']?? null;
    $tel_directo = $_POST['tel_directo']?? null;
    $email = $_POST['email']?? null;
    $confirmacion_email = $_POST['confirmacion_email']?? null;
    $contrasena = $_POST['contrasena']?? null;
    $confirmacion_contrasena = $_POST['confirmacion_contrasena']?? null;
    $contacto_dentro_emp = $_POST['contacto_dentro_emp']?? null;
    $tel_contacto = $_POST['tel_contacto']?? null;
    $email_contacto = $_POST['email_contacto']?? null;


    $consulta = "INSERT INTO empresa(nom_emp, rnc, ident_emp, dept_formacion, alcance_emp, actividad_emp, industria,
    tamano_emp, direccion, sector, seccion, municipio, provincia, pais_emp, tel_principal, tel_directo,
    email, confirmacion_email, contrasena, confirmacion_contrasena, contacto_dentro_emp, tel_contacto, email_contacto) VALUES ('$nom_emp','$rnc','$ident_emp','$dept_formacion','$alcance_emp','$actividad_emp','$industria','$tamano_emp','$direccion','$sector','$seccion','$municipio','$provincia','$pais_emp','$tel_principal','$tel_directo','$email','$confirmacion_email','$contrasena', '$confirmacion_contrasena', '$contacto_dentro_emp','$tel_contacto','$email_contacto')";



mysqli_query($conexion, $consulta);
mysqli_close($conexion);

}
insertar($conexion);
?>