<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<center> <h1 class="tituloPagina"> REGISTRO </h1> </center>

<div>
    <form action="" method="post">
    <div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="registroNombre">

    <label for="email">Email:</label>
    <input type="text" id="email" name="registroEmail">

    <label for="pwd">Contraseña:</label>
    <input type="text" id="pwd" name="registroPassword">
    </div>

    <?php

    $registro = ControladorFormularios::ctrRegistro();

    ?>

    <input type="submit" value="enviar" class="enviar">

    </form>
</div>


</body>
</html>