
<?php
$title 	= " Laporan Daftar Kehadiran Kegiatan";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Nama Karyawan</th>

    <th>Nama Kegiatan</th>

    <th>Status Kehadiran</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan

JOIN user USING(id_user)

JOIN kegiatan USING(id_kegiatan)

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_kehadirankegiatan'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['id_user']."</td>

<td align='center'>".$data['id_kegiatan']."</td>

<td align='center'>".$data['status_kehadiran']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

