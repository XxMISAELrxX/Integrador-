<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - YourNextPet</title>

  <link rel="stylesheet" href="login.css">
  <script type="module" src="login.js"></script>
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
      <a href="inicio.html">Inicio</a>
      <a href="mascota.php">Adoptar</a>
      <a href="login.php">Iniciar Sesión</a>

      <button onclick="window.location.href='registro.php'">
        Registrarse
      </button>
    </nav>

  </header>

  <!-- LOGIN -->
  <section class="login-container">

    <div class="login-card">

      <!-- TOP -->
      <div class="top-card">

        <div class="circle-icon">
          ♡
        </div>

        <h1>Bienvenido de Vuelta</h1>
        <p>Inicia sesión para continuar</p>

      </div>

      <!-- TIPOS -->
      <div class="tipo-container">

        <button class="tipo-btn active">
          <i class="fa-regular fa-user"></i>
          <span>Adoptante</span>
        </button>

        <button class="tipo-btn">
          <i class="fa-regular fa-heart"></i>
          <span>Albergue</span>
        </button>

      </div>

      <!-- FORM -->
      <form action="login_usuario_be.php"  method="POST" class="formulario" >

        <label>
          <i class="fa-regular fa-envelope"></i>
          Correo Electrónico
        </label>

        <input type="email" placeholder="tu@email.com" name="correo">

        <label>
          <i class="fa-solid fa-lock"></i>
          Contraseña
        </label>

        <input type="password" placeholder="••••••••" name="clave">

        <button type="submit" class="submit-btn">
          Iniciar Sesión
        </button>

      </form>

      <!-- LINK -->
      <div class="bottom-text">
        ¿No tienes cuenta?
        <a href="registro.php">Regístrate aquí</a>
      </div>

    </div>

  </section>

</body>
</html>