      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="col-lg-5">
              <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
                </div>
              <?php endif; ?>
              <?= $this->session->flashdata('message'); ?>
            </div>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubmenuModal">Add New Submenu</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTablesubmenu" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Menu</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th colspan="1">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($subMenu as $sm) : ?>
                    <tr>
                      <td><?= $sm['title']; ?></td>
                      <td><?= $sm['menu']; ?></td>
                      <td><?= $sm['url']; ?></td>
                      <td><?= $sm['icon']; ?></td>
                      <td>
                        <?= anchor('menu/edit_submenu/' . $sm['id'], '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                        <?= anchor('menu/delete_submenu/' . $sm['id'], '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
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

      <!-- Modal-->
      <div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newSubmenuModal">Add New Sub Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url() . 'menu/add_submenu' ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu title" required>
                </div>
                <div class="form-group">
                  <select name="menu" id="menu" class="form-control" required>
                    <option value="">Select Menu</option>
                    <?php foreach ($menu as $m) : ?>
                      <option value="<?= $m->id ?>"><?= $m->menu ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu url" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu icon" required>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked required>
                    <label class="form-check-label" for="is_active">Active ?</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fas fa-window-close"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="btnadd"><i class="fas fa-save"></i> Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>