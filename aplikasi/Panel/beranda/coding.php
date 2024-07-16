<?php 

$absen         	= mysqli_query($koneksi,"SELECT * FROM absen");
$jumlah_absen  	= mysqli_num_rows($absen);

$cuti         	= mysqli_query($koneksi,"SELECT * FROM cuti");
$jumlah_cuti  	= mysqli_num_rows($cuti);

$mutasi         	= mysqli_query($koneksi,"SELECT * FROM mutasi");
$jumlah_mutasi  	= mysqli_num_rows($mutasi);

$skp         	= mysqli_query($koneksi,"SELECT * FROM skp");
$jumlah_skp  	= mysqli_num_rows($skp);

$sppd         	= mysqli_query($koneksi,"SELECT * FROM sppd");
$jumlah_sppd  	= mysqli_num_rows($sppd);

$spt         	= mysqli_query($koneksi,"SELECT * FROM spt");
$jumlah_spt  	= mysqli_num_rows($spt);

$naik_gaji         	= mysqli_query($koneksi,"SELECT * FROM naik_gaji");
$jumlah_naik_gaji  	= mysqli_num_rows($naik_gaji);

$naik_pangkat         	= mysqli_query($koneksi,"SELECT * FROM naik_pangkat");
$jumlah_naik_pangkat  	= mysqli_num_rows($naik_pangkat);

$pensiun         	= mysqli_query($koneksi,"SELECT * FROM pensiun");
$jumlah_pensiun  	= mysqli_num_rows($pensiun);

 ?>