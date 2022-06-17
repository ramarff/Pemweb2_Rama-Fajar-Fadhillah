    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script  type="text/javascript" src="<?= base_url(); ?>assets/js/script.js"></script>
    <script type="text/javascript">
       let url=document.location.pathname.split("/")
       let nav_link=document.querySelectorAll(".nav-link");
       for(nav of nav_link){    
           if (url[3] == nav.href.split("/")[5]){
              nav.classList.add("active")
           }
       }
    </script>
  </body>
</html>
