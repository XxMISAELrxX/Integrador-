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
<?php

include 'conexion_be.php';

$query = "
SELECT
p.id_postulacion,
m.nombre_mas,
u.nombre
FROM postulacion p
INNER JOIN mascota m
ON p.id_mascota = m.id_mascota
INNER JOIN usuarios u
ON p.id_usuario = u.id_usuario
WHERE p.estado='APROBADA'
AND m.estado='ADOPTADO'
";

$resultado = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrar Seguimiento</title>
    <link rel="stylesheet" href="admin_postulaciones.css">
    <link rel="stylesheet" href="registrar_seguimiento.css">
    <style>
      body{
    font-family:'Poppins',sans-serif;
    background:#f7f1f8;
    margin:0;
}

/* CONTENEDOR */

.form-container{
    width:600px;
    margin:50px auto;

    background:white;

    padding:35px;

    border-radius:20px;

    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

/* TITULO */

h2{
    text-align:center;

    color:#8a2be2;

    margin-top:40px;
    margin-bottom:25px;

    font-size:32px;
}

/* LABELS */

label{
    display:block;

    margin-bottom:8px;

    font-weight:600;

    color:#555;
}

/* SELECT Y TEXTAREA */

select,
textarea{
    width:100%;

    padding:14px;

    border:1px solid #ddd;

    border-radius:12px;

    font-size:15px;

    outline:none;

    transition:.3s;

    box-sizing:border-box;
}

select:focus,
textarea:focus{
    border-color:#8a2be2;
    box-shadow:0 0 10px rgba(138,43,226,.15);
}

/* TEXTAREA */

textarea{
    resize:none;
}

/* BOTON */

.btn-guardar{
    width:100%;

    padding:15px;

    border:none;

    border-radius:12px;

    background:linear-gradient(135deg,#8a2be2,#ff4da6);

    color:white;

    font-size:16px;
    font-weight:600;

    cursor:pointer;

    transition:.3s;
}

.btn-guardar:hover{
    transform:translateY(-2px);

    box-shadow:0 8px 20px rgba(138,43,226,.25);
}
    </style>
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

<h2>
    <i class="fa-solid fa-notes-medical"></i>
    Registrar Seguimiento
</h2>

<div class="form-container">

<form action="registro_seguimiento_be.php" method="POST">

    <label>Mascota Adoptada:</label>

    <select name="id_postulacion" required>

        <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

            <option value="<?php echo $fila['id_postulacion']; ?>">

                <?php echo $fila['nombre_mas']; ?>
                -
                <?php echo $fila['nombre']; ?>

            </option>

        <?php } ?>

    </select>

    <br><br>

    <label>Observación:</label>

    <textarea
        name="observacion_seg"
        rows="5"
        cols="40"
        required>
    </textarea>

    <br><br>

<button type="submit" class="btn-guardar">
    <i class="fa-solid fa-floppy-disk"></i>
    Guardar Seguimiento
</button>

</form>

</div>

</body>
</html>