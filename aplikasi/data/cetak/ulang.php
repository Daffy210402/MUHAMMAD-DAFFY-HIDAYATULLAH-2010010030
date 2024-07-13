<!-- SISTEM 4 -->
<?php 
$petik = "'";

if ($tipe_field_sistem[$i] == "date") {
$isi_cetak .= '
                                <td><?=tgl($data['.$petik.$nama_field_sistem[$i].$petik.']);?></td>';
}else if ($tipe_field_sistem[$i] == "file") {
$isi_cetak .= '
                                <td><a target="_BLANK" href="../images/'.$judul_tabel_sistem.'/<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>"><img src="../images/'.$judul_tabel_sistem.'/<?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?>" width="100px"></a></td>';
}else{
$isi_cetak .= '
                                <td><?=$data['.$petik.$nama_field_sistem[$i].$petik.'];?></td>';

}
?>