
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM cuti WHERE id_cuti='$id'");
    $data   = mysqli_fetch_array($sql);
}
?>
<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                <form method="post" id="formTambahCuti" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
                    <div class="row">
						<input type="hidden" name="id_user" value="<?=$id_user;?>">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Jenis Cuti</label>
								<select name="jenis_cuti"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="jenis_cuti" required>
								<option value>-- Pilih Jenis Cuti --</option>
								<?php
								if ($data['jenis_cuti'] == NULL){

									}else{
										?>
										<option value="<?=$data['jenis_cuti'];?>" selected><?=$data['jenis_cuti'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['jenis_cuti'] == "Cuti Tahunan"){

									}else{
										?>
										<option value="Cuti Tahunan">Cuti Tahunan (Max: 12 Hari)</option>
										<?php
									}
									;?>
								<?php
								if($data['jenis_cuti'] == "Cuti Roster"){

									}else{
										?>
										<option value="Cuti Roster">Cuti Roster (Max: 15 Hari)</option>
										<?php
									}
									;?>
								<?php
								if($data['jenis_cuti'] == "Cuti Melahirkan"){

									}else{
										?>
										<option value="Cuti Melahirkan">Cuti Melahirkan (Max: 90 Hari)</option>
										<?php
									}
									;?>
								<?php
								if($data['jenis_cuti'] == "Cuti Ibadah"){

									}else{
										?>
										<option value="Cuti Ibadah">Cuti Ibadah (Max: 40 Hari)</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Tanggal Mulai</label>
								<input class="form-control" type="date"  name="tanggal_mulai_cuti" id="tanggal_mulai_cuti" value="<?=date("Y-m-d", strtotime($data['tanggal_mulai_cuti']));?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Tanggal Selesai</label>
								<input class="form-control" type="date"  name="tanggal_selesai_cuti" id="tanggal_selesai_cuti" value="<?=date("Y-m-d", strtotime($data['tanggal_selesai_cuti']));?>" required>
							</div>
						</div>  
						<div class="col-xl-12">
							<p style="font-size: 10px; color: red;">Note : Tanggal Selesai Akan otomatis reset jika jarak tanggal mulai dan selesai melebihi jumlah hari cuti.</p>
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
 <script>
    document.getElementById('formTambahCuti').addEventListener('submit', function(event) {
        var jenisCuti = document.getElementById('jenis_cuti').value;
        var mulaiCuti = new Date(document.getElementById('tanggal_mulai_cuti').value);
        var selesaiCuti = new Date(document.getElementById('tanggal_selesai_cuti').value);

        var maxRange = 0;
        switch (jenisCuti) {
            case 'Cuti Tahunan':
                maxRange = 12;
                break;
            case 'Cuti Roster':
                maxRange = 15;
                break;
            case 'Cuti Melahirkan':
                maxRange = 90;
                break;
            case 'Cuti Ibadah':
                maxRange = 40;
                break;
        }

        var timeDiff = Math.abs(selesaiCuti.getTime() - mulaiCuti.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        // Nonaktifkan tanggal selesai yang tidak valid (kurang dari tanggal mulai)
        if (selesaiCuti < mulaiCuti) {
            event.preventDefault();
            document.getElementById('tanggal_selesai_cuti').value = '';
            return;
        }

        // Nonaktifkan tanggal selesai yang melebihi jumlah cuti maksimal
        if (diffDays > maxRange) {
            event.preventDefault();
            document.getElementById('tanggal_selesai_cuti').value = '';
            return;
        }
    });

    // Nonaktifkan tanggal selesai yang melebihi jumlah cuti maksimal ketika tanggal mulai berubah
    document.getElementById('tanggal_mulai_cuti').addEventListener('change', function() {
        var jenisCuti = document.getElementById('jenis_cuti').value;
        var mulaiCuti = new Date(document.getElementById('tanggal_mulai_cuti').value);
        var selesaiCuti = new Date(document.getElementById('tanggal_selesai_cuti').value);

        var maxRange = 0;
        switch (jenisCuti) {
            case 'Cuti Tahunan':
                maxRange = 12;
                break;
            case 'Cuti Roster':
                maxRange = 15;
                break;
            case 'Cuti Melahirkan':
                maxRange = 90;
                break;
            case 'Cuti Ibadah':
                maxRange = 40;
                break;
        }

        var timeDiff = Math.abs(selesaiCuti.getTime() - mulaiCuti.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        if (diffDays > maxRange) {
            document.getElementById('tanggal_selesai_cuti').value = '';
        }
    });
</script>