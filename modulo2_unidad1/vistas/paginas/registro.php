
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

    <input type="submit" value="Registrarse" class="enviar"> 
   
    </form>
</div>