<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
<h2>Upload Dokumen</h2>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <select name="category" class="form-control">
      <?php foreach($categories as $cat): ?>
        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>File PDF</label>
    <input type="file" name="pdf_file" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
<?= $this->endSection() ?>