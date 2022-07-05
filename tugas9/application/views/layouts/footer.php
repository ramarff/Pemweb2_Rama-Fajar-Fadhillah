
<!-- jQuery -->
<script src="<?= base_url('assets/admin-lte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/admin-lte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin-lte/dist/js/adminlte.js')?>"></script>
<script>
        let base_url="http://localhost/jadwal_skripsi/";
        function cleanArray(arr) {
            var newArray = new Array();
            for (var i = 0; i < arr.length; i++) {
                if (arr[i]) {
                    newArray.push(arr[i]);
                }
            }
            return newArray;
        };
        let nav_link=document.querySelectorAll(".left .nav-item .nav-link");
        let url=(document.location.href === base_url) ? "home" : cleanArray(document.location.href.split("/"))[3];
        let nav_sidebar=document.querySelectorAll(".nav-sidebar .nav-item .nav-link");
        // console.log(nav_sidebar);
        for(let [i, nav] of nav_link.entries()){    
            let href=cleanArray(nav.href.split("/"))[3];
            if (href === url  ){
                nav.classList.add("active");
                // console.log(i)
                nav_sidebar[i-1].classList.add("active");
                // console.log(nav_sidebar[i-1]);
            }
        }
</script>
</body>
</html>
