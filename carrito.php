<?php

setlocale (LC_TIME, "es_CO");
date_default_timezone_set("America/Bogota");
$FechaActual=date("Y-m-d H:i:s");

$precio=htmlentities(addslashes($_POST["precio"]));

$nombre=htmlentities(addslashes($_POST["cliente"]));

$prod=htmlentities(addslashes($_POST["prod"]));

$entrega=htmlentities(addslashes($_POST["entrega"]));

$proteina=htmlentities(addslashes($_POST["proteina"]));

$sopa=htmlentities(addslashes($_POST["sopa"]));

$cantidad=htmlentities(addslashes($_POST["cantidad"]));

$observaciones=htmlentities(addslashes($_POST["observaciones"]));

$servername ="localhost";
$database ="restaurantealex";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Conection failed: " .mysqli_connect_error());

}

$sql=$conn->query("SELECT * FROM PRODUCTOS");

while ($row = $sql->fetch_assoc()){
    $result[] = $row;
}


foreach ($result as $valores){

   $C = $valores["C"];
   $CH = $valores["CH"];
   $A = $valores["A"];
   $AP = $valores["AP"];
   $CR = $valores["CR"];
   }

$sql2=$conn->query("INSERT INTO PEDIDOS (ID, TURNO, NOMBRE, PRODUCTO, ENTREGA, CANTIDAD, PROTEINA, SOPA, ADICIONES, OBSERVACIONES, COMPROBANTE) 
                    VALUES ('','','$nombre','$prod','$entrega','$cantidad','$proteina','$sopa','','$observaciones','')");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alex.com</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="menu logo-nav">
        <a href="productos.php" class="logo">alex.com</a>
        <label class="menu-icon"><span class="fas fa-bars icomin"></span></label>
        <nav class="navigation">
          <ul>
            <li><a href="productos.php">Productos</a></li>
            <li class="search-icon">
              <input type="search" placeholder="Buscar">
              <label class="icon">
                <span class="fas fa-search"></span>
              </label>
            </li>
            <li class="car"><a href="carrito.html" >
              <svg class="bi bi-cart3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container-carrito">
              
                  <h2>Realizar Compra</h2>
                  <form id="procesar-pago" action="#" method="POST">
                           <div class="contenido titulo">
                          <label for="cliente" class="">Cliente :</label>
                          <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Ingrese su nombre" onkeypress="return sololetras(event)" onpaste="return false" required>
                      </div>
                      <div class="contenido titulo">
                          <label for="email" class="">Correo :</label>
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
                      </div>
                      <div class="contenido titulo">
                          <label for="email" class="">Hora de entrega :</label>
                          <input type="time" class="form-control" id="correo" name="entrega" placeholder="Ingrese la hora de entrega" required>
                      </div> -->
                      <div id="carrito" class="contenido">
                          <table class="tabla" id="lista-compra">
                              <thead>
                                  <tr>
                                      <th scope="col">Imagen</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Sub Total</th>
                                      <th scope="col">Eliminar</th>
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>  
                              <tr>
                                  <th colspan="4" scope="col" class="" style="visibility:hidden">SUB TOTAL :</th>
                                  <th scope="col" style="visibility:hidden">
                                      <p id="subtotal"></p>
                                  </th>
                                  <th colspan="4" scope="col" class="" style="visibility:hidden">IGV :</th>
                                  <th scope="col" style="visibility:hidden">
                                      <p id="igv"></p>
                                  </th>
                              </tr>
                              <tr>
                                  <th colspan="4" scope="col" class="">TOTAL :</th>
                                  <th scope="col">
                                    <input type="text" id="total" name="monto_total" readonly>
                                  </th>
                              </tr>
                          </table>
                      </div>

                      <div class="" id="loaders">
                          <img id="cargando" src="assets/img/cargando.gif" width="220">
                      </div>

                      <div class="botones-envio">
                              <a href="productos.html" class="button" id="volver">Seguir comprando</a>
                              <input type="submit" class="button" id="procesar-compra" onclick="validarCorreo(form.correo.value)"value="Realizar compra">
                      </div>
                      <input type="button"> <img href="img/efectivo.png" height ="80" width="100" /></button>
                  </form>

      </div>
  </main>
    
  <footer class="footer-section">
    <div class="copyright-area">
        <div class="container-footer">
            <div class="row-footer">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022, todos los derechos reservados <a href="index.html">Vainas Shop</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="productos.html">Productos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer> 



    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script  src="assets/js/scripts.js"></script>
    <script src="assets/js/carrito.js"></script>
    <script src="assets/js/pedido.js"></script>
    <script src="assets/js/compra.js"></script>

</body>
</html>

