<div class="mt-5 mb-3 ml-5 mr-5">
  <div class="row">
    <div class="col-lg-6">
      <div class="card shadow">
  <div class="card-header">
    Form Create Data Mahasiswa
  </div>
  <div class="card-body">
  <form action="" method="post">
    
    <div class="form-group">
    <label for="nama" class="float-left mt-1">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
    </div>
    
    <div class="form-group">
    <label for="nrp" class="float-left">Nrp</label>
    <input type="text" class="form-control" id="nrp" placeholder="Nrp" name="nrp">
        <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
    </div>
    
    <div class="form-group">
    <label for="email" class="float-left">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
        <small class="form-text text-danger"><?= form_error('email'); ?></small>
    </div>
    
    <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Kuli Jawa">Teknik Kuli Jawa</option>
      <option value="Teknik Pangan">Teknik Pangan</option>
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknik Pengangguran">Teknik Pengangguran</option>
    </select>
  </div>
  
  <button type="submit" name="create" class="btn btn-primary float-right">Create Data</button>
  <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">Back</a>
    
  </form>
  
  </div>
</div>
    </div>
  </div>
</div>