<?php 

$user         	= mysqli_query($koneksi,"SELECT * FROM user");
$jumlah_user  	= mysqli_num_rows($user);

$pendaftaran1         	= mysqli_query($koneksi,"SELECT * FROM cuti");
$jumlah_pendaftaran1  	= mysqli_num_rows($pendaftaran1);

$pendaftaran         	= mysqli_query($koneksi,"SELECT * FROM perjalanandinas");
$jumlah_pendaftaran  	= mysqli_num_rows($pendaftaran);

$query = "SELECT * FROM user WHERE id_user='$id_user'";
$result = mysqli_query($koneksi, $query);
$ros = mysqli_fetch_array($result);
$usia = hitungUsia($ros['tanggal_lahir']);

$qry = "SELECT * FROM pelatihan WHERE id_user='$id_user'";
$hasil = mysqli_query($koneksi, $qry);
$jumla = mysqli_num_rows($hasil);
$rosa = mysqli_fetch_array($hasil);
 ?>