
<?php
$title 	= " Laporan Surat Perintah Perjalanan Dinas";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
<th>NIP</th>
<th>Pegawai</th>

<th>Tanggal Perintah</th>

<th>Tujuan</th>

<th>Dari Tanggal</th>

<th>Sampai Tanggal</th>

<th>Keterangan</th>


<th>Status</th>

<th>Tanggal Surat</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM sppd

	JOIN spt USING(id_spt)
	JOIN pegawai USING(id_pegawai)
	WHERE tanggal_sppd BETWEEN '$dari' AND '$sampai'
	");
while ($data = mysqli_fetch_array($sql)) {
	$id = $data['id_sppd'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

	<td align='center'>".$data['nip']."</td>
	<td align='center'>".$data['nama']."</td>
	<td align='center'>".tgl($data['tanggal_perintah'])."</td>
	<td align='center'>".$data['tujuan_perintah']."</td>
	<td align='center'>".tgl($data['dari_tanggal'])."</td>
	<td align='center'>".tgl($data['sampai_tanggal'])."</td>
	<td align='center'>".$data['keterangan_perintah']."</td>

	<td align='center'>".$data['status_sppd']."</td>

	<td align='center'>".tgl($data['tanggal_sppd'])."</td>
	</tr>

	";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

