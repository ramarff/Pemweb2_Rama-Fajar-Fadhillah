<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                             <h4>Tambah Data Mahasiswa</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="<?= base_url("mahasiswa"); ?>">Mahasiswa</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url("mahasiswa/tambah_mahasiswa"); ?>">Tambah Data</a></li>
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
                                <h3 class="card-title">Tambah Data Lengkap Mahasiswa</h3>
                            </div>
                            <div class="card-body">
                              <form method="POST" action="<?= base_url("mahasiswa/saveData") ?>" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                                        <div class="col-8">
                                        <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label> 
                                        <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_0" type="radio"  class="custom-control-input" value="L"> 
                                            <label for="jk_0" class="custom-control-label">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                                        <div class="col-8">
                                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat lahir" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                                        <div class="col-8">
                                        <input id="tgl_lahir" name="tgl_lahir" placeholder="yyyy-mm-dd" type="date" min="1997-01-01" max="2030-12-31" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                                        <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select">
                                            <?php foreach($jurusan as $jur) : ?>
                                                <option value="<?= $jur->kode; ?>"><?= $jur->nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                        <div class="col-8">
                                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="foto" class="col-4 col-form-label">Foto</label> 
                                        <div class="col-8">
                                            <input id="foto" name="foto" type="file">
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


















