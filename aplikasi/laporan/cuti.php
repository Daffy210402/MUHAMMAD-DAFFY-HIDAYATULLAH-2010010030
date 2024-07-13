
<?php
$title 	= " Laporan Cuti";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Karyawan</th>

    <th>Jenis Cuti</th>

    <th>Tanggal Mulai</th>

    <th>Tanggal Selesai</th>

    <th>Status Cuti</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM cuti

JOIN user USING(id_user)
WHERE tanggal_mulai_cuti BETWEEN '$dari' AND '$sampai'

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_cuti'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nama_user']."</td>

<td align='center'>".$data['jenis_cuti']."</td>

<td align='center'>".tgl($data['tanggal_mulai_cuti'])."</td>

<td align='center'>".tgl($data['tanggal_selesai_cuti'])."</td>

<td align='center'>".$data['status_cuti']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

