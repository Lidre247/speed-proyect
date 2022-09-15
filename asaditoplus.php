<?
setlocale (LC_TIME, "es_CO");
    date_default_timezone_set("America/Bogota");
    $FechaActual=date("Y-m-d H:i:s");
$servername ="localhost";
    $database ="restaurantealex";
    $username ="root";
    $password ="";

    $prod=htmlentities(addslashes($_POST(producto)));
    $precio=htmlentities(addslashes($_POST(precio)));
    $sopa=htmlentities(addslashes($_POST(sopa)));
    $proteina=htmlentities(addslashes($_POST(proteina)));

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    if (!$conn){
        die("Conection failed: " .mysqli_connect_error());

    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

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
            <input type="submit" value="Comprar" action="info.php" required/> 
            </form>
        </div>
    </section>
