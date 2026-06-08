<?php
    session_start();
    include 'conexion_be.php';

    $id_usuario = $_SESSION['id_usuario'];
    $id_mascota = $_SESSION['id_mascota'];

//validar que no tenga 3 pendientes

    $validar_limite = mysqli_query(
    $conexion,
    "SELECT COUNT(*) AS total
     FROM postulacion
     WHERE id_usuario = '$id_usuario'
     AND estado = 'PENDIENTE'"
);

$fila = mysqli_fetch_assoc($validar_limite);

if($fila['total'] >= 3){

    echo '
    <script>
    alert("Solo puede tener un máximo de 3 postulaciones pendientes.");
    window.location = "mascotausu.php";
    </script>
    ';

    exit();
}
//continua


    $nombre_pos = $_POST['nombre_pos']; 
    $correo_pos = $_POST["correo_pos"]; 
    $telefono_pos = $_POST["telefono_pos"];
    $direccion_pos = $_POST["direccion_pos"];
    
//registrar datos

$querypos = "
INSERT INTO postulacion
(id_usuario,id_mascota,nombre_pos,correo_pos,estado,telefono_pos,direccion_pos)
VALUES
('$id_usuario','$id_mascota','$nombre_pos','$correo_pos','PENDIENTE','$telefono_pos','$direccion_pos')
";
//verificar si existe ya

$verificar_postulacion = mysqli_query(
$conexion,
"SELECT * FROM postulacion
WHERE id_mascota='$id_mascota'
AND id_usuario='$id_usuario'
AND estado='PENDIENTE'"
);

if(mysqli_num_rows($verificar_postulacion) > 0){

echo'
<script>
alert("Ya tiene esta postulacion pendiennte");
window.location = "mascotausu.php";
</script>
';

    exit();
}

//INSETAR DATOS EN TABLA USUARIOS

$ejecutar =mysqli_query($conexion , $querypos);

if($ejecutar){
echo'
<script>
alert("Postulacion Registrada exitosamente");
window.location = "mascotausu.php";
</script>
';

}else{
echo'
<script>
alert("oH no algo a salido mal, Vuelve a intentarlo");
window.location = "formuadop.php";
</script>
';

}


mysqli_close($conexion)

?>