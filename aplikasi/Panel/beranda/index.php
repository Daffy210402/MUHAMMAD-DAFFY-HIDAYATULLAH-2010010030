

   <div class="row">
            <!-- subscribe start -->
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="feather icon-users text-c-green d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-green"><?=$jumlah_user;?></span> Pengguna</h4>
                        <p class="m-b-20">Jumlah Pengguna saat ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="feather icon-mail text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-blue"><?=$jumlah_pendaftaran1;?></span> Pengajuan</h4>
                        <p class="m-b-20">Pengajuan Cuti</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="feather icon-briefcase text-c-red d-block f-40"></i>
                        <h4 class="m-t-20"><span class="text-c-blue"><?=$jumlah_pendaftaran;?></span> Pengajuan</h4>
                        <p class="m-b-20">Semua Pengajuan Perjalanan Dinas</p>
                    </div>
                </div>
            </div>
<?php if ($level == "Karyawan"): ?>
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Jadwal Kegiatan Mendatang</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Jam Kegiatan</th>
                                <th>Keterangan Lain</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $current_date = date('Y-m-d');
                            $sql = mysqli_query($koneksi,"SELECT * FROM kegiatan WHERE tanggal_kegiatan >= '$current_date'");
                            while ($data = mysqli_fetch_array($sql)) {
                            $id = $data['id_kegiatan'];
                            $row = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id' AND id_user='$id_user'");
                            $jumrow = mysqli_num_rows($row);                            
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td align="center">
                                    <?php if ($jumrow == 1): ?>
                                        Kehadiran telah di konfirmasi. <br>
                                        <a href="index.php?page=Daftar Kehadiran Kegiatan&form=Ubah&id_kegiatan=<?=$id;?>" class="btn btn-sm btn-warning has-ripple">
                                            Ubah Kehadiran
                                        </a>
                                    <?php else: ?>
                                        <a href="index.php?page=Daftar Kehadiran Kegiatan&form=Tambah&id_kegiatan=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
                                            Konfirmasi Kehadiran
                                        </a>
                                    <?php endif ?>
                                    
                                </td>
                                <td><?=$data['nama_kegiatan'];?></td>
                                <td><?=tgl($data['tanggal_kegiatan']);?></td>
                                <td><?=$data['jam_kegiatan'];?></td>
                                <td><?=$data['keterangan_kegiatan'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>                        
                    </div>
                </div>
            </div>    
<?php endif ?>
        
        
            <!-- subscribe end -->