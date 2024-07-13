
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM perjalanandinas WHERE id_perjalanandinas='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>
