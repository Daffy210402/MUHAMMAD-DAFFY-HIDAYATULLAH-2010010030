
<?php 
$id			= $_GET['id'];
$status		= $_GET['status'];

$sql = mysqli_query($koneksi,"UPDATE cuti SET status_cuti='$status' WHERE id_cuti='$id'");

echo "<script>alert('Status Cuti Berhasil di Ubah Menjadi ".$status."!');document.location='index.php?page=Cuti'</script>";
 ?>