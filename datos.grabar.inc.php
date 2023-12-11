
<?php
$id=$_POST["id"];
$nombrecompleto=$_POST["nombrecompleto"];
$coddepto=$_POST["coddepto"];
// $codBachiller=$_POST["codBachiller"];
// $cnacimiento=$_POST["cnacimiento"];
// $cidentidad=$_POST["cidentidad"];
$nacionalidad=$_POST["nacionalidad"];
$fechanacimiento=$_POST['fechanacimiento'];
$ci = $_POST['ci'];

// echo "para graba ".$id."<br/>";
// echo "para graba ".$nombrecompleto."<br/>";
// echo "para graba ".$coddepto."<br/>";
// echo "para graba ".$codBachiller."<br/>";
// echo "para graba ".$cnacimiento."<br/>";
// echo "para graba ".$cidentidad."<br/>";
// echo "para graba ".$nacionalidad."<br/>";

// $nombre_archivo_original = $_FILES['certBachiller']['name']; // recuperando nombre
// $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
// $nuevo_nombre_bachiller = $ci.".".$extension_archivo;
// $ruta_temporal = $_FILES['certBachiller']['tmp_name']; // es como copiar y pegar
// $ruta_a_guardar = "archivos/certificado_bachiller/".$nuevo_nombre_bachiller;
// // ahora hay que mover el archivo que se esta subiendo
// move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// NACIEMIETO
// $nombre_archivo_original = $_FILES['certNacimiento']['name']; // recuperando nombre
// $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
// $nuevo_nombre_nacimiento = $ci.".".$extension_archivo;
// $ruta_temporal = $_FILES['certNacimiento']['tmp_name']; // es como copiar y pegar
// $ruta_a_guardar = "archivos/certificado_nacimiento/".$nuevo_nombre_nacimiento;
// // ahora hay que mover el archivo que se esta subiendo
// move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// $nombre_archivo_original = $_FILES['certIdentidad']['name']; // recuperando nombre
// $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
// $nuevo_nombre_identidad = $ci.".".$extension_archivo;
// $ruta_temporal = $_FILES['certIdentidad']['tmp_name']; // es como copiar y pegar
// $ruta_a_guardar = "archivos/certificado_identidad/".$nuevo_nombre_identidad;
// // ahora hay que mover el archivo que se esta subiendo
// move_uploaded_file($ruta_temporal, $ruta_a_guardar);

$estado_valido = 1;

if($_FILES['cartadecano']['error']){
    $estado_valido = 0;
}
if($_FILES['cedulaidentidad']['error']){
    $estado_valido = 0;
}
if($_FILES['certificadocalficaciones']['error']){
    $estado_valido = 0;
}
if($_FILES['solicitudconclusionestudios']['error']){
    $estado_valido = 0;
}
if($_FILES['caratulatrabajogrado']['error']){
    $estado_valido = 0;
}
if($_FILES['resolucionperfilgrado']['error']){
    $estado_valido = 0;
}
// recuperar la direccion de archivos y guardar
// para CARTA DECANO


if($estado_valido == 1){
    
$nombre_archivo_original = $_FILES['cartadecano']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_cartadecano = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['cartadecano']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/carta_decano/".$nuevo_nombre_cartadecano;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);


// para FOTO CEDULA DE IDENTIDAD
$nombre_archivo_original = $_FILES['cedulaidentidad']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_cedulaidentidad = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['cedulaidentidad']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/cedula_identidad/".$nuevo_nombre_cedulaidentidad;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// para CERTIFICADO DE CALFICACIONES
$nombre_archivo_original = $_FILES['certificadocalficaciones']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_certificadocalficaciones = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['certificadocalficaciones']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/certificado_calficaciones/".$nuevo_nombre_certificadocalficaciones;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// para SOLICITUD CONCLUSION DE ESTUDIOS
$nombre_archivo_original = $_FILES['solicitudconclusionestudios']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_solicitudconclusionestudios = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['solicitudconclusionestudios']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/solicitud_conclusion_estudios/".$nuevo_nombre_solicitudconclusionestudios;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// para CARATULA DE TRABAJO DE GRADO
$nombre_archivo_original = $_FILES['caratulatrabajogrado']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_caratulatrabajogrado = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['caratulatrabajogrado']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/caratula_trabajo_grado/".$nuevo_nombre_caratulatrabajogrado;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);

// para RESOLUCION PERFIL DE GRADO
$nombre_archivo_original = $_FILES['resolucionperfilgrado']['name']; // recuperando nombre
$extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
$nuevo_nombre_resolucionperfilgrado = $id.".".$extension_archivo;
$ruta_temporal = $_FILES['resolucionperfilgrado']['tmp_name']; // es como copiar y pegar
$ruta_a_guardar = "certificacion/resolucion_perfil_grado/".$nuevo_nombre_resolucionperfilgrado;
// ahora hay que mover el archivo que se esta subiendo
move_uploaded_file($ruta_temporal, $ruta_a_guardar);


}


$sql="UPDATE academico.alumno ";
$sql.="SET nombrecompleto='".$nombrecompleto."', ";
$sql.="coddepto='".$coddepto."', ";
// $sql.="codBachiller='".$nuevo_nombre_bachiller."', ";
// $sql.="cnacimiento='".$nuevo_nombre_nacimiento."', ";
// $sql.="cidentidad='".$nuevo_nombre_identidad."', ";
$sql.="nacionalidad='".$nacionalidad."', ";
$sql.="fechanacimiento='".$fechanacimiento."', ";
$sql.="ci='".$ci."' ";
$sql.="WHERE id=".$id;
// echo $sql;
mysqli_query($con, $sql);


// actualizando para la certificacion

if($estado_valido == 1){

    $sql = "select count(*) as canti from academico.certificado_conclusion where id='".$id."'";
    $canti = mysqli_query($con, $sql);
    $fff = mysqli_fetch_array($canti);
    if($fff['canti'] > 0){
        $sql = "update academico.certificado_conclusion set ";
        $sql.= " cartadecano='".$nuevo_nombre_cartadecano."', cedulaidentidad='".$nuevo_nombre_cedulaidentidad."', certificadocalficaciones='".$nuevo_nombre_certificadocalficaciones."', solicitudconclusionestudios='".$nuevo_nombre_solicitudconclusionestudios."', caratulatrabajogrado='".$nuevo_nombre_caratulatrabajogrado."', resolucionperfilgrado='".$nuevo_nombre_resolucionperfilgrado."' ";
        $sql.= " where id='".$id."';";        
    }else{
        $sql = "insert into academico.certificado_conclusion ";
        $sql.= " values ($id,'".$nuevo_nombre_cartadecano."', '".$nuevo_nombre_cedulaidentidad."', '".$nuevo_nombre_certificadocalficaciones."', '".$nuevo_nombre_solicitudconclusionestudios."', '".$nuevo_nombre_caratulatrabajogrado."', '".$nuevo_nombre_resolucionperfilgrado."');";
    }
    mysqli_query($con, $sql);
}



