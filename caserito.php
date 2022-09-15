<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>Title page</title>  

<link href="./main.82cfd66e.css" rel="stylesheet"></head>

<body>

<section class="info">
        <div class="img">
            <img src="" alt="Imagen del producto">
        </div>
        <div>
            <h4><?php echo $prod; ?></h4>
            <form action="menu2.php" method="POST">
            <h4>Escoge tu Proteina</h4>
                    <select name="proteina" required>
                        <option selected="selected"></option>
                        <option>Cerdo</option>
                        <option>Pollo</option>
                    </select>

            <h4>Escoge tu Sopa</h4>
            <select name="sopa" required>
                <option selected="selected"></option>
                <option>Sopa</option>
                <option>Frijoles</option>
            </select>

            <h4>Agrega tus observaciones</h4>
                <input type="text" name="observaciones" value="Observaciones" required></input>

            <h4>Cantidad</h4>
                <input type="number" name="cantidad" required>

                <h4>Precio: $<?php echo $precio; ?> COP</h4>
            <br>
            <a href="#" class="button agregar-carrito" data-id="1">Comprar</s></a>
            </form>
        </div>
    </section></body>

</html>