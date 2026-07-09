<?php

include 'conexion_be.php';

$id_postulacion = $_POST['id_postulacion'];

$observacion_seg = $_POST['observacion_seg'];

$query = "
INSERT INTO seguimiento_adopcion
(
id_postulacion,
fecha_seg,
observacion_seg
)
VALUES
(
'$id_postulacion',
NOW(),
'$observacion_seg'
)
";

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){

    echo '
    <script>
    alert("Seguimiento registrado correctamente");
    window.location="admin.php";
    </script>
    ';

}else{

    echo '
    <script>
    alert("Error al registrar seguimiento");
    window.location="registrar_seguimiento.php";
    </script>
    ';
}

mysqli_close($conexion);

?>