
<?php
$title 	= " Laporan Kenaikan Gaji";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
<th>NIP</th>
<th>Pegawai</th>

<th>Tanggal Pengajuan</th>

<th>Gaji Pokok Lama</th>

<th>Gaji Pokok Baru</th>

<th>Keterangan</th>

<th>Status</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM naik_gaji
	JOIN user USING(id_user)
	WHERE tanggal_pengajuan BETWEEN '$dari' AND '$sampai'

	");
while ($data = mysqli_fetch_array($sql)) {
	$id = $data['id_naik_gaji'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

	<td align='center'>".$data['nip']."</td>
	<td align='center'>".$data['nama_pengguna']."</td>

	<td align='center'>".tgl($data['tanggal_pengajuan'])."</td>

	<td align='center'>".$data['gaji_awal']."</td>

	<td align='center'>".$data['gaji_berikutnya']."</td>

	<td align='center'>".$data['ketarangan_gaji']."</td>

	<td align='center'>".$data['status_gaji']."</td>
	</tr>

	";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

