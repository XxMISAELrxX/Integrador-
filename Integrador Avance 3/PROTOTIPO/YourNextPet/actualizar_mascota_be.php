<?php

include 'conexion_be.php';

$id = $_POST['id_mascota'];

$nombre = $_POST['nombre_mas'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$raza = $_POST['raza'];
$descripcion = $_POST['descripcion'];
$id_especie = $_POST['id_especie'];
$id_rescatista = $_POST['id_rescatista'];
$imagen = $_POST['imagen'];
$personalidad = $_POST['personalidad'];

$query = "
UPDATE mascota
SET
nombre_mas='$nombre',
edad='$edad',
sexo='$sexo',
raza='$raza',
descripcion='$descripcion',
id_especie='$id_especie',
id_rescatista='$id_rescatista',
imagen='$imagen',
personalidad='$personalidad'
WHERE id_mascota='$id'
";

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){

    echo "
    <script>
    alert('Mascota actualizada');
    window.location='admin_mascotas.php';
    </script>
    ";

}else{

    echo "
    <script>
    alert('Error al actualizar');
    history.back();
    </script>
    ";
}

?>