<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Data Lengkap Pengguna Aplikasi </h4>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Username:</td>
                                            <td><?= $detail->username;?></td>
                                        </tr>

                                        <tr>
                                            <td>Email:</td>
                                            <td><?= $detail->email;?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Daftar:</td>
                                            <td><?= $detail->created_at;?></td>
                                        </tr>
                                        <tr>
                                            <td>Terakhir login</td>
                                            <td><?= $detail->last_login;?></td>
                                        </tr>
                                        <tr>
                                            <td>Role:</td>
                                            <td><?= $detail->role;?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-4 ">
                               <img src="" alt="profile">
                            </div>
                        </div>
                       <a href="<?= admin("users"); ?>"><i class="fas fa-solid fa-arrow-left"></i> Kembali</a> 
                    </div>
                </div>
            </div>
        </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->