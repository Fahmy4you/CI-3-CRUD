<div class="mt-4 mb-3 ml-4 mr-4">
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

      <h3>List Of Peoples</h3>
      
<a href="<?= base_url(); ?>peoples/create" class="btn btn-primary mt-2 mb-4">Create Data Peoples</a>
      
  <div class="row">
    <div class="col-md-6">
<form action="<?= base_url('peoples') ?>" method="post">
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search..." name="keyword" autocomplete="off" autofocus>
  <div class="input-group-append">
  <input type="submit" class="btn btn-primary" name="submit" value="Search">
  </div>
</div>
</form>
    </div>
  </div>
      
  <div class="row">
    <div class="col-md">
      <h5>Results : <?= $total_rows ?></h5>
      <table class="table">
        <thead class="bg-warning">
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
<?php if( empty($peoples) ) : ?>

      <tr>
        <td colspan="4">
          <div class="alert alert-danger" role="alert"><b>Data Not Found!</b></div>
        </td>
      </tr>

<?php endif; ?>

<?php foreach( $peoples as $people ) : ?>
          <tr>
            <th><?= ++$start ?></th>
            <td><?= $people['name']; ?></td>
            <td><?= $people['email']; ?></td>
            <td>
              <a href="<?= base_url(); ?>peoples/detail/<?= $people['id'] ?>" class="btn btn-info">Detail</a>
              <a href="<?= base_url(); ?>peoples/edit/<?= $people['id'] ?>" class="btn btn-primary ml-1">Edit</a>
              <a href="<?= base_url(); ?>peoples/delete/<?= $people['id'] ?>" class="btn btn-danger ml-1" onclick="return confirm('Antum Yakin?')">Delete</a>
            </td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>
      
<?= $this->pagination->create_links(); ?>
      
    </div>
  </div>
</div>