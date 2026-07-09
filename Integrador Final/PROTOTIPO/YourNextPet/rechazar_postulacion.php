<?php

include 'conexion_be.php';

$id = $_GET['id'];

mysqli_query(
$conexion,
"UPDATE postulacion
SET estado='RECHAZADA'
WHERE id_postulacion='$id'"
);

header("Location: admin_postulaciones.php");
?>