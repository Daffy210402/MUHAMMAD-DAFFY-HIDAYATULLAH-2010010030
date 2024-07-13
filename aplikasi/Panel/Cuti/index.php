
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
                                <th>Jenis Cuti</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Jumlah Cuti</th>
                                <th>Status Cuti</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            function hitungSelisihTanggal($tanggalMulai, $tanggalSelesai) {
                                $mulaiCuti = strtotime($tanggalMulai);
                                $selesaiCuti = strtotime($tanggalSelesai);
                                $selisihHari = ($selesaiCuti - $mulaiCuti) / (60 * 60 * 24);
                                return abs($selisihHari); // Menggunakan abs() untuk mendapatkan nilai absolut
                            }       
                            if ($level == "Karyawan") {
                                $sql = mysqli_query($koneksi,"SELECT * FROM cuti
                                                          JOIN user USING(id_user)
                                                          WHERE id_user='$id_user'");
                            } else {
                                $sql = mysqli_query($koneksi,"SELECT * FROM cuti
                                                          JOIN user USING(id_user)
                                                         ");
                            }                                                 
							
                            while ($data = mysqli_fetch_array($sql)) {
							$id = $data['id_cuti'];
                            ?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data['nama_user'];?></td>
                                <td><?=$data['jenis_cuti'];?></td>
                                <td><?=tgl($data['tanggal_mulai_cuti']);?></td>
                                <td><?=tgl($data['tanggal_selesai_cuti']);?></td>
                                <td><?=hitungSelisihTanggal($data['tanggal_mulai_cuti'], $data['tanggal_selesai_cuti']);?> Hari</td>
                                <td><?=$data['status_cuti'];?> | Alasan : <?=$data['alasan_tolak_cuti'];?></td>
								<td align="center">
                                    <?php if ($data['status_cuti'] == "Proses"): ?>
                                        <?php if ($level == "Karyawan"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
                                                <i class="fas fa-user-edit"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menghapus data?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>    
                                        <?php else: ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Disetujui" class="btn btn-sm btn-success has-ripple" onclick="return confirm('Yakin ingin menyetujui?')">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah2&id=<?=$id;?>&status=Ditolak" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menolak?')">
                                                <i class="fas fa-times"></i>
                                            </a>    
                                        <?php endif ?>
                                    <?php endif ?>
                                    <?php if ($data['status_cuti'] == "Disetujui"): ?>
                                        <?php if ($level == "Ketua"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Proses" class="btn btn-sm btn-warning has-ripple" onclick="return confirm('Yakin ingin kembalikan ke proses?')">
                                                <i class="feather icon-loader"></i>
                                            </a>
                                            <a href="index.php?page=<?=$folder;?>&form=Ubah2&id=<?=$id;?>&status=Ditolak" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('Yakin ingin menolak?')">
                                                <i class="fas fa-times"></i>
                                            </a>    
                                            <?php else: ?>
                                            <a href="../laporan/single-cuti.php?id=<?=$id;?>" target="_BLANK" class="btn btn-sm btn-primary has-ripple">
                                                <i class="fas fa-print"></i>
                                            </a>        
                                        <?php endif ?>
                                    <?php endif ?>  
                                    <?php if ($data['status_cuti'] == "Ditolak"): ?>
                                        <?php if ($level == "Ketua"): ?>
                                            <a href="index.php?page=<?=$folder;?>&form=Detail&id=<?=$id;?>&status=Disetujui" class="btn btn-sm btn-success has-ripple" onclick="return confirm('Yakin ingin menyetujui?')">
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

