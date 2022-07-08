<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                             <h4>Tambah Data Wisata</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="<?= admin("wisata"); ?>">Wisata</a></li>
                        <li class="breadcrumb-item active">Tambah Data Tempat Wisata</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
              <div class="container">
                    <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data Tempat Wisata</h3>
                            </div>
                            <div class="card-body">
                              <form method="POST" action="<?= admin("wisata/tambah") ?>" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Tempat Wisata</label> 
                                        <div class="col-8">
                                        <input id="nama" name="nama" placeholder="Nama Tempat Wisata" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Jenis Wisata</label> 
                                        <div class="col-8">
                                        <select id="jenis" name="jenis" class="custom-select">
                                            <?php foreach($jenis as $data) : ?>
                                                <option value="<?= $data->id; ?>"><?= $data->nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
                                        <div class="col-8">
                                        <input id="fasilitas" name="fasilitas" placeholder="Fasilitas" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-4 col-form-label">Website</label> 
                                        <div class="col-8">
                                          <input id="website" name="website" placeholder="Website" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-4 col-form-label">Harga Tiket</label> 
                                        <div class="col-8">
                                          <input id="harga" name="harga" placeholder="Harga Tiket" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label> 
                                        <div class="col-8">
                                        <select id="kecamatan" name="kecamatan" class="custom-select">
                                            <?php foreach($kecamatan as $data) : ?>
                                                <option value="<?= $data->id; ?>"><?= $data->nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="latlong" class="col-4 col-form-label">Latlong</label> 
                                        <div class="col-8">
                                        <input id="latlong" name="latlong" placeholder="Latitude Longtitude8j" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                        <div class="col-8">
                                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="foto1" class="col-4 col-form-label">Foto 1</label> 
                                        <div class="col-8">
                                            <?= form_upload("foto1"); ?>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="foto2" class="col-4 col-form-label">Foto 2</label> 
                                        <div class="col-8">
                                            <?= form_upload("foto2"); ?>  
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="foto3" class="col-4 col-form-label">Foto 3</label> 
                                        <div class="col-8">
                                            <?= form_upload("foto3"); ?>  
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8 text-right">
                                        <button name="batal" type="submit" class="btn btn-danger">Batal</button>
                                        <button name="tambah" type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
              </div>
            </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->


















