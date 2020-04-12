      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->

          <div class="row">
              <div class="col-lg-6">
                  <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                  <?= $this->session->flashdata('message'); ?>
                  <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
              </div>
              <div class="card-body">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Role</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1;
                            foreach ($role as $r) : ?>
                              <tr>
                                  <th><?= $i++; ?></th>
                                  <td><?= $r->role ?></td>
                                  <td>
                                      <a href="<?= base_url('admin/roleaccess/') . $r->id ?>" class="btn btn-warning"><i class="fa fa-shield-alt"></i></a>
                                      <a href="<?= base_url('admin/edit_role/') . $r->id ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                      <a href="<?= base_url('admin/delete_role/') . $r->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                  </td>
                              </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Modal New-->
      <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="newRoleModal">Add New Role</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?= base_url() . 'admin/add_role'; ?>" method="post">
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="text" class="form-control" id="role" name="role" placeholder="Role name" required>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                          <button type="submit" class="btn btn-primary" name="btnadd"><i class="fas fa-save"></i> Add</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>