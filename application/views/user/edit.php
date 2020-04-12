      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->

          <div class="row">
              <div class="col-lg-8">
                  <?= form_open_multipart('user/edit'); ?>
                  <div class="form-group row">
                      <label for="text" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                          <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-2">Picture</div>
                      <div class="col-sm-10">
                          <div class="row">
                              <div class="col-sm-3">
                                  <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                              </div>
                              <div class="col-sm-9">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="image" name="image">
                                      <label for="image" class="custom-file-label">Choose file</label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row justify-content-end">
                      <div class="col-sm-10">
                          <a class="btn btn-danger" href="<?= base_url('user'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
                          <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->