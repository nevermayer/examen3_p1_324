<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h1 class="fw-bold py-0 mb-3" align="center">Bienvenido</h1> -->
              <div class="row mb-0">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <p class="card-text"> 
                        <h3>Cajas </h3>
                        <p>
                          El usuario <?php echo $usuario_en_el_sistema; ?> solicito certificado de conclusión de estudios <br/>
                          Un requisito es haber depositado un total de <h6>65 Bs</h6> 
                          Este monto es con el concepto de "CONCLUSION DE ESTUDIOS" <br/>
                        </p>
                          
                          <h5>Verificando deposito ... </h5>

                          <div class="card">
                <h4 class="card-header">Lista de depositos</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> <strong> Usuario </strong> </th>
                        <th> <strong> Monto </strong>  </th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                      <?php 
                        while($fil = mysqli_fetch_array($res)){

                          echo "<tr>";
                          echo "<th>".$fil['usuario']."</th>";
                          echo "<th>".$fil['monto']." Bs.</th>";
                          echo "</tr>";
                        }
                        
                      ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>

                    </div>
                  </div>
                </div>
              </div>
              

             
