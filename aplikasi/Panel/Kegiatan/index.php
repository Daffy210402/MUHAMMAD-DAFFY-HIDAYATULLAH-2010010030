
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
              <?php if ($level == "Administrator"): ?>
                <a href="index.php?page=<?=$folder;?>&form=Tambah" style="float: right;" class="btn btn-sm btn-primary has-ripple">
                    <i class="feather icon-plus"></i>
                </a>
              <?php endif ?>
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
                                <th>Keterangan Lain</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM kegiatan
                                                         ");
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_kegiatan'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_kegiatan'];?></td>
                                <td><?=tgl($data['tanggal_kegiatan']);?></td>
                                <td><?=$data['jam_kegiatan'];?></td>
                                <td><?=$data['keterangan_kegiatan'];?></td>
								<td align="center">
                                    <?php if ($level == "Administrator"): ?>
                                    <a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
                                    <i class="fas fa-user-edit"></i>
                                    </a>
                                    <a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menghapus data?')">
                                    <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <?php endif ?>
                                    <?php if ($level == "Karyawan"): ?>
                                    <a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
                                        Hadir
                                    </a>
                                    <a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menghapus data?')">
                                        Tidak Hadir
                                    </a>
                                    <?php endif ?>
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

