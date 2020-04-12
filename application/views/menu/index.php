      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTablemenu" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($menu as $m) : ?>
                    <tr>
                      <td>
                        <?= $i++; ?>
                      </td>
                      <td>
                        <?= $m->menu ?>
                      </td>
                      <td>
                        <?= anchor('menu/edit_menu/' . $m->id, '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                        <?= anchor('menu/delete_menu/' . $m->id, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Modal New Menu-->
      <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newMenuModal">Add New Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url() . 'menu/add_menu' ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="btnsave"><i class="far fa-save"></i> Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>