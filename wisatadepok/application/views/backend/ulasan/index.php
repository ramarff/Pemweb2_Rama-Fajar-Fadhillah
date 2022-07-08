
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Kelola Data Ulasan Pengunjung</h4>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Ulasan Wisata</h3>
          </div>
          <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">Tempat Wisata</th>                    
                    <th scope="col">Username</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Rating</th>                    
                    <th scope="col">Tanggal</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($ulasan as $data) : ?>
                  <tr>
                    <td><?= $data->nama; ?></td>
                    <td><?= $data->username; ?></td>
                    <td><?= $data->isi ?></td>
                    <td><?= $data->nilai_rating_id ?></td>
                    <td><?= $data->tanggal ?></td>
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