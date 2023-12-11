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
                        <h3>Felicidades... </h3>
                        <p>
                          Lograste satisfactoriamente generar tu certificado de conclusion de estudios.
                        </p>

                        <h5>En seguida podras ver tu certificado</h5>


                        <div class="col-md-12 mb-4" align='center'>
                      <div class="card">
                        <h5 class="card-header">CERTIFICADO</h5>
                        <div class="card-body">
                          <?php 
                          echo "<th> <embed align='center' type='application/pdf'  src='certificado_generado/".$fil['nombre_certificado']."' height='500' width='100%'>  </embed>  </th>";
                          ?>
                        </div>

                      </div>
                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

             
