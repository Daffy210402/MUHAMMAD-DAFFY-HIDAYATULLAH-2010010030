
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/golongan.php" target="_blank">
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
                                <th>Golongan</th>
                                <th>Gaji</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM golongan
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_golongan'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_golongan'];?></td>
                                <td><?=$data['gaji'];?></td>

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
