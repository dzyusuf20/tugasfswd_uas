<?php
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Sistem Arsip' ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/toastr/toastr.min.css') ?>">
  <style>body { background-color: #f4f6f9; }</style>
</head>
<body class="hold-transition login-page">

<?= $this->renderSection('content') ?>

<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/toastr/toastr.min.js') ?>"></script>
</body>
</html>
