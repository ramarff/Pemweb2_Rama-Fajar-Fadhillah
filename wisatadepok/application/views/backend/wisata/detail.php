<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Data Tempat Wisata Kota Depok</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="<?= base_url("mahasiswa"); ?>">Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Detail Tempat Wisata</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Lengkap Tempat Wisata</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped">
                                    <!-- <?php var_dump($detail) ?> -->
                                    <tbody>
                                        <tr>
                                            <td>Nama:</td>
                                            <td><?= $detail->nama_wisata; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Wisata:</td>
                                            <td><?= $detail->jenis; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Fasilitas:</td>
                                            <td><?= $detail->fasilitas; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Website:</td>
                                            <td><?= $detail->website; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Tiket:</td>
                                            <td><?= rupiah($detail->harga_tiket); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan:</td>
                                            <td><?= $detail->kecamatan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Latlong:</td>
                                            <td><?= $detail->latlong; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat:</td>
                                            <td><?= $detail->alamat; ?></td>
                                        </tr>
                                      
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <h3>Foto</h3>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?= img("wisata/$detail->foto1") ?>" class="img-fluid">
                                <p class="text-center mt-3">Foto 1</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?= img("wisata/$detail->foto2") ?>" class="img-fluid">
                                <p class="text-center mt-3">Foto 2</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?= img("wisata/$detail->foto3") ?>" class="img-fluid">
                                <p class="text-center mt-3">Foto 3</p>
                            </div>
                        </div>
                       <a href="<?= admin("wisata") ?>"><i class="fas fa-solid fa-arrow-left"></i> Kembali</a> 
                    </div>
                </div>
            </div>
        </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->