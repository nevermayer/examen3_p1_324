<!-- <h1>Primero revision.datos.inc.php</h1> -->

<?php


$usuario_sesion = $_SESSION['usuario'];

// buscando quien es el unico usuario en el sistem
$sql = "select * from rol where descipcion='Alumno'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// ahora en rolusuario buscar al codUsuario
$sql = "select * from rolusuario where IdRol='".$fil['id']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// print_r($fil);
// ahora si buscando el handle del usuario
$sql = "select * from usuario where id='".$fil['IdUsuario']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);
// print_r($fil);
$usuario_en_el_sistema =  $fil['descripcion']; // es unico
$codigo = $fil['id'];

// halando las materais
$sql="SELECT * FROM academico.notas ";
$sql.="WHERE id_usuario='$codigo'";
$resultadomaterias = mysqli_query($con, $sql);

// echo $codigo;

// include "conexion.inc.php";
$user_que_entro = $_SESSION['usuario'];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];

// echo $flujo;
// echo $proceso;
// echo $nro_tramite;

$sql="SELECT * FROM flujotramite ";
$sql.="WHERE Flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' and fechafin is null " ;
$result=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($result);
// print_r($filafi);


$del_que_tiene_que_hacer = $filafi['usuario_tarea'];

// echo $del_que_tiene_que_hacer;

$sql="SELECT * FROM academico.alumno ";
$sql.="WHERE usuario='$del_que_tiene_que_hacer'";
$resultadofi=mysqli_query($con, $sql);





// para certificacion





?>
