<!DOCTYPE html>
<html>
<head>
    <title>Agregar Profesor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="contenedor">

    <h2>Agregar Profesor</h2>

    <form action="insertar.php" method="POST">

        <!-- Nombre y apellido lado a lado -->
        <div class="fila">
            <div class="campo">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Juan" required>
            </div>
            <div class="campo">
                <label>Apellido</label>
                <input type="text" name="apellido" placeholder="Perez" required>
            </div>
        </div>

        <div class="campo">
            <label>DNI</label>
            <input type="number" name="dni" placeholder="12345678" required>
        </div>

        <div class="campo">
            <label>Email</label>
            <input type="email" name="email" placeholder="juan@email.com" required>
        </div>

        <input type="submit" value="Guardar profesor">

    </form>
</div>

<a href="consultas.php" class="boton-consultas">Ver consultas</a>

</body>
</html>
