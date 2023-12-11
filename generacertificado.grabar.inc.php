<?php 

$usuario_sesion = $_SESSION['usuario'];
$nro_tramite = $_POST['nro_tramite'];
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

// echo $codigo;


$estado_valido = 1;

if($_FILES['genera_certifiado']['error']){
    $estado_valido = 0;
}


if($estado_valido == 1){
    $nombre_archivo_original = $_FILES['genera_certifiado']['name']; // recuperando nombre
    $extension_archivo = $type=substr($nombre_archivo_original,strrpos($nombre_archivo_original,'.')+1);
    $nuevo_nombre_generado = $codigo.".".$extension_archivo;
    $ruta_temporal = $_FILES['genera_certifiado']['tmp_name']; // es como copiar y pegar
    $ruta_a_guardar = "certificado_generado/".$nuevo_nombre_generado;
    // ahora hay que mover el archivo que se esta subiendo
    move_uploaded_file($ruta_temporal, $ruta_a_guardar);


    $sql = "select count(*) as canti from academico.certificado_generado where id='".$codigo."'";
    $canti = mysqli_query($con, $sql);
    $fff = mysqli_fetch_array($canti);
    print_r($fff);
    if($fff['canti'] > 0){
        $sql = "update academico.certificado_generado set ";
        $sql.= " id='".$codigo."', nombre_certificado='".$nuevo_nombre_generado."', nro_tramite='".$nro_tramite."' ";
        $sql.= " where id='".$codigo."';";
        
    }else{
        $sql = "insert into academico.certificado_generado ";
        $sql.= " values ($codigo,'".$nuevo_nombre_generado."', '".$nro_tramite."');";
    }
    echo $sql;
    mysqli_query($con, $sql);
}



?>