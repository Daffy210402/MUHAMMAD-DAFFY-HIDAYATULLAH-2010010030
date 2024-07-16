
<?php
$title 	= " Laporan Sasaran Kinerja Pegawai";

include '../modul/pdf/head.php';
$html .= "
<table id='page-length-option' border='1' style='width:100%;' class='display'>
<thead>
<tr>	
<th>No</th>

<th>Tanggal SKP</th>
<th>Nama Pegawai</th>
<th>NIP</th>


<th>Jabatan</th>
<th>Unit Kerja</th>

<th>Nilai SKP</th>

<th>Orientasi Pelayanan</th>

<th>Integritas</th>

<th>Komitmen</th>

<th>Disiplin</th>

<th>Kerjasama</th>

<th>Kepemimpinan</th>
<th>Pejabat Penilai</th>
<th>NIP Pejabat Penilai</th>
<th>Jabatan Pejabat Penilai</th>
<th>Unit Kerja Pejabat Penilai</th>

<th>Pejabat Atasan Penilai</th>
<th>NIP Pejabat Atasan Penilai</th>
<th>Jabatan Pejabat Atasan Penilai</th>
<th>Unit Kerja Pejabat Atasan Penilai</th>

</tr>
</thead>
<tbody>
";
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM skp
    JOIN user USING(id_user)
    JOIN jabatan USING(id_jabatan)
    JOIN unitkerja USING(id_unitkerja)
    WHERE tanggal_skp BETWEEN '$dari' AND '$sampai'
    ");
while ($data = mysqli_fetch_array($sql)) {
    $id = $data['id_skp'];
    $html .="<tr>
    <td>".$no++."</td>
    <td>".tgl($data['tanggal_skp'])."</td>
    <td>".$data['nama_pengguna']."</td>
    <td>".$data['nip']."</td>
    <td>".$data['nama_jabatan']."</td>
    <td>".$data['nama_unitkerja']."</td>
    <td>".$data['nilai_skp']."</td>
    <td>".$data['orientasi_pelayanan']."</td>
    <td>".$data['integritas']."</td>
    <td>".$data['komitmen']."</td>
    <td>".$data['disiplin']."</td>
    <td>".$data['kerjasama']."</td>
    <td>".$data['kepemimpinan']."</td>";
    $id_ppenilai = $data['id_ppenilai'];
    $row = mysqli_query($koneksi,"SELECT * FROM user JOIN jabatan USING(id_jabatan) JOIN unitkerja USING(id_unitkerja) WHERE id_user='$id_ppenilai'");
    while ($rows = mysqli_fetch_array($row)) {
     $html .= "   
     <td>".$rows['nama_pengguna']."</td>
     <td>".$rows['nip']."</td>
     <td>".$rows['nama_jabatan']."</td>
     <td>".$rows['nama_unitkerja']."</td>";
 } 
 $id_papenilai = $data['id_papenilai'];
 $row = mysqli_query($koneksi,"SELECT * FROM user JOIN jabatan USING(id_jabatan) JOIN unitkerja USING(id_unitkerja) WHERE id_user='$id_papenilai'");
 while ($rows = mysqli_fetch_array($row)) {
   $html .= "   
   <td>".$rows['nama_pengguna']."</td>
   <td>".$rows['nip']."</td>
   <td>".$rows['nama_jabatan']."</td>
   <td>".$rows['nama_unitkerja']."</td> ";   
} 
$html .= "</tr>";
}
$html .="</tbody>
</table>";
include '../modul/pdf/foot2.php';
?>

