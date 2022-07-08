        <?php
        $nama=$tempat_wisata->nama_wisata;
        $jenis=$tempat_wisata->jenis;
        $alamat=$tempat_wisata->alamat;
        $fasilitas=$tempat_wisata->fasilitas;
        $harga=$tempat_wisata->harga_tiket;
        $foto=$tempat_wisata->foto2;
        $kecamatan=$tempat_wisata->kecamatan;
        $latlong=$tempat_wisata->latlong;
        ?>
        <div class="page-top" id="templatemo_about"> </div> 
        <div class="middle-content">
            <div class="container">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page"><?= $nama ?></li>
            </ol>
            </nav>
            </div>
        </div>
        <div class="middle-content">
            <div class="container">
            
                <div class="row">
                
                	<div class="col-md-12">
                        <div class="widget-item">
                            <h3 class="widget-title"><?= $nama; ?></h3>
                            <div class="sample-thumb">
                                <img src="<?= img("wisata/$foto") ?>" alt="about us" title="<?= $nama ?>">
                            </div> 
                            <h3 class="consult-title">Tentang <?= $nama; ?></h3>
                            <p>Duis mattis neque vel rutrum finibus. Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur. Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum.<br><br>
							Suspendisse convallis congue tellus, nec ultricies sem molestie ac.  Nunc lobortis elit orci, vitae suscipit urna dictum id. Nullam at elementum magna. Vivamus sit amet ipsum tortor. Nullam molestie eros quis risus pellentesque, eget pellentesque mauris placerat.</p>
                            <br>
                            <p>Duis mattis neque vel rutrum finibus. Mauris vel tincidunt purus. Aenean laoreet ornare purus. Nunc condimentum augue sed massa iaculis, vel blandit sapien consectetur. Curabitur eu aliquam erat. Etiam sollicitudin est eu turpis dapibus aliquet. Ut vitae lacus vel nulla iaculis interdum.<br><br>
							Suspendisse convallis congue tellus, nec ultricies sem molestie ac.  Nunc lobortis elit orci, vitae suscipit urna dictum id. Nullam at elementum magna. Vivamus sit amet ipsum tortor. Nullam molestie eros quis risus pellentesque, eget pellentesque mauris placerat.</p>
                        </div>
                        <div class="widget-item">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span>Rating:<img src="<?= img("rating/5.png")?>" alt=""></span> </li>
                            <li class="list-group-item">Kecamatan :<?= $kecamatan; ?></li>
                            <li class="list-group-item">Alamat : <?= $alamat; ?></li>
                            <li class="list-group-item">Latlong :  <?= $latlong; ?></li>
                            <li class="list-group-item">Fasilitas : <?= $fasilitas ?> </li>
                            <li class="list-group-item">Harga Tiket : <?= rupiah($harga); ?><br><br><a href="<?= base_url("wisata/booking/$nama") ?>" class=" btn btn-success">Pesan Tiket </a></li>
                        </ul>
                        </div>
                    </div> 
        </div>
        <!-- <div> -->
            <section class="content-item" id="comments">
                <div class="container">   
                    <div class="row">
                        <div class="col-sm-8">   
                            <form>
                                <h3 class="pull-left">New Comment</h3>
                                <button type="submit" class="btn btn-normal pull-right">Submit</button>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2 hidden-xs">
                                            <img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                            <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                        </div>
                                    </div>  	
                                </fieldset>
                            </form>
                            
                            <!-- <h3>4 Comments</h3> -->
                            
                            <!-- COMMENT 1 - START -->
                            <?php foreach($komen as $k) :?>	
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?= $k->username ?></h4>
                                    <p><?= $k->komentar; ?></p>
                                    <ul class="list-unstyled list-inline media-detail pull-left">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    </ul>                            
                                </div>
                            </div>
                            <?php endforeach; ?>	
                            <!-- COMMENT 1 - END -->
                        
                        </div>
                    </div>
                </div>
            </section>

        </div>
