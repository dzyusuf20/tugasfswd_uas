<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>

<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Sistem</b>Arsip</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silakan login untuk masuk</p>

      <?php if (!empty($error)) : ?>
        <div class="alert alert-danger"><?= esc($error) ?></div>
      <?php endif; ?>

      <form action="<?= base_url('login') ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?= $this->endSection() ?>
