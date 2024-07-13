
<?php
$title 	= " Laporan Absen";

include '../modul/pdf/head.php';
$id_user = $_POST['id_user'];
if ($id_user == "All") {
}else{
    $rom = mysqli_query($koneksi,"SELECT * FROM absen
    JOIN user USING(id_user)
    WHERE id_user='$id_user' AND tanggal_absen BETWEEN '$dari' AND '$sampai'
    ");
$roms = mysqli_fetch_array($rom);
$html .= "
<table id='page-length-option' style='width:100%;' class='display'>
    <tbody>
    <tr>	
        <td>Nama</td>
        <td>:</td>
        <td>".$roms['nama_user']."</td>
    </tr>
    <tr>	
        <td>NIP</td>
        <td>:</td>
        <td>".$roms['no_pegawai']."</td>
    </tr>
</tbody>
</table>
";
    
}
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>
";
if ($id_user == "All") {
    $html .= "
    <th>Pegawai</th>
    ";
}
    $html .= "
    <th>Tanggal Absen</th>

    <th>Jam Masuk</th>

    <th>Jam Pulang</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$id = $_POST['id_user'];
if ($id == "All") {
    $sql = mysqli_query($koneksi,"SELECT * FROM absen
    JOIN user USING(id_user)
    WHERE tanggal_absen BETWEEN '$dari' AND '$sampai'
    ");
} else {
    $sql = mysqli_query($koneksi,"SELECT * FROM absen
    JOIN user USING(id_user)
    WHERE id_user='$id' AND tanggal_absen BETWEEN '$dari' AND '$sampai'
    ");
}


while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_absen'];
	$html .="<tr>
	<td align='center'>".$no++."</td>
    ";
    if ($id_user == "All") {
        $html .= "
        <td align='center'>".$data['nama_user']."</td>
        ";
    }
    $html .= "
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

