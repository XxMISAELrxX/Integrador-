<?php

session_start();




include 'conexion_be.php';

$id_usuario = $_SESSION['id_usuario'];
$id_mascota = $_SESSION['id_mascota'];

$id_metodo = $_POST['id_metodo'];
$monto = $_POST['monto'];

$query = "
INSERT INTO donacion
(id_usuario,id_mascota,id_metodo,monto,fecha_don)
VALUES
('$id_usuario','$id_mascota','$id_metodo','$monto',NOW())
";

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){

    echo '
    <script>
    alert("Donación registrada correctamente");
    window.location="mascotausu.php";
    </script>
    ';

}else{

    echo '
    <script>
    alert("Error al registrar la donación");
    window.location="donacion.php";
    </script>
    ';
}

mysqli_close($conexion);

?>