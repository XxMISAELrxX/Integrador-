<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and clave = '$clave' ");

if(mysqli_num_rows($validar_login) > 0){

    $usuario = mysqli_fetch_assoc($validar_login);



    $_SESSION['usuario'] = $usuario['correo'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['id_usuario'] = $usuario['id_usuario'];

    echo '
    <script>
    alert("Inicio de sesión exitoso, Bienvenido '.$usuario['nombre'].'");
    window.location = "mascotausu.php";
    </script>
    ';
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