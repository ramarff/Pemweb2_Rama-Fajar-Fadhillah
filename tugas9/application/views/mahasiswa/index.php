<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Kelola Data Program Studi</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?= base_url("mahasiswa"); ?>">Mahasiswa</a></li>
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
            <h3 class="card-title">Data Program Studi STT NF</h3>

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div> -->
          </div>
          <div class="card-body">
          <a class="btn btn-primary" href="<?= base_url("mahasiswa/tambah_mahasiswa")?>" role="button">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  <?php foreach($mahasiswa as $mhs) :?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $mhs->nim; ?></td>
                    <td><?= $mhs->nama; ?></td>
                    <td><?= $mhs->prodi_kode; ?></td>
                    <td>
                        <a href="<?= base_url('/mahasiswa/detail?nim='.$mhs->nim); ?>"><i class="fas fa-solid fa-info"></i></a>
                        <a href="<?= base_url('/mahasiswa/edit?nim='.$mhs->nim); ?>" class="mr-3 ml-3"><i class="fas fa-solid fa-edit"></i></a>
                        <a onclick="return confirm('Ingin menghapus data?')" href="<?= base_url('/mahasiswa/hapus?nim='.$mhs->nim); ?>"><i class="fas fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $i++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
          </div>
          <!-- /.card-body -->
      </section>
  </div>
</div>

    <!-- /.content -->
<!-- /.content-wrapper -->