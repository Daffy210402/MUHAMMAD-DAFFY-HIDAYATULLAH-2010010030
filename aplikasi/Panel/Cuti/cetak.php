
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/cuti.php" target="_blank">
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
                                <th>Karyawan</th>
                                <th>Jenis Cuti</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Status Cuti</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM cuti
                                                          JOIN user USING(id_user)
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_cuti'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_user'];?></td>
                                <td><?=$data['jenis_cuti'];?></td>
                                <td><?=tgl($data['tanggal_mulai_cuti']);?></td>
                                <td><?=tgl($data['tanggal_selesai_cuti']);?></td>
                                <td><?=$data['status_cuti'];?></td>
                                <td><a href="../laporan/single-cuti.php?id=<?=$data['id_cuti'];?>" class="btn btn-sm btn-primary has-ripple" target="_BLANK">
                                    <i class="fas fa-print"></i>
                                    </a></td>
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
