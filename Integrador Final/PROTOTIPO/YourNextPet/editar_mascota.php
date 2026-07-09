
<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] != 'MiRo@gmail.com'){
    header("Location: mascotausu.php");
    exit();
}

include 'conexion_be.php';

$id = $_GET['id'];

$query = "
SELECT *
FROM mascota
WHERE id_mascota='$id'
";

$resultado = mysqli_query($conexion,$query);

$mascota = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Editar Mascota</title>

<link rel="stylesheet" href="editar_mascota.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="container">

    <div class="card">

        <div class="top-card">

            <div class="circle-icon">
                🐾
            </div>

            <h1>Editar Mascota</h1>

            <p>
                Modifica la información de la mascota
            </p>

        </div>

        <form
        action="actualizar_mascota_be.php"
        method="POST"
        class="formulario">

            <input
            type="hidden"
            name="id_mascota"
            value="<?php echo $mascota['id_mascota']; ?>">

            <label>Nombre</label>

            <input
            type="text"
            name="nombre_mas"
            value="<?php echo $mascota['nombre_mas']; ?>"
            required>

            <label>Edad</label>

            <input
            type="number"
            id="edad"
            name="edad"
            min="0"
            value="<?php echo $mascota['edad']; ?>"
            required>

            <label>Sexo</label>

            <select name="sexo">

                <option
                value="Macho"
                <?php if($mascota['sexo']=="Macho") echo "selected"; ?>>
                Macho
                </option>

                <option
                value="Hembra"
                <?php if($mascota['sexo']=="Hembra") echo "selected"; ?>>
                Hembra
                </option>

            </select>

            <label>Raza</label>

            <input
            type="text"
            name="raza"
            value="<?php echo $mascota['raza']; ?>">

            <label>Descripción</label>

            <textarea
            name="descripcion"><?php echo $mascota['descripcion']; ?></textarea>

            <label>Imagen</label>

            <input
            type="text"
            name="imagen"
            value="<?php echo $mascota['imagen']; ?>">

            <label>Personalidad</label>

            <input
            type="text"
            name="personalidad"
            value="<?php echo $mascota['personalidad']; ?>">

            <label>Especie</label>

            <select name="id_especie">

                <option value="1"
                <?php if($mascota['id_especie']==1) echo "selected"; ?>>
                Perro
                </option>

                <option value="2"
                <?php if($mascota['id_especie']==2) echo "selected"; ?>>
                Gato
                </option>

            </select>

            <label>Rescatista</label>

            <select name="id_rescatista">

                <option value="2"
                <?php if($mascota['id_rescatista']==2) echo "selected"; ?>>
                Rosa (PetKausas)
                </option>

                <option value="3"
                <?php if($mascota['id_rescatista']==3) echo "selected"; ?>>
                Lizbet (PorAmorYParaAmar)
                </option>

                <option value="4"
                <?php if($mascota['id_rescatista']==4) echo "selected"; ?>>
                Ximena (VidaDigna)
                </option>

            </select>

            <button
            type="submit"
            class="btn-guardar">

                <i class="fa-solid fa-floppy-disk"></i>
                Actualizar Mascota

            </button>

        </form>

    </div>

</div>

<script>
    const montoInput = document.getElementById("edad");

edad.addEventListener("input", function () {

    // Elimina todo lo que no sea número
    this.value = this.value.replace(/[^0-9]/g, '');

});
</script>

</body>
</html>

