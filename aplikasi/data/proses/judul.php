<!-- SISTEM 2 -->
<?php
$petik = "'"; 
if ($tipe_field_sistem[$i] == "file") {

	$isi_proses .= '
	$file_'.$nama_field_sistem[$i].'  = $_FILES['.$petik.$nama_field_sistem[$i].$petik.']['.$petik.'name'.$petik.'];
	$tmp_'.$nama_field_sistem[$i].'   = $_FILES['.$petik.$nama_field_sistem[$i].$petik.']['.$petik.'tmp_name'.$petik.'];	
	move_uploaded_file($tmp_'.$nama_field_sistem[$i].', '.$petik.'../../images/'.$judul_tabel_sistem.'/'.$petik.'.$file_'.$nama_field_sistem[$i].');
	$'.$nama_field_sistem[$i].' 	= $file_'.$nama_field_sistem[$i].'; 		
	';
}else if ($tipe_field_sistem[$i] == "date") {
	$isi_proses .= '$'.$nama_field_sistem[$i].'		= date("Y-m-d", strtotime($_POST['.$petik.$nama_field_sistem[$i].$petik.']));
';

}else{

$isi_proses .= '$'.$nama_field_sistem[$i].'		= $_POST['.$petik.$nama_field_sistem[$i].$petik.'];
';

}
	?>
