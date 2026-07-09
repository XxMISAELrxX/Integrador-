<?php

session_start();
include 'conexion_be.php';

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

$query = "
SELECT
d.id_donacion,
m.nombre_mas,
mp.nombre_met,
d.monto,
d.fecha_don
FROM donacion d
INNER JOIN mascota m
ON d.id_mascota = m.id_mascota

INNER JOIN metodo_pago mp
ON d.id_metodo = mp.id_metodo

WHERE d.id_usuario = '$id_usuario'

ORDER BY d.fecha_don DESC
";

$resultado = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="es">

<head>



<meta charset="UTF-8">

<title>Mis Donaciones</title>

<link rel="stylesheet" href="historial_donaciones.css">


  <!-- ICONOS -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
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

      <nav class="menu">

    <a href="usu/inicio.php">Inicio</a>

    <a href="mascotausu.php" class="activo">
      Adoptar
    </a>

    <a href="historial_postulaciones.php">
    Mis Postulaciones
    </a>

    <a href="historial_donaciones.php">
    Mis Donaciones
    </a>

    <a >
      Bienvenido, <?php echo $_SESSION['nombre']; ?>
    </a>
        <!-- PANEL DE ADMIN -->
        <?php
       if($_SESSION['usuario'] == "MiRo@gmail.com"){
        ?>

      <a href="admin.php">
      Panel Admin
        </a>

      <?php
      }
      ?>

    <button class="registro-btn"
    onclick="window.location.href='cerrar_sesion.php'">
      Cerrar Session
    </button>

  </nav>

</header>
<body>

<div class="contenedor-donaciones">

    <div class="info-panel">

        <i class="fa-solid fa-hand-holding-heart"></i>

        <h1>Mis Donaciones</h1>

        <p>
            Aquí puedes visualizar todas las donaciones que has realizado
            para ayudar a las mascotas.
        </p>

        <?php

        $queryTotal = "
        SELECT SUM(monto) AS total
        FROM donacion
        WHERE id_usuario = '$id_usuario'
        ";

        $resTotal = mysqli_query($conexion,$queryTotal);

        $total = mysqli_fetch_assoc($resTotal);

        ?>

        <div class="total-card">

            <span>Total Donado</span>

            <h2>
                S/
                <?php echo number_format($total['total'] ?? 0,2); ?>
            </h2>

        </div>

    </div>

    <div class="tabla-card">

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Mascota</th>
                    <th>Método</th>
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
                        <?php echo $fila['nombre_mas']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre_met']; ?>
                    </td>

                    <td class="monto">

                        S/
                        <?php echo number_format($fila['monto'],2); ?>

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