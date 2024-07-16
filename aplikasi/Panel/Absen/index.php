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
 <div class="main-content app-content mt-0">
 	<div class="side-app">

 		<!-- CONTAINER -->
 		<div class="main-container container-fluid">

 			<!-- PAGE-HEADER -->
 			<div class="page-header">
 				<h1 class="page-title"></h1>
 				<div>
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 						<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
 					</ol>
 				</div>

 			</div>
 			<!-- PAGE-HEADER END -->

 			<!-- Row -->
 			<div class="row row-sm">
 				<div class="col-lg-12">
 					<div class="card">
 						<div class="card-header">
 							<h3 class="card-title"><?=$folder;?></h3>
 						</div>
 						<div class="card-body">
 							<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
 									<thead>
 										<tr>
 											<th>No</th>

    <th>Pegawai</th>

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
if ($akses == "Pegawai") {
  $sql = mysqli_query($koneksi,"SELECT * FROM absen
  JOIN user USING(id_user)
  WHERE id_user='$id_pengguna'");  
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

<td><?=$data['nama_pengguna'];?></td>

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
</div>
<!-- End Row -->

</div>
<!-- CONTAINER CLOSED -->

</div>
</div>
<!-- END: Page Main-->
