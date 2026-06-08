
<?php
include 'conexion_be.php';

$query = "SELECT * FROM mascota";
$resultado = mysqli_query($conexion, $query);
?>

<?php

include 'conexion_be.php';

$querySeguimientos = "
SELECT
m.nombre_mas,
m.imagen,
s.fecha_seg,
s.observacion_seg
FROM seguimiento_adopcion s
INNER JOIN postulacion p
ON s.id_postulacion = p.id_postulacion
INNER JOIN mascota m
ON p.id_mascota = m.id_mascota
ORDER BY s.fecha_seg DESC
";

$seguimientos = mysqli_query($conexion, $querySeguimientos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>YourNextPet</title>

  <link rel="stylesheet" href="inicio.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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
      <p>Tu compañero perfecto</p>
    </div>

  </div>

  <nav class="menu">

    <a href="inicio.html" class="activo">
      Inicio
    </a>

    <a href="quiz.html">
      Adoptar
    </a>

    <a href="login.php">
      Iniciar Sesión
    </a>

    <button class="registro-btn"
    onclick="window.location.href='registro.php'">

      Registrarse

    </button>

  </nav>

</header>

<!-- HERO -->
<section class="hero">

  <div class="hero-text">

    <h1>
      Encuentra tu <br>
      <span>compañero perfecto</span>
    </h1>

    <p>
      Conecta con la mascota ideal según tu personalidad,
      estilo de vida y nivel de energía.
    </p>

    <div class="hero-btns">

      <button class="primary"
      onclick="irQuiz()">

        Comenzar Test de Personalidad

      </button>

      <button class="secondary"
      onclick="irPasos()">

        Cómo Funciona

      </button>

    </div>

  </div>

  <div class="hero-img">

    <img src="https://placedog.net/600">

    <div class="badge">
      <h2>98%</h2>
      <span>Satisfacción</span>
    </div>

  </div>

</section>

<!-- STATS -->
<section class="stats animar">

  <div class="stat">
    <div class="icon">💜</div>
    <h2>2,500+</h2>
    <p>Adopciones Exitosas</p>
  </div>

  <div class="stat">
    <div class="icon">👥</div>
    <h2>45</h2>
    <p>Albergues Asociados</p>
  </div>

  <div class="stat">
    <div class="icon">🏅</div>
    <h2>98%</h2>
    <p>Tasa de Satisfacción</p>
  </div>

  <div class="stat">
    <div class="icon">📈</div>
    <h2>85%</h2>
    <p>Compatibilidad Match</p>
  </div>

</section>

<!-- FEATURES -->
<section class="features animar">

  <h2>Características Únicas</h2>

  <p>
    Tecnología innovadora que revoluciona el proceso de adopción
  </p>

  <div class="feature-grid">

    <div class="feature-card">

      <div class="feature-icon">
        ✨
      </div>

      <h3>Match de Personalidad</h3>

      <span>
        Descubre mascotas compatibles contigo.
      </span>

    </div>

    <div class="feature-card">

      <div class="feature-icon">
        ⏱️
      </div>

      <h3>Proceso Rápido</h3>

      <span>
        Adopta en solo 24 horas con nuestro sistema simplificado.
      </span>

    </div>

    <div class="feature-card">

      <div class="feature-icon">
        🛡️
      </div>

      <h3>Albergues Verificados</h3>

      <span>
        Refugios seguros y certificados.
      </span>

    </div>

    <div class="feature-card">

      <div class="feature-icon">
        ❤️
      </div>

      <h3>Seguimiento Post-Adopción</h3>

      <span>
        Acompañamiento continuo para garantizar una transición exitosa.
      </span>

    </div>

  </div>

</section>

<!-- PASOS -->
<section class="pasos animar" id="pasos">

  <h2>¿Cómo Funciona?</h2>

  <p class="pasos-sub">
    4 pasos simples para adoptar tu compañero ideal
  </p>

  <div class="pasos-container">

    <!-- PASO 1 -->
    <div class="paso-card">

      <div class="numero">
        01
      </div>

      <h3>Completa el Quiz</h3>

      <p>
        Responde 3 preguntas sobre tu estilo de vida y preferencias
      </p>

    </div>

    <div class="linea"></div>

    <!-- PASO 2 -->
    <div class="paso-card">

      <div class="numero">
        02
      </div>

      <h3>Descubre Matches</h3>

      <p>
        Recibe recomendaciones personalizadas con porcentaje de compatibilidad
      </p>

    </div>

    <div class="linea"></div>

    <!-- PASO 3 -->
    <div class="paso-card">

      <div class="numero">
        03
      </div>

      <h3>Selecciona tu Favorito</h3>

      <p>
        Elige la mascota que más te guste y marca como favorita
      </p>

    </div>

    <div class="linea"></div>

    <!-- PASO 4 -->
    <div class="paso-card">

      <div class="numero">
        04
      </div>

      <h3>Adopta</h3>

      <p>
        Completa el proceso de adopción de forma rápida y segura
      </p>

    </div>

  </div>

</section>


<section class="albergues animar" id="adoptar">

    <h2>❤️ Adopciones Exitosas</h2>
   <div class="albergue-grid">

        <?php while($seg = mysqli_fetch_assoc($seguimientos)){ ?>

            <div class="albergue">

                <img
                src="uploads/<?php echo $seg['imagen']; ?>"
                alt="<?php echo $seg['nombre_mas']; ?>">

                <h3>
                    🐾 <?php echo $seg['nombre_mas']; ?>
                </h3>

                <p class="fecha">
                    📅 <?php echo date("d/m/Y", strtotime($seg['fecha_seg'])); ?>
                </p>

                <p class="observacion">
                    "<?php echo $seg['observacion_seg']; ?>"
                </p>

            </div>

        <?php } ?>

    </div>

</section>


<!-- ALBERGUES -->
<section class="albergues animar" id="adoptar">

  <h2>Albergues Asociados</h2>

  <div class="albergue-grid">

    <div class="albergue">

      <img src="animales/petkausas.png">

      <div class="albergue-info">
        <h3>Refugio PetKausas</h3>
        <p>📍 Mariscal Caceres</p>
        <span>27+ animales</span>
      </div>

    </div>

    <div class="albergue">

      <img src="animales/poramoryparaamar.png">

      <div class="albergue-info">
        <h3>Por Amor y Para Amar</h3>
        <p>📍Zarate </p>
        <span>32+ animales</span>
      </div>

    </div>

    <div class="albergue">

      <img src="animales/vidadigna.png">

      <div class="albergue-info">
        <h3>Vida Digna</h3>
        <p>📍 Campoy</p>
        <span>29+ animales</span>
      </div>

    </div>

  </div>

</section>

<!-- CTA -->
<section class="cta animar">

  <h2>
    ¿Listo para cambiar una vida?
  </h2>

  <p>
    Miles de mascotas esperan encontrar un hogar
  </p>

  <button onclick="irQuiz()">
    Comenzar Test
  </button>

</section>

<!-- FOOTER -->
<footer>

  YourNextPet © 2026 ❤️

</footer>

<script src="inicio.js"></script>

</body>
</html>