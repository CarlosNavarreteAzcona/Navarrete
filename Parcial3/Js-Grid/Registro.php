<?php
$servidor="localhost";
$basedatos="empresa";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se puede conectar a la base de datos");
$consulta="select *  from empleado";
$registro= mysqli_query($con,$consulta) or die("Problemas detectado");

$result=mysqli_fetch_all($registro);
mysqli_close($con);
echo json_encode($result);
?>