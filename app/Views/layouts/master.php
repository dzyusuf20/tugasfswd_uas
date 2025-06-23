<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Arsip Dokumen</title>
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?= $this->include('layout/navbar') ?>
  <?= $this->include('layout/sidebar') ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <?= $this->renderSection('content') ?>
      </div>
    </section>
  </div>
</div>
<script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script>
</body>
</html>