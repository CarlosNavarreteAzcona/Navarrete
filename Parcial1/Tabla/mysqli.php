<?php
$servidor="localhost";
$basedatos="empresa";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta="select * from empleado";
$registros= mysqli_query($con,$consulta) or die("problemas");

$result=mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);



?>