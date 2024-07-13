
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM spt WHERE id_spt='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>
