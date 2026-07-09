<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] != 'MiRo@gmail.com'){
    echo "
    <script>
    alert('Acceso denegado');
    window.location='mascotausu.php';
    </script>
    ";
    exit();
}

include 'conexion_be.php';

$query = "
SELECT
m.*,
e.nombre_esp,
r.nombre_res
FROM mascota m
INNER JOIN especie e
ON m.id_especie = e.id_especie
INNER JOIN rescatista r
ON m.id_rescatista = r.id_rescatista
";

$resultado = mysqli_query($conexion,$query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Administrar Mascotas</title>

<link rel="stylesheet" href="mascota.css">
<link rel="stylesheet" href="admin_mascotas.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

        <a href="mascotausu.php">
            Adoptar
        </a>

        <a href="historial_postulaciones.php">
            Mis Postulaciones
        </a>

        <a href="historial_donaciones.php">
            Mis Donaciones
        </a>

        <a>
            Bienvenido,
            <?php echo $_SESSION['nombre']; ?>
        </a>


        <a href="admin.php" class="activo">
            Panel Admin
        </a>

        <button
        class="registro-btn"
        onclick="window.location.href='cerrar_sesion.php'">
            Cerrar Sesión
        </button>

    </nav>

</header>


<div class="admin-container">

    <div class="titulo-admin">

        <h1>
            🐾 Administrar Mascotas
        </h1>

        <p>
            Gestiona las mascotas registradas en YourNextPet
        </p>

    </div>

    <a href="agregar_mascota.php" class="btn-agregar">
        <i class="fa-solid fa-plus"></i>
        Agregar Mascota
    </a>

    <div class="tabla-card">

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Raza</th>
                    <th>Especie</th>
                    <th>Rescatista</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>

            <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                <tr>

                    <td>
                        <?php echo $fila['id_mascota']; ?>
                    </td>

                    <td>

                        <img
                        class="img-mascota"
                        src="uploads/<?php echo $fila['imagen']; ?>">
                         

                    </td>

                    <td>
                        <?php echo $fila['nombre_mas']; ?>
                    </td>

                    <td>
                        <?php echo $fila['edad']; ?>
                    </td>

                    <td>
                        <?php echo $fila['sexo']; ?>
                    </td>

                    <td>
                        <?php echo $fila['raza']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre_esp']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre_res']; ?>
                    </td>

                    <td>

                        <a
                        class="btn-editar"
                        href="editar_mascota.php?id=<?php echo $fila['id_mascota']; ?>">
                            <i class="fa-solid fa-pen"></i>
                            Editar
                        </a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>