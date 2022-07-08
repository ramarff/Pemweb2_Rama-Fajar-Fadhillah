<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                             <h4>Edit Jenis Wisata</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="<?= admin("jenis_wisata"); ?>">Jenis Wisata</a></li>
                        <li class="breadcrumb-item active">Edit data</li>
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
                                <h3 class="card-title">Edit Data Jenis Wisata</h3>
                            </div>
                            <div class="card-body">
                              <form method="POST" action="<?= admin("jenis_wisata/edit") ?>">
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Jenis Wisata</label> 
                                        <div class="col-8">
                                            <input id="idEdit" name="idEdit" value="<?= $detail->id; ?>" type="hidden">
                                            <input id="nama" name="nama" value="<?= $detail->nama; ?>" type="text" class="form-control">
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="offset-4 col-8 text-right">
                                        <button name="batal" type="submit" class="btn btn-danger">Batal</button>
                                        <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
              </div>
            </section>
  </div>
</div>


















