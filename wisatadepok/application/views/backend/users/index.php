
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
              <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Kelola Data Pengguna Aplikasi </h4>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Pengguna</h3>
          </div>
          <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $data) : ?>
                  <tr>
                    <td><a href="<?= admin("users/detail/$data->id") ?>" class="text-primary"><?= $data->username; ?></a></th>
                    <td><?= $data->email; ?></td>
                    <td><?= $data->role ?></td>
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