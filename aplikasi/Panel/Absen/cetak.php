<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<form method="POST" action="../laporan/absen.php" target="_blank">
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" placeholder="Dari Tanggal" type="date"  name="dari" required>
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" placeholder="Sampai Tanggal" type="date"  name="sampai" required>
                        </div>
                        <div class="col-sm-3">
                            <select name="id_user" class="form-control select2-show-search form-select" required>
                                <option value=>-- Pilih Karyawan --</option>
                                <option value="All">Semua</option>
                                <?php
                                    $row = mysqli_query($koneksi,"SELECT * FROM user WHERE level='Karyawan'");
                                    while ($rows = mysqli_fetch_array($row)) {	
                                        if ($data['id_user'] == $rows['id_user']) {
                                    ?>
                                    <option value="<?=$rows['id_user'];?>" selected><?=$rows['nama_user'];?></option>		
                                    <?php
                                    }else{
                                    ?>
                                    <option value="<?=$rows['id_user'];?>"><?=$rows['nama_user'];?></option>		
                                <?php
                                    }
                                    }
                                ?>
                            </select>
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

    <th>Karyawan</th>

    <th>Tanggal Absen</th>

    <th>Jam Masuk</th>

    <th>Maps Masuk</th>

    <th>Jam Pulang</th>

    <th>Maps Pulang</th>

</tr>
</thead>
<tbody>
<?php 
$no = 1;
if ($akses == "Karyawan") {
  $sql = mysqli_query($koneksi,"SELECT * FROM absen
  JOIN user USING(id_user)
  WHERE id_user='$id_user'");  
} else {
  $sql = mysqli_query($koneksi,"SELECT * FROM absen
  JOIN user USING(id_user)
  ");
}
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_absen'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['nama_user'];?></td>

<td><?=tgl($data['tanggal_absen']);?></td>

<td><?=$data['jam_masuk'];?></td>

<td><a href="https://www.google.com/maps?q=<?=$data['lang_masuk'];?>,<?=$data['long_masuk'];?>" target="_BLANK" class="btn btn-primary">Klik Lokasi Maps</a></td>

<td><?=$data['jam_pulang'];?></td>

<td>
    <?php
    if ($data['long_pulang'] == NULL) {
        # code...
    } else {
        ?><a href="https://www.google.com/maps?q=<?=$data['lang_pulang'];?>,<?=$data['long_pulang'];?>" target="_BLANK" class="btn btn-primary">Klik Lokasi Maps</a>

        <?php
    }
    
    ?>
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

