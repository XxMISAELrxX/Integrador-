
<?php
//OBLIGAR EL USO DE INICIO DE SESION

session_start();
if(!isset($_SESSION['usuario'])){

echo' <script> 
    alert("por favor primero debes iniciar sesion ");
    window.location = "login.php";
    </script>
    ';
session_destroy();
die();
} 

?>



<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>YourNextPet</title>

  <link rel="stylesheet" href="mascota.css">

  <!-- ICONOS -->
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

    <a href="inicio.html">Inicio</a>

    <a href="#" class="activo">
      Adoptar
    </a>

    <a >
      Bienvenido
    </a>

    <button class="registro-btn"
  
    onclick="window.location.href='cerrar_sesion.php'">

      Cerrar Sesion
      
    </button>

  </nav>

</header>

<!-- TITULO -->
<section class="titulo">

  <div>

    <h1>Mascotas Disponibles</h1>

    <p>
      Basado en tu perfil, hemos ordenado las mascotas por compatibilidad.
    </p>

  </div>

  <div class="acciones">

    <button class="fav">
      🤍 Favoritos (0)
    </button>

    <button class="quiz"
    onclick="window.location.href='quiz.html'">

      ✨ Rehacer Quiz

    </button>

  </div>

</section>

<!-- CONTENEDOR -->
<div class="contenedor">

  <!-- LUNA -->
  <div class="card" data-id="luna"
  data-personalidad="jugueton,energetico,activo,cariñoso,sociable,inteligente">

    <div class="img-container">

      <img src="animales/luna.jpg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>

    </div>

    <div class="info">

      <h2>Luna</h2>

      <p class="sub">
        Labrador Mix • 2 años
      </p>

      <p class="ubicacion">
        📍 Canto Grande, SJL
      </p>

      <p class="desc">
        Luna fue rescatada de la calle y ama jugar.
      </p>

      <div class="tags">
        <span>Juguetón</span>
        <span>Activo</span>
        <span>Cariñoso</span>
      </div>

      <button class="adoptar-btn"
      onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Luna
      </button>

    </div>
  </div>

  <!-- MAX -->
  <div class="card" data-id="max"
  data-personalidad="leal,inteligente,protector,sociable,activo,adaptable">

    <div class="img-container">

      <img src="animales/max.jpg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>

    </div>

    <div class="info">

      <h2>Max</h2>

      <p class="sub">
        Pastor Alemán • 4 años
      </p>

      <p class="ubicacion">
        📍 Campoy, SJL
      </p>

      <p class="desc">
        Protector e inteligente.
      </p>

      <div class="tags">
        <span>Leal</span>
        <span>Inteligente</span>
        <span>Protector</span>
      </div>

      <button class="adoptar-btn"
       onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Max
      </button>

    </div>
  </div>

  <!-- NALA -->
  <div class="card" data-id="nala"
  data-personalidad="calmado,independiente,relajado,tranquilo,curioso,sociable">

    <div class="img-container">

      <img src="animales/nala.jpg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>

    </div>

    <div class="info">

      <h2>Nala</h2>

      <p class="sub">
        Siamés • 1 año
      </p>

      <p class="ubicacion">
        📍 San Hilarión, SJL
      </p>

      <p class="desc">
        Tranquila y muy sociable.
      </p>

      <div class="tags">
        <span>Calmada</span>
        <span>Independiente</span>
        <span>Sociable</span>
      </div>

      <button class="adoptar-btn"
      onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Nala
      </button>

    </div>
  </div>

  <!-- MILO -->
  <div class="card" data-id="milo"
  data-personalidad="independiente,curioso,calmado,relajado,tranquilo,adaptable">

    <div class="img-container">

      <img src="animales/milo.jpeg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>

    </div>

    <div class="info">

      <h2>Milo</h2>

      <p class="sub">
        Gato Europeo • 3 años
      </p>

      <p class="ubicacion">
        📍 Mangomarca, SJL
      </p>

      <p class="desc">
        Curioso y muy independiente.
      </p>

      <div class="tags">
        <span>Curioso</span>
        <span>Independiente</span>
        <span>Calmado</span>
      </div>

      <button class="adoptar-btn"
      onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Milo
      </button>

    </div>
  </div>

  <!-- BELLA -->
  <!-- BELLA -->
  <div class="card" data-id="bella"
  data-personalidad="cariñoso,sociable,tranquilo,adaptable,calmado,leal">

    <div class="img-container">
      <img src="animales/bella.jpg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>
    </div>

    <div class="info">

      <h2>Bella</h2>

      <p class="sub">
        Golden Retriever • 3 años
      </p>

      <p class="ubicacion">
        📍 Zárate, SJL
      </p>

      <p class="desc">
        Muy amigable y paciente.
      </p>

      <div class="tags">
        <span>Sociable</span>
        <span>Amigable</span>
        <span>Paciente</span>
      </div>

      <button class="adoptar-btn"
      onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Bella
      </button>

    </div>
  </div>
  <!-- ROCKY -->
  <div class="card" data-id="rocky"
  data-personalidad="calmado,relajado,adaptable,tranquilo,leal,sociable">
    <div class="img-container">
      <img src="animales/rocky.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Rocky</h2>
      <p class="sub">Bulldog • 5 años</p>
      <p class="ubicacion">📍 Bayóvar, SJL</p>
      <p class="desc">Ideal para departamentos.</p>

      <div class="tags">
        <span>Calmado</span>
        <span>Relajado</span>
        <span>Adaptable</span>
      </div>

      <button class="adoptar-btn"
    onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Rocky
      </button>
    </div>
  </div>

  <!-- BRUNO -->
  <div class="card" data-id="bruno"
  data-personalidad="activo,leal,inteligente,energetico,jugueton,sociable">
    <div class="img-container">
      <img src="animales/bruno.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Bruno</h2>
      <p class="sub">Border Collie • 2 años</p>
      <p class="ubicacion">📍 Las Flores, SJL</p>
      <p class="desc">Muy activo e inteligente.</p>

      <div class="tags">
        <span>Activo</span>
        <span>Leal</span>
        <span>Inteligente</span>
      </div>

      <button class="adoptar-btn"
onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Bruno
      </button>
    </div>
  </div>

  <!-- TOBY -->
  <div class="card" data-id="toby"
  data-personalidad="jugueton,activo,leal,cariñoso,sociable,energetico">
    <div class="img-container">
      <img src="animales/toby.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Toby</h2>
      <p class="sub">Mestizo • 2 años</p>
      <p class="ubicacion">📍 Campoy, SJL</p>
      <p class="desc">Muy juguetón y amigable.</p>

      <div class="tags">
        <span>Juguetón</span>
        <span>Activo</span>
        <span>Leal</span>
      </div>

      <button class="adoptar-btn"
onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Toby
      </button>
    </div>
  </div>

  <!-- SIMBA -->
  <div class="card" data-id="simba"
  data-personalidad="curioso,calmado,independiente,relajado,tranquilo,sociable">
    <div class="img-container">
      <img src="animales/simba.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Simba</h2>
      <p class="sub">Gato • 1 año</p>
      <p class="ubicacion">📍 Mangomarca, SJL</p>
      <p class="desc">Muy tranquilo y curioso.</p>

      <div class="tags">
        <span>Curioso</span>
        <span>Calmado</span>
        <span>Independiente</span>
      </div>

      <button class="adoptar-btn"
onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Simba
      </button>
    </div>
  </div>

  <!-- KIRA -->
  <div class="card" data-id="kira"
  data-personalidad="activo,jugueton,sociable,energetico,cariñoso,inteligente">
    <div class="img-container">
      <img src="animales/kira.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Kira</h2>
      <p class="sub">Husky • 3 años</p>
      <p class="ubicacion">📍 Canto Grande, SJL</p>
      <p class="desc">Muy energética y le encanta correr.</p>

      <div class="tags">
        <span>Activa</span>
        <span>Juguetona</span>
        <span>Sociable</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Kira
      </button>
    </div>
  </div>

  <!-- LEO -->
  <div class="card" data-id="leo"
  data-personalidad="calmado,cariñoso,relajado,tranquilo,sociable,adaptable">
    <div class="img-container">
      <img src="animales/leo.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Leo</h2>
      <p class="sub">Gato Persa • 4 años</p>
      <p class="ubicacion">📍 San Hilarión, SJL</p>
      <p class="desc">Relajado y cariñoso.</p>

      <div class="tags">
        <span>Calmado</span>
        <span>Cariñoso</span>
        <span>Relajado</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Leo
      </button>
    </div>
  </div>

  <!-- DAISY -->
  <div class="card" data-id="daisy"
  data-personalidad="activo,jugueton,sociable,energetico,cariñoso,adaptable">
    <div class="img-container">
      <img src="animales/daisy.jpeg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Daisy</h2>
      <p class="sub">Beagle • 2 años</p>
      <p class="ubicacion">📍 Mariscal Cáceres, SJL</p>
      <p class="desc">Le encanta jugar y salir a pasear.</p>

      <div class="tags">
        <span>Activa</span>
        <span>Juguetona</span>
        <span>Amigable</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Daisy
      </button>
    </div>
  </div>

  <!-- THOR -->
  <div class="card" data-id="thor"
  data-personalidad="protector,leal,inteligente,activo,sociable,adaptable">
    <div class="img-container">
      <img src="animales/thor.png">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Thor</h2>
      <p class="sub">Rottweiler • 4 años</p>
      <p class="ubicacion">📍 Campoy, SJL</p>
      <p class="desc">Protector y muy leal.</p>

      <div class="tags">
        <span>Protector</span>
        <span>Leal</span>
        <span>Inteligente</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Thor
      </button>
    </div>
  </div>

  <!-- LOLA --> 
  <div class="card" data-id="lola"
  data-personalidad="calmado,relajado,tranquilo,cariñoso,sociable,adaptable">
    <div class="img-container">
      <img src="animales/lola.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Lola</h2>
      <p class="sub">Gata Mestiza • 2 años</p>
      <p class="ubicacion">📍 Zárate, SJL</p>
      <p class="desc">Muy dulce y tranquila.</p>

      <div class="tags">
        <span>Calmada</span>
        <span>Dulce</span>
        <span>Relajada</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Lola
      </button>
    </div>
  </div>

  <!-- ZEUS -->
  <div class="card" data-id="zeus"
  data-personalidad="protector,activo,leal,inteligente,sociable,energetico">
    <div class="img-container">
      <img src="animales/zeus.jpg">
      <span class="match">0% Match</span>
      <span class="heart">🤍</span>
    </div>

    <div class="info">
      <h2>Zeus</h2>
      <p class="sub">Doberman • 5 años</p>
      <p class="ubicacion">📍 Bayóvar, SJL</p>
      <p class="desc">Muy atento y protector.</p>

      <div class="tags">
        <span>Protector</span>
        <span>Activo</span>
        <span>Leal</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Zeus
      </button>
    </div>
  </div>

  <!-- NINA -->
  <div class="card" data-id="nina"
  data-personalidad="jugueton,activo,sociable,energetico">

    <div class="img-container">
      <img src="animales/nina.jpg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>
    </div>

    <div class="info">

      <h2>Nina</h2>

      <p class="sub">
        Gata Siamés • 1 año
      </p>

      <p class="ubicacion">
        📍 Las Flores, SJL
      </p>

      <p class="desc">
        Muy juguetona y sociable.
      </p>

      <div class="tags">
        <span>Juguetona</span>
        <span>Activa</span>
        <span>Sociable</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Nina
      </button>

    </div>
  </div>


  <!-- MIA -->
  <div class="card" data-id="mia"
  data-personalidad="calmado,cariñoso,relajado,sociable,tranquilo,adaptable">

    <div class="img-container">
      <img src="animales/mia.png">

      <span class="match">0% Match</span>

      <span class="heart">🤍</span>
    </div>

    <div class="info">

      <h2>Mia</h2>
      <p class="sub">Gata Persa • 2 años</p>
      <p class="ubicacion">📍 Mangomarca, SJL</p>
      <p class="desc">
        Muy tranquila y le encanta dormir cerca de las personas.
      </p>

      <div class="tags">
        <span>Calmada</span>
        <span>Cariñosa</span>
        <span>Relajada</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Mia
      </button>

    </div>
  </div>

  <!-- OLIVER -->
  <div class="card" data-id="oliver"
  data-personalidad="curioso,activo,jugueton,independiente,sociable,energetico">

    <div class="img-container">
      <img src="animales/oliver.jpeg">

      <span class="match">
        0% Match
      </span>

      <span class="heart">
        🤍
      </span>
    </div>

    <div class="info">

      <h2>Oliver</h2>

      <p class="sub">
        Gato Europeo • 1 año
      </p>

      <p class="ubicacion">
        📍 Campoy, SJL
      </p>

      <p class="desc">
        Muy curioso y le encanta explorar toda la casa.
      </p>

      <div class="tags">
        <span>Curioso</span>
        <span>Activo</span>
        <span>Juguetón</span>
      </div>

      <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
        ♡ Adoptar a Oliver
      </button>

    </div>
  </div>

<!-- CANELA -->
<div class="card" data-id="canela"
data-personalidad="calmado,sociable,cariñoso,adaptable">

  <div class="img-container">

    <img src="animales/canela.jpg">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Canela</h2>

    <p class="sub">
      Gata Mestiza • 3 años
    </p>

    <p class="ubicacion">
      📍 Canto Grande, SJL
    </p>

    <p class="desc">
      Muy tierna y perfecta para hogares tranquilos.
    </p>

    <div class="tags">
      <span>Calmada</span>
      <span>Sociable</span>
      <span>Cariñosa</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
      ♡ Adoptar a Canela
    </button>

  </div>
</div>

<!-- TOM -->
<div class="card" data-id="tom"
data-personalidad="independiente,curioso,tranquilo,adaptable">

  <div class="img-container">

    <img src="animales/tom.jpg">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Tom</h2>

    <p class="sub">
      Gato Siamés • 4 años
    </p>

    <p class="ubicacion">
      📍 Las Flores, SJL
    </p>

    <p class="desc">
      Muy independiente pero cariñoso cuando entra en confianza.
    </p>

    <div class="tags">
      <span>Independiente</span>
      <span>Curioso</span>
      <span>Tranquilo</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">>
      ♡ Adoptar a Tom
    </button>

  </div>
</div>

<!-- KIARA -->
<div class="card" data-id="kiara"
data-personalidad="jugueton,activo,sociable,cariñoso">

  <div class="img-container">

    <img src="animales/kiara.png">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Kiara</h2>

    <p class="sub">
      Gata Bengalí • 2 años
    </p>

    <p class="ubicacion">
      📍 Bayóvar, SJL
    </p>

    <p class="desc">
      Muy activa y juguetona durante todo el día.
    </p>

    <div class="tags">
      <span>Juguetona</span>
      <span>Activa</span>
      <span>Sociable</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
      ♡ Adoptar a Kiara
    </button>

  </div>
</div>

<!-- PRINCESA -->
<div class="card" data-id="princesa"
data-personalidad="calmado,relajado,cariñoso,sociable">

  <div class="img-container">

    <img src="animales/princesa.jpg">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Princesa</h2>

    <p class="sub">
      Gata Persa • 5 años
    </p>

    <p class="ubicacion">
      📍 Mariscal Cáceres, SJL
    </p>

    <p class="desc">
      Le encanta descansar y recibir mimos.
    </p>

    <div class="tags">
      <span>Relajada</span>
      <span>Cariñosa</span>
      <span>Calmada</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
      ♡ Adoptar a Princesa
    </button>

  </div>
</div>

<!-- FIONA -->
<div class="card" data-id="fiona"
data-personalidad="curioso,activo,sociable,jugueton">

  <div class="img-container">

    <img src="animales/fiona.jpeg">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Fiona</h2>

    <p class="sub">
      Gata Mestiza • 1 año
    </p>

    <p class="ubicacion">
      📍 Zárate, SJL
    </p>

    <p class="desc">
      Muy juguetona y llena de energía.
    </p>

    <div class="tags">
      <span>Curiosa</span>
      <span>Activa</span>
      <span>Juguetona</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
      ♡ Adoptar a Fiona
    </button>

  </div>
</div>

<!-- LUCAS -->
<div class="card" data-id="lucas"
data-personalidad="tranquilo,calmado,adaptable,cariñoso">

  <div class="img-container">

    <img src="animales/lucas.jpg">

    <span class="match">
      0% Match
    </span>

    <span class="heart">
      🤍
    </span>

  </div>

  <div class="info">

    <h2>Lucas</h2>

    <p class="sub">
      Gato Europeo • 3 años
    </p>

    <p class="ubicacion">
      📍 La Huayrona, SJL
    </p>

    <p class="desc">
      Muy tranquilo y fácil de adaptar.
    </p>

    <div class="tags">
      <span>Tranquilo</span>
      <span>Adaptable</span>
      <span>Cariñoso</span>
    </div>

    <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
      ♡ Adoptar a Lucas
    </button>

  </div>
</div>


<script src="mascota.js"></script>

</body>
</html>