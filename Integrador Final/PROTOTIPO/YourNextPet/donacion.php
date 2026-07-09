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

$_SESSION['id_mascota'] = $_GET['id_mascota'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="donacio.css">
<title>Donaciones</title>

</head>

<body>

<div class="donacion-container">

    <h1>♡ Donar</h1>

    <p>
        Tu donación ayudará al cuidado, alimentación y salud de la mascota.
        Gracias por apoyar y darle una mejor vida.
    </p>

    <form action="registro_donacion_be.php" method="POST">

        <label>Monto de donación</label>
        <input type="number"
        name="monto"
        id="monto"
        min="1"
        step="0.01"
        placeholder="Ingrese el monto"
        required>

        <label>Método de pago</label>

        <div class="metodos">

            <div class="metodo tarjeta">

                <input type="radio"
                id="tarjeta"
                name="id_metodo"
                value="1"
                required>

            <label for="tarjeta">
                💳 Tarjeta
            </label>

            </div>

            <div class="metodo yape">

                <input type="radio"
               id="yape"
               name="id_metodo"
               value="2">

             <label for="yape">
            💜 Yape
            </label>

            </div>

            <div class="metodo plin">

                <input type="radio"
              id="plin"
              name="id_metodo"
              value="3">

            <label for="plin">
                💙 Plin
            </label>

            </div>

        </div>

            <button type="submit" class="btn-donar">
          Donar Ahora
        </button>

    </form>

</div>
<script src="donacion.js"></script>
</body>
</html>