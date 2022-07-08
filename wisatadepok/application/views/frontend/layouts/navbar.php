   <!-- header -->
   <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="<?= img("logo.png")?>" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> 
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li><a href="<?= base_url("wisata"); ?>">Wisata</a></li>
                                    <li><a href="<?= base_url("layanan") ?>">Layanan</a></li>
                                    <li><a href="<?= base_url("acara") ?>">Acara</a></li>
                                    <!-- <li><a href="<?= base_url("about") ?>">Tentang Kami</a></li> -->
                                    <li><a href="<?= base_url("account/login") ?>"><?php
                                            if($this->session->has_userdata("user_public")){
                                            echo $this->session->userdata("user_public");
                                            }else{
                                                 echo "MASUK";
                                            }
                                        ?></a></li>
                                    </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div> 
                    </div> 
                </div> 
                <!-- navbar responsive -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div> 
                    </div> 
                </div>
                <!--navbar responsive-->
            </div> 
        </div> 
       <!-- akhir header -->