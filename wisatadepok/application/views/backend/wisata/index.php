
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Kelola Data Tempat Wisata</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Wisata</li>
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
            <h3 class="card-title">Daftar Tempat Wisata</h3>
          </div>
          <div class="card-body">
          <a class="btn btn-primary" href="<?= admin("wisata/tambah")?>" role="button">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Jenis Wisata</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($wisata as $data) : ?>
                  <tr>
                    <td><a href="<?= admin("wisata/detail/$data->id") ?>" class="text-primary"><?= $data->nama_tempat; ?></a></td>
                    <td><?= $data->jenis ?></td>
                    <td>
                        <a href="<?= admin("wisata/edit/$data->id") ?>" class="mr-3 ml-3"><i class="fas fa-solid fa-edit"></i></a>
                        <a onclick="return confirm('Ingin menghapus data?')" href="<?= admin("wisata/hapus/$data->id") ?>"><i class="fas fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
          </div>
      </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->