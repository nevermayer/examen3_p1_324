<?php


// encontrar su id por usuario (usuario unico)
$user_que_entro = $_SESSION['usuario'];

$sql="SELECT * FROM academico.alumno ";
$sql.="WHERE usuario='$user_que_entro'";
$resultadofi=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($resultadofi);
$id=$filafi["id"];
$nombrecompleto=$filafi["nombrecompleto"];
$coddepto=$filafi["coddepto"];
$codBachiller = $filafi["codBachiller"];
$cnacimiento = $filafi["cnacimiento"];
$cidentidad = $filafi["cidentidad"];
$nacionalidad = $filafi["nacionalidad"];
$fechanacimiento = $filafi['fechanacimiento'];
$ci = $filafi["ci"];

// echo $id;

// necesitamos obtener los datos para la certificacion
$sql = "select * from academico.certificado_conclusion ";
$sql.= " where id='".$id."' ";
$resultadocert = mysqli_query($con, $sql);
$filacert = mysqli_fetch_array($resultadocert);
$cartadecano = $filacert['cartadecano'];
$cedulaidentidad = $filacert['cedulaidentidad'];
$certificadocalficaciones = $filacert['certificadocalficaciones'];
$solicitudconclusionestudios = $filacert['solicitudconclusionestudios'];
$caratulatrabajogrado = $filacert['caratulatrabajogrado'];
$resolucionperfilgrado = $filacert['resolucionperfilgrado'];



?>