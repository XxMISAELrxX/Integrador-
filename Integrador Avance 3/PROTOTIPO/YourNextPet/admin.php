<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] != "MiRo@gmail.com"){
    echo '
    <script>
    alert("Acceso denegado");
    window.location="mascotausu.php";
    </script>
    ';
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Administrador</title>
<link rel="stylesheet" href="admin.css">


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

<h1>Panel Administrador</h1>
<div>
    <h3>Bienvenido Administrador</h3>

    <div class="contenedor">
    <div class="card">
        <i class="fa-solid fa-paw fa-3x"></i>
        <h3>Gestionar Mascotas</h3>
        <a href="admin_mascotas.php">Ingresar</a>
    </div>

    <div class="card">
        <i class="fa-solid fa-file-circle-check fa-3x"></i>
        <h3>Gestionar Postulaciones</h3>
        <a href="admin_postulaciones.php">Ingresar</a>
    </div>

    <div class="card">
        <i class="fa-solid fa-hand-holding-heart fa-3x"></i>
        <h3>Ver Donaciones</h3>
        <a href="admin_donaciones.php">Ingresar</a>
    </div>

    <div class="card">
        <i class="fa-solid fa-paw fa-3x"></i>
        <h3>Registrar Seguimiento</h3>
        <a href="registrar_seguimiento.php">Ingresar</a>
    </div>
</div>
</div>
</body>
</html>


