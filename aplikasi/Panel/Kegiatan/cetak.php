
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/kegiatan.php" target="_blank">
                    <div class="row">
                        <div class="col-sm-5">
                            <input class="form-control" placeholder="Dari Tanggal" type="date"  name="dari" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder="Sampai Tanggal" type="date"  name="sampai" required>
                        </div>
                        <div class="col-sm-1">
                            <button style="float: right;" class="btn btn-primary btn-sm">
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                    </div>
				</form>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Jam Kegiatan</th>
                                <th>Karyawan Hadir</th>
                                <th>Karyawan Tidak Hadir</th>
                                <th>Total Konfirmasi</th>
                                <th>Keterangan Lain</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM kegiatan");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_kegiatan'];
                            $hadir = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id' AND status_kehadiran='Hadir'");
                            $jumhadir = mysqli_num_rows($hadir);
                            $thadir = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id' AND status_kehadiran='Tidak Hadir'");
                            $jumthadir = mysqli_num_rows($thadir);
                            $karyawan = mysqli_query($koneksi,"SELECT * FROM user WHERE level='Karyawan'");
                            $jumkaryawan = mysqli_num_rows($karyawan);
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_kegiatan'];?></td>
                                <td><?=tgl($data['tanggal_kegiatan']);?></td>
                                <td><?=$data['jam_kegiatan'];?></td>
                                <td><?=$jumhadir;?> Orang</td>
                                <td><?=$jumthadir;?> Orang</td>
                                <td><?=$jumthadir+$jumhadir;?>/<?=$jumkaryawan;?> Orang</td>
                                <td><?=$data['keterangan_kegiatan'];?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <!-- Zero config table end -->
</div>
