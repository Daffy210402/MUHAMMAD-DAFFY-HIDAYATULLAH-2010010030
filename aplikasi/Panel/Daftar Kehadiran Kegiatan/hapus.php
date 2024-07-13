
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM kehadirankegiatan WHERE id_kehadirankegiatan='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>
