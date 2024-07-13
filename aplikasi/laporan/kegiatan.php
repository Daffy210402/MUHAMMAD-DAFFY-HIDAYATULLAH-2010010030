
<?php
$title 	= " Laporan Kegiatan";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
    <th>Nama Kegiatan</th>

    <th>Tanggal Kegiatan</th>

    <th>Jam Kegiatan</th>

    <th>Karyawan Hadir</th>
    
    <th>Karyawan Tidak Hadir</th>
    
    <th>Total Konfirmasi</th>

    <th>Keterangan Lain</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM kegiatan
WHERE tanggal_kegiatan BETWEEN '$dari' AND '$sampai'

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_kegiatan'];
 $hadir = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id' AND status_kehadiran='Hadir'");
$jumhadir = mysqli_num_rows($hadir);
$thadir = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id' AND status_kehadiran='Tidak Hadir'");
$jumthadir = mysqli_num_rows($thadir);
$karyawan = mysqli_query($koneksi,"SELECT * FROM user WHERE level='Karyawan'");
$jumkaryawan = mysqli_num_rows($karyawan);
$total = $jumthadir+$jumhadir;
	$html .="<tr>
	<td align='center'>".$no++."</td>

<td align='center'>".$data['nama_kegiatan']."</td>

<td align='center'>".tgl($data['tanggal_kegiatan'])."</td>

<td align='center'>".$data['jam_kegiatan']."</td>

<td align='center'>".$jumhadir." Orang</td>
<td align='center'>".$jumthadir." Orang</td>
<td align='center'>".$total."/".$jumkaryawan." Orang</td>

<td align='center'>".$data['keterangan_kegiatan']."</td>

";
} 
$html .="</tbody>
</table>";
include '../modul/pdf/foot.php';
?>

