
<?php
$title 	= " Laporan SPT";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Tanggal</th>

    <th>Karyawan</th>

    <th>Bukti SPT</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM spt

JOIN user USING(id_user)
WHERE tanggal_spt BETWEEN '$dari' AND '$sampai'

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_spt'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".tgl($data['tanggal_spt'])."</td>

<td align='center'>".$data['nama_user']."</td>

<td align='center'>".$data['bukti_spt']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

