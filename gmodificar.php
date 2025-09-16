<?php
if (isset($_GET["Aceptar"]))
{
	$ci=$_GET["CI"];
	$nombre=$_GET["nombre"];
	$apellido=$_GET["apellido"];
	$db=mysqli_connect('localhost','root','','sitio');
	$sql="UPDATE persona set nombre='".$nombre."',apellido='".$apellido."' WHERE ci=".$ci;
	$resultado =mysqli_query($db,$sql);
}
header("Location: index.php");
?>