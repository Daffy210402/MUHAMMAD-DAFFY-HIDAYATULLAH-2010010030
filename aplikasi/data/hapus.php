 <?php
 $petik = "'"; 
$isi_hapus = '
<?php 
	$id = $_GET['.$petik.'id'.$petik.'];
	$sql =mysqli_query($koneksi,"DELETE FROM '.$nama_tabel_sistem.' WHERE '.$nama_field_sistem[$i].'='.$petik.'$id'.$petik.'");
  echo "<script>alert('.$petik.'Data berhasil dihapus.'.$petik.');window.location='.$petik.'index.php?page=".$folder."'.$petik.';</script>"; 
?>
';
?>