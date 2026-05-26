






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
      <a href="inicio.html">Inicio</a>
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

      <!-- SELECTOR -->
      <div class="tipo-container">

        <!-- ADOPTANTE -->
        <button type="button" class="tipo-btn active">

          <i class="fa-regular fa-user"></i>
          <span>Adoptante</span>

        </button>

        <!-- ALBERGUE -->
        <button type="button" class="tipo-btn">

          <i class="fa-regular fa-heart"></i>
          <span>Albergue</span>

        </button>

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




      <!-- FORM ALBERGUE -->
      <form class="formulario" id="formAlbergue">

        <label>
          <i class="fa-solid fa-house"></i>
          Nombre del Albergue
        </label>

        <input type="text" placeholder="Mi Albergue">

        <label>
          <i class="fa-solid fa-location-dot"></i>
          Zona
        </label>

        <select>

          <option disabled selected>
            Selecciona una zona
          </option>

          <option>Canto Grande</option>
          <option>Zárate</option>
          <option>Campoy</option>
          <option>San Hilarión</option>
          <option>Mariscal Cáceres</option>
          <option>Las Flores</option>
          <option>La Huayrona</option>
          <option>Bayóvar</option>
          <option>Mangomarca</option>

        </select>

        <label>
          <i class="fa-regular fa-envelope"></i>
          Correo Electrónico
        </label>

        <input type="email" placeholder="albergue@gmail.com">

        <label>
          <i class="fa-solid fa-phone"></i>
          Teléfono
        </label>

        <input type="text" placeholder="987654321">

        <button type="submit" class="submit-btn">
          Registrar Albergue
        </button>

      </form>

      <!-- BOTTOM -->
      <div class="bottom-text">

        ¿Ya tienes cuenta?
        <a href="login.php">Inicia sesión aquí</a>

      </div>

    </div>

  </section>

  <script src="registro.js"></script>

</body>
</html>