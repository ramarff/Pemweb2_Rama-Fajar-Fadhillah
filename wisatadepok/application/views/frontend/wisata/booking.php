<?php
$nama=$tempat_wisata->nama_wisata;
$jenis=$tempat_wisata->jenis;
$alamat=$tempat_wisata->alamat;
$fasilitas=$tempat_wisata->fasilitas;
$harga=$tempat_wisata->harga_tiket;
$foto=$tempat_wisata->foto3;
?>
       <div class="page-top" id="templatemo_contact"></div> 
        <div class="middle-content">
            <div class="container">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url("wisata/detail/$jenis/$nama") ?>">Detail</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pesan tiket <?= $nama ?></li>
            </ol>
            </nav>
            </div>
        </div>
        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <h3 class="widget-title"><?= $nama ?></h3>
                        <div class="sample-thumb">
                                <img src="<?= img("wisata/$tempat_wisata->foto3") ?>" alt="<?= $nama ?>" title="<?= $nama ?>">
                        </div> 
                        <div class="contact-infos">
                            <ul>
                                <li><span style="color:#9ed034;font-size:18px;font-weight:bold; "><?= rupiah($harga) ?></span></li>
                                <li>Alamat:<?= $alamat ?></li>
                                <li>Fasilitas:<?= $fasilitas ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">Pesan Tiket</h3>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="#" method="post">
                                <p>
                                    Nama Pemesan
                                    <input name="name" type="text" id="name" value="Paizal" readonly>
                                </p>
                                <p>
                                    Email Pemesan
                                    <input name="email" type="text" id="email"  value="paizal@gmail.com" readonly> 
                                </p>
                                <p>
                                    Nama di Tiket
                                    <input name="subject" type="text" id="subject" placeholder="Nama "> 
                                </p>
                                <p>
                                    Tempat Wisata
                                    <input name="tmp_wisata" type="text" id="tmp_wisata" value="<?= $nama; ?>" readonly> 
                                </p>
                                <p>
                                    Hari/tanggal
                                    <input name="tanggal" type="date" id="tanggal"> 

                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Pesan ">
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>




      