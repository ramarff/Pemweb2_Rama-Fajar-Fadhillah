
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
        let base_url="http://localhost/admin/wisata";
        function cleanArray(arr) {
            var newArray = new Array();
            for (var i = 0; i < arr.length; i++) {
                if (arr[i]) {
                    newArray.push(arr[i]);
                }
            }
            return newArray;
        };
        let url=(document.location.href === base_url) ? "wisata" : cleanArray(document.location.href.split("/"))[4];
        console.log(url)
        let nav_sidebar=document.querySelectorAll(".nav-sidebar .nav-item .nav-link");
        for(nav of nav_sidebar){    
            let href=cleanArray(nav.href.split("/"))[4];
            if (href === url  ){
                nav.classList.add("active");
            }
        }
</script>
</body>
</html>
