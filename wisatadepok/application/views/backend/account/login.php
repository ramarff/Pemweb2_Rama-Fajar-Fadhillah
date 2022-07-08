<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">

      <form action="<?= base_url("account/admin/login"); ?>" method="post">
      <!-- <?= var_dump($row) ?> -->
      <!-- <?php if($error=True) : ?>
        <p class="text-danger font-italic">Username atau password salah!</p>
      <?php endif; ?> -->
      
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username/email" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="masuk">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="<?= base_url("account/admin/register")?>" class="text-center">Buat Akun</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>