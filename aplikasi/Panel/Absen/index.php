    <!-- leaflet js  -->
<link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
<style>
#marker {
background-image: url('../assets/maps.png');
background-size: cover;
width: 50px;
height: 50px;
border-radius: 50%;
cursor: pointer;
}
 
.mapboxgl-popup {
max-width: 200px;
}
</style> 
 <!-- BEGIN: Page Main-->

<div class="row">
    <!-- Zero config table start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
            <?php 
            $tgl = date('Y-m-d');
            $sql = mysqli_query($koneksi,"SELECT * FROM absen WHERE id_user='$id_user' AND tanggal_absen='$tgl'");
            $jumlah = mysqli_num_rows($sql);
            $data = mysqli_fetch_array($sql);
            if ($jumlah == 1) {
            $jam_masuk = date("H:i:s", strtotime($data['jam_masuk']));
            $waktu_pulang_unix = strtotime($jam_masuk) + 8 * 3600; // Menambah 8 jam dalam detik
            $jam_pulang = date("H:i:s", $waktu_pulang_unix);
            ?>
                <?php if ($jam_pulang <= date("H:i:s")): ?>
                    <?php if ($data['long_pulang'] == NULL): ?>
                        <div id="pulang">
                        </div>                                                       
                    <?php endif ?>
                <?php endif ?>
            <?php
            }else{
            ?>
            <div id="masuk">
            </div>
            <?php } ?>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
 									<thead>
 										<tr>
 											<th>No</th>

    <th>Karyawan</th>

    <th>Tanggal Absen</th>

    <th>Jam Masuk</th>

    <th>Maps Masuk</th>

    <th>Jam Pulang</th>

    <th>Maps Pulang</th>

</tr>
</thead>
<tbody>
<?php 
$no = 1;
if ($level == "Karyawan") {
  $sql = mysqli_query($koneksi,"SELECT * FROM absen
  JOIN user USING(id_user)
  WHERE id_user='$id_user'");  
} else {
  $sql = mysqli_query($koneksi,"SELECT * FROM absen
  JOIN user USING(id_user)
  ");
}

while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_absen'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['nama_user'];?></td>

<td><?=tgl($data['tanggal_absen']);?></td>

<td><?=$data['jam_masuk'];?></td>

<td><div id="masuk<?=$id;?>" style="width: 300px; height: 150px;"></div></td>

<td><?=$data['jam_pulang'];?></td>

<td><div id="pulang<?=$id;?>" style="width: 300px; height: 150px;"></div></td>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiaGF6emFtYSIsImEiOiJja3J3ZjYyeHgwZzBkMm9uMXM0aXhtM2gyIn0.65vBDTYiC2sG95UCvd2-gw';
var monument = [<?=$data['long_masuk'];?>, <?=$data['lang_masuk'];?>];
var map = new mapboxgl.Map({
container: 'masuk<?=$id;?>',
style: 'mapbox://styles/mapbox/light-v10',
center: monument,
zoom: 15
});
 
// create the popup
var popup = new mapboxgl.Popup({ offset: 25 }).setText(
'Lokasi'
);
 
// create DOM element for the marker
var el = document.createElement('div');
el.id = 'marker';
 
// create the marker
new mapboxgl.Marker(el)
.setLngLat(monument)
.setPopup(popup) // sets a popup on this marker
.addTo(map);
</script>

<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiaGF6emFtYSIsImEiOiJja3J3ZjYyeHgwZzBkMm9uMXM0aXhtM2gyIn0.65vBDTYiC2sG95UCvd2-gw';
var monument = [<?=$data['long_pulang'];?>, <?=$data['lang_pulang'];?>];
var map = new mapboxgl.Map({
container: 'pulang<?=$id;?>',
style: 'mapbox://styles/mapbox/light-v10',
center: monument,
zoom: 15
});
 
// create the popup
var popup = new mapboxgl.Popup({ offset: 25 }).setText(
'Lokasi'
);
 
// create DOM element for the marker
var el = document.createElement('div');
el.id = 'marker';
 
// create the marker
new mapboxgl.Marker(el)
.setLngLat(monument)
.setPopup(popup) // sets a popup on this marker
.addTo(map);
</script>
</tr>
<?php } ?>
</tbody>
          </table>
                </div>
            </div>
        </div>
    </div>
        <!-- Zero config table end -->
</div>

