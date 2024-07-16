
<?php
$title 	= " Laporan Absen";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>NIP</th>
    <th>Pegawai</th>

    <th>Tanggal Absen</th>

    <th>Jam Masuk</th>

    <th>Jam Pulang</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM absen
JOIN user USING(id_user)
WHERE tanggal_absen BETWEEN '$dari' AND '$sampai'
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_absen'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nip']."</td>
<td align='center'>".$data['nama_pengguna']."</td>

<td align='center'>".tgl($data['tanggal_absen'])."</td>

<td align='center'>".$data['jam_masuk']."</td>

<td align='center'>".$data['jam_pulang']."</td>
	</tr>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

