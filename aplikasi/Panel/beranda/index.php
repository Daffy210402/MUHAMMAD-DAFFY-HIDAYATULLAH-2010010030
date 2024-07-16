    <?php 
    include 'coding.php';
    ?>


    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title"><?=$judul;?></h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$judul;?></li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                                    <?php 
                            if ($akses == "Pegawai") {
                                ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body">
                                                        <center><h3>Absen Harian</h3></center>
                                                        <?php 
                                                        $tgl = date('Y-m-d');
                                                        $sql = mysqli_query($koneksi,"SELECT * FROM absen WHERE id_user='$id_pengguna' AND tanggal_absen='$tgl'");
                                                        $jumlah = mysqli_num_rows($sql);
                                                        $data = mysqli_fetch_array($sql);
                                                        if ($jumlah == 1) {
                                                         ?>
                                                         <div id="masukubah">
                                                         </div>
                                                         <?php 
                                                     }else{
                                                       ?>
                                                       <div id="masuk">
                                                       </div>
                                                   <?php } ?>
                                                   <?php if ($data['long_pulang'] == NULL): ?>
                                                   <div id="pulang">
                                                   </div>                                                       
                                                   <?php else: ?>
                                                   <div id="pulangubah">
                                                   </div>
                                                   <?php endif ?>
                                               </div>
                                           </div>
                                       </div>
                                   </div>                    
                               </div>
                           </div>
                       <?php }else{ ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Absen</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_absen;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Cuti</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_cuti;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Kenaikan Pangkat</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_naik_pangkat;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="leadschart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Kenaikan Gaji</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_naik_gaji;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="profitchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Pensiun</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_pensiun;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Mutasi</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_mutasi;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total SPPD</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_sppd;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total SPT</h6>
                                                <h2 class="mb-0 number-font"><?=$jumlah_spt;?></h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 -->

                           <?php
                       }
                       ?>
                       <!-- ROW-1 END -->
                   </div>
               </div>
           </div>
           <!-- ROW-1 END -->
       </div>
       <!-- CONTAINER END -->
   </div>
</div>
            <!--app-content close-->