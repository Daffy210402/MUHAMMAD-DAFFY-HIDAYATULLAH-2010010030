<?php 
$id			= $_GET['id'];
$status		= $_GET['status'];

$sql = mysqli_query($koneksi,"UPDATE perjalanandinas SET status_perjalanandinas='$status' WHERE id_perjalanandinas='$id'");

echo "<script>alert('Status Berhasil di Ubah Menjadi ".$status."!');document.location='index.php?page=Perjalanan Dinas'</script>";
 ?>