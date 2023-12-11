
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h2 class="mb-0">Datos del Estudiante</h2>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Carnet de Identidad: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='ci' value= '<?php echo $ci;?>' />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nombre Completo: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='nombrecompleto' value= '<?php echo $nombrecompleto;?>' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Cod Departamento: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='coddepto' value= '<?php echo $coddepto;?>' />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Fecha de Nacimiento: </label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control" name='fechanacimiento' value= '<?php echo $fechanacimiento;?>' />
                          </div>
                        </div>

                        
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">nacionalidad: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='nacionalidad' value= '<?php echo $nacionalidad;?>' />
                          </div>
                        </div>
                        
                        
                    </div>

                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h2 class="mb-0">Documentos necesarios para la obtencion del certificado</h2>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> Carta firmada al decano de la Facultad (FCPN): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='cartadecano' value= 'cartadecano' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> Fotografia de la Cedula de Identidad (PDF): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='cedulaidentidad' value= 'cedulaidentidad' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> Certificado de calficaciones (Kardex Facultativo) (PDF): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='certificadocalficaciones' value= 'certificadocalficaciones' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> Solicitud de emision de certificado de conclusion de estudios (PDF): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='solicitudconclusionestudios' value= 'solicitudconclusionestudios' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> Caratula del Trabajo de Grado (PDF): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='caratulatrabajogrado' value= 'caratulatrabajogrado' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"> resolución de aprobación de perfil de grado (PDF): </label>
                          <div class="col-sm-6">
                            <input type="file" class="form-control" name='resolucionperfilgrado' value= 'resolucionperfilgrado' />
                          </div>
                        </div>
                        
                    </div>  
                  </div>
                </div>




