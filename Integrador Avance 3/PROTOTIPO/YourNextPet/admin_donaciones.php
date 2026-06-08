<?php

session_start();
include 'conexion_be.php';

$query = "
SELECT
d.id_donacion,
u.nombre,
m.nombre_mas,
d.monto,
d.fecha_don

FROM donacion d

INNER JOIN usuarios u
ON d.id_usuario=u.id_usuario

INNER JOIN mascota m
ON d.id_mascota=m.id_mascota

ORDER BY d.fecha_don DESC
";

$resultado = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Historial de Donaciones</title>

<link rel="stylesheet" href="mascota.css">
<link rel="stylesheet" href="admin_donaciones.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<!-- HEADER -->

<header class="header">

    <div class="logo">

        <div class="logo-icon">
            ♡
        </div>

        <div>
            <span>YourNextPet</span>
            <p>Encuentra tu compañero perfecto</p>
        </div>

    </div>

    <nav class="menu">

        <a href="usu/inicio.php">
            Inicio
        </a>

        <a href="mascotausu.php">
            Adoptar
        </a>

        <a href="historial_postulaciones.php">
            Mis Postulaciones
        </a>

        <a href="historial_donaciones.php">
            Mis Donaciones
        </a>

        <a>
            Bienvenido,
            <?php echo $_SESSION['nombre']; ?>
        </a>

        <?php
        if($_SESSION['usuario'] == "MiRo@gmail.com"){
        ?>
            <a href="admin.php">
                Panel Admin
            </a>
        <?php
        }
        ?>

        <button
        class="registro-btn"
        onclick="window.location.href='cerrar_sesion.php'">

            Cerrar Sesión

        </button>

    </nav>

</header>

<!-- CONTENIDO -->

<div class="contenedor-donaciones">

    <!-- PANEL IZQUIERDO -->

    <div class="info-panel">

        <i class="fa-solid fa-hand-holding-heart"></i>

        <h1>
            Historial de Donaciones
        </h1>

        <p>
            Visualiza todas las donaciones realizadas por los usuarios
            para ayudar al cuidado, alimentación y bienestar de las mascotas.
        </p>

    </div>

    <!-- TABLA -->

    <div class="tabla-card">

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Donante</th>
                    <th>Mascota</th>
                    <th>Monto</th>
                    <th>Fecha</th>

                </tr>

            </thead>

            <tbody>

                <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                <tr>

                    <td>
                        #<?php echo $fila['id_donacion']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre_mas']; ?>
                    </td>

                    <td class="monto">

                        S/
                        <?php echo number_format($fila['monto'], 2); ?>

                    </td>

                    <td>

                        <?php
                        echo date(
                            "d/m/Y",
                            strtotime($fila['fecha_don'])
                        );
                        ?>

                    </td>

                </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>