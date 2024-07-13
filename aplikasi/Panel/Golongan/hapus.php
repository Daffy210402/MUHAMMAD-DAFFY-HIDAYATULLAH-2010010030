
<?php 
	$id = $_GET['id'];
	$sql =mysqli_query($koneksi,"DELETE FROM golongan WHERE id_golongan='$id'");
  echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=".$folder."';</script>"; 
?>
