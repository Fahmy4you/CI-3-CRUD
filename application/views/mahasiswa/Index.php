<div class="mt-5 mb-3 ml-5 mr-5">
  
  <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
    <div class="col-lg-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>
  </div>
<?php endif; ?>
  
  <div class="row mt-3">
    <div class="col-lg-6">
      <a href="<?= base_url(); ?>mahasiswa/create" class="btn btn-primary">Create Data Mahasiswa</a>
    </div>
  </div>
  
  <div class="row mt-3">
    <div class="col-lg-6">
      <form action="" method="post">
        
  <div class="input-group">
  <input type="text" class="form-control" placeholder="Search Data" name="keyword">
  <div class="input-group-append">
    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
  </div>
</div>
        
      </form>
    </div>
  </div>
  
  <div class="row mt-3">
    <div class="col-lg-6">
   <h3>Daftar Mahasiswa</h3>
   
   
<?php if( empty($mahasiswa) ) : ?>

<div class="alert alert-danger" role="alert">
  Data Mahasiswa Yang Anda Cari Tidak Di Temukan
</div>

<?php endif; ?>
      
<ul class="list-group mb-2 shadow">

<?php foreach($mahasiswa as $mhs) : ?>
  <li class="list-group-item ">
    <?= $mhs['nama']; ?>
    
    <a href="<?= base_url(); ?>mahasiswa/delete/<?= $mhs['id']; ?>" class="btn btn-danger float-right ml-1" onclick="return confirm('Antum Yakin?');">Delete</a>
    
    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="btn btn-primary float-right ml-1">Edit</a>

    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-info float-right ml-1">Detail</a>
    </li>
<?php endforeach; ?>    
    
    </ul>
    
  </div>
  </div>
</div>