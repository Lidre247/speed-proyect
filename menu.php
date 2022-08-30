<?php

$servername ="localhost";
$database ="id19495764_restaurantecesde";
$username ="id19495764_alex";
$password ="Softwarea123*";

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
   
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alex</title>
    
</head>
<br>
<style>
.container-cards{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}
.container-cards .card{
	width: 300px;
	min-width: 300px;
	margin: 10px 15px;
}
.container-cards .card:hover{
	text-decoration: none;
}
.container-cards .card .card-img-top{
	height: 300px;
}
</style>

<body>
    <div class="container-fluid container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros platillos mÃ¡s populares</h3>
	    <div class="container-cards full-box">

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/platillos/platillo.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold"><?php echo $C; ?></h5>
	                <p class="card-text lead"><span class="badge bg-secondary">$<?php echo $C; ?> COP</span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/img/img_not_found.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">Nombre o titulo del platillo</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">$<?php echo $CH; ?> COP</span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./assets/platillos/platillo.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">Nombre o titulo del platillo</h5>
	                <p class="card-text lead"><span class="badge bg-secondary"><?php echo $A; ?></span></p>
	            </div>
	            <div class="card-body text-center">
	                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
	                &nbsp; &nbsp;
	                <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	    </div>
	    
	    <p class="text-center"><a href="menu.html" class="btn btn-primary"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a></p>
	</div>
</body>
</html>