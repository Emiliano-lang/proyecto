<?php
include("conexion.php");

// Recibo los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];

// Armo la consulta SQL
$sql = "INSERT INTO profesores (Nombre, Apellido, DNI, email)
VALUES ('$nombre', '$apellido', '$dni', '$email')";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="mensaje">

<?php
// Ejecuto la consulta y muestro el resultado
if ($conexion->query($sql) === TRUE) {
    echo "<h2 class='exito'>Profesor agregado correctamente</h2>";
    echo "<p>" . $nombre . " " . $apellido . " fue registrado.</p>";
} else {
    echo "<h2 class='error'>Error al agregar</h2>";
}
?>

<a href="formulario.php">Volver</a>

</div>

</body>
</html>

<?php $conexion->close(); ?>
