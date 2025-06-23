<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
<h2>Preview Dokumen</h2>
<embed src="<?= base_url('uploads/'.$document['filename']) ?>" type="application/pdf" width="100%" height="600px" />
<?= $this->endSection() ?>
