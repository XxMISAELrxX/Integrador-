<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Mascota</title>

<link rel="stylesheet" href="registrar_mascota.css">
</head>
<body>

<div class="container">

    <div class="top-card">
        <div class="icono">🐾</div>
        <h1>Registrar Mascota</h1>
        <p>Agrega una nueva mascota al sistema</p>
    </div>

    <form action="registro_mascota_be.php" method="POST" id="formMascota" enctype="multipart/form-data">

        <label>Nombre</label>
        <input type="text" name="nombre_mas" required>

        <label>Edad</label>
        <input type="number" id="edad" name="edad" min="0" required>

        <label>Sexo</label>
        <select name="sexo">
            <option value="M">Macho</option>
            <option value="F">Hembra</option>
        </select>

        <label>Raza</label>
        <input type="text" name="raza">

        <label>Descripción</label>
        <textarea name="descripcion"></textarea>

        Imagen:
        <input type="file" name="imagen" accept="image/*">

        <label>Personalidad</label>
        <input type="text" name="personalidad">

        <label>Especie</label>
        <select name="id_especie">
            <option value="1">Perro</option>
            <option value="2">Gato</option>
        </select>

        <label>Rescatista</label>
        <select name="id_rescatista">
            <option value="2">Rosa (PetKausas)</option>
            <option value="3">Lizbet (PorAmorYParaAmar)</option>
            <option value="4">Ximena (VidaDigna)</option>
        </select>

        <button type="submit" class="btn-guardar">
            Guardar Mascota
        </button>

    </form>

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