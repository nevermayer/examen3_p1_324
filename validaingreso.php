<?php 
$link=mysqli_connect("localhost","root","","workflow");
$usuario=$_GET["usuario"];
$clave=$_GET["clave"];
session_start();
$resultado=mysqli_query($link, "select count(*) as cantidad from academico.usuario where ci='$usuario' and clave='$clave'");
$fila=mysqli_fetch_array($resultado);
if ($fila["cantidad"]>0) 
{
	$resultado=mysqli_query($link, "select *from academico.usuario where ci='$usuario' and clave='$clave'");
	$fila=mysqli_fetch_array($resultado);
	$_SESSION["rol"]=$fila["rol"];
	$_SESSION["ci"]=$fila["ci"];
	header("Location: bandejae.php");
	exit;
}
else 
{
 header("Location: index.php");
 exit;
}
?>