<?php

session_start();
include 'conexion_be.php';

if($_SESSION['usuario'] != "MiRo@gmail.com"){
    exit("Acceso denegado");
}

$query = "
SELECT
p.id_postulacion,
u.nombre,
m.nombre_mas,
p.estado
FROM postulacion p

INNER JOIN usuarios u
ON p.id_usuario=u.id_usuario

INNER JOIN mascota m
ON p.id_mascota=m.id_mascota

ORDER BY p.id_postulacion DESC
";

$resultado = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Administrar Postulaciones</title>

<link rel="stylesheet" href="admin_postulaciones.css">
<style>
</style>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<header class="header">

    <div class="logo">

        <div class="logo-icon">♡</div>

        <div>
            <span>YourNextPet</span>
            <p>Encuentra tu compañero perfecto</p>
        </div>

    </div>

    <nav class="menu">

        <a href="mascotausu.php">Adoptar</a>

        <a href="historial_postulaciones.php">
            Mis Postulaciones
        </a>

        <a href="historial_donaciones.php">
            Mis Donaciones
        </a>

         <a >
      Bienvenido, <?php echo $_SESSION['nombre']; ?>
    </a>

        <a href="admin.php">
            Panel Admin
        </a>

        <button
        class="registro-btn"
        onclick="window.location.href='cerrar_sesion.php'">
            Cerrar Sesión
        </button>

    </nav>

</header>

<div class="contenedor">

    <div class="titulo">

        <h1>
            <i class="fa-solid fa-file-circle-check"></i>
            Gestión de Postulaciones
        </h1>

        <p>
            Administra las solicitudes de adopción registradas.
        </p>

    </div>

    <div class="tabla-container">

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Mascota</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>

                <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                <tr>

                    <td>
                        #<?php echo $fila['id_postulacion']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre_mas']; ?>
                    </td>

                    <td>

                        <span class="
                        <?php

                        if($fila['estado'] == "PENDIENTE"){
                            echo "pendiente";
                        }
                        elseif($fila['estado'] == "APROBADA"){
                            echo "aprobada";
                        }
                        elseif($fila['estado'] == "RECHAZADA"){
                            echo "rechazada";
                        }

                        ?>
                        ">

                        <?php echo $fila['estado']; ?>

                        </span>

                    </td>

                    <td class="acciones">

                        <a
                        class="btn-aprobar"
                        href="aprobar_postulacion.php?id=<?php echo $fila['id_postulacion']; ?>">
                            <i class="fa-solid fa-check"></i>
                            Aprobar
                        </a>

                        <a
                        class="btn-rechazar"
                        href="rechazar_postulacion.php?id=<?php echo $fila['id_postulacion']; ?>">
                            <i class="fa-solid fa-xmark"></i>
                            Rechazar
                        </a>

                    </td>

                </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>