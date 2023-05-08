<?php
require("conexionvaca.php");

$idvacantes = $_REQUEST['id'];

$query = "DELETE FROM vacantes where idvacantes=$idvacantes";
mysqli_query($conexionvaca, $query);

header("location: editarvaca.php?insert=success");
