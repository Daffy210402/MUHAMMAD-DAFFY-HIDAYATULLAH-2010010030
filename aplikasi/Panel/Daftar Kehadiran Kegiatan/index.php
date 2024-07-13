
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <a href="index.php?page=<?=$folder;?>&form=Tambah" style="float: right;" class="btn btn-sm btn-primary has-ripple">
					<i class="feather icon-plus"></i>
				</a>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Nama Kegiatan</th>
                                <th>Status Kehadiran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan
                                                          JOIN user USING(id_user)
                                                          JOIN kegiatan USING(id_kegiatan)
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_kehadirankegiatan'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['id_user'];?></td>
                                <td><?=$data['id_kegiatan'];?></td>
                                <td><?=$data['status_kehadiran'];?></td>
								<td align="center">
									<a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
									<i class="fas fa-user-edit"></i>
									</a>
									<a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menghapus data?')">
									<i class="fas fa-trash-alt"></i>
									</a>
								</td>
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

