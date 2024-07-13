
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">

    <div class="col s12">
      <div class="container">
        <div class="section section-data-tables">

          <!-- Page Length Options -->
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <center>
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline"><span>Data <?=$folder;?></span></h5>
                  </center>
                </div>
              </div>
              <div class="card">
                <div class="card-content">

                  <div id="view-example">
                    <div class="row">
                      <div class="col s12">
                        <a  href="#form" style="float: right;" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan modal-trigger mb-2 ">
                          <i class="material-icons">add</i>
                        </a>
                        <?php 
                        include 'azzam/tambah.php';
                        ?>

                      </div>
                    </div>
                  </div>                                            

                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
  </div>
<!-- END: Page Main-->