<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                <form method="post" id="Permohonan" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
                    <div class="row">
						<input type="hidden" name="id_user" value="<?=$id_user;?>">
						
						<div class="col-lg-12">
							<div class="form-group">
								<label>Alasan Permohonan Ditolak</label>
								<input class="form-control" type="text"  name="keterangan_pengajuan_ditolak" id="keterangan_pengajuan_ditolak" value="<?=$data['keterangan_pengajuan_ditolak'];?>" required>
							</div>
						</div>  
						<div class="col-xl-12">
						<?=$button;?>
						<button type="reset" class="btn btn-danger">Reset</button>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ Select2 ] end -->
</div>
 