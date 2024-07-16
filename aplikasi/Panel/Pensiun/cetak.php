
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
						<form method="POST" action="../laporan/pensiun.php" target="_blank">
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

											<th>NIP</th>
											<th>Pegawai</th>

											<th>Tanggal Pengajuan</th>

											<th>Tanggal Pensiun</th>

											<th>Alasan</th>

											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$no = 1;
if ($akses == "Pegawai") {
$sql = mysqli_query($koneksi,"SELECT * FROM pensiun
JOIN user USING(id_user)
  WHERE id_user='$id_pengguna'");  
} else {
$sql = mysqli_query($koneksi,"SELECT * FROM pensiun
JOIN user USING(id_user)
	");
}										
										while ($data = mysqli_fetch_array($sql)) {
											$id = $data['id_pensiun'];
											?>
											<tr>
												<td><?=$no++;?></td>

												<td><?=$data['nip'];?></td>
												<td><?=$data['nama_pengguna'];?></td>

												<td><?=tgl($data['tanggal_pengajuan']);?></td>

												<td><?=tgl($data['tanggal_pensiun']);?></td>

												<td><?=$data['alasan_pensiun'];?></td>

												<td><?=$data['status_pensiun'];?></td>
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
