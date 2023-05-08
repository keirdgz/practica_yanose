<?php
require("conexionvaca.php");

$idegre = $_REQUEST["idegresados"] ?? null;

$query = "DELETE FROM egresados where idegresados=$idegre";
mysqli_query($conexionvaca, $query);

header("location: editaregre.php?insert=success");
