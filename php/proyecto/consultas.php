<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Consultas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="contenedor">
    <h2>Consultas</h2>

  
    <div class="consulta-bloque">
        <p class="consulta-etiqueta">Consulta 1</p>
        <h3 class="consulta-titulo">Apellidos que empiezan con G</h3>
        <?php
        $resultado = $conexion->query("SELECT Nombre, Apellido FROM profesores WHERE Apellido LIKE 'G%'");

        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<thead><tr><th>Nombre</th><th>Apellido</th></tr></thead>";
            echo "<tbody>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $fila['Nombre'] . "</td><td>" . $fila['Apellido'] . "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='sin-datos'>No se encontraron resultados.</p>";
        }
        ?>
    </div>

  
    <div class="consulta-bloque">
        <p class="consulta-etiqueta">Consulta 2</p>
        <h3 class="consulta-titulo">DNI de Juan Perez</h3>
        <?php
        $resultado = $conexion->query("SELECT DNI FROM profesores WHERE Nombre='Juan' AND Apellido='Perez'");
        $fila = $resultado->fetch_assoc();

        if ($fila) {
            echo "<div class='dato-grande'>" . $fila['DNI'] . "</div>";
        } else {
            echo "<p class='sin-datos'>No encontrado</p>";
        }
        ?>
    </div>

    <div class="consulta-bloque">
        <p class="consulta-etiqueta">Consulta 3</p>
        <h3 class="consulta-titulo">Nombre y Apellido del DNI 45789234</h3>
        <?php
        $resultado = $conexion->query("SELECT Nombre, Apellido FROM profesores WHERE DNI=45789234");
        $fila = $resultado->fetch_assoc();

        if ($fila) {
            echo "<div class='dato-grande'>" . $fila['Nombre'] . " " . $fila['Apellido'] . "</div>";
        } else {
            echo "<p class='sin-datos'>No encontrado</p>";
        }
        ?>
    </div>

</div>

<a href="formulario.php" class="boton-volver">Volver</a>

</body>
</html>

<?php $conexion->close(); ?>
