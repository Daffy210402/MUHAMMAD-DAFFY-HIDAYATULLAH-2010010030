
<?php
$title 	= " Laporan Pensiun";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
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
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pensiun

JOIN user USING(id_user)
WHERE tanggal_pengajuan BETWEEN '$dari' AND '$sampai'

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pensiun'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nip']."</td>
<td align='center'>".$data['nama_pengguna']."</td>

<td align='center'>".tgl($data['tanggal_pengajuan'])."</td>

<td align='center'>".tgl($data['tanggal_pensiun'])."</td>

<td align='center'>".$data['alasan_pensiun']."</td>

<td align='center'>".$data['status_pensiun']."</td>
	</tr>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

