<?php 
if (isset($_POST['step1'])) {
fopen("../conf/koneksi.php", "x");
$host = $_POST['host'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$db   = $_POST['db'];
$conn = new mysqli($host, $user, $pass);
$sql = "CREATE DATABASE ".$db;
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$filename = '
<?php 
session_start(); 
error_reporting(0);
date_default_timezone_set("Asia/Makassar");

$host = "'.$host.'"; 
$user = "'.$user.'"; 
$pass = "'.$pass.'"; 
$db   = "'.$db.'"; 

$apk = "BADAN PENGADAAN BARANG DAN JASA KAB TAPIN";
$fapk = "Badan Pengadaan Barang Dan Jasa Kab Tapin";
$fnama = "MUHAMMAD DAFFY HIDAYATULLAH | 2010010030";
$lokasi = "Jl. Brigjend H. Hasan Basri, Rantau Kiwa, Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71152";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

function tgl($tanggal){
    $bulan = array (
        1 => "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );
    $pecahkan = explode("-", $tanggal);
    return $pecahkan[2] . " " . $bulan[(int)$pecahkan[1]] . " " . $pecahkan[0];
}

function rp($angka){
    return "Rp." . number_format($angka, 2, ",", ".");
}

function umur($tanggal_lahir){
    $birthDate = new DateTime($tanggal_lahir);
    $today = new DateTime("today");
    if ($birthDate > $today) { 
        return "0 tahun";
    }
    return $today->diff($birthDate)->y;
}
?>


';

file_put_contents('../conf/koneksi.php',$filename,FILE_APPEND);
 ?>
<meta http-equiv="refresh" content="0;url=install2.php?step2">
<?php 
}
if (isset($_GET['step2'])) {
    include '../conf/koneksi.php';
    $sqlSource = file_get_contents('db.sql');
    mysqli_multi_query($koneksi,$sqlSource);
header('location: install3.php');
}
 ?>