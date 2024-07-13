<!-- SISTEM 2 -->
<?php 
$petik = "'"; 

if ($tipe_field_sistem[$i] == "year") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="number" max="99999" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "date") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input class="form-control" type="date"  name="'.$nama_field_sistem[$i].'"  value="<?=date("Y-m-d", strtotime($data['.$petik.$nama_field_sistem[$i].$petik.']));?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "datetime") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="datetime-local" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "time") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="time" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "month") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="month" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "int") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="number" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "file") {
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="'.$nama_field_sistem[$i].'">
                                    <label class="custom-file-label">Choose file</label>
                                </div>								
							</div>
						</div>';
}else if ($tipe_field_sistem[$i] == "enum") {
	$hasil = explode('"',$values_field_sistem[$i]);
	$jumlah = count($hasil);
	$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<select name="'.$nama_field_sistem[$i].'"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="'.$nama_field_sistem[$i].'" required>
								<option value>-- Pilih '.$judul_field_sistem[$i].' --</option>
								<?php
								if ($data['.$petik.$nama_field_sistem[$i].$petik.'] == NULL){

									}else{
										?>
										<option value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" selected><?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?></option>		
										<?php
									}
									?>';
							for($z=0;$z<$jumlah;$z++){
								if ($hasil[$z] == "," ){

								}else if ($hasil[$z] == "" ){

								}else{ 
								$isi_form .= '
								<?php
								if($data['.$petik.$nama_field_sistem[$i].$petik.'] == "'.$hasil[$z].'"){

									}else{
										?>
										<option value="'.$hasil[$z].'">'.$hasil[$z].'</option>
										<?php
									}
									;?>';
									} 
								} 

								$isi_form .= '        
								</select>
							</div>
						</div>';

		}else{
			$isi_form .= '
						<div class="col-lg-12">
							<div class="form-group">
								<label>'.$judul_field_sistem[$i].'</label>
								<input id="'.$nama_field_sistem[$i].'" class="form-control" type="text" name="'.$nama_field_sistem[$i].'" value="<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" required>
							</div>
						</div>';
		}
		?>