<?php

    include 'conexion_be.php';


    $nombre_pos = $_POST['nombre_pos']; 
    $correo_pos = $_POST["correo_pos"]; 
    $telefono_pos = $_POST["telefono_pos"];
    $direccion_pos = $_POST["direccion_pos"];
    

$querypos = "INSERT INTO postulacion(id_usuario,id_mascota,nombre_pos,correo_pos,estado,telefono_pos,direccion_pos) 
            VALUES('1','1',' $nombre_pos',' $correo_pos','PENDIENTE','$telefono_pos','$direccion_pos')";

//verificar si existe ya

$verificar_correo =mysqli_query($conexion, "SELECT * FROM postulacion WHERE id_mascota = 'id_mascota' and id_usuario = 'id_usuario'");

if(mysqli_num_rows($verificar_correo)>0){

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