<?php


$titulobachiller1;
$certinaci;
$certidentidad;


// variables para certificacion
// $cartadecano;
// $cedulaidentidad;
// $certificadocalficaciones;
// $solicitudconclusionestudios;
// $caratulatrabajogrado;
// $resolucionperfilgrado;
$id_certificacion;
?>
<div class="card">
                <h3 class="card-header">DATOS DEL ESTUDIANTE</h3>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        
                        <th>Carnet de identidad</th>
                        <th>Nombre completo</th>
                        <th>cod. departamento</th>
                        <th>fecha nacimiento</th>
                        <th>nacionalidad</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-1">
                    <?php 
                        while ($fila=mysqli_fetch_array($resultadofi))
                        {
                            echo "<tr>";
                            echo "<td>".$fila['ci']."</td>";
                            echo "<td>".$fila['nombrecompleto']."</td>";
                            echo "<td>".$fila['coddepto']."</td>";
                            echo "<td>".$fila['fechanacimiento']."</td>";
                            // $titulobachiller1 = $fila['codBachiller'];
                            // $certinaci = $fila['cnacimiento'];
                            // $certidentidad = $fila['cidentidad'];
                            $id_certificacion = $fila['id'];
                            


                            echo "<td>".$fila['nacionalidad']."</td>";
                            echo "</tr>";
                        }
                    ?>
                      
                    </tbody>
                  </table>
                        <br/>
                  <h3 class="card-header">MATERIAS APROBADAS DEL ESTUDIANTE</h3>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        
                        <th>MATERIA</th>
                        <th>NOTA</th>
                        <th>PERIODO</th>
                        <th>GESTION</th>
                        <!-- <th>nacionalidad</th> -->
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-1">
                    <?php 
                        while ($fila=mysqli_fetch_array($resultadomaterias))
                        {
                            echo "<tr>";
                            echo "<td>".$fila['materia']."</td>";
                            echo "<td>".$fila['nota']."</td>";
                            echo "<td>".$fila['periodo']."</td>";
                            echo "<td>".$fila['gestion']."</td>";
                            echo "</tr>";
                        }
                    ?>
                      
                    </tbody>
                  </table>

                  
                  <h3 class="card-header"> <br/><br/> DOCUMENTOS DEL ESTUDIANTE</h3>
                  
                  

                </div>


                
                <?php 
                
                  $sql="SELECT * FROM academico.certificado_conclusion ";
                  $sql.="WHERE id='$id_certificacion'";
                  $resultadocerti=mysqli_query($con, $sql);
                  $filacerti = mysqli_fetch_array($resultadocerti);
                  // print_r($filacerti);
                ?>

                
                  <div class='card'>
                    <div class="col-md-12 mb-4" align='center'>
                      <div class="card">
                        <h5 class="card-header">Carta al decano de la Facultad (FCPN)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/carta_decano/".$filacerti['cartadecano']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                        <h5 class="card-header">Fotografia de la Cedula de Identidad (PDF)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/cedula_identidad/".$filacerti['cedulaidentidad']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                        <h5 class="card-header">Certificado de calficaciones (Kardex Facultativo) (PDF)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/certificado_calficaciones/".$filacerti['certificadocalficaciones']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                        <h5 class="card-header">Solicitud de emision de certificado de conclusion de estudios (PDF)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/solicitud_conclusion_estudios/".$filacerti['solicitudconclusionestudios']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                        
                        <h5 class="card-header">Caratula del Trabajo de Grado (PDF)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/caratula_trabajo_grado/".$filacerti['caratulatrabajogrado']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                        <h5 class="card-header"> resolución de aprobación de perfil de grado (PDF)</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificacion/resolucion_perfil_grado/".$filacerti['resolucionperfilgrado']."' height='450' width='50%'>  </embed>  </th>";
                          ?>
                        </div>

                
                      </div>

                    </div>

                    
                  
                  </div>
                  
                
                <!-- <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <?php 
                      
                        // para certificacion
                        $sql="SELECT * FROM academico.certificado_conclusion ";
                        $sql.="WHERE id='$id_certificacion'";
                        $resultadocerti=mysqli_query($con, $sql);
                        $filacerti = mysqli_fetch_array($resultadocerti);
                      ?>
                      <tr>
                        <th>Carta al decano de la Facultad (FCPN) </th>
                        <?php 
                          echo "<th> <embed type='application/pdf'  src='certificacion/carta_decano/1.pdf' height='100%' width='100%'>  </embed>  </th>";
                        ?>
                      </tr>


                      <tr>
                        <th>Cedula de Identidad (PDF) </th>
                        <?php 
                          echo "<th>".$filacerti['cedulaidentidad']."</th>";
                        ?>
                      </tr>

                      <tr>
                        <th>Certificado de calficaciones</th>
                        <?php 
                          echo "<th>".$filacerti['certificadocalficaciones']."</th>";
                        ?>
                      </tr>

                      <tr>
                        <th>Solicitud de emision de certificado de conclusion de estudios (PDF)</th>
                        <?php 
                          echo "<th>".$filacerti['solicitudconclusionestudios']."</th>";
                        ?>
                      </tr>

                      <tr>
                        <th>Caratula del Trabajo de Grado (PDF)</th>
                        <?php 
                          echo "<th>".$filacerti['caratulatrabajogrado']."</th>";
                        ?>
                      </tr>

                      <tr>
                        <th>resolución de aprobación de perfil de grado (PDF)</th>
                        <?php 
                          echo "<th>".$filacerti['resolucionperfilgrado']."</th>";
                        ?>
                      </tr>

                    </thead>
                  </table>
                  <h6 class="card-header"> <br/><br/> </h6>
                  
                  

                </div> -->
             
              
              
              </div>
                <p class="card-header" align='center'>
                Si los datos estan llenados correctamente, responda <strong>SI</strong>, caso contrario <strong>NO</strong>

                </p>
              </div>

    <!-- <h1>segudno revision.inc.php</h1> -->

        

    
   