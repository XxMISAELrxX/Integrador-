<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor primero debes iniciar sesión");
    window.location = "login.php";
    </script>
    ';
    exit();
}

if(isset($_GET['id_mascota'])){
    $_SESSION['id_mascota'] = $_GET['id_mascota'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourNextPet</title>
    <link rel="stylesheet" href="formulario.css">

</head>
<body>

    <form action="registro_formuadop_be.php" method="POST" class="form-adopcion">

    <h2>Formulario de Adopción</h2>

    <!-- NOMBRE -->
    <div class="campo">
      <label>Nombre Completo</label>

      <input type="text" placeholder="Ingresa tu nombre completo" name="nombre_pos" required>
    </div>

    <!-- CORREO -->
    <div class="campo">
      <label>Correo Electrónico</label>

      <input type="email" placeholder="correo@gmail.com" name="correo_pos"
      required>
    </div>

    <!-- TELEFONO -->
    <div class="campo">
      <label>Teléfono</label>

      <input type="tel" placeholder="987654321" pattern="[0-9]{9}" maxlength="9" name="telefono_pos"
      required>
    </div>

    <!-- DIRECCION -->
    <div class="campo">
      <label>Dirección</label>

      <input type="text" placeholder="Ingresa tu dirección" name="direccion_pos"
      required>
    </div>

    <button type="submit" class="btn-enviar">
      Enviar Solicitud
    </button>

  </form>


</div>
</body>
</html>