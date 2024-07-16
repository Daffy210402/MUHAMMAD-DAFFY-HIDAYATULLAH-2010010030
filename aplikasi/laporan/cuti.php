
<?php
$title 	= " Laporan Cuti";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>NIP</th>
    <th>Pegawai</th>

    <th>Tanggal Pengajuan</th>

    <th>Dari Tanggal</th>

    <th>Sampai Tanggal</th>

    <th>Tipe Cuti</th>

    <th>Keterangan</th>

    <th>Status</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM cuti

JOIN user USING(id_user)
WHERE tanggal_pengajuan BETWEEN '$dari' AND '$sampai'

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_cuti'];
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nip']."</td>
<td align='center'>".$data['nama_pengguna']."</td>

<td align='center'>".tgl($data['tanggal_pengajuan'])."</td>

<td align='center'>".tgl($data['dari_tanggal'])."</td>

<td align='center'>".tgl($data['sampai_tanggal'])."</td>

<td align='center'>".$data['tipe_cuti']."</td>

<td align='center'>".$data['keterangan_cuti']."</td>

<td align='center'>".$data['status_cuti']."</td>
	</tr>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

