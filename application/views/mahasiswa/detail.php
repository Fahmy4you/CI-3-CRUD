<div class="mt-5 mb-3 ml-3 mr-3">
  <div class="row">
    <div class="col-md-6">
      
<div class="card">
  <div class="card-header">
    Detail Data Mahasiswa
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
    <p class="card-text"><?= $mahasiswa['nrp']; ?></p>
    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right">Back</a>
  </div>
</div>

</div>
</div>
</div>