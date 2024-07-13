<!-- SISTEM 4 -->
<?php 
$petik = "'";

if ($tipe_field_sistem[$i] == "date") {
$isi_laporan .= '
<td align='.$petik.'center'.$petik.'>".tgl($data['.$petik.$nama_field_sistem[$i].$petik.'])."</td>
';
}else if ($tipe_field_sistem[$i] == "file") {
$isi_laporan .= '
<td align='.$petik.'center'.$petik.'>".$data['.$petik.$nama_field_sistem[$i].$petik.']."</td>
';
}else{
$isi_laporan .= '
<td align='.$petik.'center'.$petik.'>".$data['.$petik.$nama_field_sistem[$i].$petik.']."</td>
';

}
?>