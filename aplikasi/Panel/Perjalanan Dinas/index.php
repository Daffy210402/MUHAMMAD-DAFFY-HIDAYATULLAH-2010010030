
<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <?php if ($level == "Karyawan"): ?>
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
                                <th>Karyawan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Jenis Tujuan</th>
                                <th>Kepentingan</th>
                                <th>Tipe Transportasi</th>
                                <th>Total Tujuan</th>
                                <th>Jumlah Biaya</th>
                                <th>Status Perjalanan Dinas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							if ($level == "Karyawan") {
                                $sql = mysqli_query($koneksi,"SELECT * FROM perjalanandinas
                                                          JOIN user USING(id_user)
                                                          WHERE id_user='$id_user'
                                                         ");
                            } else {
                                $sql = mysqli_query($koneksi,"SELECT * FROM perjalanandinas
                                                          JOIN user USING(id_user)
                                                         ");
                            }
                            
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_perjalanandinas'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_user'];?></td>
                                <td><?=tgl($data['tanggal_perjalanandinas']);?></td>
                                <td><?=$data['jenis_tujuan'];?></td>
                                <td><?=$data['kepentingan'];?></td>
                                <td><?=$data['tipe_transportasi'];?></td>
                                <td><?=$data['total_tujuan'];?></td>
                                <td><?=$data['jumlah_biaya'];?></td>
                                <td><?=$data['status_perjalanandinas'];?>| Alasan : <?=$data['keterangan_pengajuan_ditolak'];?></td>
								<td align="center">
                                    <?php if ($data['status_perjalanandinas'] == "Proses"): ?>
                                        <?php if ($level == "Karyawan"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
                                                <i class="fas fa-user-edit"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menghapus data?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>    
                                        <?php else: ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Terima" class="btn btn-sm btn-success has-ripple" onclick="return confirm('Yakin ingin menyetujui?')">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah2&id=<?=$id;?>&status=Tolak" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menolak?')">
                                                <i class="fas fa-times"></i>
                                            </a>    
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($data['status_perjalanandinas'] == "Terima"): ?>
                                        <?php if ($level == "Ketua"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Proses" class="btn btn-sm btn-warning has-ripple" onclick="return confirm('Yakin ingin kembalikan ke proses?')">
                                                <i class="feather icon-loader"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah2&id=<?=$id;?>&status=Tolak" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menolak?')">
                                                <i class="fas fa-times"></i>
                                            </a>    
                                        <?php else: ?>
                                            <a href="../laporan/single-sppd.php?id=<?=$id;?>" target="_BLANK" class="btn btn-sm btn-success has-ripple">
                                                <i class="fas fa-print"></i>
                                            </a>                                                
                                        <?php endif ?>
                                    <?php endif ?>  
                                    <?php if ($data['status_perjalanandinas'] == "Tolak"): ?>
                                        <?php if ($level == "Ketua"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Terima" class="btn btn-sm btn-success has-ripple" onclick="return confirm('Yakin ingin menyetujui?')">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Proses" class="btn btn-sm btn-warning has-ripple" onclick="return confirm('Yakin ingin kembalikan ke proses?')">
                                                <i class="feather icon-loader"></i>
                                            </a>    
                                        <?php endif ?>
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

