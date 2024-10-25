<div class="mt-5 mb-3 ml-5 mr-5">
  <div class="row">
    <div class="col-lg-6">
      <div class="card shadow">
  <div class="card-header">
    Form Edit Data Peoples
  </div>
  <div class="card-body">
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $people['id']; ?>">
    <div class="form-group">
    <label for="name" class="float-left mt-1">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= $people['name']; ?>">
    <small class="form-text text-danger"><?= form_error('name'); ?></small>
    </div>
  
    <div class="form-group">
    <label for="email" class="float-left">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $people['email']; ?>">
        <small class="form-text text-danger"><?= form_error('email'); ?></small>
    </div>
  
    <div class="form-group">
    <label for="address" class="float-left">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?= $people['address']; ?>">
        <small class="form-text text-danger"><?= form_error('address'); ?></small>
    </div>
  
  <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
  <a href="<?= base_url(); ?>peoples" class="btn btn-info float-right mr-2">Back</a>
    
  </form>
  
  </div>
</div>
    </div>
  </div>
</div>