
<?php
$title 	= "SURAT PERINTAH PERJALANAN DINAS";

include '../modul/pdf/head2.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM perjalanandinas
JOIN user USING(id_user)
WHERE id_perjalanandinas='$id'
");
$data = mysqli_fetch_array($sql);
$html .="  
<table class='kop' style='width:100%;'>
<tr>
  <td style='font-size: 20px; font-weight: bold;'><u>".$title."</u></td>
</tr>
<tr>
<td style='font-size: 15px;'>Nomor : 0".$id."/03/PPBJ/02/2024</td>
</tr>
</table>
<div>";

$html .= "
<br>
<table id='page-length-option' style='width:100%;' class='display'>
    <td>
    Dengan surat ini pengajuan permohonan tugas perjalanan dinas telah di ".$data['status_perjalanandinas']." Ketua Badan Pengadaan Barang dan Jasa Kabupaten Tapin. 
Memberikan tugas perjalanan dinas kepada:
    </td>
</table>
<br>
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
    <th>Tanggal</th>
    <th>Karyawan</th>
    <th>Kontak</th>
    <th>Jenis Tujuan</th>
    <th>Transportasi</th>
    <th>Biaya</th>
</tr>
</thead>
<tbody>
";
$html .="
<tr>
    <td align='center'>".tgl($data['tanggal_perjalanandinas'])."</td>
    <td align='center'>".$data['nama_user']."</td>
    <td align='center'>".$data['kontak']."</td>
    <td align='center'>".$data['jenis_tujuan']."</td>
    <td align='center'>".$data['tipe_transportasi']."</td>
    <td align='center'>".rp($data['jumlah_biaya'])."</td>
</tr>
"; 
$html .="</tbody>
</table>";
$html .="
<br>
<table id='page-length-option' border='1' style='width:100%;' class='display'>
    <td>Dengan Perihal : ".$data['kepentingan']."</td>
</table>
<br>
<table id='page-length-option' style='width:100%;' class='display'>
    <td>Demikian Surat Perintah Tugas ini dibuat untuk dapat digunakan semestinya.</td>
</table>
<br>
";
include '../modul/pdf/foot2.php';
?>

