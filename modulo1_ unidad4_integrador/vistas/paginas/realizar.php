<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar</title>
</head>

<body>

    <center> <h1 class="tituloPagina"> REALIZAR PEDIDO </h1> </center>

    <section class="contenedor_carga">

        <form action="cargar_pedido.php" method="post" class="formulario">

            <input type="text" name="nombre" placeholder="Pedido a procesar">
            <input type="number" name="valor" placeholder="Valor del producto">
            <input type="text" name="imagen" placeholder="Imagen del producto">
            <textarea name="descripcion" placeholder="Descripcion" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="CARGAR PEDIDO">

        </form>

</body>

</html>