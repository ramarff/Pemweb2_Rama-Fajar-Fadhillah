<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Data Mahasiswa STT NF</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="<?= base_url("mahasiswa"); ?>">Mahasiswa</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url('/mahasiswa/detail?nim='.$mahasiswa->nim); ?>">Detail Mahasiswa</a></li>
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
                        <h3 class="card-title">Biodata Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>NIM:</td>
                                            <td><?= $mahasiswa->nim;?></td>
                                        </tr>

                                        <tr>
                                            <td>Nama:</td>
                                            <td><?= $mahasiswa->nama_mahasiswa;?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin:</td>
                                            <td><?= $mahasiswa->jenis_kelamin;?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat/tanggal lahir :</td>
                                            <td><?= $mahasiswa->tmp_lahir;?>, <?= $mahasiswa->tgl_lahir;?></td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi:</td>
                                            <td><?= $mahasiswa->nama_prodi;?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat:</td>
                                            <td><?= $mahasiswa->alamat;?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-4 ">
                                <?php
                                    $foto=base_url("/img/$mahasiswa->photos"); 
                                    $default=base_url("/img/default.jpg"); 
                                    if (file_exists("/xampp/htdocs/jadwal_skripsi/img/$mahasiswa->photos")){
                                        echo "<img src='$foto' class='img-fluid'  alt='$mahasiswa->photos'>";
                                    }else{
                                        echo "<img src='$default' class='d-block mx-auto' alt='default' width='70% height=20%'>";
                                        echo "<p class='text-center mt-2'>Belum ada foto, silahkan upload foto</p>";
                                        echo form_open_multipart("mahasiswa/upload");
                                        $firstName=explode(" ", $mahasiswa->nama_mahasiswa)[0];
                                        echo 
                                           '
                                           <input type="hidden" name="namePhoto" value="'.$firstName."-".$mahasiswa->nim."-".$mahasiswa->kode_prodi.'">
                                           <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file"  id="foto" name="foto">
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit" id="inputGroupFileAddon04">Upload</button>
                                                </div>
                                           </div>
                                            ';
                                        echo form_close();
                                    }
                             
                                ?>
                            </div>
                        </div>
                       <a href="<?= base_url("mahasiswa"); ?>"><i class="fas fa-solid fa-arrow-left"></i> Kembali</a> 
                    </div>
                </div>
            </div>
        </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->