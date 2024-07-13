
<?php
$title 	= "SURAT TUGAS";

include '../modul/pdf/head2.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM spt
JOIN user USING(id_user)
WHERE id_spt='$id'
");
$data = mysqli_fetch_array($sql);
$html .="  
<table class='kop' style='width:100%;'>
<tr>
  <td style='font-size: 20px; font-weight: bold;'><u>".$title."</u></td>
</tr>
<tr>
<td style='font-size: 15px;'>Nomor : 0".$id."/01/PPBJ/02/2024</td>
</tr>
</table>
<div>";

$html .= "
<br>
<table id='page-length-option' style='width:100%;' class='display'>
    <td>Ketua Badan Pengadaan Barang dan Jasa Kabupaten Tapin dengan ini memberikan tugas kepada:</td>
</table>
<br>
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
    <th>Tanggal</th>
    <th>Karyawan</th>
    <th>Kontak</th>
</tr>
</thead>
<tbody>
";
$html .="
<tr>
    <td align='center'>".tgl($data['tanggal_spt'])."</td>
    <td align='center'>".$data['nama_user']."</td>
    <td align='center'>".$data['kontak']."</td>
</tr>
"; 
$html .="</tbody>
</table>";
$html .="
<br>
<table id='page-length-option' border='1' style='width:100%;' class='display'>
    <td>Dengan Perihal : ".$data['bukti_spt']."</td>
</table>
<br>
<table id='page-length-option' style='width:100%;' class='display'>
    <td>Demikian Surat tugas ini dibuat untuk dapat digunakan semestinya.</td>
</table>
<br>
";
include '../modul/pdf/foot2.php';
?>

