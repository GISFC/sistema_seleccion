<?php
$hostname="localhost";
//$hostname="192.160.0.75";
$username="root";
$password="123456";
$dbname="sistema_seleccion";

$con=mysqli_connect("host=$hostname user=$username password=$password dbname=$dbname");

if(!$con){
    echo "<p>Error de conexion</p>";
}
else{
	echo "Conexión exitosa";
}
mysqli_close($enlace);

?>