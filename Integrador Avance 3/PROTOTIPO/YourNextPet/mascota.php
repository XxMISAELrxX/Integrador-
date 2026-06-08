<?php
include 'conexion_be.php';
$query = " SELECT *FROM mascota WHERE estado='ESPERANDO'";

$resultado = mysqli_query($conexion, $query);
?>
<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo '
    <script>
    window.location = "mascotausu.php";
    </script>
    ';
    exit();
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

    <a href="inicio.php">Inicio</a>

    <a href="#" class="activo">
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

<?php while($mascota = mysqli_fetch_assoc($resultado)){ ?>

      <div class="card"
     data-id="<?php echo $mascota['id_mascota']; ?>"
     data-personalidad="<?php echo $mascota['personalidad']; ?>">

        <div class="img-container">

            <img src="uploads/<?php echo $mascota['imagen']; ?>">

            <span class="match">
                0% Match
            </span>

            <span class="heart">
                🤍
            </span>

        </div>

        <div class="info">

            <h2>
                <?php echo $mascota['nombre_mas']; ?>
            </h2>

            <p class="sub">
                <?php echo $mascota['raza']; ?> •
                <?php echo $mascota['edad']; ?> años
            </p>

            <p>
                Sexo:
                <?php echo $mascota['sexo']; ?>
            </p>

            <p class="desc">
                <?php echo $mascota['descripcion']; ?>
            </p>

            <div class="botones">

                <button class="adoptar-btn" onclick="window.location.href='formuadop.php'">
                    ♡ Adoptar a
                    <?php echo $mascota['nombre_mas']; ?>

                </button>
               <button class="adoptar-btn"
                   onclick="window.location.href='donacion.php?id_mascota=<?php echo $mascota['id_mascota']; ?>'">

                     ♡ Donar a
                     <?php echo $mascota['nombre_mas']; ?>

                </button>
            </div>

        </div>

    </div>

<?php } ?>

</div>


<script src="mascota.js"></script>


</body>
</html>