<?php

include 'conexion_be.php';

$id = $_GET['id'];

// Obtener la mascota de la postulación aprobada
$consulta = mysqli_query(
    $conexion,
    "SELECT id_mascota
     FROM postulacion
     WHERE id_postulacion='$id'"
);

$datos = mysqli_fetch_assoc($consulta);
$id_mascota = $datos['id_mascota'];

// Aprobar la postulación seleccionada
mysqli_query(
    $conexion,
    "UPDATE postulacion
     SET estado='APROBADA'
     WHERE id_postulacion='$id'"
);

// Rechazar automáticamente las demás pendientes
mysqli_query(
    $conexion,
    "UPDATE postulacion
     SET estado='RECHAZADA'
     WHERE id_mascota='$id_mascota'
     AND id_postulacion<>'$id'
     AND estado='PENDIENTE'"
);

// Cambiar estado de la mascota
mysqli_query(
    $conexion,
    "UPDATE mascota
     SET estado='ADOPTADO'
     WHERE id_mascota='$id_mascota'"
);

header("Location: admin_postulaciones.php");
?>