
<?php
$title  = " Laporan Perjalanan Dinas";

include '../modul/pdf/head2.php';
$no = 1;
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM perjalanandinas
JOIN user USING(id_user)
WHERE id_perjalanandinas='$id'");
$data = mysqli_fetch_array($sql);
$id = $data['id_perjalanandinas'];
    $html .='
<table style="border: 2px solid black;" width="100%">
    <tr>
        <td>Jenis Pilihan Dinas </td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["jenis_tujuan"].'</td>
    </tr>
    <tr>
        <td>Kepentingan Dinas</td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["kepentingan"].'</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["nama_user"].'</td>
    </tr>
    <tr>
        <td>Divisi </td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["divisi"].'</td>
    </tr>
    <tr>
        <td>Tipe Transportasi</td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["tipe_transportasi"].'</td>
    </tr>
    <tr>
        <td>Total Tujuan </td>
        <td colspan="2" style="text-indent: 70px;">: '.$data["total_tujuan"].'</td>
    </tr>
    <tr>
        <td>Jumala Biaya </td>
        <td colspan="2" style="text-indent: 70px;">: '.rp($data["jumlah_biaya"]).'</td>
    </tr>
    <tr>
        <td colspan="3"><hr></td>
    </tr>
</table>';
$html .="</tbody>";
include '../modul/pdf/foot2.php';
?>

