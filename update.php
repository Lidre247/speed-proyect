<?php

//session_start();
//if(!isset($_SESSION["usuario"])){
//    header("location:index.php");
//}
setlocale (LC_TIME, "es_CO");
date_default_timezone_set("America/Bogota");
$FechaActual=date("Y-m-d H:i:s");

$servername ="localhost";
$database ="id19495764_restaurantecesde";
$username ="id19495764_alex";
$password ="Software12345*";


$conn = mysqli_connect($servername, $username, $password, $database);

//$NFT=$datos['NFT'];
//$datos=$_POST;
$NFT = $_GET["PRODUCTOS"];
$documento=$_GET["login"];
$value = 1;
$C = "C".$NFT;
//$DOCUMENTO=$datos['DOCUMENTO'];
$sql=$conn->query("UPDATE PRODUCTO SET $C = '$value' WHERE ID = '$documento'");

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
    <input type="text" name="cambio precio" value="">
     <input type="submit" value="Cambiar precio">
    
</body>
</html>
