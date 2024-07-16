

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
						<form method="POST" action="../laporan/skp.php" target="_blank">
							<div class="card-header">
								<h3 class="card-title"><?=$folder;?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Dari Tanggal" type="text"  name="dari" required>&nbsp;&nbsp;
								<input class="form-control fc-datepicker" placeholder="Sampai Tanggal" type="text"  name="sampai" required>&nbsp;&nbsp;
								<button style="float: right;" class="btn btn-outline-primary btn-lg">
									<i class="fa fa-print"></i>
								</button>
							</div>
						</form>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
									<thead>
										<tr>
											<th>No</th>

        <th>Tanggal SKP</th>
        <th>Nama Pegawai</th>
        <th>NIP</th>

											<th>Jabatan</th>
											<th>Unit Kerja</th>

											<th>Nilai SKP</th>

											<th>Orientasi Pelayanan</th>

											<th>Integritas</th>

											<th>Komitmen</th>

											<th>Disiplin</th>

											<th>Kerjasama</th>

											<th>Kepemimpinan</th>
											<th>Pejabat Penilai</th>
											<th>NIP Pejabat Penilai</th>
											<th>Jabatan Pejabat Penilai</th>
											<th>Unit Kerja Pejabat Penilai</th>

											<th>Pejabat Atasan Penilai</th>
											<th>NIP Pejabat Atasan Penilai</th>
											<th>Jabatan Pejabat Atasan Penilai</th>
											<th>Unit Kerja Pejabat Atasan Penilai</th>



										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1;
if ($akses == "Pegawai") {
$sql = mysqli_query($koneksi,"SELECT * FROM skp
	JOIN user USING(id_user)
	JOIN jabatan USING(id_jabatan)
JOIN unitkerja USING(id_unitkerja)
WHERE id_user='$id_pengguna'");  
} else {
$sql = mysqli_query($koneksi,"SELECT * FROM skp
	JOIN user USING(id_user)
	JOIN jabatan USING(id_jabatan)
JOIN unitkerja USING(id_unitkerja)
");
}										
										while ($data = mysqli_fetch_array($sql)) {
											$id = $data['id_skp'];
											?>
											<tr>
												<td><?=$no++;?></td>

												<td><?=tgl($data['tanggal_skp']);?></td>
												<td><?=$data['nama_pengguna'];?></td>
												<td><?=$data['nip'];?></td>


												<td><?=$data['nama_jabatan'];?></td>
												<td><?=$data['nama_unitkerja'];?></td>

												<td><?=$data['nilai_skp'];?></td>

												<td><?=$data['orientasi_pelayanan'];?></td>

												<td><?=$data['integritas'];?></td>

												<td><?=$data['komitmen'];?></td>

												<td><?=$data['disiplin'];?></td>

												<td><?=$data['kerjasama'];?></td>

												<td><?=$data['kepemimpinan'];?></td>
												<?php 
												$id_ppenilai = $data['id_ppenilai'];
												$row = mysqli_query($koneksi,"SELECT * FROM user JOIN jabatan USING(id_jabatan) JOIN unitkerja USING(id_unitkerja) WHERE id_user='$id_ppenilai'");
												while ($rows = mysqli_fetch_array($row)) {
													?>
													<td><?=$rows['nama_pengguna'];?></td>
													<td><?=$rows['nip'];?></td>
													<td><?=$rows['nama_jabatan'];?></td>
													<td><?=$rows['nama_unitkerja'];?></td>
												<?php } ?>
												<?php 
												$id_papenilai = $data['id_papenilai'];
												$row = mysqli_query($koneksi,"SELECT * FROM user JOIN jabatan USING(id_jabatan) JOIN unitkerja USING(id_unitkerja) WHERE id_user='$id_papenilai'");
												while ($rows = mysqli_fetch_array($row)) {
													?>
													<td><?=$rows['nama_pengguna'];?></td>
													<td><?=$rows['nip'];?></td>
													<td><?=$rows['nama_jabatan'];?></td>
													<td><?=$rows['nama_unitkerja'];?></td>
												<?php } ?>

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

