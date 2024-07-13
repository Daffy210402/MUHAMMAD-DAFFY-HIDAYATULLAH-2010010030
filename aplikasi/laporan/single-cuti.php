
<?php
$title 	= "SURAT CUTI";

include '../modul/pdf/head2.php';
$id = $_GET['id'];
function hitungSelisihTanggal($tanggalMulai, $tanggalSelesai) {
    $mulaiCuti = strtotime($tanggalMulai);
    $selesaiCuti = strtotime($tanggalSelesai);
    $selisihHari = ($selesaiCuti - $mulaiCuti) / (60 * 60 * 24);
    return abs($selisihHari); // Menggunakan abs() untuk mendapatkan nilai absolut
}     
$sql = mysqli_query($koneksi,"SELECT * FROM cuti
JOIN user USING(id_user)
WHERE id_cuti='$id'
");
$data = mysqli_fetch_array($sql);
$html .="  
<table class='kop' style='width:100%;'>
<tr>
  <td style='font-size: 20px; font-weight: bold;'><u>".$title."</u></td>
</tr>
<tr>
<td style='font-size: 15px;'>Nomor : 0".$id."/02/PPBJ/02/2024</td>
</tr>
</table>
<div>";

$html .= "
<br>
<table id='page-length-option' style='width:100%;' class='display'>
    <td>
Dengan hormat,
<br>
<br>
Dengan surat ini pengajuan permohonan cuti telah  ".$data['status_cuti']."  Ketua Badan Pengadaan Barang dan Jasa Kabupaten Tapin. Memberikan cuti kepada:<br>
</td>
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
    <td align='center'>".tgl($data['tanggal_mulai_cuti'])."</td>
    <td align='center'>".$data['nama_user']."</td>
    <td align='center'>".$data['kontak']."</td>
</tr>
</tbody>
</table>
<br>
    <table id='page-length-option' style='width:100%;' class='display'>
<td>
Dengan ini  ".$data['status_cuti']." pengajuan permohonan ".$data['jenis_cuti']." selama ".hitungSelisihTanggal($data['tanggal_mulai_cuti'], $data['tanggal_selesai_cuti'])." hari kerja terhitung mulai tanggal ".tgl($data['tanggal_mulai_cuti'])." sampai dengan tanggal  ".tgl($data['tanggal_selesai_cuti']).".
<br>
Alasan permohonan cuti ini adalah untuk ".$data['jenis_cuti'].".
</td>
</table>
<br>

<table id='page-length-option' style='width:100%;' class='display'>
    <td>Demikian Surat cuti ini dubuat untuk dapat digunakan semestinya.</td>
</table>";
include '../modul/pdf/foot2.php';
?>

