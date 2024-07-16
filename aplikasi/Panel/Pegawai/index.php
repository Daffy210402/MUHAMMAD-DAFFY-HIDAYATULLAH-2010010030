 <!-- BEGIN: Page Main-->
 <div class="main-content app-content mt-0">
 	<div class="side-app">

 		<!-- CONTAINER -->
 		<div class="main-container container-fluid">

 			<!-- PAGE-HEADER -->
 			<div class="page-header">
 				<h1 class="page-title"></h1>
 				<div>
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 						<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
 					</ol>
 				</div>

 			</div>
 			<!-- PAGE-HEADER END -->

 			<!-- Row -->
 			<div class="row row-sm">
 				<div class="col-lg-12">
 					<div class="card">
 						<div class="card-header">
 							<h3 class="card-title"><?=$folder;?></h3>
 							<?php include "enter.php"; ?>
 							<a href="index.php?page=<?=$folder;?>&form=Tambah" style="float: right;" class="btn btn-outline-primary btn-sm">
 								<i class="fa fa-plus"></i> Tambah Data
 							</a>
 						</div>
 						<div class="card-body">
 							<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
 									<thead>
 										<tr>
 											<th>No</th>
 											<th>Foto</th>
 											<th>Opsi</th>
 											<th>NIP</th>
 											<th>Nama Lengkap</th>
 											<th>Kontak</th>
 											<th>Pangkat</th>
 											<th>Jabatan</th>
 											<th>Unit Kerja</th>
 											<th>Email</th>
 											<th>Password</th>
 											<th>Tanggal Lahir</th>
 											<th>Alamat</th>
 											<th>Tanggal Masuk</th>
 											<th>Terakhir Naik Pangkat</th>
 											<th>Terakhir Naik Gaji</th>
 											<th>Agama</th>
 											<th>Gaji</th>
 											<th>Akses</th>
 											<th>Aksi</th>
 										</tr>
 									</thead>
 									<tbody>
 										<?php 
 										$no = 1;
 										$sql = mysqli_query($koneksi,"SELECT * FROM user
 										JOIN pangkat USING(id_pangkat) 
 										JOIN jabatan USING(id_jabatan) 
 										JOIN unitkerja USING(id_unitkerja) 
 										WHERE akses='Pegawai'
 										");
 										while ($data = mysqli_fetch_array($sql)) {
 											$id = $data['id_user'];
 										?>
 										<tr>
 											<td><?=$no++;?></td>
 											<td><a href="../images/Pegawai/<?=$data['foto'];?>"><img src="../images/Pegawai/<?=$data['foto'];?>" width="100px"></a></td>
 											<td align="center">
 												<?php if (umur($data['tanggal_np'])>=4): ?>
 													<a href="index.php?page=Kenaikan Pangkat&form=Tambah&id_pegawai=<?=$id;?>&nama_pegawai=<?=$data['nama_pengguna'];?>&status=NP" class="btn btn-icon btn-primary" onclick="return confirm('Yakin ingin menaikkan pangkat?')">
 														Naik Pangkat
 													</a>  
 												<?php else: ?>
 													<a href="index.php?page=Kenaikan Pangkat&form=Tambah&id_pegawai=<?=$id;?>&nama_pegawai=<?=$data['nama_pengguna'];?>&status=NP" class="btn btn-icon btn-danger disabled" onclick="return confirm('Yakin ingin menaikkan pangkat?')">
 														Naik Pangkat
 													</a>         
 												<?php endif ?>
 												<?php if (umur($data['tanggal_ng'])>=2): ?>
 													<a href="index.php?page=Kenaikan Gaji&form=Tambah&id_pegawai=<?=$id;?>&nama_pegawai=<?=$data['nama_pengguna'];?>&status=NG" class="btn btn-icon btn-primary" onclick="return confirm('Yakin ingin menaikkan gaji?')">
 														Gaji Berkala
 													</a>   
 												<?php else: ?>
 													<a href="index.php?page=Kenaikan Gaji&form=Tambah&id_pegawai=<?=$id;?>&nama_pegawai=<?=$data['nama_pengguna'];?>&status=NG" class="btn btn-icon btn-danger disabled" onclick="return confirm('Yakin ingin menaikkan gaji?')">
 														Gaji Berkala
 													</a>           
 												<?php endif ?>
 											</td>
 											<td><?=$data['nip'];?></td>
 											<td><?=$data['nama_pengguna'];?></td>
 											<td><?=$data['telp'];?></td>
 											<td><?=$data['nama_pangkat'];?></td>
 											<td><?=$data['nama_jabatan'];?></td>
 											<td><?=$data['nama_unitkerja'];?></td>
 											<td><?=$data['email'];?></td>
 											<td><?=$data['password'];?></td>
 											<td><?=tgl($data['tanggal_lahir'])." (".umur($data['tanggal_lahir'])." Tahun)";?></td>
 											<td><?=$data['alamat'];?></td>
 											<td><?=tgl($data['tanggal_masuk'])." (".umur($data['tanggal_masuk'])." Tahun)";?></td>
 											<td><?=tgl($data['tanggal_np'])." (".umur($data['tanggal_np'])." Tahun)";?></td>
 											<td><?=tgl($data['tanggal_ng'])." (".umur($data['tanggal_ng'])." Tahun)";?></td>
 											<td><?=$data['agama'];?></td>
 											<td><?=rp($data['gaji']);?></td>
 											<td><?=$data['akses'];?></td>
 											<td align="center">
 												<a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-icon btn-primary">
 													<i class="fe fe-edit"></i>
 												</a>
 												<a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
 													<i class="fe fe-trash"></i>
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
 			</div>
 			<!-- End Row -->

 		</div>
 		<!-- CONTAINER CLOSED -->

 	</div>
 </div>
 <!-- END: Page Main-->
