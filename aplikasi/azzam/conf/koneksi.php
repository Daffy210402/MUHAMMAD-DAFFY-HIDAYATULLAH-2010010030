<?php 
session_start();
error_reporting(error_reporting() & ~E_NOTICE);
$koneksi = mysqli_connect("localhost","root","","karyawan2");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>