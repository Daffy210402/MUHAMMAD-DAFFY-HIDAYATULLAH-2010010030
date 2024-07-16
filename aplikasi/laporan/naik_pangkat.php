
<?php
$title 	= " Laporan Kenaikan Pangkat";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>NIP</th>
    <th>Pegawai</th>

    <th>Pangkat Awal</th>

    <th>Pangkat Berikutnya</th>

    <th>Tanggal Pengajuan</th>

    <th>Alasan</th>

    <th>Status</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM naik_pangkat

JOIN user USING(id_user)
WHERE tanggal_pengajuan BETWEEN '$dari' AND '$sampai'
 
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_naik_pangkat'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

	<td align='center'>".$data['nip']."</td>
<td align='center'>".$data['nama_pengguna']."</td>";

$id_pangkat_awal = $data['id_pangkat_awal'];
$id_pangkat_berikutnya = $data['id_pangkat_berikutnya'];
$row = mysqli_query($koneksi,"SELECT * FROM pangkat WHERE id_pangkat='$id_pangkat_awal'");
while ($rows = mysqli_fetch_array($row)) {
$html .="<td align='center'>".$rows['nama_pangkat']."</td>";
}

$row = mysqli_query($koneksi,"SELECT * FROM pangkat WHERE id_pangkat='$id_pangkat_berikutnya'");
while ($rows = mysqli_fetch_array($row)) {
$html .="<td align='center'>".$rows['nama_pangkat']."</td>";
}
$html .= "<td align='center'>".tgl($data['tanggal_pengajuan'])."</td>

<td align='center'>".$data['alasan_pengajuan']."</td>

<td align='center'>".$data['status_pengajuan']."</td>
	</tr>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

