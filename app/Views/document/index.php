<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
<h1>Daftar Dokumen</h1>
<form method="get" action="<?= base_url('documents/search') ?>">
  <input type="text" name="q" placeholder="Cari dokumen..." class="form-control">
</form>
<table class="table">
  <thead>
    <tr><th>Judul</th><th>Kategori</th><th>Preview</th></tr>
  </thead>
  <tbody>
    <?php foreach($documents as $doc): ?>
      <tr>
        <td><?= $doc['title'] ?></td>
        <td><?= $doc['category_id'] ?></td>
        <td><a href="<?= base_url('documents/preview/'.$doc['id']) ?>" target="_blank">Lihat</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection() ?>