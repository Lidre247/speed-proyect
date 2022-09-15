<?php

$servername ="localhost";
$database ="restaurantealex";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Conection failed: " .mysqli_connect_error());

}

$sql=$conn->query("SELECT * FROM PRODUCTOS WHERE ID = 7");

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

$sql2=$conn->query("SELECT * FROM PRODUCTOS WHERE ID = 8");

while ($row = $sql2->fetch_assoc()){
    $result[] = $row;
}


foreach ($result as $valores){

   $CASERITO = $valores["C"];
   $CASERITOHUEVOS = $valores["CH"];
   $ASADITO = $valores["A"];
   $APLUS = $valores["AP"];
   $CHICHARRON = $valores["CR"];
   }




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="menu logo-nav">
        <a href="index.html" class="logo">Vainas Shop</a>
        <label class="menu-icon"><span class="fas fa-bars icomin"></span></label>
        <nav class="navigation">
          <ul>
            <li><a href="../gallery.html">Volver al Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li class="search-icon">
              <input type="search" placeholder="Buscar">
              <label class="icon">
                <span class="fas fa-search"></span>
              </label>
            </li>
            <li class="car" >
              <svg class="bi bi-cart3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
                <div id="carrito" class="dropdown-menu">
                  <table id="lista-carrito" class="table">
                      <thead>
                          <tr>
                              <th>Imagen</th>
                              <th>Nombre</th>
                              <th>Precio</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody></tbody>
                  </table>

                  <a href="#" id="vaciar-carrito" class="button-vaciar">Vaciar Carrito</a>
                  <a href="#" id="procesar-pedido" class="button-pedido">Procesar Compra</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>


<main>

        <div class="modal" id="modal">
          <div class="modal-content">
            <img src="" alt="" class="modal-img" id="modal-img">
          </div>
          <div class="modal-boton" id="modal-boton">X</div>
        </div>

        <div class="container-productos" id="lista-productos">

          <div class="card">
            <img src="assets/img/guiapix-70XxXA0jmwwU.jpg" class="card-img">
            <h5><?php echo $CASERITO; ?></h5>
            <p>COP <small class="precio"><?php echo $C; ?></small></p>
            <a href="#" class="button agregar-carrito" data-id="1">Comprar</a>
          </div>
          <div class="card">
            <img src="assets/img/descarga (1).jpg" class="card-img">
            <h5><?php echo $CASERITOHUEVOS; ?></h5>
            <p>COP <small class="precio"><?php echo $CH; ?></small></p>
            <a href="#" class="button agregar-carrito" data-id="2">Comprar</a>
          </div>
          <div class="card">
            <img src="assets/img/asado.jpg" class="card-img">
            <h5><?php echo $ASADITO; ?></h5>
            <p>COP <small class="precio"><?php echo $A; ?></small></p>
            <a href="#" class="button agregar-carrito" data-id="3">Comprar</a>
          </div>

          <div class="card">
            <img src="assets/img/si.jpg" class="card-img">
            <h5><?php echo $APLUS; ?></h5>
            <p>COP <small class="precio"><?php echo $AP; ?></small></p>
            <a href="#" class="button agregar-carrito" data-id="4">Comprar</a>
          </div>
          <div class="card">
            <img src="assets/img/descarga.jpg" class="card-img">
            <h5><?php echo $CHICHARRON; ?></h5>
            <p>COP <small class="precio"><?php echo $CR; ?></small></p>
            <a href="#" class="button agregar-carrito" data-id="5">Comprar</a>
          </div>
         <!--  <div class="card">
            <img src="assets/img/nikeca.webp" class="card-img">
            <h5>Nike camiseta hombre Just Do It</h5>
            <p>COP <small class="precio">55000</small></p>
            <a href="#" class="button agregar-carrito" data-id="6">Comprar</a>
          </div>

          <div class="card">
            <img src="assets/img/ropadeportivamujer-babalu-2021-3-94203-4.jpg" class="card-img">
            <h5>Nike falda deportiva mujer</h5>
            <p>COP <small class="precio">40000</small></p>
            <a href="#" class="button agregar-carrito" data-id="7">Comprar</a>
          </div>
          <div class="card">
            <img src="assets/img/HOMBRE.webp" class="card-img">
            <h5>Adidas Pantalon corto
            </h5>
            <p>COP <small class="precio">120000</small></p>
            <a href="#" class="button agregar-carrito" data-id="8">Comprar</a>
          </div> -->
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
    <script  src="assets/js/scripts.js"></script>
    <script src="assets/js/carrito.js"></script>
    <script src="assets/js/pedido.js"></script>
    <script src="assets/js/compra.js"></script>
</body>
</html>
