
<?php 
$id						= $_GET['id'];
$proses					= $_GET['proses'];

if ($_GET['status'] == "Terima") {
$sql = mysqli_query($koneksi,"UPDATE cuti SET status_cuti='Diterima' WHERE id_cuti='$id'");
}

if ($_GET['status'] == "Tolak") {
$sql = mysqli_query($koneksi,"UPDATE cuti SET status_cuti='Ditolak' WHERE id_cuti='$id'");
}

if ($_GET['status'] == "Proses") {
$sql = mysqli_query($koneksi,"UPDATE cuti SET status_cuti='Proses' WHERE id_cuti='$id'");
}

echo "<script>alert('status cuti berhasil dirubah!');document.location='index.php?page=Pensiun'</script>";
?>