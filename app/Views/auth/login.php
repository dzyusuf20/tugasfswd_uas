<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center"><b>Login</b></div>
    <div class="card-body">
      <?php if (isset($error)): ?>
        <div class="alert alert-danger"> <?= $error ?> </div>
      <?php endif; ?>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
