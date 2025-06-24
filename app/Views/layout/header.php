<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Arsip Dokumen</title>
  <link rel="stylesheet" href="<?= base_url('/adminlte/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?= $this->include('layouts/navbar') ?>
  <?= $this->include('layouts/sidebar') ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <?= $this->renderSection('content') ?>
      </div>
    </section>
  </div>
</div>