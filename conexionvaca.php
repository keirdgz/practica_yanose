<?php
global $conexionvaca;
$conexionvaca = mysqli_connect('localhost', 'root', '', 'ipisa_php')or die(mysqli_error($mysqli));
?>