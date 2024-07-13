
    </div>
</div>

    <!-- Required Js -->
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/ripple.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="../assets/js/plugins/apexcharts.min.js"></script>

<!-- select2 Js -->
<script src="../assets/js/plugins/select2.full.min.js"></script>

<!-- form-select-custom Js -->
<script src="../assets/js/pages/form-select-custom.js"></script>

<!-- datatable Js -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="../assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/pages/data-basic-custom.js"></script>

<!-- file-upload Js -->
<script src="../ssets/js/plugins/dropzone-amd-module.min.js"></script>

<!-- file-upload Js -->
<script src="../modul/lokasi/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
<script>
    if(geo_position_js.init()){
        geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
    }
    else{
        masukubah=document.getElementById("masukubah");
        masukubah.innerHTML ="Tidak ada fungsi geolocation";
    }

    function success_callback(p)
    {
        latitude=p.coords.latitude ;
        longitude=p.coords.longitude;
        pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_user;?>&masukubah" class="btn btn-primary btn-block">Ubah Absen Masuk</a></br>';
        masukubah=document.getElementById("masukubah");
            //alert(pesan);
            masukubah.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            masukubah=document.getElementById("masukubah");
            masukubah.innerHTML ='error='+p.message;
        }        
    </script>
<script>
    if(geo_position_js.init()){
        geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
    }
    else{
        masuk=document.getElementById("masuk");
        masuk.innerHTML ="Tidak ada fungsi geolocation";
    }

    function success_callback(p)
    {
        latitude=p.coords.latitude ;
        longitude=p.coords.longitude;
        pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_user;?>&masuk" class="btn btn-primary btn-block">Absen Masuk</a></br>';
        masuk=document.getElementById("masuk");
            //alert(pesan);
            masuk.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            masuk=document.getElementById("masuk");
            masuk.innerHTML ='error='+p.message;
        }        
    </script>
    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            pulang=document.getElementById("pulang");
            pulang.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_user;?>&pulang" class="btn btn-primary btn-block" style="float: right;">Absen Pulang</a></br>';
            pulang=document.getElementById("pulang");
            //alert(pesan);
            pulang.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            pulang=document.getElementById("pulang");
            pulang.innerHTML ='error='+p.message;
        }        
    </script>

    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            pulangubah=document.getElementById("pulangubah");
            pulangubah.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan = '<a href="Absen/proses.php?lat='+latitude +'&long='+longitude+'&id_user=<?=$id_user;?>&pulangubah" class="btn btn-primary btn-block" style="float: right;">Ubah Absen Pulang</a></br>';
            pulangubah=document.getElementById("pulangubah");
            //alert(pesan);
            pulangubah.innerHTML = pesan;
        }
        
        function error_callback(p)
        {
            pulangubah=document.getElementById("pulangubah");
            pulangubah.innerHTML ='error='+p.message;
        }        
    </script>
<!-- custom-chart js -->
<script src="../assets/js/pages/dashboard-crm.js"></script>
</body>

</html>
