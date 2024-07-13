
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/spt.php" target="_blank">
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
                                <th>Tanggal</th>
                                <th>Karyawan</th>
                                <th>Bukti SPT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM spt
                                                          JOIN user USING(id_user)
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_spt'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=tgl($data['tanggal_spt']);?></td>
                                <td><?=$data['nama_user'];?></td>
                                <td><a href="../laporan/single-spt.php?id=<?=$data['id_spt'];?>" class="btn btn-sm btn-primary has-ripple" target="_BLANK">
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
