<!-- SISTEM 3 --> 
<?php 
$petik = "'";
$hasil = explode('id_',$nama_field_sistem[$i]);
$isi_laporan .= '
JOIN '.$hasil[1].' USING('.$nama_field_sistem[$i].')
';
?>