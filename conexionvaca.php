<?php
global $conexionvaca;
$conexionvaca = mysqli_connect('localhost', 'root', '12345', 'ipisa_php')or die(mysqli_error($mysqli));
?>