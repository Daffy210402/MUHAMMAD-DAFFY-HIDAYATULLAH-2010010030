
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM cuti WHERE id_cuti='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>
