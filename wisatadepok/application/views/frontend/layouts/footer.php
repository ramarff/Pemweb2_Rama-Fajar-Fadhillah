     
     
      
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="<?= img("logo.png") ?>" alt="">
                            </a>
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>Copyright &copy; 2014 <a href="#">Company Name</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa-brands fa-facebook"></a></li>
                            <li><a href="#" class="fa-brands fa-twitter"></a></li>
                            <li><a href="#" class="fa-brands fa-linkedin"></a></li>
                            <li><a href="#" class="fa-brands fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> 
                </div>
            </div> 
        </div> 
      
      <script src="<?= js("vendor/jquery-1.11.0.min.js") ?>"></script>
        <script>
            window.jQuery || document.write("<script src='js/vendor/jquery-1.11.0.min.js'><\/script>");
        </script>
        <script src="<?= js("bootstrap.js")?>"></script>
        <script src="<?= js("plugins.js") ?>"></script>
        <script src="<?= js("main.js") ?>"></script>
 
 

        <!-- script sendiri -->
        <script>
            let base_url="http://localhost/wisatadepok/";
            function cleanArray(arr) {
                var newArray = new Array();
                for (var i = 0; i < arr.length; i++) {
                    if (arr[i]) {
                        newArray.push(arr[i]);
                    }
                }
                return newArray;
            };
            // let nav_link=document.querySelectorAll(".main-menu .visible-lg li a");
            let list=document.querySelectorAll(".main-menu .visible-lg li");
            let url=(document.location.href === base_url) ? "wisata" : cleanArray(document.location.href.split("/"))[3];
            // console.log(url);
            for(li of list){       
                let href=cleanArray(li.querySelector("a").href.split("/"))[3];
                if (href === url  ){
                    li.classList.add("active")
                }
            }
        </script>
    </body>
</html>