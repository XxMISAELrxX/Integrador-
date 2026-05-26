<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and clave = '$clave' ");

    if(mysqli_num_rows($validar_login)> 0){
    $_SESSION['usuario'] = $correo;


    echo' <script> 
    alert("inicio de sesion exitoso, Bienvenido ");
    window.location = "mascotausu.php";
    </script>
    ';

       // header("location: mascota.php");
        exit;
    }else{

    echo'
    <script>
    alert("Usuario no existe, por favor verifique los datos");
    window.location = "login.php";
    </script>
            ';
        exit;
    }

mysqli_close($conexion);

?>