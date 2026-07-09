<?php

include 'conexion_be.php';

// DATOS DEL FORMULARIO
$nombre = $_POST['nombre_mas'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$raza = $_POST['raza'];
$descripcion = $_POST['descripcion'];
$id_especie = $_POST['id_especie'];
$id_rescatista = $_POST['id_rescatista'];
$personalidad = $_POST['personalidad'];

// DATOS DE LA IMAGEN
$nombreImagen = $_FILES['imagen']['name'];
$extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);

// INSERTAR MASCOTA (sin imagen todavía)
$query = "
INSERT INTO mascota
(
nombre_mas,
edad,
sexo,
raza,
descripcion,
id_especie,
id_rescatista,
personalidad
)
VALUES
(
'$nombre',
'$edad',
'$sexo',
'$raza',
'$descripcion',
'$id_especie',
'$id_rescatista',
'$personalidad'
)
";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

    // OBTENER EL ID GENERADO
    $id_mascota = mysqli_insert_id($conexion);

    // CREAR NOMBRE DE IMAGEN
    $nuevoNombre = $id_mascota . "." . $extension;

    // GUARDAR IMAGEN EN LA CARPETA uploads
    move_uploaded_file(
        $_FILES['imagen']['tmp_name'],
        "uploads/" . $nuevoNombre
    );

    // ACTUALIZAR EL CAMPO IMAGEN
    mysqli_query(
        $conexion,
        "UPDATE mascota
         SET imagen='$nuevoNombre'
         WHERE id_mascota='$id_mascota'"
    );

    header("Location: admin_mascotas.php");
    exit();

}else{

    echo "
    <script>
    alert('Error al registrar mascota');
    window.location='agregar_mascota.php';
    </script>
    ";
}

mysqli_close($conexion);

?>