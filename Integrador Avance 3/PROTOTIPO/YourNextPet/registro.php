
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - YourNextPet</title>

  <link rel="stylesheet" href="registro.css">

  <!-- ICONOS -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

  <!-- NAVBAR -->
  <header class="navbar">

    <div class="logo">

      <div class="logo-icon">♡</div>

      <div>
        <h2>YourNextPet</h2>
        <p>Tu compañero perfecto</p>
      </div>

    </div>

    <nav>
      <a href="inicio.php">Inicio</a>
      <a href="mascota.php">Adoptar</a>
      <a href="login.php">Iniciar Sesión</a>

      <button>
        Registrarse
      </button>
    </nav>

  </header>

  <!-- REGISTRO -->
  <section class="login-container">

    <div class="login-card">

      <!-- TOP -->
      <div class="top-card">

        <div class="circle-icon">
          ♡
        </div>

        <h1>Crear Cuenta</h1>
        <p>Únete a la comunidad de YourNextPet</p>

      </div>

     
      <!-- FORM ADOPTANTE -->
      <form action="registro_usuario_be.php" method="POST" class="formulario" id="formAdoptante">

        <label>
          <i class="fa-regular fa-user"></i>
          Nombre Completo
        </label>

        <input type="text" placeholder="Tu nombre completo" name="nombre">

        <label>
          <i class="fa-regular fa-envelope"></i>
          Correo Electrónico
        </label>

        <input type="email" placeholder="correo@gmail.com" name="correo">

        <label>
          <i class="fa-solid fa-lock"></i>
          Contraseña
        </label>

        <input type="password" placeholder="••••••••" name="clave">

        <button type="submit" class="submit-btn">
          Crear Cuenta
        </button>

      </form>


      <!-- BOTTOM -->
      <div class="bottom-text">

        ¿Ya tienes cuenta?
        <a href="login.php">Inicia sesión aquí</a>

      </div>

    </div>

  </section>

</body>
</html>