        
        <div class="flexslider">
            <ul class="slides">
                <!-- item 1 -->
                <li>
                    <div class="overlay"></div>
                    <img src="<?= img("templatemo_slide_1.jpg") ?>" alt="Special 1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">Rp40.000</span>
                                    <h3 class="title">Water Park Ceria</h3>
                                      <p>Kolam renang dengan seluncuran yang seru                        
                                    </p>
                                    <a href="" class="slider-btn">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- item 2 -->
                <li>
                    <div class="overlay"></div>
                    <img src="<?= img("templatemo_slide_2.jpg"); ?>" alt="Special 2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">Rp125.000</span>
                                    <h3 class="title">Pemancingan Telaga Setu   </h3>
                                    <p>Tidak hanya menyediakan tempat mancing ikan saja, namun terdapat juga tempat untuk memancing keributan.</p>
                                    <a href="#" class="slider-btn">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- item 3 -->
                <li>
                    <div class="overlay"></div>
                    <img src="<?= img("templatemo_slide_3.jpg") ?>" alt="Special 3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">Rp9.000</span>
                                    <h3 class="title">Taman Lembah Mawar</h3>
                                    <p>Taman Lembah Mawar Melebihi Taman Lawang</p>
                                    <a href="#" class="slider-btn">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- akhir item -->
            </ul>
        </div> 

        
        <!-- Rekomendasi Wisata -->
        <div class="middle-content">
            <!-- Kolam Renang -->
                <div class="container">
                    <h3 class="widget-title">Kolam Renang</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <!-- <?php 
                                    $tempat=[$kolam_renang, $taman_kota];
                                    foreach($tempat as $tmp => $value){
                                        var_dump($tmp=$value);
                                    }
                                ?> -->
                                <!-- 1 -->
                                <?php foreach($kolam_renang as $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/$tempat->nama_tempat")?>" class="price-btn"> Pesan Tiket</a>
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                                <!-- akhir item -->
                            </div>
                    </div>
                </div> 
            <!-- Taman Kota -->
                <div class="container">
                    <h3 class="widget-title" style="margin-top:50px">Taman Kota</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <?php foreach($taman_kota as $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/{$tempat->nama_tempat}") ?>" class="price-btn"> Pesan Tiket</a>
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                </div> 
                <!-- Pemancingan -->
                <div class="container">
                    <h3 class="widget-title" style="margin-top:50px">Pemancingan</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <?php foreach($pemancingan as  $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/$tempat->nama_tempat")?>" class="price-btn"> Pesan Tiket</a>
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                </div> 
                <!-- Situ atau Sungai -->
                <div class="container">
                    <h3 class="widget-title" style="margin-top:50px">Situ atau Sungai</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <?php foreach($situ as $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/$tempat->nama_tempat") ?>" class="price-btn"> Pesan Tiket</a>
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                </div> 
               <!-- Tempat Ibadah -->
                <div class="container">
                    <h3 class="widget-title" style="margin-top:50px">Tempat Ibadah</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <?php foreach($tempat_ibadah as $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/$tempat->nama_tempat") ?>" class="price-btn"> Pesan Tiket</a>
                                      
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                </div> 
                <!-- Agrowisata -->
                <div class="container">
                    <h3 class="widget-title" style="margin-top:50px">Agrowisata</h3>
                    <div class="row">
                            <div class="our-listing owl-carousel">
                                <?php foreach($agrowisata as $tempat) : ?>
                                <div class="list-item">
                                    <div class="list-thumb">
                                        <div class="title">
                                            <h4><?= $tempat->kecamatan?></h4>
                                        </div>
                                        <img src="<?= img("destination_1.jpg") ?>" alt="destination 1">
                                    </div> 
                                    <div class="list-content">
                                        <h5><a href="<?= base_url("wisata/detail/$tempat->jenis/$tempat->nama_tempat") ?>"> <?= $tempat->nama_tempat ?></a> </h5>
                                        <img src="<?= img("rating/5.png") ?>" alt="">
                                        <span class="mt-3"><?= rupiah($tempat->harga_tiket) ?></span>
                                        <a href="<?= base_url("wisata/booking/$tempat->nama_tempat") ?>" class="price-btn"> Pesan Tiket</a>
                                    </div> 
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                </div> 
        </div>
        <!-- Rekomendasi Wisata -->
        <div class="middle-content"></div>

       

	
