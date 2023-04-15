<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Sistema de Pedidos</title>
</head>

<body>
    <div id="contenedor">

        <header>
        <center><h1>SISTEMA DE PEDIDOS</h1></center>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="index.php?ruta=registro">Registro</a></li>
                    <li><a href="index.php?ruta=realizar">Realizar</a></li>
                    <li><a href="index.php?ruta=ver">Ver</a></li>
                    <li><a href="index.php?ruta=finalizar">Finalizar</a></li>
                    <li><a href="index.php?ruta=salir">Salir</a></li>
                </ul>
            </nav>

            <div id="marca">
                <h1><a href="index.php?ruta=login">LOGIN</a></h1>
            </div>

        </header>

        <section id="contenido">
            <?php

            if (isset($_GET["ruta"])) {
                if (
                    $_GET["ruta"] == "registro" ||
                    $_GET["ruta"] == "realizar" ||
                    $_GET["ruta"] == "ver" ||
                    $_GET["ruta"] == "finalizar" ||
                    $_GET["ruta"] == "login" ||
                    $_GET["ruta"] == "salir"
                ) {
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            } else {
                include "paginas/realizar.php";
            }

            ?>
        </section>

    </div>

</body>

</html>