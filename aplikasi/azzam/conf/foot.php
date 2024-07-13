
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2021 All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by Muhammad Itba' Hikmatullah Azzam</span></div>
        </div> 
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="azzam/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="azzam/app-assets/vendors/chartjs/chart.min.js"></script>
    <script src="azzam/app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="azzam/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="azzam/app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>    
    <script src="azzam/app-assets/js/scripts/form-select2.js"></script>
    <script src="azzam/app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="azzam/app-assets/js/plugins.js"></script>
    <script src="azzam/app-assets/js/search.js"></script>
    <script src="azzam/app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="azzam/app-assets/js/scripts/data-tables.js"></script>
    <script src="azzam/app-assets/js/scripts/advance-ui-modals.js"></script>
    <!-- END PAGE LEVEL JS-->

    <script type="text/javascript">
        $(document).ready(function() {
          $(".add-more").click(function(){ 
              var html = $(".copy").html();
              $(".before-add-more").before(html);
          });

          // saat tombol remove dklik control group akan dihapus 
          $("body").on("click",".remove",function(){ 
              $(this).parents(".view-select2").remove();
          });
        });
    </script>
</body>

</html>