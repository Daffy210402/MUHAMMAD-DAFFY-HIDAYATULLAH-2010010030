 <!-- SISTEM 1 -->
 <?php 
 $petik = "'"; 
 $isi_form = '
 <?php 
 if ($_GET['.$petik.'form'.$petik.'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM '.$nama_tabel_sistem.' WHERE '.$nama_field_sistem[$i].'='.$petik.'$id'.$petik.'");
    $data   = mysqli_fetch_array($sql);
}
?>
<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                <form method="post" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
                    <div class="row">';
    ?>