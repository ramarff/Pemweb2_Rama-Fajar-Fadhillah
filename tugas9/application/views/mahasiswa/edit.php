<?php
    $hidden=["nimEdit" => $mahasiswa->nim];
    $jenis_kelamin=["L" => "Laki-laki", "P" => "Perempuan"];
?>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                             <h4>Edit Data Mahasiswa</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="<?= base_url("mahasiswa"); ?>">Mahasiswa</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url("mahasiswa/edit?nim=".$mahasiswa->nim); ?>">Edit Data</a></li>
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
                                <h3 class="card-title">Edit Data Lengkap Mahasiswa</h3>
                            </div>
                            <div class="card-body">
                                <?= form_open("mahasiswa/saveData","",$hidden); ?>
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                                        <div class="col-8">
                                        <input id="nim" name="nim"  type="text" class="form-control" value="<?= $mahasiswa->nim; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <input id="nama" name="nama"  type="text" class="form-control" value="<?= $mahasiswa->nama_mahasiswa; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label> 
                                        <div class="col-8">
                                            <?php foreach($jenis_kelamin as $jk => $value) : ?>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                            <input name="jk" id="<?= $jk; ?>" type="radio" class="custom-control-input" value="<?= $jk; ?>" <?php echo ($value == $mahasiswa->jenis_kelamin) ? "checked" : ""; ?>> 
                                                            <label for="<?= $jk; ?>" class="custom-control-label"><?= $value; ?></label>
                                                    </div>
                                       
                                                
                                            <?php endforeach; ?>
                                            <!-- <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" <?= $checkedP; ?>> 
                                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                                        <div class="col-8">
                                        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $mahasiswa->tmp_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                                        <div class="col-8">
                                      
                                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?php  {echo date('Y-m-d',strtotime($mahasiswa->tgl_lahir)); }?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                                        <div class="col-8">
                                            <select id="prodi" name="prodi" class="custom-select">    
                                                <?php foreach($jurusan as $j) : ?>	
                                                    <?php if($j->kode == $mahasiswa->kode_prodi )	 : ?>
                                                        <option value="<?= $j->kode; ?>" selected><?= $j->nama; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j->kode; ?>"><?= $j->nama; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>                           
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                                        <div class="col-8">
                                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"><?= $mahasiswa->alamat; ?></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="foto" class="col-4 col-form-label">Foto</label> 
                                        <div class="col-8">
                                            <img src="<?= base_url("/img/$mahasiswa->photos")?>" class="img-thumbnail" alt="foto" width="200px" height="200px"><br><br>
                                            <input id="foto" name="foto" type="file">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8 text-right">
                                        <button name="batal" type="submit" class="btn btn-danger" >Batal</button>
                                        <button name="edit" type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                              
                            </div>
                    </div>
              </div>
            </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->


















