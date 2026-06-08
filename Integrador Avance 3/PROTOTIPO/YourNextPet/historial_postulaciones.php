<?php
session_start();
include 'conexion_be.php';

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

$query = "
SELECT p.*, m.nombre_mas
FROM postulacion p
INNER JOIN mascota m ON p.id_mascota = m.id_mascota
WHERE p.id_usuario = '$id_usuario'
ORDER BY p.id_postulacion DESC
";

$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Mis Postulaciones</title>

<link rel="stylesheet" href="historial_postulaciones.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
/* TITULO */
#titulo{
    text-align: center;
    margin-top: 40px;
    margin-bottom: 30px;

    color: #8a2be2;
    font-size: 32px;
}

/* TABLA */
table{
    width: 90%;
    margin: auto;

    border-collapse: collapse;

    background: white;

    border-radius: 20px;

    overflow: hidden;

    box-shadow: 0 8px 20px rgba(0,0,0,.08);
}

th{
    background: linear-gradient(135deg,#8a2be2,#ff4da6);

    color: white;

    padding: 15px;

    text-align: center;
}

td{
    padding: 15px;

    text-align: center;

    border-bottom: 1px solid #eee;
}

tr:hover{
    background: #faf5ff;
}

/* ESTADOS */
.pendiente{
    color: #ff9800;
    font-weight: bold;
}

.aprobada{
    color: #17c964;
    font-weight: bold;
}

.rechazada{
    color: #ff3b30;
    font-weight: bold;
}

/* RESPONSIVE */
@media(max-width:900px){

    .header{
        flex-direction: column;
        gap: 15px;
    }

    .menu{
        flex-wrap: wrap;
        justify-content: center;
    }

    table{
        width: 98%;
        font-size: 14px;
    }
}
</style>
</head>

<body>

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

        <a>
            Bienvenido, <?php echo $_SESSION['nombre']; ?>
        </a>

        <?php if($_SESSION['usuario']=="MiRo@gmail.com"){ ?>
            <a href="admin.php">Panel Admin</a>
        <?php } ?>

        <button class="registro-btn"
        onclick="window.location.href='cerrar_sesion.php'">
            Cerrar Sesión
        </button>

    </nav>

</header>

<h2 id="titulo">Mis Solicitudes de Adopción</h2>

<table>

<tr>
    <th>ID</th>
    <th>Mascota</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Fecha</th>
    <th>Estado</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<tr>

    <td><?php echo $fila['id_postulacion']; ?></td>

    <td><?php echo $fila['nombre_mas']; ?></td>

    <td><?php echo $fila['nombre_pos']; ?></td>

    <td><?php echo $fila['correo_pos']; ?></td>

    <td><?php echo $fila['fecha_post']; ?></td>

    <td class="<?php echo strtolower($fila['estado']); ?>">
        <?php echo $fila['estado']; ?>
    </td>

</tr>

<?php } ?>

</table>

</body>
</html>