
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/user.php" target="_blank">
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
                                <th>Nama</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Kebangsaan</th>
                                <th>Nomor Kartu Identitas</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Status Perkawinan</th>
                                <th>No NPWP</th>
                                <th>Agama</th>
                                <th>Email Bisnis</th>
                                <th>Jenis Kepegawaian</th>
                                <th>No. Pegawai</th>
                                <th>Golongan</th>
                                <th>Cost Center</th>
                                <th>Tanggal Bergabung</th>
                                <th>Tanda Tangan</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM user
                                                          JOIN golongan USING(id_golongan)
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_user'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_user'];?></td>
                                <td><?=$data['kontak'];?></td>
                                <td><?=$data['alamat'];?></td>
                                <td><?=$data['username'];?></td>
                                <td><?=$data['password'];?></td>
                                <td><?=$data['kebangsaan'];?></td>
                                <td><?=$data['nik'];?></td>
                                <td><?=$data['tempat_lahir'];?></td>
                                <td><?=tgl($data['tanggal_lahir']);?></td>
                                <td><?=$data['jk'];?></td>
                                <td><?=$data['kawin'];?></td>
                                <td><?=$data['npwp'];?></td>
                                <td><?=$data['agama'];?></td>
                                <td><?=$data['email'];?></td>
                                <td><?=$data['status_kepegawaian'];?></td>
                                <td><?=$data['no_pegawai'];?></td>
                                <td><?=$data['id_golongan'];?></td>
                                <td><?=$data['cost_center'];?></td>
                                <td><?=tgl($data['tanggal_bergabung']);?></td>
                                <td><a target="_BLANK" href="../images/Karyawan/<?=$data['ttd'];?>"><img src="../images/Karyawan/<?=$data['ttd'];?>" width="100px"></a></td>
                                <td><?=$data['level'];?></td>

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
