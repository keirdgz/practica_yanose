<?php
require("conexionvaca.php");

$idempresa = $_REQUEST['id'];

$query = "DELETE FROM empresa where idempresa=$idempresa";
mysqli_query($conexion, $query);

header("location: editaremp.php?insert=success");
