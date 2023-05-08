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
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Saber Más</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pasantia.php">Pasantia</a></li>
                                <li><a class="dropdown-item" href="colaboraciones.php">Colaboraciones</a></li>
                                <li><a class="dropdown-item" href="familia.php">Familia</a></li>
                            </ul>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registrarse</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="egresados.php">Estudiantes y egresados</a></li>
                                <li><a class="dropdown-item" href="formpasantia.php">Empresas</a></li>
                                <li><a class="dropdown-item" href="vacantes1.php">Vacantes</a></li>
                            </ul>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Edición de formularios</a>
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
        <h3>Edita los Egresados</h3>
    </center>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include_once 'conexionvaca.php';

    $idegresados = $_REQUEST['id'];

    $sql = "SELECT * FROM egresados WHERE idegresados = $idegresados;";

    $result = mysqli_query($conexionvaca, $sql);
    $resultcheck = mysqli_num_rows($result);


    if ($resultcheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $AnoGraduacion = $row['AnoGraduacion'];
        $inst_pertenece = $row['Institución'];
        $curso = $row['Curso'];
        $matricula = $row['Matricula'];
        $cedula = $row['Cedula'];
        $carrera_tec = $row['Carrera'];
        $tec_basico = $row['tecnico'];
        $nombre = $row['Nombres'];
        $apellido = $row['Apellidos'];
        $fecha_nac = $row['FechaN'];
        $sexo = $row['Sexo'];
        $direccion = $row['Direccion'];
        $sector = $row['Sector'];
        $seccion = $row['Seccion'];
        $municipio = $row['municipio'];
        $provincia = $row['provincia'];
        $pais_nacionalidad = $row['pais_nacionalidad'];
        $telefono = $row['telefono'];
        $licencia_cd = $row['licencia_cd'];
        $vehiculo = $row['vehiculo'];
        $email = $row['email'];
        $confirmacion_em = $row['confirmacion_em'];
        $contraseña = $row['contraseña'];
        $confirmacion_contra = $row['confirmacion_contra'];
        $anos_xp = $row['anos_xp'];
        $curriculum = $row['curriculum'];
        $area_trabajo = $row['area_trabajo'];
        $Terminos = $row['egresadoscol'];
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
    <section class="form-egre">

        <form action="actualizaregre.php" method="POST">
            <input type="text" class="formu" select class="controls" name="AnoGraduacion" placeholder="Año de graduacion" value="<?php echo $idegresados ?>" readonly><br><br>
            <input type="text" class="formu" select class="controls" name="Institución" placeholder="Nombre" value="<?php echo $nom_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Curso" placeholder="RNC" value="<?php echo $rnc ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Matricula" placeholder="Identificación" value="<?php echo $ident_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Cedula" placeholder="Departamento de Formación" value="<?php echo $dept_formacion ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Carrera" placeholder="Alcance" value="<?php echo $alcance_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="tecnico" placeholder="Actividad" value="<?php echo $actividad_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Nombres" placeholder="Industria" value="<?php echo $industria ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Apellidos" placeholder="Tamaño de la empresa" value="<?php echo $tamano_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="FechaN" placeholder="Dirección" value="<?php echo $direccion ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Sexo" placeholder="Sector" value="<?php echo $sector ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Direccion" placeholder="Sección" value="<?php echo $seccion ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Sector" placeholder="Municipio" value="<?php echo $municipio ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="Seccion" placeholder="Provincia" value="<?php echo $provincia ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="municipio" placeholder="País" value="<?php echo $pais_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="provincia" placeholder="Teléfono Principal" value="<?php echo $tel_principal ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="pais_nacionalidad" placeholder="Teléfono directo" value="<?php echo $tel_directo ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="telefono" placeholder="Email" value="<?php echo $email ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="licencia_cd" placeholder="Confirmación de Email" value="<?php echo $confirmacion_email ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="vehiculo" placeholder="Contraseña" value="<?php echo $contrasena ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="email" placeholder="Confirmación de contraseña" value="<?php echo $confirmacion_contrasena ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="confirmacion_em" placeholder="Contacto dentro de la Empresa" value="<?php echo $contacto_dentro_emp ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="anos_xp" placeholder="Teléfono del contacto" value="<?php echo $tel_contacto ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="curriculum" placeholder="Email del contacto" value="<?php echo $email_contacto ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="area_trabajo" placeholder="Email del contacto" value="<?php echo $email_contacto ?>"><br><br>
            <input type="text" class="formu" select class="controls" name="egresadoscol" placeholder="Email del contacto" value="<?php echo $email_contacto ?>"><br><br>
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