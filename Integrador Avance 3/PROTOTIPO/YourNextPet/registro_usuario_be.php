<?php

    include 'conexion_be.php';


    $nombre = $_POST['nombre']; 
    $correo = $_POST["correo"]; 
    $clave = $_POST["clave"];

    /* ENCRIPTAR CLAVE
    $clave = hash('sha512', $clave);
    */

$query = "INSERT INTO usuarios(nombre,correo,clave) 
            VALUES('$nombre','$correo','$clave')";

//verificar si existe ya

$verificar_correo =mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo)>0){

echo'
<script>
alert("Este correo ya esta en uso");
window.location = "registro.php";
</script>
';

    exit();
}

//INSETAR DATOS EN TABLA USUARIOS

$ejecutar =mysqli_query($conexion , $query);

if($ejecutar){
echo'
<script>
alert("Usuario Almacenado exitosamente");
window.location = "login.php";
</script>
';

}else{
echo'
<script>
alert("oH no algo a salido mal, Vuelve a intentarlo");
window.location = "registro.php";
</script>
';

}


mysqli_close($conexion)

?>

