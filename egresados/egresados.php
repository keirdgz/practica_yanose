<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<header>

        <nav class="navbar navbar-expand-lg">
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

    <div class="w-750 m-3 p-3">

    <section class="form-egre">

        <center><h1>Registro de Estudiante o Egresado</h1></center>

        <form method="post">
        <div class="form-group">
        Año de Graduación: <br>
        <select class="formu" select class="controls" name="AnoGraduacion">
            <option value="--Seleccione el año--">--Seleccione el año--</option>
            <option value="2018-2022">2018-2022</option>
            <option value="2019-2023">2019-2023</option>
            <option value="2020-2024">2020-2024</option>
        </select>
        </div><br><br>
        <div class="form-group">
        Institución educativa a la que pertenece: <br>
        <select class="formu" select class="controls" name="Institución">
            <option value="--Seleccione la Institución--">--Seleccione la Institución--</option>
            <option value="Centro de Formación Técnica Evangelización y Renovación Santísima Trinidad (CEVREST) SOPEÑA">Centro de Formación Técnica Evangelización y Renovación Santísima Trinidad (CEVREST) SOPEÑA</option>
            <option value="Centro de Formación y Desarrollo Integral Padre Fantino (CEFODIPF)">Centro de Formación y Desarrollo Integral Padre Fantino (CEFODIPF)</option>
            <option value="Centro Educativo Marcos Castañer, Fe y Alegría">Centro Educativo Marcos Castañer, Fe y Alegría</option>
            <option value="Escuela Politécnica Ann & Ted Kheel">Escuela Politécnica Ann & Ted Kheel</option>
            <option value="Instituto Agronómico y Técnico Salesiano (IATESA)">Instituto Agronómico y Técnico Salesiano (IATESA)</option>
            <option value="Instituto Politécnico de Azua Prof. Teresa Digna Feliz de Estrada">Instituto Politécnico de Azua Prof. Teresa Digna Feliz de Estrada</option>
            <option value="Instituto Politécnico Hainamosa (Juan Félix Pepén)">Instituto Politécnico Hainamosa (Juan Félix Pepén)</option>
            <option value="Instituto Politécnico Industrial de Santiago (IPISA)">Instituto Politécnico Industrial de Santiago (IPISA)</option>
            <option value="Instituto Politécnico Industrial Don Bosco (IPIDBOSCO)">Instituto Politécnico Industrial Don Bosco (IPIDBOSCO)</option>
            <option value="Instituto Politécnico Loyola (IPL)">Instituto Politécnico Loyola (IPL)</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Curso: <br>
        <select class="formu" select class="controls" name="Curso">
            <option value="--Seleccione el Curso--">--Seleccione el Curso--</option>
            <option value="3ro">3ro</option>
            <option value="4to">4to</option>
            <option value="5to">5to</option>
            <option value="6to">6to</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Matricula: <br>
        <input class="formu" select class="controls" type="number" name="Matricula" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Cédula de Identidad: <br>
        <input class="formu" select class="controls" type="number" name="Cedula" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Carrera Técnica: <br>
        <select class="formu" select class="controls" name="Carrera">
            <option value="--Seleccione la Carrera--">--Seleccione la Carrera--</option>
            <option value="Confección y patronaje">Confección y patronaje</option>
            <option value="Desarrollo y Administración de Aplicaciones Informáticas">Desarrollo y Administración de Aplicaciones Informáticas</option>
            <option value="Electromecánica de vehículos">Electromecánica de vehículos</option>
            <option value="Ensamblaje de muebles">Ensamblaje de muebles</option>
            <option value="Equipos Electrónicos">Equipos Electrónicos</option>
            <option value="Gestión Administrativa y Tributaria">Gestión Administrativa y Tributaria</option>
            <option value="Instalaciones Eléctricas">Instalaciones Eléctricas</option>
            <option value="Mecanizado">Mecanizado</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Técnico Básico: <br>
        <select class="formu" select class="controls" name="tecnico">
            <option value="basico">N/A</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Nombres: <br>
        <input class="formu" select class="controls" type="text" name="Nombres" id="Nombres" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Apellidos: <br>
        <input class="formu" select class="controls" type="text" name="Apellidos"  placeholder=""><br><br>
        </div>
        <div class="form-group">
        Fecha de Nacimiento: <br>
        <input class="formu" select class="controls" type="text" name="FechaN" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Sexo: <br>
        <select class="formu" select class="controls" name="Sexo">
            <option value="--Seleccione su Sexo--">--Seleccione su sexo--</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Dirección: <br>
        <input class="formu" select class="controls" type="text" name="Direccion" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Sector: <br>
        <input class="formu" select class="controls" type="text" name="Sector" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Sección: <br>
        <input class="formu" select class="controls" type="text" name="Seccion" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Municipio: <br>
        <input class="formu" select class="controls" type="text" name="Municipio" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Provincia: <br>
        <select class="formu" select class="controls" name="Provincia">
            <option value="Azua">Azua</option>
            <option value="Bahoruco">Bahoruco</option>
            <option value="Barahona">Barahona</option>
            <option value="Dajabón">Dajabón</option>
            <option value="Distrito Nacional">Distrito Nacional</option>
            <option value="Duarte">Duarte</option>
            <option value="El Seibo">El Seibo</option>
            <option value="Elías Piña">Elías Piña</option>
            <option value="Espaillat">Espaillat</option>
            <option value="Hato Mayor">Hato Mayor</option>
            <option value="Hermanas Mirabal">Hermanas Mirabal</option>
            <option value="Independencia">Independencia</option>
            <option value="La Altagracia">La Altagracia</option>
            <option value="La Romana">La Romana</option>
            <option value="La Vega">La Vega</option>
            <option value="María Trinidad Sánchez">María Trinidad Sánchez</option>
            <option value="Monseñor Nouel">Monseñor Nouel</option>
            <option value="Monte Cristi">Monte Cristi</option>
            <option value="Monte Plata">Monte Plata</option>
            <option value="Pedernales">Pedernales</option>
            <option value="Peravia">Peravia</option>
            <option value="Puerto Plata">Puerto Plata</option>
            <option value="Samaná">Samaná</option>
            <option value="San Cristóbal">San Cristóbal</option>
            <option value="San José de Ocoa">San José de Ocoa</option>
            <option value="San Juan">San Juan</option>
            <option value="San Pedro de Macorís">San Pedro de Macorís</option>
            <option value="Sánchez Ramírez">Sánchez Ramírez</option>
            <option value="Santiago">Santiago</option>
            <option value="Santiago Rodríguez">Santiago Rodríguez</option>
            <option value="Santo Domingo">Santo Domingo</option>
            <option value="Valverde">Valverde</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Pais de Nacionalidad: <br>
        <select class="formu" select class="controls" name="Nacionalidad">
            <option value="Afganistan">Afganistan</option>
            <option value="Albania">Albania</option>
            <option value="Alemania">Alemania</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antartida">Antartida</option>
            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
            <option value="Antillas Holandesas">Antillas Holandesas</option>
            <option value="Arabia Saudita">Arabia Saudita</option>
            <option value="Argelia">Argelia</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="ARY Macedonia">ARY Macedonia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaiyan">Azerbaiyan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrein">Bahrein</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belgica">Belgica</option>
            <option value="Belice">Belice</option>
            <option value="Benin">Benin</option>
            <option value="Bermudas">Bermudas</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bielorrusia">Bielorrusia</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
            <option value="Botsuana">Botsuana</option>
            <option value="Brasil">Brasil</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Camboya">Camboya</option>
            <option value="Camerun">Camerun</option>
            <option value="Canada">Canada</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Chipre">Chipre</option>
            <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoras">Comoras</option>
            <option value="Congo">Congo</option>
            <option value="Corea del Norte">Corea del Norte</option>
            <option value="Corea del Sur">Corea del Sur</option>
            <option value="Costa de Marfil">Costa de Marfil</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croacia">Croacia</option>
            <option value="Cuba">Cuba</option>
            <option value="Dinamarca">Dinamarca</option>
            <option value="Dominica">Dominica</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egipto">Egipto</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Emiratos Arabes Unidos">Emiratos Arabes Unidos</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Eslovaquia">Eslovaquia</option>
            <option value="Eslovenia">Eslovenia</option>
            <option value="España">España</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Estonia">Estonia</option>
            <option value="Etiopia">Etiopia</option>
            <option value="Filipinas">Filipinas</option>
            <option value="Finlandia">Finlandia</option>
            <option value="Fiyi">Fiyi</option>
            <option value="Francia">Francia</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Granada">Granada</option>
            <option value="Grecia">Grecia</option>
            <option value="Groenlandia">Groenlandia</option>
            <option value="Guadalupe">Guadalupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guayana Francesa">Guayana Francesa</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungria">Hungria</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Irlanda">Irlanda</option>
            <option value="Isla Bouvet">Isla Bouvet</option>
            <option value="Isla de Navidad">Isla de Navidad</option>
            <option value="Isla Norfolk">Isla Norfolk</option>
            <option value="Islandia">Islandia</option>
            <option value="Islas Caiman">Islas Caiman</option>
            <option value="Islas Cocos">Islas Cocos</option>
            <option value="Islas Cook">Islas Cook</option>
            <option value="Islas Feroe">Islas Feroe</option>
            <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
            <option value="Islas Gland">Islas Gland</option>
            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
            <option value="Islas Malvinas">Islas Malvinas</option>
            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
            <option value="Islas Marshall">Islas Marshall</option>
            <option value="Islas Pitcairn">Islas Pitcairn</option>
            <option value="Islas Salomon">Islas Salomon</option>
            <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
            <option value="Islas ultramarinas de Estados Unidos">Islas ultramarinas de Estados Unidos</option>
            <option value="Islas Virgenes Britanicas">Islas Virgenes Britanicas</option>
            <option value="Islas Virgenes de los Estados Unidos">Islas Virgenes de los Estados Unidos</option>
            <option value="Israel">Israel</option>
            <option value="Italia">Italia</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japon">Japon</option>
            <option value="Jordania">Jordania</option>
            <option value="Kazajstan">Kazajstan</option>
            <option value="Kenia">Kenia</option>
            <option value="Kirguistan">Kirguistan</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Laos">Laos</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Letonia">Letonia</option>
            <option value="Libano">Libano</option>
            <option value="Liberia">Liberia</option>
            <option value="Libia">Libia</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lituania">Lituania</option>
            <option value="Luxemburgo">Luxemburgo</option>
            <option value="Macao">Macao</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malasia">Malasia</option>
            <option value="Malawi">Malawi</option>
            <option value="Maldivas">Maldivas</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marruecos">Marruecos</option>
            <option value="Martinica">Martinica</option>
            <option value="Mauricio">Mauricio</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Moldavia">Moldavia</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Noruega">Noruega</option>
            <option value="Nueva Caledonia">Nueva Caledonia</option>
            <option value="Nueva Zelanda">Nueva Zelanda</option>
            <option value="Oman">Oman</option>
            <option value="Paises Bajos">Paises Bajos</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestina">Palestina</option>
            <option value="Panama">Panama</option>
            <option value="Papua Nueva Guinea">Papua Nueva Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Polinesia Francesa">Polinesia Francesa</option>
            <option value="Polonia">Polonia</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reino Unido">Reino Unido</option>
            <option value="Republica Centroafricana">Republica Centroafricana</option>
            <option value="Republica Checa">Republica Checa</option>
            <option value="Republica Democratica del Congo">Republica Democratica del Congo</option>
            <option value="Republica Dominicana" selected="selected">Republica Dominicana</option>
            <option value="Reunion">Reunion</option>
            <option value="Ruanda">Ruanda</option>
            <option value="Rumania">Rumania</option>
            <option value="Rusia">Rusia</option>
            <option value="Sahara Occidental">Sahara Occidental</option>
            <option value="Samoa">Samoa</option>
            <option value="Samoa Americana">Samoa Americana</option>
            <option value="San Cristobal y Nevis">San Cristobal y Nevis</option>
            <option value="San Marino">San Marino</option>
            <option value="San Pedro y Miquelon">San Pedro y Miquelon</option>
            <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
            <option value="Santa Helena">Santa Helena</option>
            <option value="Santa Lucia">Santa Lucia</option>
            <option value="Santo Tome y Principe">Santo Tome y Principe</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia y Montenegro">Serbia y Montenegro</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leona">Sierra Leona</option>
            <option value="Singapur">Singapur</option>
            <option value="Siria">Siria</option>
            <option value="Somalia">Somalia</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Suazilandia">Suazilandia</option>
            <option value="Sudafrica">Sudafrica</option>
            <option value="Sudan">Sudan</option>
            <option value="Suecia">Suecia</option>
            <option value="Suiza">Suiza</option>
            <option value="Surinam">Surinam</option>
            <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
            <option value="Tailandia">Tailandia</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Tayikistan">Tayikistan</option>
            <option value="Territorio Britanico del Oceano Indico">Territorio Britanico del Oceano Indico</option>
            <option value="Territorios Australes Franceses">Territorios Australes Franceses</option>
            <option value="Timor Oriental">Timor Oriental</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
            <option value="Tuanez">Tuanez</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turquia">Turquia</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Ucrania">Ucrania</option>
            <option value="Uganda">Uganda</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Wallis y Futuna">Wallis y Futuna</option>
            <option value="Yemen">Yemen</option>
            <option value="Yibuti">Yibuti</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabue">Zimbabue</option>
        </select><br><br>
        </div>
        <div class="form-group">
        Telefono Residencial: <br>
        <input class="formu" select class="controls" type="number" name="TelefonoR" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Telefono Móvil: <br>
        <input class="formu" select class="controls" type="number" name="TelefonoM" placeholder=""><br><br>
        </div>
        <div class="form-group">
        Posee licencia de conducir? <br>
        <input class="formu" select class="controls" type="radio" name="Licencia">
        <label for="licencia si">
            <span>Si</span>
        </label><br>
        <input class="formu" select class="controls" type="radio" name="Licencia">
        <label for="licencia no"><br>
            <span>No</span>
        </label>
        </div>
        <div class="form-group">
        Posee vehiculo propio? <br>
        <input class="formu" select class="controls" type="radio" name="Vehiculo">
        <label for="vehiculosi">
            <span>Si</span>
        </label>
        <input class="formu" select class="controls" type="radio" name="Vehiculo">
        <label for="vehiculono">
            <span>No</span>
        </label>
        </div>
        <div class="form-group">
          <br>
        Email: <br>
        <input class="formu" select class="controls" type="email" placeholder="" name="Correo"  required data-error="Por favor ingrese su email." placeholder class="form-control"><br><br>
        </div>
        <div class="form-group">
        Confirmacion de Email: <br>
        <input class="formu" select class="controls" type="email" placeholder="" name="CorreoC"  required data-error="Por favor ingrese su email." placeholder class="form-control"><br><br>
        </div>
        <div class="form-group">
        Elija una contraseña: <br>
        <input class="formu" select class="controls" type="password" name="Contrasena" required data-error="Por favor ingrese su contraseña."><br><br>
        </div>
        <div class="form-group">
        Confirme contraseña: <br>
        <input class="formu" select class="controls" type="password" name="ContrasenaC" required data-error="Por favor ingrese su contraseña."><br><br>
        </div>
        <div class="form-group">
        Años de experiencia: <br>
        <input class="formu" select class="controls" type="text" placeholder="" name="Anos_xp"><br><br>
        </div>
        <div class="form-group">
        Curriculum Vitae: <br>
        <input class="formu" select class="controls" type="file" name="Curriculum"><br>
        <p><strong>Nota: </strong>su currículo debe contener todos los cursos que
        este haya hecho relacionado al área en la que quiere trabajar.</p><br>
        Area de trabajo: <br>
        </div>
        <div class="form-group">
        <select class="formu" select class="controls" name="Area">
            <option value="--Seleccione el Area de Trabajo--">--Seleccione el Area de Trabajo--</option>
            <option value="Confección y patronaje">Confección y patronaje</option>
            <option value="Desarrollo y Administración de Aplicaciones Informáticas">Desarrollo y Administración de Aplicaciones Informáticas</option>
            <option value="Electromecánica de vehículos">Electromecánica de vehículos</option>
            <option value="Ensamblaje de muebles">Ensamblaje de muebles</option>
            <option value="Equipos Electrónicos">Equipos Electrónicos</option>
            <option value="Gestión Administrativa y Tributaria">Gestión Administrativa y Tributaria</option>
            <option value="Instalaciones Eléctricas">Instalaciones Eléctricas</option>
            <option value="Mecanizado">Mecanizado</option>
        </select><br><br>
        </div>
        <div class="form-group">
        <input type="checkbox" name="Terminos" onclick="agreesubmit(this)">Acepto los <a href="TeryCon.html" class="term"  target="_blank" class="enlace">politica de privacidad</a><br><br>
        </div>
        <div class="form-group">
        <input class="botons" type="submit" value="Aceptar">
        </div>
        <div>
            <a href="cntrl_egre.php"><input class="botons" type="button" value="Control egresados"></a>
        </div>
</form>
    </section>
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
    <a class="text-white" href="inicio.html">IPISA</a>
  </div>
  <!-- Copyright -->
</footer>

</div>

</body>
</html>

<script src="https://kit.fontawesome.com/47066a961f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php

require_once "conexionvaca.php";
insertar($conexionvaca);
function insertar ($conexionvaca) {
$ano_graduacion = $_POST['AnoGraduacion'];
$inst_pertenece = $_POST['Institución'];
$curso = $_POST['Curso'];
$matricula = $_POST['Matricula'];
$cedula = $_POST['Cedula'];
$carrera_tec = $_POST['Carrera'];
$tec_basico = $_POST['tecnico'];
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$fecha_nac = $_POST['FechaN'];
$sexo = $_POST['Sexo'];
$direccion = $_POST['Direccion'];
$sector = $_POST['Sector'];
$seccion = $_POST['Seccion'];
$municipio = $_POST['Municipio'];
$provincia = $_POST['Provincia'];
$pais_nacionalidad = $_POST['Nacionalidad'];
$telefonoR = $_POST['TelefonoR'];
$telefonoM = $_POST['TelefonoM'];
$licencia_cd = $_POST['Licencia'];
$vehiculo = $_POST['Vehiculo'];
$email = $_POST['Correo'];
$confirmacion_em = $_POST['Correoc'];
$contrasena = $_POST['Contrasena'];
$confirmacion_contra = $_POST['ContrasenaC'];
$anos_xp = $_POST['Anos_xp'];
$curriculum = $_POST['Curriculum'];
$area_trabajo = $_POST['Area'];

$consulta = "INSERT INTO egresados(ano_graduacion, inst_pertenece, curso, matricula, cedula, carrera_tec, tec_basico, nombre, apellido, 
fecha_nac, sexo, direccion, sector, seccion, municipio, provincia, pais_nacionalidad, telefonoR, telefonoM, licencia_cd, vehiculo, email, 
confirmacion_em, contrasena, confirmacion_contra, anos_xp, curriculum, area_trabajo) VALUES ('$ano_graduacion', '$inst_pertenece','$curso',
'$matricula','$cedula','$carrera_tec','$tec_basico','$nombre','$apellido','$fecha_nac','$sexo','$direccion','$sector', '$seccion','$municipio',
'$provincia','$pais_nacionalidad','$telefonoR','$telefonoM','$licencia_cd','$vehiculo','$email','$confirmacion_em', '$contrasena',
'$confirmacion_contra','$anos_xp','$curriculum','$area_trabajo')";

mysqli_query($conexionvaca, $consulta);
mysqli_close($conexionvaca);

echo $consulta;
}
?>